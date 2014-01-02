module.exports = function (grunt) {

	// auto task loading
	require('load-grunt-tasks')(grunt);

	// spits out the time the tasks take
	require('time-grunt')(grunt);

	grunt.initConfig({

		// configurable paths
		paths: {
			app:  'app',
			dist: 'dist'
		}

	});

	grunt.registerTask('default', [
	]);
};
