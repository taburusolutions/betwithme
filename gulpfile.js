var gulp = require('gulp');
var bower = require('gulp-bower');
var elixir = require('laravel-elixir');

gulp.task('bower', function() {
    return bower();
});

var assets = '/assets/';

var paths = {
    'atlantis': '/schemes/',
    'blaze_orange': '/schemes/',
    'curious_blue': '/schemes/',
    'de_york': '/schemes/',
    'downy': '/schemes/',
    'gold': '/schemes/',
    'hot_pink': '/schemes/',
    'jgger': '/schemes/',
    'mexican_red': '/schemes/',
    'orient': '/schemes/',
    'pink': '/schemes/',
    'pomegranate': '/schemes/',
    'red': '/schemes/',
    'teal': '/schemes/',
    'violet': '/schemes/',
    'violet_red': '/schemes/'
};

elixir.config.sourcemaps = false;

elixir(function(mix) {
    // Run bower install
    // mix.task('bower');
    // Copy fonts straight to public
    mix.copy('resources/assets/media', 'public/assets/media');
    mix.copy('resources/assets/fonts', 'public/assets/fonts');
    mix.copy('resources/assets/img', 'public/assets/img');

    // Merge Site CSSs.
    mix.styles([
        '/switcher.css',
        '/bootstrap.css',
        '/bootstrap_responsive.css',
        '/font_awesome.css',
        '/styles.css',
        '/mystyles.css',
        '/switcher.css'
    ], 'public/assets/css/site.css');

    // Merge Switchers CSSs.
    mix.styles([
        paths.teal + '/teal.css',
    ], 'public/assets/css/switchers.css');

    // Merge Site scripts.
    mix.scripts([
        '/bootstrap.min.js',
        '/countdown.min.js',
        '/fitvids.min.js',
        '/gmap3.min.js',
        '/jquery.js',
        '/magnific.min.js',
        '/mail.min.js',
        '/mediaelement.min.js',
        '/mediaelement.min.js',
        '/nivo_slider.min.js',
        '/tweet.min.js',
        '/wilto_slider.min.js',
        '/custom.js'
    ], 'public/assets/js/site.js');
});