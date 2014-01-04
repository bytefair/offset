module.exports = function (grunt) {

	// auto task loading
	require('load-grunt-tasks')(grunt);

	// spits out the time the tasks take
	require('time-grunt')(grunt);

	grunt.initConfig({

		// configurable paths
		path: {
			app:  'app',
			dist: 'dist'
		},
		clean: {
			dist: ['<%= path.dist %>']
		},
		jshint: {

		},
		cssmin: {

		}
		uglify: {

		},
		copy {

		},
		modernizr {

		},
		replace {

		}

	});

	grunt.registerTask('build', [
		'clean',
		'jshint',
		'cssmin',
		'uglify',
		'copy',
		'modernizr',
		'replace'
	]);

	grunt.registerTask('default', ['build']);
};
