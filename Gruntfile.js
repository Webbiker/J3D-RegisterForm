module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

    uglify: {
      js: {
        files : {
          'assets/js/build/app.min.js' : [
            'assets/js/partials/mobmenu.js',
            'assets/js/partials/app.js'
          ]
        }
      },
      options: {
        sourceMap: true,
        sourceMapName: 'assets/js/build/app.min.map'
      },
    },

    postcss: {
      options: {
        map: true,
        processors: [
          require('autoprefixer')({
            browsers: ['last 2 versions', 'ie 8', 'ie 9', '> 1%']}
          )
        ]
      },
      dist: {
        src: [
          'assets/css/screen.css',
          'assets/css/screen-form.css'
        ]
      }
    },

    sass: {                              // Task
      dist: {                            // Target
        options: {                       // Target options
          style: 'compressed'            // nested, compact, compressed, expanded
        },
        files: {                         // Dictionary of files
          'assets/css/screen.css': 'assets/sass/screen.scss',
          'assets/css/screen-form.css': 'assets/sass/screen-form.scss'
        }
      }
    },

    watch: {
      css: {
        files: ['assets/sass/*.scss', 'assets/sass/partials/*.scss'],
        tasks: ['sass', 'postcss']
      },
      scripts: {
          files: ['assets/js/*.js', 'assets/js/partials/*.js'],
          tasks: ['uglify']
      }
    },

    browserSync: {
        dev: {
            bsFiles: {
                src : [
                    'assets/css/*.css',
                    'assets/js/*.js',
                    '**/*.html',
                    '*.html',
                    '**/*.php',
                    '*.php'
                ]
            },
            options: {
                watchTask: true,
                proxy: "local.register.jeugd3daagse.nl"
            }
        }
    }
});

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-postcss');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-browser-sync');

  grunt.registerTask('default', ['browserSync', 'watch']);

};
