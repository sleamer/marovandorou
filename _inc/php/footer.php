<?php
// Do some stuff php to echo "parent" class for parent pages
?>

			<div id="nav">
				<div class="container">
					<ul>
						<li <?php if($page_name == 'fragmented-light') echo 'class="on"'; ?>><a href="/fragmented-light/">fragmented light</a>
							<ul>
								<li <?php if($page_name == 'fl-portfolios') echo 'class="on"'; ?>><a href="/fragmented-light/portfolios/">portfolios</a></li>
								<li <?php if($page_name == 'fl-installations') echo 'class="on"'; ?>><a href="/fragmented-light/installations/">installations</a></li>
								<li <?php if($page_name == 'fl-essays') echo 'class="on"'; ?>><a href="/fragmented-light/essays/">essays</a></li>
								<li <?php if($page_name == 'fl-videos') echo 'class="on"'; ?>><a href="/fragmented-light/video/">video</a></li>
								<li <?php if($page_name == 'fl-edition') echo 'class="on"'; ?>><a href="/fragmented-light/edition/">edition</a></li>
							</ul>
						</li>
						<li <?php if($page_name == 'vertical-time') echo 'class="on"'; ?>><a href="/vertical-time/">vertical time</a>
							<ul>
								<li <?php if($page_name == 'vt-portfolios') echo 'class="on"'; ?>><a href="/vertical-time/portfolios/">portfolios</a></li>
								<li <?php if($page_name == 'vt-installations') echo 'class="on"'; ?>><a href="/vertical-time/installations/">installations</a></li>
								<li <?php if($page_name == 'vt-essays') echo 'class="on"'; ?>><a href="/vertical-time/essays/">essays</a></li>
								<li <?php if($page_name == 'vt-videos') echo 'class="on"'; ?>><a href="/vertical-time/videos/">videos</a></li>
								<li <?php if($page_name == 'vt-edition') echo 'class="on"'; ?>><a href="/vertical-time/edition/">edition</a></li>
							</ul>
						</li>
						<li <?php if($page_name == 'persefoneia-book') echo 'class="on"'; ?>><a href="/persefoneia-book/">persef&oacute;neia: book</a>
							<ul>
								<li <?php if($page_name == 'pb-installations') echo 'class="on"'; ?>><a href="/persefoneia-book/installations/">images</a></li>
								<li <?php if($page_name == 'pb-videos') echo 'class="on"'; ?>><a href="/persefoneia-book/video/">video</a></li>
								<li <?php if($page_name == 'pb-edition') echo 'class="on"'; ?>><a href="/persefoneia-book/edition/">edition</a></li>
							</ul>
						</li>
						<li <?php if($page_name == 'about') echo 'class="on"'; ?>><a href="/about/">about</a></li>
						<li <?php if($page_name == 'contact') echo 'class="on"'; ?>><a href="/contact/">contact</a></li>
					</ul>
					<span class="mobile-toggle"></span>
				</div>
			</div><!-- #nav -->
			<div id="footer">
				<div class="container">
					<p>Copyright &copy; Maro Vandorou. All Rights Reserved. </p>
				</div>
			</div><!-- #footer -->
		</div><!-- #page -->
	</body>
</html>