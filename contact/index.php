<?php

	// Setup up some variables for header.php
	$page_name = 'contact';
	$page_title = 'Contact';
	$page_description = '';
	$page_keywords = '';

	// Get header.php
	include $_SERVER['DOCUMENT_ROOT'] . '/_inc/php/header.php';

?>

			<div id="content">
				<div class="container">
					<h1><img src="/_inc/img/h1-contact.png" alt="Contact" /></h1>
					<div class="col w400 center">
						<div class="strip">
							<img src="/_inc/img/60-fragment_01.jpg" alt="Fragmented Light" />
							<img src="/_inc/img/60-fragment_02.jpg" alt="Fragmented Light" />
							<img src="/_inc/img/60-fragment_08.jpg" alt="Fragmented Light" />
							<img src="/_inc/img/60-fragment_09.jpg" alt="Fragmented Light" />
							<img src="/_inc/img/60-fragment_11.jpg" alt="Fragmented Light" />
						</div>
					</div>
					<div class="col w400 center">
						<p>For further information:</p>
						<p>In the US, please contact the artist, Maro Vandorou<br />email: <a href="mailto:info@marovandorou.com">info@marovandorou.com</a><br />phone: +1.415.684.3930</p>
						<p>In Europe, please contact Titanium Yiayiannos Gallery<br />email: <a href="mailto:info@titaniumartgallery.com">info@titaniumartgallery.com</a><br />phone: +30.210.72.97.644</p>
					</div>
				</div>
			</div><!-- #content -->

<?php
	// Get footer.php
	include $_SERVER['DOCUMENT_ROOT'] . '/_inc/php/footer.php';
?>