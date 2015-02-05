<?php

	// Setup up some variables for header.php
	$page_name = 'vt-videos';
	$page_title = 'Vertical Time Videos';
	$page_description = '';
	$page_keywords = '';

	// Get header.php
	include $_SERVER['DOCUMENT_ROOT'] . '/_inc/php/header.php';

?>

			<div id="content">
				<div class="container">
					<h1><img src="/_inc/img/h1-vertical-time.png" alt="Vertical Time" /></h1>
					<div class="col w400 center">
						<p><span class="red">Vertical Time</span>: main installation of fragile platinum prints in a circle, hanging with silk threads from the gallery ceiling. Narrative in English.</p>
						<div class="video">
							<iframe src="//player.vimeo.com/video/29296607" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						</div>
						<div class="page-nav">
							<a class="next" href="/vertical-time/videos/01/">Next Video</a>
						</div>
					</div>
				</div>
			</div><!-- #content -->


<?php
	// Get footer.php
	include $_SERVER['DOCUMENT_ROOT'] . '/_inc/php/footer.php';
?>