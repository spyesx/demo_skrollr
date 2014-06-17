<?php
	$scripts = array(
		'js/vendor/greensock/TweenMax.min.js',
		'js/app/mask_animation.js'
	);
	$styles = array('mask_animation.css');
	include('header.php');
?>

<header class="title">
	<h1>Mask Animation<a href="index.php"><span>➜</span> back</a></h1>
</header>



<div id="skrollr-body">

	<div id="container">

		<button id="btn-animate">Animate</button>


		<div id="menu" class="mask">
			<div class="menu-content">

			</div>
		</div>

	</div>
</div>

<svg id="maskSrc" maskUnits="objectBoundingBox" maskContentUnits="objectBoundingBox">
	<defs>
		<mask id="mask" maskUnits="objectBoundingBox">
			<rect y="-0" fill="#ffffff" width="190" height="190"/>
		</mask>
	</defs>
	<g>
		<rect y="-0" fill="#DB9E36" width="190" height="190"/>
	</g>
</svg>


<?php
	include('footer.php');
?>