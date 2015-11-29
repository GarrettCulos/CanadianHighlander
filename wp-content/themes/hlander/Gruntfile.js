module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    
    compass:{
      dist: {                   // Target
        options: {              // Target options
          sassDir: './assets/sass',
          cssDir: './build',
          config: 'config.rb'
        }
      }
    },

    bower_concat: {
      all: {
        dest: 'build/_lib.js',
        cssDest: 'build/_lib.css',
        dependencies: {
        },
        bowerOptions: {
          relative: false
        },
        exclude: [
          'bootstrap'
        ],
        mainFiles: {
          
        },
      }
    },

    cssmin: {
      options: {
        sourceMap: true,
      },
      app: {
        src: 'build/*.css',
        dest: 'assets/css/style.min.css'
      }
    },

    uglify: {
      options: {
        mangle: false,
        sourceMap: true,
      },
      app: {
        files: {
          'assets/js/main.min.js': ['build/_lib.js', 'assets/js/*.js', '!assets/js/*.min.js']
        }
      },
    },
    
    watch: {
      css: {
        files: 'assets/sass/**/*.scss',
        tasks: ['theme']
      },

      scripts: {
        files: ['assets/js/**/*.js', '!assets/js/**/*.min.js'],
        tasks: ['uglify']
      }
    }
  });

  // Load the Grunt plugins.
   require('load-grunt-tasks')(grunt);


  // Register the default tasks.
  grunt.registerTask('default', ['compass', 'bower_concat', 'cssmin', 'uglify']);
  grunt.registerTask('theme', ['compass', 'cssmin']);
};