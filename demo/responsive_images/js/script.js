(function($)
{
	'use strict';

	// window.s.destroy();
	// window.s = null;

	window.App = {};

	App.viewport = new wlib.viewport();
	App.responsiveImg = new wlib.responsive.img();

	App.viewport.breakpoint
		.set('too-small', 'all and (min-width:0px) and (max-width:699px)')
		.set('small', 'all and (min-width:700px) and (max-width:799px)')
		.set('large', 'all and (min-width:800px) and (max-width:999px)')
		.set('x-large', 'all and (min-width:1000px)');

	App.responsiveImg.init();

	var handlerResize = function()
	{
		App.viewport.breakpoint.identify();
	};

	$(window).on('resizeEnd', handlerResize);
	handlerResize();



})(jQuery);