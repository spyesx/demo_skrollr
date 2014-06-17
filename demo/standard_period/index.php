<?php
	$relativePath = '../../';
	$scripts = array('js/script.js');
	$styles = array('css/compiled/style.css');
	include($relativePath.'php/header.php');
?>

<header class="title">
	<h1>Standard Period<a href="../../index.php"><span>➜</span> back</a></h1>
</header>



<div id="skrollr-body">

	<div id="container">

		<div id="help">Scroll down to start and keep scrolling<br />↓</div>

		<div id="element"
			data-start="top:2000px;" 
	        data-1200-start="top:1500px;transform:rotate(0deg);" 
	        data-5000-start="top:4900px;transform:rotate(360deg);" 
	        data-6000-start="top:4600px" 
	        data-anchor-target="#container"
			>DEMO GOES HERE</div>

	</div>
</div>


<?php
	include($relativePath.'php/footer.php');
?>