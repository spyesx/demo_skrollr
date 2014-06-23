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

	var $infoBreakpoint = $('#info .breakpoint').eq(0);
	var $infoRetina = $('#info .retina').eq(0);

	wlib.events.listen('wlib/viewport/breakpoint/change', function(e, datas)
	{
		$infoBreakpoint.html(datas.breakpointName);
		$infoRetina.html((window.devicePixelRatio > 1 ? 'yes' : 'no'));
	});

	var handlerResize = function()
	{
		App.viewport.breakpoint.identify();
	};

	$(window).on('resizeEnd', handlerResize);
	handlerResize();



})(jQuery);