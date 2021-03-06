(function(window, document)
{
	'use strict';

	window.s.destroy();
	window.s = null;

	window.App = {};

	App.viewport = new wlib.viewport();

	App.viewport.breakpoint
		.set('too-small', 'all and (min-width:0px) and (max-width:699px)')
		.set('small', 'all and (min-width:700px) and (max-width:799px)')
		.set('large', 'all and (min-width:800px) and (max-width:999px)')
		.set('x-large', 'all and (min-width:1000px)');

	wlib.events.listen('wlib/viewport/breakpoint/change', function(e, datas)
	{
		skrollr.stylesheets();
		App.skrollr.refresh();
		$('#breakpoint').html('Breakpoint : '+datas.breakpointName);
	});

	var handlerResize = function()
	{
		App.viewport.breakpoint.identify();
	};

	var d = document.getElementById('dashboard-skrollr-x');
	var e = document.getElementById('element').style;
	var i = document.getElementById('info');

	App.skrollr = skrollr.init(
	{
		smoothScrolling: false,
		render: function(data)
		{
			d.innerHTML = data.curTop;
			i.innerHTML = 'left : '+Math.round(e.left.replace('px', ''))+'<br />top : '+Math.round(e.top.replace('px', ''))+'';
		},
		forceHeight:true
	});

	$(window).on('resize', handlerResize);
	handlerResize();
	$('#breakpoint').html('breakpoint : '+App.viewport.breakpoint.current);

})(window, document);
