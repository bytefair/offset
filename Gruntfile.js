module.exports = function (grunt) {

	// auto task loading
	require('load-grunt-tasks')(grunt);

	// spits out the time the tasks take
	require('time-grunt')(grunt);

	grunt.initConfig({

		clean: {
			dist: ['dist'],
			build: ['.sass-cache']
		},
		imagemin: {
			dist: {
				files: [{
					expand: true,
					cwd:  'assets/images',
					src:  '{,*/}*.{gif,jpeg,jpg,png}',
					dest: 'dist/images'
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
					'dist/css/master.css': 'assets/sass/master.scss'
				}
			}
		},
		cssmin: {
			dist: {
				files: {
					'dist/css/master.min.css': 'dist/css/master.css'
				},
				minify: {
				}
			}
		},
		uglify: {
			dist: {
				expand: true,
				cwd: 'assets/js',
				src: '**/*.js',
				dest: 'dist/js'
			}
		},
		// modernizr: {
		// 	devFile: 'bower_components/modernizr/modernizr.js',
		// 	outputFile: 'dist/js/modernizr.js',
		// 	files: [
		// 		'app/**/*'
		// 	]
		// }

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
		'clean:build'
	]);

	grunt.registerTask('install', [
		'npm-install',
		'bower-install'
	]);

	grunt.registerTask('default', ['build']);
};
