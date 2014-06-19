<?php
	$relativePath = '../../';
	$scripts = array('js/script.js');
	$styles = array('css/compiled/style.css');
	include($relativePath.'php/header.php');
?>

<header class="title">
	<h1>Card effect<a href="../../index.php"><span>➜</span> back</a></h1>
</header>

<?php
	function slidesPositions($nbSlides, $from, $pause, $transition)
	{
		$r = array();
		$currentPos = $from;
		for($i = 1; $i < $nbSlides+1; $i++)
		{
			$r['slide-'.$i] = array(
				'from'       => $currentPos,
				'to'         => $currentPos + $pause,
				'transition' => $currentPos + $pause + $transition
			);
			$currentPos = $currentPos + $pause + $transition;
		}

		return $r;
	}
	$pos                = slidesPositions(7, 0, 1000, 800);
	$framePosFrom       = 800;
	$framePosTo         = $pos['slide-6']['transition'];
	$framePosTransition = $framePosTo + 600;

?>

<div id="skrollr-body">

	<div id="container">

		<div id="help">Scroll down to start and keep scrolling<br />↓</div>

		<div id="frame"
			data-start="top:900px;" 
	        data-<?php echo $framePosFrom; ?>-start="top:300px" 
	        data-<?php echo $framePosTo; ?>-start="top:300px" 
	        data-<?php echo $framePosTo+500; ?>-start="top:-500px" 
	        data-anchor-target="#container"
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
					data-<?php echo $pos['slide-3']['from']; ?>-start="top:0px" 
					data-<?php echo $pos['slide-3']['to']; ?>-start="top:0px" 
					data-<?php echo $pos['slide-3']['transition']; ?>-start="top:-400px" 
					data-anchor-target="#container"
					></div>
				<div class="slide slide-4"
					data-<?php echo $pos['slide-4']['from']; ?>-start="top:0px" 
					data-<?php echo $pos['slide-4']['to']; ?>-start="top:0px" 
					data-<?php echo $pos['slide-4']['transition']; ?>-start="top:-400px" 
					data-anchor-target="#container"
					></div>
				<div class="slide slide-5"
					data-<?php echo $pos['slide-5']['from']; ?>-start="top:0px" 
					data-<?php echo $pos['slide-5']['to']; ?>-start="top:0px" 
					data-<?php echo $pos['slide-5']['transition']; ?>-start="top:-400px" 
					data-anchor-target="#container"
					></div>
				<div class="slide slide-6"></div>
			</div>
		</div>

		<div id="caption" class="diamond diamond-red"
			data-start="top:2000px;" 
	        data-<?php echo $framePosFrom+100; ?>-start="top:550px" 
	        data-<?php echo $framePosTo; ?>-start="top:400px" 
	        data-<?php echo $framePosTo+500; ?>-start="top:-500px" 
	        data-anchor-target="#container"
			>
			<div>
				<ul>
					<li
						data-<?php echo $pos['slide-1']['from']-100; ?>-start="opacity:0" 
						data-<?php echo $pos['slide-1']['from']; ?>-start="opacity:1" 
						data-<?php echo $pos['slide-1']['to']; ?>-start="opacity:1" 
						data-<?php echo $pos['slide-1']['transition']; ?>-start="opacity:0" 
						data-anchor-target="#container"
						><span>Slide 1</span></li>
					<li
						data-<?php echo $pos['slide-2']['from']-100; ?>-start="opacity:0" 
						data-<?php echo $pos['slide-2']['from']; ?>-start="opacity:1" 
						data-<?php echo $pos['slide-2']['to']; ?>-start="opacity:1" 
						data-<?php echo $pos['slide-2']['transition']; ?>-start="opacity:0" 
						data-anchor-target="#container"
						><span>Slide 2</span></li>
					<li
						data-<?php echo $pos['slide-3']['from']-100; ?>-start="opacity:0" 
						data-<?php echo $pos['slide-3']['from']; ?>-start="opacity:1" 
						data-<?php echo $pos['slide-3']['to']; ?>-start="opacity:1" 
						data-<?php echo $pos['slide-3']['transition']; ?>-start="opacity:0" 
						data-anchor-target="#container"
						><span>Slide 3</span></li>
					<li
						data-<?php echo $pos['slide-4']['from']-100; ?>-start="opacity:0" 
						data-<?php echo $pos['slide-4']['from']; ?>-start="opacity:1" 
						data-<?php echo $pos['slide-4']['to']; ?>-start="opacity:1" 
						data-<?php echo $pos['slide-4']['transition']; ?>-start="opacity:0" 
						data-anchor-target="#container"
						><span>Slide 4</span></li>
					<li
						data-<?php echo $pos['slide-5']['from']-100; ?>-start="opacity:0" 
						data-<?php echo $pos['slide-5']['from']; ?>-start="opacity:1" 
						data-<?php echo $pos['slide-5']['to']; ?>-start="opacity:1" 
						data-<?php echo $pos['slide-5']['transition']; ?>-start="opacity:0" 
						data-anchor-target="#container"
						><span>Slide 5</span></li>
					<li
						data-<?php echo $pos['slide-6']['from']-100; ?>-start="opacity:0" 
						data-<?php echo $pos['slide-6']['to']; ?>-start="opacity:1" 
						data-<?php echo $pos['slide-6']['transition']; ?>-start="opacity:0" 
						data-anchor-target="#container"
						><span>Slide 6</span></li>
				</ul>
			</div>
		</div>
	</div>
</div>



<?php
	include($relativePath.'php/footer.php');
?>