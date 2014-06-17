<?php
	$relativePath = '../../';
	$scripts = array('js/script.js');
	$styles = array('css/compiled/style.css');
	include($relativePath.'php/header.php');
?>

<header class="title">
	<h1>Dancing Point<a href="../../index.php"><span>➜</span> back</a></h1>
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
	include($relativePath.'php/footer.php');
?>