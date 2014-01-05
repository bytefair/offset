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
		imagemin: {
			dist: {
				files: [{
					expand: true,
					cwd:  '<%= path.app %>/images',
					src:  '{,*/}*.{gif,jpeg,jpg,png}',
					dest: '<%= path.dist %>/images'
				}]
			}
		},
		coffee: {

		},
		jshint: {
			options: {
				jshintrc: '.jshintrc',
				reporter: require('jshint-stylish')
			}
		},
		cssmin: {

		},
		uglify: {

		},
		copy: {

		},
		modernizr: {

		},
		replace: {

		}

	});

	grunt.registerTask('build', [
		'clean',
		'imagemin',
		'jshint',
		'cssmin',
		'uglify',
		'copy',
		'modernizr',
		'replace'
	]);

	grunt.registerTask('default', ['build']);
};
