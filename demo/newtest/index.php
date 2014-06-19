<?php
	$relativePath = '../../';
	$scripts = array('js/script.js');
	$styles = array('css/compiled/style.css');
	include($relativePath.'php/header.php');
?>

<header class="title">
	<h1>Demo Example<a href="../../index.php"><span>➜</span> back</a></h1>
</header>

<div id="period-1" class="period">
    <div id="intro-element"
        data-anchor-target="#period-1"
        data-top-top="top:100%;"
        data--200-top-top="top:50%"
        data--1500-top-top="top:50%"
        data--3500-top-top="top:10%"
        data--6000-top-top="top:10%"
        data-top-bottom="top:-100%"
    >
        <h2>This is an intro</h2>
    </div>
    <?php include('../../assets/cross.svg');?>
</div>

<div id="period-2" class="period">
    <!-- <div id="intro-element"
        data-anchor-target="#period-2"
        data-top="opacity:1;top:100%;"
        data--1200-top="opacity:1;top:50%"
        data--2000-top="top:50%"
        data-1200-bottom="top:-100%"
    >
        <h2>This is a second intro</h2>
    </div> -->
    <?php include('../../assets/cross.svg');?>
</div>

<?php include('../../assets/cross-fixed.svg');?>

<?php
	include($relativePath.'php/footer.php');
?>