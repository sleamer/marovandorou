<?php

	// Setup up some variables for header.php
	$page_name = 'fl-installations';
	$page_title = 'Fragmented Light Installations';
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
							<img src="/_inc/img/Titanium_1.jpg" alt="Fragmented Light" />
							<p class="caption">Spring 2008 ~ Titanium Yiayiannos Gallery ~ Athens, Greece</p>
						</div>
						<div class="slide">
							<img src="/_inc/img/Titanium_2.jpg" alt="Fragmented Light" />
							<p class="caption">Spring 2008 ~ Titanium Yiayiannos Gallery ~ Athens, Greece</p>
						</div>
						<div class="slide">
							<img src="/_inc/img/Titanium_3.jpg" alt="Fragmented Light" />
							<p class="caption">Spring 2008 ~ Titanium Yiayiannos Gallery ~ Athens, Greece</p>
						</div>
						<div class="slide">
							<img src="/_inc/img/Titanium_4.jpg" alt="Fragmented Light" />
							<p class="caption">Spring 2008 ~ Titanium Yiayiannos Gallery ~ Athens, Greece</p>
						</div>
						<div class="slide">
							<img src="/_inc/img/Titanium_5.jpg" alt="Fragmented Light" />
							<p class="caption">Spring 2008 ~ Titanium Yiayiannos Gallery ~ Athens, Greece</p>
						</div>
						<div class="slide">
							<img src="/_inc/img/Titanium_6.jpg" alt="Fragmented Light" />
							<p class="caption">Spring 2008 ~ Titanium Yiayiannos Gallery ~ Athens, Greece</p>
						</div>
						<div class="slide">
							<img src="/_inc/img/Hillyer_01.jpg" alt="Fragmented Light" />
							<p class="caption">Fall 2008 ~ Hillyer Art Space ~ Washington, D.C.</p>
						</div>
						<div class="slide">
							<img src="/_inc/img/Hillyer_02.jpg" alt="Fragmented Light" />
							<p class="caption">Fall 2008 ~ Hillyer Art Space ~ Washington, D.C.</p>
						</div>
						<div class="slide">
							<img src="/_inc/img/Hillyer_03.jpg" alt="Fragmented Light" />
							<p class="caption">Fall 2008 ~ Hillyer Art Space ~ Washington, D.C.</p>
						</div>
						<div class="slide">
							<img src="/_inc/img/Hillyer_04.jpg" alt="Fragmented Light" />
							<p class="caption">Fall 2008 ~ Hillyer Art Space ~ Washington, D.C.</p>
						</div>
						<div class="slide">
							<img src="/_inc/img/Hillyer_05.jpg" alt="Fragmented Light" />
							<p class="caption">Fall 2008 ~ Hillyer Art Space ~ Washington, D.C.</p>
						</div>

						<div class="slide">
							<img src="/_inc/img/PNCA_1.jpg" alt="Fragmented Light" />
							<p class="caption">Spring 2009 ~ Pacific Northwest College of Art ~ Portland, Oregon</p>
						</div>
						<div class="slide">
							<img src="/_inc/img/PNCA_2.jpg" alt="Fragmented Light" />
							<p class="caption">Spring 2009 ~ Pacific Northwest College of Art ~ Portland, Oregon</p>
						</div>


					</div>
				</div><!-- #slideshow -->
			</div><!-- #content -->

<?php
	// Get footer.php
	include $_SERVER['DOCUMENT_ROOT'] . '/_inc/php/footer.php';
?>