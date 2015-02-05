<?php

	// Setup up some variables for header.php
	$page_name = 'vt-installations';
	$page_title = 'Vertical Time Installations';
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
					<h1><img src="/_inc/img/h1-vertical-time.png" alt="Vertical Time" /></h1>
				</div>
				<div id="slideshow" class="flexslider">
					<div class="slidewrap">
						<div class="slide">
							<img src="/_inc/img/IVT01.jpg" alt="Vertical Time" />
							<p class="caption">Fall 2010 ~ Murdoch Collections ~ Portland, Oregon</p>
						</div>
						<div class="slide">
							<img src="/_inc/img/IVT02.jpg" alt="Vertical Time" />
							<p class="caption">Fall 2010 ~ Murdoch Collections ~ Portland, Oregon</p>
						</div>
						<div class="slide">
							<img src="/_inc/img/IVT03.jpg" alt="Vertical Time" />
							<p class="caption">Fall 2010 ~ Murdoch Collections ~ Portland, Oregon</p>
						</div>
						<div class="slide">
							<img src="/_inc/img/IVT04.jpg" alt="Vertical Time" />
							<p class="caption">Fall 2010 ~ Murdoch Collections ~ Portland, Oregon</p>
						</div>
						<div class="slide">
							<img src="/_inc/img/IVT07.jpg" alt="Vertical Time" />
							<img src="/_inc/img/IVT08.jpg" alt="Vertical Time" />
							<p class="caption">Fall 2010 ~ Murdoch Collections ~ Portland, Oregon</p>
						</div>

					</div>
				</div><!-- #slideshow -->
			</div><!-- #content -->

<?php
	// Get footer.php
	include $_SERVER['DOCUMENT_ROOT'] . '/_inc/php/footer.php';
?>