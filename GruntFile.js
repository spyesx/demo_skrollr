module.exports = function(grunt)
{

	var grunt_config = {
		compass      : {},
		clean        : {},
		autoprefixer : {},
		jshint : {
			options: {
				curly: true,
				eqeqeq: true,
				eqnull: true,
				globals: {
					jQuery: true
				}
			}
		},
		watch        : {}
	};

	var demos = [
        'period_title',
        'relative_to_parent',
		'card_effect',
		'dancing_point',
		'example',
		'mask_animation',
		'standard_period',
		'xyz_movements',
		'scale_animation',
		'skrollr_menu',
		'skrollr_breakpoints',
		'responsive_images',
		'menu_baccarat',
		'detect_period',
		'period_transition',
		'modal'
	];

	var grunt_task_init ={
		files : [],
		tasks : []
	};

	for (var i=0; i<demos.length; i++)
	{
		var demoName = demos[i];

		grunt_config.clean['demo_'+demoName] = {
			src: ['demo/'+demoName+'/css/compiled']
		};

		grunt_config.autoprefixer['demo_'+demoName] = {
				options: {
					browsers : ['last 2 versions'],
					cascade : true
				},
				src: ['!demo/'+demoName+'/css/vendors', 'demo/'+demoName+'/css/**/*.css']
		};

		grunt_config.compass['demo_'+demoName] = {
			options: {
				sassDir : 'demo/'+demoName+'/scss/',
				cssDir : 'demo/'+demoName+'/css/compiled/'
			}
		};

		grunt_config.jshint['demo_'+demoName] = ['demo/'+demoName+'/js/**/*.js', '!demo/'+demoName+'/js/vendors/**/*.js'];

		grunt_config.watch['demo_'+demoName] = {
			files: ['demo/'+demoName+'/scss/**/*.scss','demo/'+demoName+'/scss/**/*.sass'],
			tasks: ['clean:demo_'+demoName, 'compass:demo_'+demoName, 'autoprefixer:demo_'+demoName],
		};

		grunt_task_init.files = grunt_task_init.files.concat(grunt_config.watch['demo_'+demoName].files);
		grunt_task_init.tasks = grunt_task_init.tasks.concat(grunt_config.watch['demo_'+demoName].tasks);
	}


	grunt.initConfig(grunt_config);

	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-clean');
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-jshint');

	grunt.registerTask('verify', ['jshint']);
	grunt.registerTask('init', grunt_task_init.tasks);


};