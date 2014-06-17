$(document).ready(function()
{
	var dancingpointSydney = $('.dancingpoint-sydney');
	var dancingpointMelbourne = $('.dancingpoint-melbourne');
	var dancingpointAlicesprings = $('.dancingpoint-alicesprings');
	var map = $('#map');


	function isElementVisible(el) {

		if (el instanceof jQuery) {
			el = el[0];
		}

		var eap,
			rect     = el.getBoundingClientRect(),
			vWidth   = window.innerWidth || doc.documentElement.clientWidth,
			vHeight  = window.innerHeight || doc.documentElement.clientHeight,
			efp      = function (x, y) { return document.elementFromPoint(x, y) },
			contains = "contains" in el ? "contains" : "compareDocumentPosition",
			has      = contains == "contains" ? 1 : 0x14;

		// Return false if it's not in the viewport
		if (rect.right < 0 || rect.bottom < 0 
						|| rect.left > vWidth || rect.top > vHeight)
				return false;

		// Return true if any of its four corners are visible
		return (
					(eap = efp(rect.left,  rect.top)) == el || el[contains](eap) == has
			||  (eap = efp(rect.right, rect.top)) == el || el[contains](eap) == has
			||  (eap = efp(rect.right, rect.bottom)) == el || el[contains](eap) == has
			||  (eap = efp(rect.left,  rect.bottom)) == el || el[contains](eap) == has
		);
	}


	function handler()
	{
		if(isElementVisible(map))
		{
			dancingpointSydney.addClass('dancingpoint-animate');
			dancingpointMelbourne.addClass('dancingpoint-animate');
			dancingpointAlicesprings.addClass('dancingpoint-animate');
		}
		else
		{
			dancingpointSydney.removeClass('dancingpoint-animate');
			dancingpointMelbourne.removeClass('dancingpoint-animate');
			dancingpointAlicesprings.removeClass('dancingpoint-animate');
		}
	}

	$(window).on('DOMContentLoaded load resize scroll', handler);
});