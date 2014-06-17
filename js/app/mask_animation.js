$(document).ready(function()
{

	var $menu = $('#menu');
	var $btn  = $('#btn-animate').data('order', 'open');

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
		}

	});


	tl.pause();







	$btn.on('click', function(e)
	{
		var t = $(this);
		console.log(t.data('order'));

		if(t.data('order') == 'open')
		{
			t.data('order', 'close');
			tl.play();
		}
		else
		{
			t.data('order', 'open');
			tl.reverse();
		}
	});

});


		// var timeline_fakeLoad = new TimelineLite();

		// var textGradientPositions = {w:-25, b:0};
		// timeline_fakeLoad.to(textGradientPositions, 2, 
		// {
		// 	ease:"SlowMo.ease",
		// 	w : 100,
		// 	b : 100,
		// 	onUpdateParams:["{self}"],
		// 	onUpdate: function(o)
		// 	{
		// 		loading[0].style.backgroundImage = '-webkit-linear-gradient(left,  rgba(255,255,255,1) 0%, rgba(255,255,255,1) '+o.target.w+'%, rgba(255,255,255, .4) '+o.target.b+'%, rgba(255,255,255, .4) 100%)';
		// 	},
		// 	delay:1

		// });

		// timeline_fakeLoad.to(slider, 0.3, {top:-31, ease:"Power1.easeInOut", delay:.3});
		// timeline_fakeLoad.to(slider, 0.3, {opacity:0, display:'none', ease:"Power1.easeInOut", delay:.6});
		// timeline_fakeLoad.from(channel, 0.6, {opacity:0, display:'none', ease:"Power1.easeOut", delay:.3});
		// timeline_fakeLoad.from(title, 0.6, {color:'rgba(255,255,255,.5)', ease:"Power1.easeOut", delay:.3}, '-=0.9');
		// timeline_fakeLoad.from(details, 0.6, {opacity:0, display:'none', ease:"Power1.easeOut", delay:.3}, '-=0.9');







