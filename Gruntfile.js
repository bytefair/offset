module.exports = function (grunt) {

	// auto task loading
	require('load-grunt-tasks')(grunt);

	// spits out the time the tasks take
	require('time-grunt')(grunt);

	grunt.initConfig({

		clean: { // deletes and cleans unneeded files
			dist:  ['dist'],
			build: [
				'.sass-cache',
				'dist/master.css'
			],
			css:   ['dist/*.css'],
			js:    ['dist/*.js']
		},
		imagemin: { // minfies most image types, need a separate plugin for SVG
			dist: {
				files: [{
					expand: true,
					cwd:  'assets/images',
					src:  '{,*/}*.{gif,jpeg,jpg,png}',
					dest: 'dist'
				}]
			}
		},
		jshint: { // the most popular JS linter
			options: {
				jshintrc: '.jshintrc',
				reporter: require('jshint-stylish')
			},
			all: [
				'Gruntfile.js',
				'assets/javascripts/*.js',
				'!assets/javascripts/**/*.min.js'
			]
		},
		sass: { // compiles your Sass, this can easily be replaced with LESS
			dist: {
				files: {
					'dist/master.css': 'assets/stylesheets/master.scss'
				}
			}
		},
		cssmin: { // CSS compressor
			dist: {
				files: {
					'dist/master.min.css': 'dist/master.css'
				},
				minify: {
				}
			}
		},
		uglify: { // JS compressor
			dist: {
				files: {
					'dist/footer.min.js': [
						'assets/javascripts/bootstrap/dropdown.js'
					]
				}
			}
		},
		version: { // automatic cachebusting for your CSS/JS
			assets: {
				options: {
					rename: true,
					format: false,
					length: 8
				},
				src: [
					'dist/master.min.css',
					'dist/footer.min.js'
				],
				dest: 'lib/scripts.php'
			}
		},
		watch: { // automatic processing in development
			sass: {
				files: [
					'assets/stylesheets/**/*.scss',
					'bower_components/inuitcss/**/*.scss'
				],
				tasks: [ 'clean:css', 'sass', 'cssmin', 'version' ]
			},
			js: {
				files: [ '<%= jshint.all %>' ],
				tasks: [ 'clean:js', 'jshint', 'uglify', 'version' ]
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
		'build'
	]);

	grunt.registerTask('dev', [
		'watch'
	]);

	grunt.registerTask('default', ['build']);
};
