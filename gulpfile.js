'use strict';



/**
 * Project Name, Slug and Domain
 * 
 * These variables replace placeholdes through all files.
 * You should run `gulp copyrate` to do this.
 * 
 * @type {String}
 */

var projectName   = 'TourismTiger Theme'; 
var projectSlug   = 'TourismTiger_Theme'; 
var projectDomain = 'tourismtiger-theme'; 
var projectAuthor = 'tourismtiger';



/**
 * Project directories paths
 *
 * path.build  - destinations for compiled files
 * path.src    - files which will be compiled
 * path.src    - files which will be compiled
 * path.watch  - destination where gulp watch checks to updates.
 * path.watch  - destination where gulp copirate checks to rewrite placeholders.
 * 
 * @type {object}
 */
var path = {
    root: './',
    build: {
        html:   '',
        js:     'assets/js/',
        css:    'assets/css/',
        fonts:  'assets/fonts/',
        img:    'assets/img/',
        json:   'assets/json/'
    },
    src: {
        html:  'src/*.html', 
        xml:   'src/**/*.xml', 
        json:  'src/**/*.json',
        js:    'src/js/main.js',
        style: 'src/less/main.less',
        fonts: 'src/fonts/**/*.*',
        img:   'src/img/**/*.*',
        php:   './**/*.php'
    },
    watch: { 
        html:  'src/**/*.html',
        xml:   'src/**/*.xml',
        json:  'src/**/*.json',
        js:    'src/js/**/*.js',
        style: 'src/less/**/*.less',
        fonts: 'src/fonts/*.*',
        img:   'src/img/**/*.*',
        php:   '**/*.php'
    },
    copyrate: {
        files: [
            './src/**/*.*',
            './inc/**/*.php',
            './*.php',
            './style.css',
            './views/**/*.php',
            './*.json'
        ],
        from: [/Dev Theme/g, /Dev_Theme/g, /dev-theme/g, /team-name/g],
        to: [projectName, projectSlug, projectDomain, projectAuthor],
        allowEmptyPaths: true,
        encoding: 'utf8',
    },
    clean: './'
};


/**
 * Fetch data from command line
 */
const arg = (argList => {
  let arg = {}, a, opt, thisOpt, curOpt;
  for (a = 0; a < argList.length; a++) {
    thisOpt = argList[a].trim();
    opt = thisOpt.replace(/^\-+/, '');

    if (opt === thisOpt) {
      // argument value
      if (curOpt) arg[curOpt] = opt;
      curOpt = null;
    }
    else {
      // argument name
      curOpt = opt;
      arg[curOpt] = true;
    }
  }
  return arg;
})(process.argv);


/**
 * Dependings variables
 */
var gulp        = require('gulp'); 
var rigger      = require('gulp-rigger'); 
var rename      = require('gulp-rename'); 
var watch       = require('gulp-watch'); 
var prefixer    = require('gulp-autoprefixer');
var uglify      = require('gulp-uglify'); 
var less        = require('gulp-less'); 
var cssmin      = require('gulp-clean-css'); 
var imagemin    = require('gulp-imagemin');
var pngquant    = require('imagemin-pngquant');
var rimraf      = require('rimraf'); 
var browserSync = require("browser-sync"); 
var notify      = require('gulp-notify');
var reload      = browserSync.reload; 
var replace     = require('replace-in-file');
var mmq         = require('gulp-merge-media-queries');
var git         = require('gulp-git');
 





/**
 * Browser sync configs
 */
var config = {
    proxy: {
        target: 'http://tourtiger:8888'
    },
    tunnel: false,
    host: 'tourtiger',
    port: 8888,
    logPrefix: "dzvonkevich"
};

/**
 * Web server task
 */
gulp.task('webserver', function () {
    browserSync(config);
});




/**
 * Deploy to GIT
 */
gulp.task('commit', function (cb) {
    var commit  = arg.c || 'Unnamed commit';

    gulp.src(path.root)
    .pipe(git.add({
        args: '--all'
    }))
    .pipe(git.commit(commit, {
        disableAppendPaths: true
    }));
});

gulp.task('push', function (cb) {
    var branch  = arg.b || 'master';
    git.push('origin', branch, function (err) {
        if (err) throw err;
    });
});


/**
 * HTML Build task
 */
gulp.task('html:build', function () {
    gulp.src(path.src.html) 
        .pipe(rigger()) 
        .pipe(gulp.dest(path.build.html)) 
        .pipe(reload({stream: true}))
});

/**
 * XML Build task
 */
gulp.task('xml:build', function () {
    gulp.src(path.src.xml)
        .pipe(gulp.dest(path.build.html))
        .pipe(reload({stream: true})); 
});

/**
 * JSON Build task
 */
gulp.task('json:build', function () {
    gulp.src(path.src.json)
        .pipe(gulp.dest(path.build.json))
        .pipe(reload({stream: true})); 
});

/**
 * JSON Build task
 */
gulp.task('php:build', function () {
    gulp.src(path.src.html)
        .pipe( reload({stream: true}) )
        .pipe( notify( { message: 'PHP modified! 🚀' } ) ); 
});

/**
 * Fonts Build task
 */
gulp.task('fonts:build', function () {
    gulp.src(path.src.fonts) 
        .pipe(gulp.dest(path.build.fonts)) 
        .pipe(reload({stream: true}));
});

/**
 * JavaScript Build task
 */
gulp.task('js:build', function () {
    gulp.src(path.src.js) 
        .pipe(rigger()) 
        .pipe(gulp.dest(path.build.js))
        .pipe(rename('main.min.js'))
        .pipe(uglify()) 
        .pipe(gulp.dest(path.build.js))
        .pipe(reload({stream: true})); 
});

/**
 * LESS Build task
 */
gulp.task('style:build', function () {
    gulp.src(path.src.style)
        .pipe(less()) 
        .pipe(prefixer())
        .pipe(gulp.dest(path.build.css))
        .pipe(rename('main.min.css'))
        .pipe(mmq( { 
            log: true,
            use_external: true 
        } ))
        .pipe(cssmin())
        .pipe(gulp.dest(path.build.css))
        .pipe(reload({stream: true}))
});

/**
 * Images Build task
 */
gulp.task('image:build', function () {
    gulp.src(path.src.img)
        .pipe(imagemin({ 
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()],
            interlaced: true
        }))
        .pipe(gulp.dest(path.build.img))
        .pipe(reload({stream: true}))
        .pipe( notify( { message: 'Images Completed! 💯', onLast: true } ) )
});

/**
 * Binds all build tasks
 */
gulp.task('build', [
    'html:build',
    'xml:build',
    'json:build',
    'js:build',
    'style:build',
    'fonts:build',
    'image:build'
]);






/**
 * Watchs where was changed any file.
 */
gulp.task('watch', function(){
    watch([path.watch.html], function(event, cb) {
        gulp.start('html:build');
    });
    watch([path.watch.xml], function(event, cb) {
        gulp.start('xml:build');
    });
    watch([path.watch.json], function(event, cb) {
        gulp.start('json:build');
    });
    watch([path.watch.style], function(event, cb) {
        gulp.start('style:build');
    });
    watch([path.watch.js], function(event, cb) {
        gulp.start('js:build');
    });
    watch([path.watch.fonts], function(event, cb) {
        gulp.start('fonts:build');
    });
    watch([path.watch.img], function(event, cb) {
        gulp.start('image:build');
    });
    watch([path.watch.php], function(event, cb) {
        gulp.start('php:build');
    });
});






/**
 * Clean. Don't remember 
 */
gulp.task('clean', function (cb) {
    rimraf(path.clean, cb);
});

/**
 * Copyrate task
 */
gulp.task('copyrate', function (cb) {
    replace(path.copyrate)
        .then(changedFiles => {
            console.log('Modified files:', changedFiles.join(', ')
        );
    })
    .catch(error => {
        console.error('Error occurred:', error);
    });
});


/**
 * Core tasks
 */
gulp.task('default', ['build']);
gulp.task('build-webserver', ['build', 'webserver', 'watch']);
gulp.task('build-watch', ['build', 'watch']);
gulp.task('deploy', ['build', 'commit']);


