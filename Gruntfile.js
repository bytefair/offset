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
					'**/*.{php,txt,md}',
					'screenshot.png'
				],
				dest: '<%= offset.dist %>'
			},
			license: {
				src:  'LICENSE.txt',
				dest: '<%= offset.dist %>/LICENSE.txt'
			}
		},
		modernizr: {
			devFile: 'bower_components/modernizr/modernizr.js',
			outputFile: 'dist/js/modernizr.js',
			files: [
				'app/**/*'
			]
		}

	});

	grunt.registerTask('bower-install', function() {
		var exec = require('child_process').exec;
		var cb = this.async();
		exec('bower install', function(err, stdout, stderr) {
			console.log(stdout);
			cb();
		});
	});

	grunt.registerTask('npm-install', function() {
		var exec = require('child_process').exec;
		var cb = this.async();
		exec('npm install', function(err, stdout, stderr) {
			console.log(stdout);
			cb();
		});
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

	grunt.registerTask('install', [
		'npm-install',
		'bower-install'
	]);

	grunt.registerTask('default', ['build']);
};
