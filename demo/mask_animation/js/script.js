$(document).ready(function()
{

	var $menu    = $('#menu');
	var $btn     = $('#btn-animate').data('order', 'open');
	var $content = $('#content');
	var $viewportBorders = $('#viewport-borders');

	var tl = new TimelineMax();
	var maskPos = {
		xFirst  : 201, //200
		xSecond : 199,
		sFirst  : 0,
		sSecond : 0
	};

	tl.to(maskPos, 1, 
	{
		ease:"Power1.easeOut",
		xFirst  : 0,
		xSecond : 199,
		sFirst  : 201, // 200
		sSecond : 201,
		onStart : function()
		{
			$menu[0].style.display = 'block';
			//$viewportBorders[0].style.display = 'block';
		},
		onUpdateParams:["{self}"],
		onUpdate: function(o)
		{
			$menu[0].style.webkitMaskPositionX = o.target.xFirst+'px, '+ o.target.xSecond+'px';
			$menu[0].style.maskPositionX = o.target.xFirst+'px, '+ o.target.xSecond+'px';
			$menu[0].style.webkitMaskSize = o.target.sFirst+'px 100%, '+o.target.sSecond+'px 100%';
			$menu[0].style.maskSize = o.target.sFirst+'px 100%, '+o.target.sSecond+'px 100%';
		},
		onReverseComplete: function()
		{
			$menu[0].style.display = 'none';
			//$viewportBorders[0].style.display = 'none';
		},
		delay:1
	});


	tl.pause();







	$btn.on('click', function(e)
	{
		var t = $(this);
		console.log(t.data('order'));

		if(t.data('order') === 'open')
		{
			t.data('order', 'close');
			tl.play();
			$content.toggleClass('zoomOut');
			$viewportBorders.toggleClass('show');
		}
		else
		{
			t.data('order', 'open');
			tl.reverse();
			$content.toggleClass('zoomOut');
			$viewportBorders.toggleClass('show');
		}
	});

});




