<?php

	// Setup up some variables for header.php
	$page_name = 'pb-installations';
	$page_title = 'Persef&oacute;neia: Book Installations';
	$page_description = '';
	$page_keywords = '';

	// Get header.php
	include $_SERVER['DOCUMENT_ROOT'] . '/_inc/php/header.php';

?>

<script type="text/javascript">
	$(window).load(function() {
			$('.flexslider').flexslider({
					animation:'slide',
					animationLoop:false,
					controlNav:false,
					smoothHeight:true,
					slideshow:false,
					selector:'div.slidewrap > div.slide'
			});
	});
</script>

			<div id="content">
				<div class="container">
					<h1><img src="/_inc/img/h1-persefoneia-book.png" alt="Persef&oacute;neia: Book" /></h1>
				</div>
				<div id="slideshow" class="flexslider">
					<div class="slidewrap">
						<div class="slide">
							<img src="/_inc/img/Book_1.jpg" alt="Persef&oacute;neia: Book" />
						</div>
						<div class="slide">
							<img src="/_inc/img/Book_2.jpg" alt="Persef&oacute;neia: Book" />
						</div>
						<div class="slide">
							<img src="/_inc/img/Book_3.jpg" alt="Persef&oacute;neia: Book" />
						</div>
						<div class="slide">
							<img src="/_inc/img/Book_4.jpg" alt="Persef&oacute;neia: Book" />
						</div>
						<div class="slide">
							<img src="/_inc/img/Book_5.jpg" alt="Persef&oacute;neia: Book" />
						</div>
						<div class="slide">
							<img src="/_inc/img/Book_6.jpg" alt="Persef&oacute;neia: Book" />
						</div>
					</div>
				</div><!-- #slideshow -->
			</div><!-- #content -->

<?php
	// Get footer.php
	include $_SERVER['DOCUMENT_ROOT'] . '/_inc/php/footer.php';
?>