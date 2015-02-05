<?php

	// Setup up some variables for header.php
	$page_name = 'fl-videos';
	$page_title = 'Fragmented Light Videos';
	$page_description = '';
	$page_keywords = '';

	// Get header.php
	include $_SERVER['DOCUMENT_ROOT'] . '/_inc/php/header.php';

?>

			<div id="content">
				<div class="container">
					<h1><img src="/_inc/img/h1-fragmented-light.png" alt="Fragmented Light" /></h1>
					<div class="col w400 center">
						<p><span class="red">Washi Paper</span>: papermaking in the Shimane prefecture by the Sekishu-Banshi craftsmen's association: production process</p>
						<div class="video">
							<iframe src="//player.vimeo.com/video/74545067" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div><!-- #content -->


<?php
	// Get footer.php
	include $_SERVER['DOCUMENT_ROOT'] . '/_inc/php/footer.php';
?>