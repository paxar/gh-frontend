/*  Gulp config for Word Press    ver:  0.1 beta   */

var gulp       = require('gulp'), // Подключаем Gulp
    sass         = require('gulp-sass'), //Подключаем Sass пакет,
    browserSync  = require('browser-sync'), // Подключаем Browser Sync
    concat       = require('gulp-concat'), // Подключаем gulp-concat (для конкатенации файлов)
    uglify       = require('gulp-uglifyjs'), // Подключаем gulp-uglifyjs (для сжатия JS)
    cssnano      = require('gulp-cssnano'), // Подключаем пакет для минификации CSS
    rename       = require('gulp-rename'), // Подключаем библиотеку для переименования файлов
    del          = require('del'), // Подключаем библиотеку для удаления файлов и папок
    imagemin     = require('gulp-imagemin'), // Подключаем библиотеку для работы с изображениями
    pngquant     = require('imagemin-pngquant'), // Подключаем библиотеку для работы с png
    cache        = require('gulp-cache'), // Подключаем библиотеку кеширования
    autoprefixer = require('gulp-autoprefixer');// Подключаем библиотеку для автоматического добавления префиксов
plumber = require('gulp-plumber');  //не тормозим при ошибках
sourcemaps = require('gulp-sourcemaps');  //исходные пути SCSS
notify = require("gulp-notify");

plumberErrorHandler = {
    errorHandler: notify.onError({
        title: 'Gulp',
        message: 'Error: <%= error.message %>'
    })
};

gulp.task('sass', function(){ // Создаем таск Sass
    return gulp.src('src/sass/**/*.scss') // Берем источник
        .pipe(plumber(plumberErrorHandler))
        .pipe(sourcemaps.init()) // подключаем sourcemaps
        // .pipe(plumber())  // Не даем падать из за ошибок
        .pipe(sass().on ('error', sass.logError)) // Преобразуем Sass в CSS посредством gulp-sass
        .pipe(autoprefixer(['last 3 versions'], { cascade: true })) // Создаем префиксы
        .pipe(sourcemaps.write('.')) // записываем sourcemaps
        .pipe(gulp.dest('.')) // Выгружаем результаты в папку app/css
        //.pipe(browserSync.reload({stream: true})) // Обновляем CSS на странице при изменении
});



/*gulp.task('browser-sync', function() { // Создаем таск browser-sync
    browserSync({ // Выполняем browserSync
        server: { // Определяем параметры сервера
            baseDir: 'app' // Директория для сервера - app
        },
        notify: false // Отключаем уведомления
    });
});*/

gulp.task('scripts', function() {
    return gulp.src([ // Берем все необходимые библиотеки
        'src/libs/jquery/dist/jquery.min.js', // Берем jQuery
        'src/libs/bootstrap-sass/assets/javascripts/bootstrap.min.js',// Берем bootstrap

        'src/js/scripts.js' //Берем свои скрипты для страниц
    ])
        .pipe(concat('libs.min.js')) // Собираем их в кучу в новом файле libs.min.js
        .pipe(uglify()) // Сжимаем JS файл
        .pipe(gulp.dest('./js')) // Выгружаем в папку ./js
        .pipe(browserSync.reload({stream: true}));
});

gulp.task('css-libs', ['sass'], function() {
    return gulp.src('src/css/libs.css') // Выбираем файл для минификации
        .pipe(cssnano()) // Сжимаем
        .pipe(rename({suffix: '.min'})) // Добавляем суффикс .min
        .pipe(gulp.dest('.')); // Выгружаем ...
});

gulp.task('watch', [/*'browser-sync',*/ 'css-libs', 'scripts'], function() {
    gulp.watch('src/sass/**/*.scss', ['sass']); // Наблюдение за sass файлами в папке sass
    //gulp.watch('app/*.html', browserSync.reload); // Наблюдение за HTML файлами в корне проекта
    gulp.watch('src/js/scripts.js', ['scripts']);   // Наблюдение за своим! JS файлом в папке js
});

// gulp.task('clean', function() {
//     return del.sync('dist'); // Удаляем папку dist перед сборкой
// });

/*gulp.task('img', function() {
    return gulp.src('app/img/!**!/!*') // Берем все изображения из app
        .pipe(cache(imagemin({  // Сжимаем их с наилучшими настройками с учетом кеширования
            interlaced: true,
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        })))
        .pipe(gulp.dest('dist/img')); // Выгружаем на продакшен
});*/

/*gulp.task('build', ['clean', 'img', 'sass', 'css-libs', 'scripts'], function() {

    var buildCss = gulp.src([ // Переносим библиотеки в продакшен
        'app/css/style.css',
        'app/css/libs.min.css'
    ])
        .pipe(gulp.dest('dist/css'))

    var buildFonts = gulp.src('app/fonts/!**!/!*') // Переносим шрифты в продакшен
        .pipe(gulp.dest('dist/fonts'))

    var buildJs = gulp.src('app/js/!**!/!*') // Переносим скрипты в продакшен
        .pipe(gulp.dest('dist/js'))

    var buildHtml = gulp.src('app/!*.html') // Переносим HTML в продакшен
        .pipe(gulp.dest('dist'));

});*/

gulp.task('clear', function () {
    return cache.clearAll();
});

gulp.task('default', ['watch']);
