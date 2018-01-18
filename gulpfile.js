var gulp = require("gulp");
//var bower = require("gulp-bower");
var elixir = require("laravel-elixir");
require('laravel-elixir-livereload');
var elixirTypscript = require('elixir-typescript');
/*
gulp.task('bower', function () {
    return bower();
});*/
// coreScripts = [
//     'es6-shim/es6-shim.min.js',
//     'resources/vendor/bootstrap-sass/assets/javascripts/bootstrap.min.js',
//     'resources/vendor/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
//     'resources/vendor/jquery-slimscroll/jquery.slimscroll.min.js',
//     'resources/vendor/blockUI/jquery.blockUI.js',
//     'resources/vendor/js-cookie/src/js.cookie.js',
//     'resources/vendor/bootstrap-switch/dist/js/bootstrap-switch.min.js'
// ];
var vendors = '../../assets/vendors/';

var paths = {
    'jquery': vendors + 'jquery/dist',
    'jqueryUi': vendors + 'jquery-ui',
    'moment': vendors + 'moment',
    'bootstrap': vendors + 'bootstrap/dist',
    'fontawesome': vendors + 'font-awesome',
    'eonasdanBootstrapDatetimepicker': vendors + 'eonasdan-bootstrap-datetimepicker/build',
    'tether' : vendors + 'tether/dist'
};


elixir(function (mix) {
    mix.copy('node_modules/@angular', 'public/@angular');
    mix.copy('node_modules/rxjs', 'public/rxjs');
    mix.copy('node_modules/systemjs', 'public/systemjs');
    mix.copy('node_modules/es6-promise', 'public/es6-promise');
    mix.copy('node_modules/es6-shim', 'public/es6-shim');
    mix.copy('node_modules/zone.js/', 'public/zone.js/');
    mix.copy('node_modules/satellizer', 'public/satellizer');
    mix.copy('node_modules/platform', 'public/platform');
    mix.copy('node_modules/reflect-metadata', 'public/reflect-metadata');


    mix.typescript(
        '/**/*.ts',
        'public/js',
        {
            "target": "es5",
            "module": "system",
            "moduleResolution": "node",
            "sourceMap": true,
            "emitDecoratorMetadata": true,
            "experimentalDecorators": true,
            "removeComments": false,
            "noImplicitAny": false
        }
    );

    mix.livereload();
    mix.browserSync({proxy: 'localhost:8000'});

    // // Global styles
    // mix.styles(globalStyles, 'public/css/app.css', './');
    //
    // // Angular dashboard index page scripts
    // mix.scripts(pageScripts, 'public/js/app.js', './');
    // // mix.scripts(pageScripts, 'public/js/developer-app.js', './');
    //
    // mix.scripts(dataTablesScripts, 'public/js/datatables.js', './');

});
