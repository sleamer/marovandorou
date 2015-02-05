<?php

	// Setup up some variables for header.php
	$page_name = 'fl-portfolios';
	$page_title = 'Fragmented Light Portfolios';
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
					<h1><img src="/_inc/img/h1-fragmented-light.png" alt="Fragmented Light" /></h1>
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
							<img src="/_inc/img/fragment_01-4.jpg" alt="Fragmented Light" />
							<img src="/_inc/img/fragment_01-5.jpg" alt="Fragmented Light" />
						</div>
						<div class="slide">
							<img src="/_inc/img/fragment_01-6.jpg" alt="Fragmented Light" />
							<img src="/_inc/img/fragment_01-7.jpg" alt="Fragmented Light" />
							<img src="/_inc/img/fragment_01-8.jpg" alt="Fragmented Light" />
						</div>
						<div class="slide">
							<img src="/_inc/img/fragment_01-9.jpg" alt="Fragmented Light" />
						</div>
						<div class="slide">
							<img src="/_inc/img/fragment_01-10.jpg" alt="Fragmented Light" />
							<img src="/_inc/img/fragment_01-11.jpg" alt="Fragmented Light" />
						</div>
						<div class="slide">
							<img src="/_inc/img/fragment_01-12.jpg" alt="Fragmented Light" />
						</div>
						<div class="slide">
							<img src="/_inc/img/fragment_01-13.jpg" alt="Fragmented Light" />
							<img src="/_inc/img/fragment_01-14.jpg" alt="Fragmented Light" />
							<img src="/_inc/img/fragment_01-15.jpg" alt="Fragmented Light" />
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