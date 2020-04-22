const elixir = require('laravel-elixir');
var uglify = require('gulp-uglify');
  var concat = require('gulp-concat');
  var less = require('gulp-less');
  var minifyCSS = require('gulp-cssnano');
  var prefix = require('gulp-autoprefixer');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 
 elixir(mix => {
     mix.sass('app.scss');
     mix.copy('resources/assets/vendor/bootstrap/fonts', 'public/fonts');
     mix.copy('resources/assets/vendor/font-awesome/fonts', 'public/fonts')
     mix.styles([
         'resources/assets/vendor/bootstrap/css/bootstrap.css',
         'resources/assets/vendor/animate/animate.css',
         'resources/assets/vendor/font-awesome/css/font-awesome.css',
        ], 'public/css/vendor.css', './');
        mix.scripts([
            'resources/assets/vendor/jquery/jquery-3.1.1.min.js',
            'resources/assets/vendor/bootstrap/js/bootstrap.js',
            'resources/assets/vendor/metisMenu/jquery.metisMenu.js',
            'resources/assets/vendor/slimscroll/jquery.slimscroll.min.js',
            'resources/assets/vendor/pace/pace.min.js',
            'resources/assets/js/app.js'
        ], 'public/js/app.js', './');
        
    });
    
    */


   gulp.task('copy', function() {
    return gulp.src('resources/assets/vendor/bootstrap/fonts/**/*.*')
    .pipe(gulp.src('resources/assets/vendor/font-awesome/fonts/**/*.*'))
    
    .pipe(gulp.dest('public/web/font'));
    console.log('Archivos JS copiados...');
   });

   gulp.task('js', function() {
    return gulp.src('resources/assets/vendor/jquery/jquery-3.1.1.min.js')
            .pipe(gulp.src('resources/assets/vendor/bootstrap/js/bootstrap.js'))
            .pipe(gulp.src('resources/assets/vendor/metisMenu/jquery.metisMenu.js'))
            .pipe(gulp.src('resources/assets/vendor/slimscroll/jquery.slimscroll.min.js'))
            .pipe(gulp.src('resources/assets/vendor/pace/pace.min.js'))
            .pipe(gulp.src('resources/assets/js/app.js'))
            .pipe(concat('app1.js'))
    
    .pipe(gulp.dest('public/web/js'));
    console.log('JS procesados...');
   });


   gulp.task('copy2', function() {
    return gulp.src('resources/assets/vendor/font-awesome/fonts/**/*.*')
    
    .pipe(gulp.dest('public/web'));
    console.log('Archivos JS copiados...');
   });