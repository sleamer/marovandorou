<?php

	// Setup up some variables for header.php
	$page_name = 'vt-portfolios';
	$page_title = 'Vertical Time Portfolios';
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
							<img src="/_inc/img/VT00.jpg" alt="Vertical Time" />
						</div>
						<div class="slide">
							<img src="/_inc/img/VT01.jpg" alt="Vertical Time" />
							<img src="/_inc/img/VT02.jpg" alt="Vertical Time" />
						</div>
						<div class="slide">
							<img src="/_inc/img/VT04.jpg" alt="Vertical Time" />
							<img src="/_inc/img/VT05.jpg" alt="Vertical Time" />
						</div>
						<div class="slide">
							<img src="/_inc/img/VT06.jpg" alt="Vertical Time" />
							<img src="/_inc/img/VT07.jpg" alt="Vertical Time" />
						</div>
						<div class="slide">
							<img src="/_inc/img/VT09.jpg" alt="Vertical Time" />
							<img src="/_inc/img/VT10.jpg" alt="Vertical Time" />
						</div>
						<div class="slide">
							<img src="/_inc/img/VT11.jpg" alt="Vertical Time" />
						</div>
						<div class="slide">
							<img src="/_inc/img/VT14.jpg" alt="Vertical Time" />
						</div>
						<div class="slide">
							<img src="/_inc/img/VT16.jpg" alt="Vertical Time" />
							<img src="/_inc/img/VT17.jpg" alt="Vertical Time" />
						</div>
						<div class="slide">
							<img src="/_inc/img/VT20.jpg" alt="Vertical Time" />
						</div>
						<div class="slide">
							<img src="/_inc/img/VT19.jpg" alt="Vertical Time" />
						</div>
					</div>
				</div><!-- #slideshow -->
			</div><!-- #content -->

<?php
	// Get footer.php
	include $_SERVER['DOCUMENT_ROOT'] . '/_inc/php/footer.php';
?>