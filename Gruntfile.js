module.exports = function (grunt) {

	// auto task loading
	require('load-grunt-tasks')(grunt);

	// spits out the time the tasks take
	require('time-grunt')(grunt);

	grunt.initConfig({

		clean: { // deletes and cleans unneeded files
			dist: ['dist'],
			build: ['.sass-cache'],
			css: ['dist/**/*.css']
		},
		imagemin: { // minfies most image types, need a separate plugin for SVG
			dist: {
				files: [{
					expand: true,
					cwd:  'assets/images',
					src:  '{,*/}*.{gif,jpeg,jpg,png}',
					dest: 'dist/images'
				}]
			}
		},
		jshint: { // the most popular JS linter
			options: {
				jshintrc: '.jshintrc',
				reporter: require('jshint-stylish')
			},
			all: [
			]
		},
		sass: { // compiles your Sass, this can easily be replaced with LESS
			dist: {
				files: {
					'dist/css/master.css': 'assets/sass/master.scss'
				}
			}
		},
		cssmin: { // CSS compressor
			dist: {
				files: {
					'dist/css/master.min.css': 'dist/css/master.css'
				},
				minify: {
				}
			}
		},
		uglify: { // JS compressor
			dist: {
				expand: true,
				cwd: 'assets/js',
				src: '**/*.js',
				dest: 'dist/js'
			}
		},
		version: { // automatic cachebusting for your CSS/JS
			assets: {
				options: {
					rename: true,
					format: false,
					length: 8
				},
				src: ['dist/css/master.min.css'],
				dest: 'lib/scripts.php'
			}
		},
		watch: { // automatic processing in development
			sass: {
				files: [
					'assets/sass/**/*.scss',
					'bower_components/inuitcss/**/*.scss'
				],
				tasks: [ 'clean:css', 'sass', 'cssmin', 'version' ]
			},
			js: {
				files: [ '<%= jshint.all %>' ],
				tasks: [ 'jshint', 'uglify', 'version' ]
			},
			livereload: { // set up your livereload here, not currently enabled
				options: {
					livereload: false
				},
				files: [
					'dist/**/*.min.*',
					'*.php',
					'lib/*.php',
					'templates/*.php'
				]
			}
		}
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
		'version',
		'clean:build'
	]);

	grunt.registerTask('install', [
		'npm-install',
		'bower-install'
	]);

	grunt.registerTask('dev', [
		'watch'
	]);

	grunt.registerTask('default', ['build']);
};
