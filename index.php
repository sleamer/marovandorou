<?php

	// Setup up some variables for header.php
	$page_name = 'home';
	$page_title = 'Works on Paper';
	$page_description = '';
	$page_keywords = '';

	// Get header.php
	include $_SERVER['DOCUMENT_ROOT'] . '/_inc/php/header.php';

?>

<script type="text/javascript">
	$(window).load(function() {
			$('.flexslider').flexslider({
					animation:'fade',
					animationLoop:false,
					controlNav:false,
					directionNav:false,
					smoothHeight:true,
					selector:'div.slidewrap > div.slide'
			});
	});
</script>

			<div id="content">
				<div class="container center">
					<h1><img src="/_inc/img/h1-works-on-paper.png" alt="Works on Paper" /></h1>
				</div>
				<div id="slideshow" class="flexslider">
					<div class="slidewrap">
						<div class="slide">
							<img src="/_inc/img/fragment_01-1.jpg" alt="Fragmented Light" />
						</div>
						<div class="slide">
							<img src="/_inc/img/fragment_01-2.jpg" alt="Fragmented Light" />
						</div>
						<div class="slide">
							<img src="/_inc/img/fragment_01-3.jpg" alt="Fragmented Light" />
						</div>
						<div class="slide">
							<img src="/_inc/img/fragment_01-9.jpg" alt="Fragmented Light" />
						</div>
						<div class="slide">
							<img src="/_inc/img/fragment_01-12.jpg" alt="Fragmented Light" />
						</div>
						<div class="slide">
							<img src="/_inc/img/fragment_01-16.jpg" alt="Fragmented Light" />
						</div>
					</div>
				</div><!-- #slideshow -->
			</div><!-- #content -->

<?php
	// Get footer.php
	include $_SERVER['DOCUMENT_ROOT'] . '/_inc/php/footer.php';
?>