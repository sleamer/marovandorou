<?php

	// Setup up some variables for header.php
	$page_name = 'about';
	$page_title = 'About';
	$page_description = '';
	$page_keywords = '';

	// Get header.php
	include $_SERVER['DOCUMENT_ROOT'] . '/_inc/php/header.php';

?>

			<div id="content">
				<div class="container">
					<h1><img src="/_inc/img/h1-about.png" alt="About" /></h1>
					<div class="colwrap">
						<div class="col w400 align-right">
							<p>Maro Vandorou was born and raised in Athens, Greece and came to the U.S. to pursue doctoral studies as a Fulbright Scholar. Her formal training has a strong interdisciplinary character with studies in visual arts, interaction design, literature, psychology, digital and computer technologies. In 2000 her focus shifted exclusively to image making with ongoing training, professional experience and expertise in applying film, digital imaging and printing technologies to traditional fine art domains as photography and printmaking.</p>
							<p class="photo float-right align-center w198">
								<img src="/_inc/img/vandorou.jpg" alt="Maro Vandorou" />
								<span class="caption">(Photo of the artist by Russ Dodd.)</span>
							</p>
						</div>
						<div class="col w400">
							<p>&ldquo;As a visual artist I use an eclectic mix of materials and methods to express my voice and vision. I have a true passion for rare, handmade papers which I consider an integral part of the aesthetic and emotional interpretation of my images.  I print primarily in Platinum, on tissue thin Japanese Gampi paper, a paper that communicates a sense of timelessness, vulnerability and fragility.&rdquo;</p>
							<p>Maro Vandorou has exhibited in solo shows at the Titanium Art Gallery in Athens, at the International Press Center in Belgrade, at the Hillyer Art Space Gallery in Washington DC and in Portland Oregon, at the Newspace Center of Photography, at the Pacific Northwest College of Art and at Murdoch Collections Gallery. Her work [individual platinum prints and &ldquo;Persef&oacute;neia&rdquo; a limited-edition handmade book of poems and platinum prints] is in public and private collections in the United States and Europe including Stanford University, University of Washington in Seattle, Arizona State University, Oregon College of Art and Craft, Photographic Archives of the Benaki Museum, Athens, Greece.</p>
						</div>
					</div>
				</div>
			</div><!-- #content -->


<?php
	// Get footer.php
	include $_SERVER['DOCUMENT_ROOT'] . '/_inc/php/footer.php';
?>