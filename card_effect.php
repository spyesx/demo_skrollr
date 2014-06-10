<?php
	$scripts = array();
	$styles = array('card_effect.css');
	include('header.php');
?>

<header class="title">
	<h1><a href="index.php"><span>➜</span> back</a> Card effect</h1>
</header>


<div id="skrollr-body">

	<div id="frame">
		<div id="frame-slider">
			<div class="slide slide-1"></div>
			<div class="slide slide-2"></div>
			<div class="slide slide-3"></div>
			<div class="slide slide-4"></div>
			<div class="slide slide-5"></div>
			<div class="slide slide-6"></div>
		</div>
	</div>

	<div id="caption" class="diamond diamond-red">
		<div>
			<ul>
				<li>Slide 1</li>
				<li>Slide 2</li>
				<li>Slide 3</li>
				<li>Slide 4</li>
				<li>Slide 5</li>
				<li>Slide 6</li>
			</ul>
		</div>
	</div>

</div>




<?php
	include('footer.php');
?>