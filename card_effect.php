<?php
	$scripts = array();
	$styles = array('card_effect.css');
	include('header.php');
?>

<header class="title">
	<h1><a href="index.php"><span>➜</span> back</a> Card effect</h1>
</header>

<?php
	function slidesPositions($nbSlides, $from, $distance)
	{
		$r = array();
		$currentPos = $from;
		for($i = 1; $i < $nbSlides+1; $i++)
		{
			$r['slide-'.$i] = array(
				'from'       => $currentPos,
				'to'         => $currentPos + $distance,
				'transition' => $currentPos + $distance + $distance
			);
			$currentPos = $currentPos + $distance;
		}

		return $r;
	}
	$pos = slidesPositions(4, 1800, 800);

?>

<div id="skrollr-body">

	<div id="container">

		<div id="frame"
			data-start="top:2000px;" 
	        data-800-start="top:900px" 
	        data-5000-start="top:5100px" 
	        data-5800-start="top:5700px"
			>
			<div id="frame-slider">
				<div class="slide slide-1"
					data-<?php echo $pos['slide-1']['from']; ?>-start="top:0px" 
					data-<?php echo $pos['slide-1']['to']; ?>-start="top:0px" 
					data-<?php echo $pos['slide-1']['transition']; ?>-start="top:-400px" 
					data-anchor-target="#container"
					></div>
				<div class="slide slide-2"
					data-<?php echo $pos['slide-2']['from']; ?>-start="top:0px" 
					data-<?php echo $pos['slide-2']['to']; ?>-start="top:0px" 
					data-<?php echo $pos['slide-2']['transition']; ?>-start="top:-400px" 
					data-anchor-target="#container"
					></div>
				<div class="slide slide-3"
					data-start="top:0px;" 
					data-<?php echo $pos['slide-3']['from']; ?>-start="top:0px" 
					data-<?php echo $pos['slide-3']['to']; ?>-start="top:0px" 
					data-<?php echo $pos['slide-3']['transition']; ?>-start="top:-400px" 
					data-anchor-target="#container"
					></div>
				<div class="slide slide-4"
					data-start="top:0px;" 
					data-<?php echo $pos['slide-4']['from']; ?>-start="top:0px" 
					data-<?php echo $pos['slide-4']['to']; ?>-start="top:0px" 
					data-<?php echo $pos['slide-4']['transition']; ?>-start="top:-400px" 
					data-anchor-target="#container"
					></div>
				<div class="slide slide-5"
					data-start="top:0px;" 
					data-3400-start="top:0px" 
					data-3800-start="top:-400px" 
					data-anchor-target="#container"
					></div>
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
</div>




<?php
	include('footer.php');
?>