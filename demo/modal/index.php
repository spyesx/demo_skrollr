<?php
	$relativePath = '../../';
	$scripts = array('js/script.js');
	$styles = array('css/compiled/style.css');
	include($relativePath.'php/header.php');
?>

<header class="title">
	<h1>Modal<a href="../../index.php"><span>➜</span> back</a></h1>
</header>



<div id="skrollr-body">

	<div id="container">

		<div id="date-1878" class="date">
			<h1>1878</h1>
			<p>
				Readymade pork belly kitsch, photo booth food truck gastropub church-key Tumblr VHS occupy cray messenger bag.
				Chambray flexitarian small batch iPhone +1, 3 wolf moon hashtag asymmetrical whatever Brooklyn Marfa shabby chic
				readymade mumblecore master cleanse. Pickled blog cornhole, 90's vegan Tumblr beard fanny pack tofu chillwave.
			</p>
			<p>
				Mumblecore Bushwick hashtag, master cleanse banjo PBR flannel American Apparel yr hoodie. Before they sold out wolf
				American Apparel, photo booth distillery disrupt locavore shabby chic retro. Put a bird on it kitsch mlkshk, Carles
				fingerstache mustache cred chambray Blue Bottle fixie direct trade PBR pickled farm-to-table. Fashion axe biodiesel
				salvia polaroid flannel drinking vinegar.
			</p>
		</div>

		<div id="modal">
			<div id="modal-container">
				<div id="modal-body"></div>
			</div>
		</div>

		<span id="btn" data-modal="date-1878">Open modal</span>

	</div>
</div>


<?php
	include($relativePath.'php/footer.php');
?>