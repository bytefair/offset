module.exports = function (grunt) {

	// auto task loading
	require('load-grunt-tasks')(grunt);

	// spits out the time the tasks take
	require('time-grunt')(grunt);

	grunt.initConfig({

		// configurable offsets
		offset: {
			// directory defs
			app:  'app',
			dist: 'dist',
		},
		clean: {
			dist: ['<%= offset.dist %>'],
			build: ['.sass-cache']
		},
		imagemin: {
			dist: {
				files: [{
					expand: true,
					cwd:  '<%= offset.app %>/images',
					src:  '{,*/}*.{gif,jpeg,jpg,png}',
					dest: '<%= offset.dist %>/images'
				}]
			}
		},
		coffee: {
			// will add support for coffee later
		},
		jshint: {
			dist: {
				options: {
					jshintrc: '.jshintrc',
					reporter: require('jshint-stylish')
				}
			}
		},
		sass: {
			dist: {
				files: {
					'<%= offset.dist %>/style.css': '<%= offset.app %>/style.scss'
				}
			}
		},
		cssmin: {
			dist: {
				files: {
					'<%= offset.dist %>/style.css': '<%= offset.dist %>/style.css'
				}
			}
		},
		uglify: {
			dist: {
				expand: true,
				cwd: '<%= offset.app %>/js',
				src: '**/*.js',
				dest: '<%= offset.dist %>/js'
			}
		},
		copy: {
			templates: {
				expand: true,
				cwd: '<%= offset.app %>',
				src: [
					'**/*.{php,txt,md}'
				],
				dest: '<%= offset.dist %>'
			},
			// bowerjs: {
			// 	expand: true,
			// 	cwd: 'bower_components',
			// 	src: [
			// 		'modernizr/modernizr.js'
			// 	],
			// 	dest: '<%= offset.dist %>/js'
			// }
		},
		modernizr: {
			devFile: 'bower_components/modernizr/modernizr.js',
			outputFile: 'dist/js/modernizr.js',
			files: [
				'app/**/*'
			]
		},
		replace: {
			// not yet
		}

	});

	grunt.registerTask('build', [
		'clean:dist',
		'imagemin',
		'jshint',
		'sass',
		'cssmin',
		'uglify',
		'copy',
		'modernizr',
		'clean:build'
	]);

	grunt.registerTask('default', ['build']);
};
