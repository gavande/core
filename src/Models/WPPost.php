<?php
namespace TypeRocket\Models;

class WPPost extends Model
{
    public $idColumn = 'ID';
    public $resource = 'posts';

    public $builtin = [
        'post_author',
        'post_date',
        'post_date_gmt',
        'post_content',
        'post_title',
        'post_excerpt',
        'post_status',
        'comment_status',
        'ping_status',
        'post_name',
        'to_ping',
        'pinged',
        'post_modified',
        'post_modified_gmt',
        'post_content_filtered',
        'post_parent',
        'guid',
        'menu_order',
        'post_type',
        'post_mime_type',
        'comment_count',
        'post_password',
        'id'
    ];

    public $guard = [
        'post_type',
        'id'
    ];

    public $postType = null;

    /**
     * Return table name in constructor
     *
     * @param \wpdb $wpdb
     *
     * @return string
     */
    public function initTable( $wpdb )
    {
        return $wpdb->prefix . 'posts';
    }

    /**
     * Find post by ID
     *
     * @param $id
     *
     * @return $this
     */
    public function findById($id) {
        $this->fetchResult(get_post( $id, ARRAY_A ));

        return $this;
    }

    /**
     * Create post from TypeRocket fields
     *
     * Set the post type property on extended model so they
     * are saved to the correct type. See the PagesModel
     * as example.
     *
     * @param array|\TypeRocket\Http\Fields $fields
     *
     * @return $this
     */
    public function create( $fields = [])
    {
        $fields = $this->provisionFields($fields);
        $builtin = $this->getFilteredBuiltinFields($fields);

        if ( ! empty( $builtin )) {
            remove_action('save_post', 'TypeRocket\Http\Responders\Hook::posts');

            if(!empty($this->postType)) {
                $builtin['post_type'] = $this->postType;
            }

            if(!empty($builtin['post_content'])) {
                $builtin['post_content'] = wp_slash( $builtin['post_content'] );
            }

            $post      = wp_insert_post( $builtin );
            add_action('save_post', 'TypeRocket\Http\Responders\Hook::posts');

            if ( $post instanceof \WP_Error || $post === 0 ) {
                $default      = 'post_name (slug), post_title, post_content, and post_excerpt are required';
                $this->errors = ! empty( $post->errors ) ? $post->errors : [$default];
            } else {
                $this->findById($post);
            }
        }

        $this->saveMeta( $fields );

        return $this;
    }

    /**
     * Update post from TypeRocket fields
     *
     * @param array|\TypeRocket\Http\Fields $fields
     *
     * @return $this
     */
    public function update( $fields = [] )
    {
        $id = $this->getID();
        if( $id != null && ! wp_is_post_revision( $id ) ) {
            $fields = $this->provisionFields( $fields );
            $builtin = $this->getFilteredBuiltinFields($fields);

            if ( ! empty( $builtin ) ) {
                remove_action('save_post', 'TypeRocket\Http\Responders\Hook::posts');
                $builtin['ID'] = $id;
                $builtin['post_type'] = $this->properties['post_type'];

                if(!empty($builtin['post_content'])) {
                    $builtin['post_content'] = wp_slash( $builtin['post_content'] );
                }

                $updated = wp_update_post( $builtin );

                if ( $updated instanceof \WP_Error || $updated === 0 ) {
                    $default      = 'post_name (slug), post_title, post_content, and post_excerpt are required';
                    $this->errors = ! empty( $updated->errors ) ? $updated->errors : [$default];
                } else {
                    $this->findById($id);
                }

                add_action('save_post', 'TypeRocket\Http\Responders\Hook::posts');
            }

            $this->saveMeta( $fields );

        } else {
            $this->errors = ['No item to update'];
        }

        return $this;
    }

    /**
     * Save post meta fields from TypeRocket fields
     *
     * @param array|\ArrayObject $fields
     *
     * @return $this
     */
    private function saveMeta( $fields )
    {
        $fields = $this->getFilteredMetaFields($fields);
        $id = $this->getID();
        if ( ! empty($fields) && ! empty( $id )) :
            if ($parent_id = wp_is_post_revision( $id )) {
                $id = $parent_id;
            }

            foreach ($fields as $key => $value) :
                if (is_string( $value )) {
                    $value = trim( $value );
                }

                $current_value = get_post_meta( $id, $key, true );

                if (( isset( $value ) && $value !== "" ) && $value !== $current_value) :
                    update_post_meta( $id, $key, wp_slash($value) );
                elseif ( ! isset( $value ) || $value === "" && ( isset( $current_value ) || $current_value === "" )) :
                    delete_post_meta( $id, $key );
                endif;

            endforeach;
        endif;

        return $this;
    }

    /**
     * Get base field value
     *
     * Some fields need to be saved as serialized arrays. Getting
     * the field by the base value is used by Fields to populate
     * their values.
     *
     * @param $field_name
     *
     * @return null
     */
    public function getBaseFieldValue( $field_name )
    {
        $id = $this->getID();
        if(in_array($field_name, $this->builtin)) {
            switch ($field_name) {
                case 'post_password' :
                    $data = '';
                    break;
                case 'id' :
                    $data = get_post_field( 'ID', $id, 'raw' );
                    break;
                default :
                    $data = get_post_field( $field_name, $id, 'raw' );
                    break;
            }
        } else {
            $data = get_metadata( 'post', $id, $field_name, true );
        }

        return $this->getValueOrNull($data);
    }
}
