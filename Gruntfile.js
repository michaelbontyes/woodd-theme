'use strict';
module.exports = function(grunt) {

  // Load tasks
  require('load-grunt-tasks')(grunt);

  grunt.initConfig({
    sass: {
      dist: {
         options: {
	        force: true,
    		sourcemap: 'none',
    		style: 'expanded',
    		trace: true,
    		lineNumbers: false,
            banner:
                '/*!\n' +
                'Theme Name:  Woodd\n' +
                'Version:     1.2\n' +
                'Author:      Michael Bontyes\n' +
                'Author URI:  http://woodd.org\n' +
                'Theme URI:   http://woodd.org\n' +
                '*/\n'
        },
        files: {
	        'style.css': 'sass/style.scss'
      	}
      }
    },
    
    watch: {
      sass: {
        files: [
          'sass/**/*.scss',
          '**/**/*.scss',
          'sass/*.scss'
        ],
        tasks: ['sass', 'autoprefixer']
      }
    },

    autoprefixer: {
      options: {
        browsers: ['last 2 versions']
      },
      dist: {
        files: {
            'style.css': 'style.css'
        }
      }
    }

  });

  // Register tasks
  grunt.registerTask('default',['sass','watch','autoprefixer']);
  //use grunt dev during development for browserSync and Watch - HJK
  grunt.registerTask('style', ['sass','autoprefixer']);
};