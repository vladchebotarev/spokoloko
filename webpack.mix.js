let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
    'public/new-assets/less/base.css',
    'public/new-assets/less/header.css',
    'public/new-assets/less/theme.css',
    'public/css/my_styles.css',
    'public/css/semantic-ui/loader.min.css',
], 'public/css/main.css');

mix.scripts([
    'public/new-assets/library/modernizr-custom.js',
    'public/new-assets/library/flexmenu.js',
    'public/new-assets/library/wNumb.js',
    'public/new-assets/library/jrespond.min.js',
    'public/new-assets/library/scrollspy.min.js',
    'public/js/transition.js',
    'public/new-assets/library/nouislider.min.js',
    'public/new-assets/library/visibility.js',
    'public/new-assets/library/accordion.js',
    'public/new-assets/library/dropdown-custom.js',
    'public/new-assets/library/sticky.js',
    'public/new-assets/library/page-transition.js',
    'public/new-assets/library/checkbox.js',
    'public/new-assets/library/transition.js',
    'public/new-assets/library/sidebar.js',
    'public/new-assets/library/modal.js',
    'public/new-assets/library/dimmer.js',
    'public/new-assets/library/popup.js',
    'public/new-assets/library/calendar.js',
    'public/js/jquery.lazy.min.js',
    'public/new-assets/library/slick.js',
    'public/new-assets/library/header.js',
    'public/new-assets/library/functions.js',
    'public/js/semantic-ui/dimmer.js',
    'public/js/facebook_messenger.js',
    'public/js/semantic-ui/message.js',
], 'public/js/main.js');

/*
'public/css/semantic-ui/message.min.css',
    'public/css/semantic-ui/popup.min.css',
    'public/css/semantic-ui/labeled.css',
    'public/css/semantic-ui/transition.css',
    'public/css/semantic-ui/rating.css',*/
