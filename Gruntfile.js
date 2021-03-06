module.exports = function(grunt) {

	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		banner: '/**\n' +
              '* bootstrap.js v3.0.0 by @fat and @mdo' +
              '* Copyright 2013 Twitter Inc.' +
              '* http://www.apache.org/licenses/LICENSE-2.0' +
              '*/\n',
		jshint: {
			options: {
				jshintrc: 'js/.jshintrc'
			},
			gruntfile: {
				src: 'Gruntfile.js'
			},
			src: {
				src: ['js/bootstrap/*.js']
			}
		},
		concat: {
			options: {
				separator: ';',
				stripBanners: false
			},
			dist: {
				src: [ 'js/bootstrap/transition.js',
					   'js/bootstrap/alert.js',
					   'js/bootstrap/button.js',
					   'js/bootstrap/carousel.js',
					   'js/bootstrap/collapse.js',
					   'js/bootstrap/dropdown.js',
					   'js/bootstrap/modal.js',
					   'js/bootstrap/tooltip.js',
					   'js/bootstrap/popover.js',
					   'js/bootstrap/scrollspy.js',
					   'js/bootstrap/tab.js',
					   'js/bootstrap/affix.js' ],
				dest: 'js/bootstrap.js',
			}
		},
		uglify: {
			bootstrap: {
				files: {
					'js/bootstrap.min.js': [ 'js/bootstrap/transition.js',
											 'js/bootstrap/alert.js',
											 'js/bootstrap/button.js',
											 'js/bootstrap/carousel.js',
											 'js/bootstrap/collapse.js',
											 'js/bootstrap/dropdown.js',
											 'js/bootstrap/modal.js',
											 'js/bootstrap/tooltip.js',
											 'js/bootstrap/popover.js',
											 'js/bootstrap/scrollspy.js',
											 'js/bootstrap/tab.js',
											 'js/bootstrap/affix.js' ],
				},
				options: {
					banner: '<%= banner %>'
				},
			},
			scripts: {
				files: {
					'js/prism.min.js': ['js/prism.js'],
					'js/styleguide.min.js': ['js/styleguide.js'],
					'js/website.min.js': ['js/website.js']
				},
			},
		},
		compass: {
			dist: {
				options: {
					config: 'config.rb'
				}
			}
		},
		exec: {
			build: {
				cmd: 'jekyll build'
			},
			serve: {
				cmd: 'jekyll serve'
			}
		},
		watch: {
			files: [
				'sass/*.scss', 
				'js/*.js',
				'!js/*.min.js',  // ignore minified files
				'!js/bootstrap.js', // ignore concat'd bootstrap
				'!sass/style.scss', // only imports
			],
			tasks: ['jshint', 'concat', 'uglify', 'compass', 'exec:build'],
			options: {
				livereload: true,
			},
		}
	});

	// Load the plugins
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-exec');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-livereload');

	// Tasks
	grunt.registerTask('default', ['jshint', 'concat', 'uglify', 'compass']);
	grunt.registerTask('build', ['default', 'exec:build']);
	grunt.registerTask('serve', ['build', 'exec:serve']);

};