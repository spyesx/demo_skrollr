$(document).ready(function()
{

	var $menu    = $('#menu');
	var $btn     = $('#btn-animate').data('order', 'open');
	var $content = $('#content');
	var $viewportBorders = $('#viewport-borders');

	$btn.on('click', function(e)
	{
		var t = $(this);

		if(t.data('order') == 'open')
		{
			t.data('order', 'close');
			$menu.toggleClass('open');
			$content.toggleClass('zoomOut');
			$viewportBorders.toggleClass('show');
		}
		else
		{
			t.data('order', 'open');
			//tl.reverse();
			$menu.toggleClass('open');
			$content.toggleClass('zoomOut');
			$viewportBorders.toggleClass('show');
		}
	});

});





