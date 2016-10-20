module.exports = function (grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json')
  });

  grunt.initConfig({
    htmlmin: { //Minify HTML
      dist: {
        options: {
          removeComments: true,
          collapseWhitespace: true
        },
        files: {
          'index.html': 'templates/development.html' // destination': 'source'
        }
      }
    },

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
        'js/app.js'], // In order of concat
        dest: 'main.min.js'
      }
    },

	  concatHTML: { //HTML concat
	  	options: {
	  		separator: '\n'
	  	},
	  	dist: {
	  		src: ['templates/head.html',
	  		'templates/navbar.html',
	  		'templates/cover.html',
	  		'templates/speakers.html',
	  		'templates/workshops.html',
	  		'templates/about.html',
	  		'templates/schedule.html',
	  		'templates/register.html',
	  		'templates/faq.html',
	  		'templates/sponsors.html',
	  		'templates/footer.html',
	  		'templates/end.html'],
	  		dest: 'templates/development.html'
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

      html: { //On .html part file change, merge then minify HTML
        files: ['templates/*.html'],
        tasks: ['concatHTML', 'htmlmin']
      },

      javascript: { // On .js part file change, merge then minify
        files: ['js/*.js'],
        tasks: ['concat', 'uglify']
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.renameTask('concat', 'concatHTML');
  grunt.loadNpmTasks('grunt-contrib-concat');

  grunt.loadNpmTasks('grunt-contrib-htmlmin'); // Minify HTML
  grunt.loadNpmTasks('grunt-contrib-uglify'); // Minify JS
  grunt.loadNpmTasks('grunt-contrib-sass'); // Process Sass files
  grunt.loadNpmTasks('grunt-contrib-watch'); // On file update, do task

  grunt.registerTask('default', [
	'concatHTML', 'htmlmin',
    'concat', 'uglify', 'sass'
  ]);
};
