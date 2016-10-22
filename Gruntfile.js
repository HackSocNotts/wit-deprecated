module.exports = function (grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json')
  });

  grunt.initConfig({
    sass: { // Process SCSS -> CSS
      dist: {
        options: {
          style: 'compressed'
        },
        files: {
          'css/style.css': 'scss/style.scss' // 'destination' : 'source'
        }
      }
    },

    concat: { // JS concat
      options: {
        separator: ';'
      },
      dist: {
        src: [
        'js/jquery-1.11.1.min.js',
        'js/bootstrap.min.js',
        'js/triangles.js',
        'js/app.js'], // In order of concat
        dest: 'main.min.js'
      }
    },

    uglify: { // Minify JS
      options: {
        mangle: false
      },
      my_target: {
        files: {
          'main.min.js': ['main.min.js']
        }
      }
    },

    watch: {
      css: { // On .scss file change, process scss files
        files: ['scss/*.scss'],
        tasks: ['sass'],
        options: {
          spawn: false
        }
      },

      javascript: { // On .js part file change, merge then minify
        files: ['js/*.js'],
        tasks: ['concat', 'uglify']
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-concat'); // Concat JS
  grunt.loadNpmTasks('grunt-contrib-uglify'); // Minify JS
  grunt.loadNpmTasks('grunt-contrib-sass'); // Process Sass files
  grunt.loadNpmTasks('grunt-contrib-watch'); // On file update, do task

  grunt.registerTask('default', [
    'concat', 'uglify', 'sass'
  ]);
};
