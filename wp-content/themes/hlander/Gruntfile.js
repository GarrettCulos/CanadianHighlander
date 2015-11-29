module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    watch: {                                                  // Task 1
      css: {
        files: [ '**/*.scss', '**/*.scss' ],
        tasks: ['compass']
      },
      js: {
        files: [ 'assets/js/**/*.js', 'Gruntfile.js'],
        tasks: ['jshint']
      }
    },
    sass: {                                                  // Task 2
      dist: {
        options: {
          sassDir: 'assets/scss/',
          cssDir: 'assets/css/',
          outputStyle: 'compressed'
        }
      }
    },
    jshint: {                                                 // Task 3
      
      options: {
        globals: {
          jQuery: true
        }
      }
    }
  });

  // Load the Grunt plugins.
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-jshint');

  // Register the default tasks.
  grunt.registerTask('watch', ['watch']);
  grunt.registerTask('default', ['jshint', 'sass']);
};