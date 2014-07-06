(function($)
{

	window.s.destroy();
	window.s = null;
	window.App = {};
	var d = document.getElementById('dashboard-skrollr-x');
	var l = document.getElementById('link-x');
	App.skrollr = skrollr.init(
	{
		smoothScrolling: false,
		render: function(data)
		{
			d.innerHTML = data.curTop;
		},
		forceHeight:true,
		keyframe: function(element, name, direction)
		{
			var period = parseInt(element.getAttribute('data-periodid'));
			l.setAttribute('href', '#p'+period);
			if(name === 'dataBottomTop' && direction === 'down')
			{
				l.innerHTML = 'Current '+period;
			}
			if(name === 'dataTopBottom' && direction === 'up')
			{
				l.innerHTML = 'Current '+period;
			}

			if(name === 'dataBottomTop' && direction === 'up')
			{
				period = period - 1;
				l.innerHTML = 'Current '+period;
			}
			if(name === 'dataTopBottom' && direction === 'down')
			{
				period = period + 1;
				l.innerHTML = 'Current '+period;
			}
			console.log(name, direction, period);
		}
	});

	skrollr.menu.init(App.skrollr,{
		animate: true,
		easing: 'sqrt',
		scale: 2,
		duration: function(currentTop, targetTop) {
		    return 500;
		}

	});

})(jQuery);
