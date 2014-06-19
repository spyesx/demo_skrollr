<?php
	$relativePath = '../../';
	$scripts = array(
		'js/vendors/jquery/jquery-1.11.1.min.js',
		'js/vendors/skrollr/skrollr.min.js',
		'js/vendors/skrollr/skrollr.stylesheets.min.js',
		'js/vendors/wlib/wlib.enhancements.js',
		'js/vendors/wlib/wlib.console.js',
		'js/vendors/wlib/wlib.events.js',
		'js/vendors/wlib/wlib.viewport.js',
		'js/script.js'
	);
	$styles = array('css/compiled/style.css');
	include($relativePath.'php/header.php');
?>

		<link rel="stylesheet" type="text/css" href="css/compiled/skrollr-stylesheets/too-small.css" media="all and (min-width:0px) and (max-width:699px)" data-skrollr-stylesheet />
		<link rel="stylesheet" type="text/css" href="css/compiled/skrollr-stylesheets/small.css" media="all and (min-width:700px) and (max-width:799px)" data-skrollr-stylesheet />
		<link rel="stylesheet" type="text/css" href="css/compiled/skrollr-stylesheets/large.css" media="all and (min-width:800px) and (max-width:999px)" data-skrollr-stylesheet />
		<link rel="stylesheet" type="text/css" href="css/compiled/skrollr-stylesheets/x-large.css" media="all and (min-width:1000px)" data-skrollr-stylesheet />

<header class="title">
	<h1>Skrollr Breakpoints<a href="../../index.php"><span>➜</span> back</a></h1>
</header>



	<?php include('img/cross-fixed.svg');?>
	<div id="skrollr-body">

		<div id="period">
			<div id="element">
				<div id="info"></div>
				<div class="sperator"></div>
				<div id="breakpoint"></div>
			</div>
			<ul class="blocks green">
				<li class="block"></li><li class="block"></li><li class="block"></li><li class="block"></li><li class="block"></li>
				<li class="block"></li><li class="block"></li><li class="block"></li><li class="block"></li><li class="block"></li>
			</ul>
			<?php include('img/cross.svg');?>
		</div>

	</div>


<?php
	include($relativePath.'php/footer.php');
?>