<?php
	$relativePath = '../../';
	$scripts = array('js/script.js');
	$styles = array('css/compiled/style.css');
	include($relativePath.'php/header.php');
?>

<header class="title">
	<h1>Demo Example<a href="../../index.php"><span>➜</span> back</a></h1>
</header>

<div class="test-area">
    <div class="curtain-triggers">
        <a id="open-curtain-link" class="curtain-trigger" href="">
            Open / close
        </a>
    </div>
    
    <div id="curtain" class="curtain open">
        <div id="curtain-content" class="content">
            <p>Lomo occupy viral cornhole, pork belly Portland mustache farm-to-table American Apparel before they sold out.  XOXO four loko Echo Park pug squid irony.  Skateboard farm-to-table VHS ugh single-origin coffee.  Wolf forage Etsy, ethnic post-ironic synth photo booth master cleanse stumptown pour-over.  Banh mi deep v ugh, sustainable bicycle rights next level American Apparel.  Post-ironic before they sold out vinyl Shoreditch keytar.  Portland butcher chambray, Vice Banksy single-origin coffee biodiesel squid VHS.</p>
        </div>
    </div>
</div>

<div id="skrollr-body">

	<div id="container">

		<div id="help">Scroll down to start and keep scrolling<br />↓</div>
        
        <ul id="items-1">
            <li id="item1" class="item"
                data-anchor-target="#items-1"
                data-start="bottom:-100%"
                data-center="bottom:50%"
                data-bottom="bottom:100%"
            >
                <div>
                    <span>1</span>
                </div>
            </li>
            <li id="item2" class="item"
                data-anchor-target="#items-1"
                data-start="bottom:-100%"
                data-center="bottom:40%"
                data-bottom="bottom:100%"
            >
                <div>
                    <span>2</span>
                </div>
            </li>
            <li id="item3" class="item"
                data-anchor-target="#items-1"
                data-start="bottom:-100%"
                data-center="bottom:20%"
                data-bottom="bottom:100%"
            >
                <div>
                    <span>3</span>
                </div>
            </li>
            <li id="item4" class="item"
                data-anchor-target="#items-1"
                data-start="bottom:-100%"
                data-center="bottom:40%"
                data-bottom="bottom:100%"
            >
                <div>
                    <span>4</span>
                </div>
            </li>
            <li id="item5" class="item"
                data-anchor-target="#items-1"
                data-start="bottom:-100%"
                data-center="bottom:50%"
                data-bottom="bottom:100%"
            >
                <div>
                    <span>5</span>
                </div>
            </li>
        </ul>
        
        <ul id="items-2">
            <li id="item1" class="item"
                data-anchor-target="#items-2"
                data-start="bottom:-100%"
                data-center="bottom:50%"
                data-bottom="bottom:100%"
            >
                <div>
                    <span>1</span>
                </div>
            </li>
            <li id="item2" class="item"
                data-anchor-target="#items-2"
                data-start="bottom:-100%"
                data-center="bottom:40%"
                data-bottom="bottom:100%"
            >
                <div>
                    <span>2</span>
                </div>
            </li>
            <li id="item3" class="item"
                data-anchor-target="#items-2"
                data-start="bottom:-100%"
                data-center="bottom:20%"
                data-bottom="bottom:100%"
            >
                <div>
                    <span>3</span>
                </div>
            </li>
            <li id="item4" class="item"
                data-anchor-target="#items-2"
                data-start="bottom:-100%"
                data-center="bottom:40%"
                data-bottom="bottom:100%"
            >
                <div>
                    <span>4</span>
                </div>
            </li>
            <li id="item5" class="item"
                data-anchor-target="#items-2"
                data-start="bottom:-100%"
                data-center="bottom:50%"
                data-bottom="bottom:100%"
            >
                <div>
                    <span>5</span>
                </div>
            </li>
        </ul>
        
        <!-- <div id="element"
            data-start="top:2000px;" 
            data-1200-start="top:1500px;transform:rotate(0deg);" 
            data-5000-start="top:4900px;transform:rotate(360deg);" 
            data-6000-start="top:4600px" 
            data-anchor-target="#container"
            >DEMO GOES HERE</div>

    </div> -->
</div>



<?php
	include($relativePath.'php/footer.php');
?>