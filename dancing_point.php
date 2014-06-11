<?php
	$scripts = array(
		'js/vendor/greensock/TimelineMax.min.js',
		'js/vendor/greensock/plugins/CSSPlugin.min.js',
		'js/app/dancing_point.js'
	);
	$styles = array('dancing_point.css');
	include('header.php');
?>

<header class="title">
	<h1>Dancing Point<a href="index.php"><span>➜</span> back</a></h1>
</header>



<div id="skrollr-body">

	<div id="container">

		<div id="help">Scroll down to start and keep scrolling<br />↓</div>

		<div id="map">
			<div class="dancingpoint dancingpoint-sydney">
				<div class="first"></div>
				<div class="second"></div>
				<div class="third"></div>
			</div>
			<div class="dancingpoint dancingpoint-melbourne">
				<div class="first"></div>
				<div class="second"></div>
				<div class="third"></div>
			</div>
			<div class="dancingpoint dancingpoint-alicesprings">
				<div class="first"></div>
				<div class="second"></div>
				<div class="third"></div>
			</div>
		</div>

	</div>
</div>


<?php
	include('footer.php');
?>

script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>