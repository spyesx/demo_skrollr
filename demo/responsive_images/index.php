<?php
	$relativePath = '../../';
	$scripts = array(
		'js/vendors/jquery/jquery-1.11.1.min.js',
		'js/vendors/wlib/wlib.enhancements.js',
		'js/vendors/wlib/wlib.console.js',
		'js/vendors/wlib/wlib.events.js',
		'js/vendors/wlib/wlib.viewport.js',
		'js/vendors/wlib/wlib.responsive.img.js',
		'js/script.js'
	);
	$styles = array('css/compiled/style.css');
	include($relativePath.'php/header.php');
?>

<header class="title">
	<h1>Responsive Images<a href="../../index.php"><span>➜</span> back</a></h1>
</header>



<div id="skrollr-body">

	<div id="container">

		<div id="info">
			Breakpoint : <span class="breakpoint">default</span>
			<br />
			Retina : <span class="retina">n/a</span>
		</div>
		<img 
			id="element"
			src="img/tower.jpg" 
			data-responsiveimg-toosmall="img/tower.jpg" 
			data-responsiveimg-toosmall-x2="img/tower.jpg" 
			data-responsiveimg-small="img/tower.jpg" 
			data-responsiveimg-small-x2="img/tower.jpg" 
			data-responsiveimg-large="img/tower.jpg" 
			data-responsiveimg-large-x2="img/tower.jpg" 
			data-responsiveimg-xlarge="img/xlarge/tower.jpg" 
			data-responsiveimg-xlarge-x2="img/xlarge/tower.jpg" 
			alt="" />

	</div>
</div>


<?php
	include($relativePath.'php/footer.php');
?>