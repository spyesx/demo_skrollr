var App = {lib:{}};

App.lib.menu = (function(window, document, undefined)
{

	var $menuWrapper = $('#menu-wrapper');
	var $menu        = $menuWrapper.find('#menu');
	var $periods     = $menu.find('.periods').eq(0);

	var tlOpen = new TimelineMax();

	tlOpen.to($menuWrapper, .2,
	{
		display:'block',
		opacity:1,
		ease:"Power1.easeInOut",
		delay:0
	});


	tlOpen.to($menu, 0.3,
	{
		scaleX:1,
		translateX:'-50%',
		ease:"Power1.easeInOut",
	});

	tlOpen.to($menu, 0.3,
	{
		className:'show-content',
		delay:0.4
	});



	tlOpen.pause();






	var tlClose = new TimelineMax();

	function Menu()
	{
		var that = this;
		that.$menuWrapper = $menuWrapper;
		that.$menu        = $menu;
		that.$periods     = $periods;

		wlib.events.listen('app/view/menu/open', function()
		{
			console.log('catch event : app/view/menu/open');
			that.open();
		});
		wlib.events.listen('app/view/menu/close', function()
		{
			that.close();
		});

		$('#menu-btn-open').on('click tap', function()
		{
			wlib.events.trigger('app/view/menu/open');
		});

		$('#menu-btn-close').on('click tap', function()
		{
			wlib.events.trigger('app/view/menu/close');
		});
	}

	Menu.prototype.setPeriodHeight = function()
	{
		this.$periods.css('height', window.innerHeight - 169);
	};

	Menu.prototype.open = function()
	{
		console.log('start to open');
		tlOpen.play();
		//this.$menuWrapper.toggleClass('show');
		//this.$menu.toggleClass('show-content');

	};

	Menu.prototype.close = function()
	{
		tlOpen.reverse();
		//this.$menuWrapper.toggleClass('show');
		//this.$menu.toggleClass('show-content');
	};


	return Menu;

})(window, document);

var menu = new App.lib.menu();

var resizeHandler = function()
{
	menu.setPeriodHeight();
}

$(window).on('resize', resizeHandler);
resizeHandler();