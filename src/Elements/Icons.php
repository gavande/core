<?php
namespace TypeRocket\Elements;

/**
 * Class Icons
 *
 * A collection of icons and their font-face content strings
 *
 * @package TypeRocket
 */
class Icons extends \ArrayObject
{

    public $fontFamily = 'typerocket-icons';
    public $fontWeight = '400';
    public $fontSize = '15px/1';
    public $icons = [
        'cog' => '\f013',
        'flag' => '\f024',
        'headphones' => '\f025',
        'qrcode' => '\f029',
        'crosshairs' => '\f05b',
        'plane' => '\f072',
        'calendar' => '\f073',
        'magnet' => '\f076',
        'key' => '\f084',
        'cogs' => '\f085',
        'link' => '\f0c1',
        'flask' => '\f0c3',
        'paperclip' => '\f0c6',
        'magic' => '\f0d0',
        'money' => '\f0d6',
        'dashboard' => '\f0e4',
        'umbrella' => '\f0e9',
        'lightbulb' => '\f0eb',
        'stethoscope' => '\f0f1',
        'suitcase' => '\f0f2',
        'coffee' => '\f0f4',
        'cutlery' => '\f0f5',
        'building' => '\f0f7',
        'ambulance' => '\f0f9',
        'beer' => '\f0fc',
        'desktop' => '\f108',
        'laptop' => '\f109',
        'tablet' => '\f10a',
        'mobile' => '\f10b',
        'gamepad' => '\f11b',
        'keyboard' => '\f11c',
        'terminal' => '\f120',
        'code' => '\f121',
        'location-arrow' => '\f124',
        'code-fork' => '\f126',
        'puzzle-piece' => '\f12e',
        'microphone' => '\f130',
        'shield' => '\f132',
        'fire-extinguisher' => '\f134',
        'anchor' => '\f13d',
        'bullseye' => '\f140',
        'ticket' => '\f145',
        'euro' => '\f153',
        'gbp' => '\f154',
        'dollar' => '\f155',
        'rupee' => '\f156',
        'yen' => '\f157',
        'ruble' => '\f158',
        'won' => '\f159',
        'sun' => '\f185',
        'moon' => '\f186',
        'pagelines' => '\f18c',
        'wheelchair' => '\f193',
        'space-shuttle' => '\f197',
        'slack' => '\f198',
        'bank' => '\f19c',
        'graduation' => '\f19d',
        'paw' => '\f1b0',
        'spoon' => '\f1b1',
        'cube' => '\f1b2',
        'cubes' => '\f1b3',
        'car' => '\f1b9',
        'tree' => '\f1bb',
        'life-saver' => '\f1cd',
        'rebel' => '\f1d0',
        'send' => '\f1d8',
        'bomb' => '\f1e2',
        'soccer' => '\f1e3',
        'binoculars' => '\f1e5',
        'plug' => '\f1e6',
        'newspaper-o' => '\f1ea',
        'wifi' => '\f1eb',
        'calculator' => '\f1ec',
        'eyedropper' => '\f1fb',
        'paint-brush' => '\f1fc',
        'area-chart' => '\f1fe',
        'pie-chart' => '\f200',
        'line-chart' => '\f201',
        'bicycle' => '\f206',
        'bus' => '\f207',
        'diamond' => '\f219',
        'street-view' => '\f21d',
        'heartbeat' => '\f21e',
        'venus' => '\f221',
        'mars' => '\f222',
        'battery' => '\f241',
        'map-pin' => '\f276',
        'map-signs' => '\f277',
        'map' => '\f279',
        'credit-card-alt' => '\f283',
        'usb' => '\f287',
        'shopping-bag' => '\f290',
        'shopping-basket' => '\f291',
        'envira' => '\f299',
        'wheelchair-alt' => '\f29b',
        'home' => '\e902',
        'office' => '\e903',
        'newspaper' => '\e904',
        'pencil' => '\e905',
        'quill' => '\e907',
        'droplet' => '\e90b',
        'paint-format' => '\e90c',
        'image' => '\e90d',
        'images' => '\e90e',
        'camera' => '\e90f',
        'music' => '\e911',
        'video-camera' => '\e914',
        'dice' => '\e915',
        'bullhorn' => '\e91a',
        'podcast' => '\e91c',
        'feed' => '\e91d',
        'mic' => '\e91e',
        'book' => '\e91f',
        'books' => '\e920',
        'stack' => '\e92e',
        'folder' => '\e92f',
        'price-tag' => '\e935',
        'price-tags' => '\e936',
        'barcode' => '\e937',
        'cart' => '\e93a',
        'credit-card' => '\e93f',
        'envelop' => '\e945',
        'location' => '\e947',
        'location-fill' => '\e948',
        'compass' => '\e94a',
        'clock' => '\e94f',
        'alarm' => '\e950',
        'bell' => '\e951',
        'stopwatch' => '\e952',
        'printer' => '\e954',
        'tv' => '\e95b',
        'drawer' => '\e95d',
        'floppy-disk' => '\e962',
        'drive' => '\e963',
        'database' => '\e964',
        'bubble' => '\e96b',
        'bubbles' => '\e96d',
        'user' => '\e971',
        'users' => '\e972',
        'user-tie' => '\e976',
        'hour-glass' => '\e979',
        'color-wheel' => '\e97d',
        'disk' => '\e97e',
        'open-disk' => '\e981',
        'search' => '\e986',
        'key2' => '\e98d',
        'key3' => '\e98e',
        'lock' => '\e98f',
        'unlocked' => '\e990',
        'wrench' => '\e991',
        'equalizer' => '\e992',
        'gear' => '\e994',
        'hammer' => '\e996',
        'bug' => '\e999',
        'trophy' => '\e99e',
        'gift' => '\e99f',
        'glass' => '\e9a0',
        'glass2' => '\e9a1',
        'mug' => '\e9a2',
        'spoon-knife' => '\e9a3',
        'rocket' => '\e9a5',
        'meter' => '\e9a6',
        'gavel' => '\e9a8',
        'fire' => '\e9a9',
        'lab' => '\e9aa',
        'trash' => '\e9ac',
        'briefcase' => '\e9ae',
        'truck' => '\e9b0',
        'road' => '\e9b1',
        'accessibility' => '\e9b2',
        'power' => '\e9b5',
        'clipboard' => '\e9b8',
        'node-tree' => '\e9bc',
        'menu' => '\e9bd',
        'cloud' => '\e9c1',
        'cloud-download' => '\e9c2',
        'cloud-upload' => '\e9c3',
        'sphere' => '\e9c9',
        'earth' => '\e9ca',
        'attachment' => '\e9cd',
        'eye' => '\e9ce',
        'eye-blocked' => '\e9d1',
        'bookmark' => '\e9d2',
        'bookmarks' => '\e9d3',
        'contrast' => '\e9d5',
        'brightness-contrast' => '\e9d6',
        'star-empty' => '\e9d7',
        'star-half' => '\e9d8',
        'star-full' => '\e9d9',
        'heart' => '\e9da',
        'heart-broken' => '\e9db',
        'man' => '\e9dc',
        'woman' => '\e9dd',
        'man-woman' => '\e9de',
        'spell-check' => '\ea12',
        'volume' => '\ea27',
        'loop' => '\ea2d',
        'infinite' => '\ea2f',
        'shuffle' => '\ea30',
        'checkbox' => '\ea52',
        'make-group' => '\ea58',
        'scissors' => '\ea5a',
        'filter' => '\ea5b',
        'omega' => '\ea66',
        'sigma' => '\ea67',
        'table' => '\ea70',
        'amazon' => '\ea87',
        'google' => '\ea88',
        'facebook' => '\ea90',
        'twitter' => '\ea96',
        'steam' => '\eaac',
        'github' => '\eab0',
        'tux' => '\eabd',
        'apple' => '\eabe',
        'android' => '\eac0',
        'windows' => '\eac2',
    ];

    /**
     * Load icons and their font encoding
     */
    public function __construct() {
        $this->exchangeArray($this->icons);
    }
}