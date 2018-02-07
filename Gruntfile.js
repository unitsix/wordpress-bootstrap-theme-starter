module.exports = function(grunt) {
	
	require('jit-grunt')(grunt);

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		// ## Setup Grunt extension settings ##
		watch: {
			// ## Watch ##
			// Watch will watch for file changes and run commands, watch is a default command when starting Grunt
			less: {
				// ## LESS ##
				// When LESS files change; complie and save them 
				files: ['less/**/*.less'],
				tasks: ['less:compiler', 'newer:cssmin:style']
			},
			js: {
				// ## JS ##
				// When .js files change; complie and save them 
				files: ['js/**/*.js', '!js/**/*.min.js'],
				tasks: ['newer:uglify:js']
			}
		},
		cssmin: {
			style: {
				files: [{
					expand: true,
					cwd: 'bootstrap-starter',
					src: ['style.css'],
					dest: 'bootstrap-starter',
					ext: '.min.css'
				}]
			},
			css: {
				files: [{
					expand: true,
					cwd: 'css',
					src: ['**/*.css', '!**/*.min.js'],
					dest: 'bootstrap-starter/inc/assets/css',
					ext: '.min.css'
				}]
			}
		},
		less: {
			compiler: {
				files: {
					'bootstrap-starter/style.css': 'less/style.less'
				}
			}
		},
		uglify: {
			js: {
				files: [{
					expand: true,
					cwd: 'js',
					src: ['**/*.js', '!**/*.min.js'],
					dest: 'bootstrap-starter/inc/assets/js',
					ext: '.min.js'
				}]
			}
		}
	});

	// # Commands/Tasks #
	// ## define default task ## 
	grunt.registerTask('default', ['watch'])
	//this will auto run when starting Grunt ie: ```$ grunt```


};