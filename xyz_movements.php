<?php
	$scripts = array();
	$styles = array('xyz_movements.css');
	include('header.php');
?>

<header class="title">
	<h1>XYZ Movements<a href="index.php"><span>➜</span> back</a></h1>
</header>







<?php
	function scrollPos($value)
	{
		$from = 0;
		return $from + $value;
	}
?>











<div id="skrollr-body">

	<div id="container">

		<div id="help">Scroll down to start and keep scrolling<br />↓</div>

		<div id="text"
			data-start="top:<?php echo scrollPos(2000); ?>px;" 
	        data-<?php echo scrollPos(690); ?>-start="top:<?php echo scrollPos(900); ?>px" 
	        data-<?php echo scrollPos(2000); ?>-start="width:380px; height:500px; top:<?php echo scrollPos(2210); ?>px" 
	        data-<?php echo scrollPos(5000); ?>-start="width:380px; height:500px; top:<?php echo scrollPos(4210); ?>px" 
	        data-<?php echo scrollPos(5500); ?>-start="width:400px; height:300px; top:<?php echo scrollPos(4710); ?>px" 
	        data-<?php echo scrollPos(7000); ?>-start="top:<?php echo scrollPos(7210); ?>px" 
			>
			<div class="first">
				Vegan chillwave fanny pack artisan, Blue Bottle cray ethical iPhone.  Sriracha vinyl raw denim banjo church-key Portland.  McSweeney's selfies dreamcatcher street art sartorial.  Austin normcore kogi hella.  Kale chips flannel master cleanse, Truffaut fanny pack stumptown whatever iPhone sriracha Etsy distillery brunch Pitchfork.  Butcher pop-up pickled scenester, whatever direct trade  readymade cliche 8-bit selvage PBR.  Ennui flannel forage, jean shorts chia yr vegan distillery cornhole PBR&amp;B twee hoodie lomo.
			</div>
			<div class="second">
				Vegan chillwave fanny pack artisan, Blue Bottle cray ethical iPhone.  Sriracha vinyl raw denim banjo church-key Portland.  McSweeney's selfies dreamcatcher street art sartorial.  Austin normcore kogi hella.  Kale chips flannel master cleanse, Truffaut fanny pack stumptown whatever iPhone sriracha Etsy distillery brunch Pitchfork.  Butcher pop-up pickled scenester, whatever direct trade  readymade cliche 8-bit selvage PBR.  Ennui flannel forage, jean shorts chia yr vegan distillery cornhole PBR&amp;B twee hoodie lomo.
				<br /><br />
				Vegan chillwave fanny pack artisan, Blue Bottle cray ethical iPhone.  Sriracha vinyl raw denim banjo church-key Portland.  McSweeney's selfies dreamcatcher street art sartorial.  Austin normcore kogi hella.  Kale chips flannel master cleanse, Truffaut fanny pack stumptown whatever iPhone sriracha Etsy distillery brunch Pitchfork.  Butcher pop-up pickled scenester, whatever direct trade  readymade cliche 8-bit selvage PBR.  Ennui flannel forage, jean shorts chia yr vegan distillery cornhole PBR&amp;B twee hoodie lomo.
			</div>
		</div>
		<div id="surprise"></div>
		<div id="illu1"></div>
		<div id="illu2"></div>
		<div id="date">2014</div>

	</div>
</div>


<?php
	include('footer.php');
?>