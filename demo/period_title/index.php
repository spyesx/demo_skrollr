<?php
	$relativePath = '../../';
	$scripts = array('js/script.js');
	$styles = array('css/compiled/style.css');
	include($relativePath.'php/header.php');
?>

<header class="title">
	<h1>Period titles<a href="../../index.php"><span>➜</span> back</a></h1>
</header>

<div id="period-1" class="period">
    <div id="intro-element" class="intro-element"
        data-anchor-target="#period-1"
        data-top-top="top:100%;"
        data--200-top-top="top:50%"
        data--2500-top-top="top:50%"
        data--4500-top-top="top:5%"
        data--7000-top-top="top:5%"
        data-top-bottom="top:-100%"
    >
        <h2>This is an intro</h2>
    </div>
    
    <ul class="blocks yellow">
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
    </ul>
    
    <?php include('../../assets/cross.svg');?>
</div>

<div id="period-2" class="period">
    <div id="intro-element-2" class="intro-element"
        data-anchor-target="#period-2"
        data-top-top="top:100%;"
        data--200-top-top="top:50%"
        data--2500-top-top="top:50%"
        data--4500-top-top="top:5%"
        data--7000-top-top="top:5%"
        data-top-bottom="top:-100%"
    >
        <h2>This the second intro</h2>
    </div>
    
    <ul class="blocks green">
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
    </ul>
    
    <?php include('../../assets/cross.svg');?>
</div>

<div id="period-3" class="period">
    <div id="intro-element-3" class="intro-element"
        data-anchor-target="#period-3"
        data-top-top="top:100%;"
        data--200-top-top="top:50%"
        data--2500-top-top="top:50%"
        data--4500-top-top="top:5%"
        data--7000-top-top="top:5%"
        data-top-bottom="top:-100%"
    >
        <h2>This is a third intro</h2>
    </div>
    
    <ul class="blocks blue">
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
        <li class="block"></li>
    </ul>
    
    <?php include('../../assets/cross.svg');?>
</div>

<?php include('../../assets/cross-fixed.svg');?>

<?php
	include($relativePath.'php/footer.php');
?>