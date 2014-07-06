<?php
	$relativePath = '../../';
	$scripts = array('js/script.js');
	$styles = array('css/compiled/style.css');
	include($relativePath.'php/header.php');
?>

<header class="title">
	<h1>Period transition<a href="../../index.php"><span>➜</span> back</a></h1>
</header>



<div id="skrollr-body">

	<div id="container">

		<div id="help">Scroll down to start and keep scrolling<br />↓</div>

		<div id="period_1" class="period">
			<?php include('img/cross.svg');?>
		</div>
		<div id="period_2" class="period"
			data-anchor-target="#container"
			data-0="top:800px"
			data-2000="top:-180px"
		>
			<?php include('img/cross.svg');?>
		</div>

	</div>
</div>


<?php include('img/cross-fixed.svg');?>

<?php
	include($relativePath.'php/footer.php');
?>