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
			var p = element.getAttribute('data-periodid');

			wlib.console.log('period:', p, ' - name:', name, ' - direction:', direction);
			
			if(name === 'dataBottomTop' && direction === 'down')
			{
				var period = element.getAttribute('data-periodid');
				l.setAttribute('href', '#p'+period);
				l.innerHTML = 'Current '+period;
			}
			if(name === 'dataTopBottom' && direction === 'up')
			{
				var period = element.getAttribute('data-periodid');
				l.setAttribute('href', '#p'+period);
				l.innerHTML = 'Current '+period;
			}

			if(name === 'dataBottomTop' && direction === 'up')
			{
				var period = parseInt(element.getAttribute('data-periodid')) - 1;
				l.setAttribute('href', '#p'+period);
				l.innerHTML = 'Current '+period;
			}
			if(name === 'dataTopBottom' && direction === 'down')
			{
				var period = parseInt(element.getAttribute('data-periodid')) + 1;
				l.setAttribute('href', '#p'+period);
				l.innerHTML = 'Current '+period;
			}


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
