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
						<p><span class="red">Persef&oacute;neia</span>: is a video installation of images projected on silk panels within echoes of the spoken words of poems.</p>
						<div class="video">
							<iframe src="//player.vimeo.com/video/29300518" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						</div>
						<div class="page-nav">
							<a class="prev" href="/vertical-time/videos/01/">Previous Video</a>
						</div>
					</div>
				</div>
			</div><!-- #content -->


<?php
	// Get footer.php
	include $_SERVER['DOCUMENT_ROOT'] . '/_inc/php/footer.php';
?>