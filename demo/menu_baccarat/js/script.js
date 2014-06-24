var App = {lib:{}};

App.lib.menu = (function(window, document, undefined)
{

	var $menuWrapper = $('#menu-wrapper');
	var $menu        = $menuWrapper.find('#menu');
	var $periods     = $menu.find('.periods').eq(0);
	var $container	 = $('#container');

	var tlOpen = new TimelineMax();
	tlOpen.to($menuWrapper, .3, {
		opacity:1,
		//className:'open',
		onStart : function(){
			$menuWrapper.css('display','block');
		},
		onReverseComplete : function()
		{
			$menuWrapper.css('display','none');
		}
	});
	tlOpen.to($container, 0.2, { scale:0.9, delay:-0.2});
	tlOpen.to($menu, 0.3, {scaleX:1, delay:1});
	tlOpen.to($menu, 0.3, { className:'show-content', delay:0.4 });
	tlOpen.pause();

	function Menu()
	{
		var that = this;
		that.$menuWrapper = $menuWrapper;
		that.$menu        = $menu;
		that.$periods     = $periods;

		wlib.events.listen('app/view/menu/open', function()
		{
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
		tlOpen.play();
	};

	Menu.prototype.close = function()
	{
		tlOpen.reverse();
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