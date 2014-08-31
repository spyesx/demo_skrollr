(function($)
{
	var _$modal = $('#modal');
	var _$modalContainer = _$modal.find('#modal-container');
	var _$modalBody = _$modalContainer.find('#modal-body');

	var isOpen = false;

	var open_modal = function(content)
	{
		$('body').addClass('modal-open');
		_$modal.css({display:'block', overflow:'auto'});
		_$modal.animate({opacity:1}, 300, function()
		{
			_$modal.animate({ width : $(window).width(), height : $(window).height(), top:0}, 300, function()
			{
				_$modalBody.html(content);
				_$modalBody.animate({opacity:1});
			});
		});
		isOpen = true;
	};

	var close_modal = function()
	{
		_$modal.css({overflow:'hidden'});
		_$modalBody.animate({opacity:0}, 300, function()
		{
			_$modal.animate({width : '100px', height : '100px', top: '400px'}, 300, function()
			{
				_$modal.animate({opacity:0}, 300, function()
				{
					_$modal.css('display', 'none');
					_$modalBody.html('');
					$('body').removeClass('modal-open');
				});
			});
		});
		isOpen = false;
	};

	$('#btn').on('click', function()
	{
		var t = $(this);
		var content = $('#' + t.data('modal') ).html();

		if(!isOpen)
		{
			open_modal(content);
		}
		else
		{
			close_modal();
		}
	});



})(jQuery);