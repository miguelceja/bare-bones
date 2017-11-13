module.exports = function(grunt) {

    require("load-grunt-tasks")(grunt); // npm install --save-dev load-grunt-tasks
    // Project configuration.
    grunt.initConfig({
      pkg: grunt.file.readJSON('package.json'),

      watch: {
        options: {
          livereload: true,
        },
        files: [ 'themes/bare-bones/css/scss/*.scss', 'themes/bare-bones/js/*.js', 'themes/bare-bones/*.php'],
        tasks: ['sass', 'postcss', 'concat', 'babel']
      },

      concat: {
        dist: {
          src: ['themes/bare-bones/js/_*.js'],
          dest: 'themes/bare-bones/js/app.js'
        }
      },

      babel: {
        options: {
          sourceMap: true,
          presets: ['env', 'es2015', 'minify']
        },
        dist: {
          files: {
            'themes/bare-bones/js/build/app.min.js': 'themes/bare-bones/js/app.js'
          }
        }
      },

      sass: {
        dist: {
          options: {
            style: 'compressed'
          },
          files: {
            'themes/bare-bones/css/build/main.css': 'themes/bare-bones/css/*.scss'
          }
        }
      },

      postcss: {
        options: {
            map: true, // inline sourcemaps
            processors: [
                require('autoprefixer')({browsers: 'last 2 versions'}), // add vendor prefixes
            ]
        },
        dist: {
            src: 'themes/bare-bones/css/build/main.css'
        }
      }
    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-babel');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-postcss');

    // Default task(s).
    grunt.registerTask('default', ['watch']);
  };