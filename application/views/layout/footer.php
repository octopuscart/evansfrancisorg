<!-- Footer
		============================================= -->
		<footer id="footer" style="background: url('<?php echo base_url(); ?>assets/writer/images/section/bg1.jpg') center center no-repeat; background-size: cover;" class="dark border-0">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix" style="z-index: 2">
					<div class="row clearfix">

						<div class="col-lg-5">

							<div class="widget clearfix">
								<div class="row clearfix">
									<div class="col-lg-8 clearfix" style="color: #888;">
										<img src="<?php echo base_url(); ?>assets/writer/images/logo.png" alt="Evans Logo" style="display: block;" class="bottommargin-sm">
										<p>An evangelist, author, teacher and lyricist with uncompromising faithfulness to the Holy Scriptures.</p>

										<a href="#" class="social-icon si-small si-borderless si-colored si-rounded si-facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>

										<a href="#" class="social-icon si-small si-borderless si-colored si-rounded si-twitter">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>

										<a href="#" class="social-icon si-small si-borderless si-colored si-rounded si-gplus">
											<i class="icon-gplus"></i>
											<i class="icon-gplus"></i>
										</a>

										<a href="#" class="social-icon si-small si-borderless si-colored si-rounded si-pinterest">
											<i class="icon-pinterest"></i>
											<i class="icon-pinterest"></i>
										</a>

										<a href="#" class="social-icon si-small si-borderless si-colored si-rounded si-vimeo">
											<i class="icon-vimeo"></i>
											<i class="icon-vimeo"></i>
										</a>

									</div>
								</div>
							</div>

						</div>

						<div class="col-lg-7">
							<div class="row clearfix">

								<div class="col-lg-4">
									<div class="widget widget_links app_landing_widget_link clearfix">
										<h4>In News</h4>

										<ul>
											<li><a href="https://codex.wordpress.org/">Documentation</a></li>
											<li><a href="https://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
											<li><a href="https://wordpress.org/extend/plugins/">Plugins</a></li>
											<li><a href="https://wordpress.org/support/">Support Forums</a></li>
											<li><a href="https://wordpress.org/extend/themes/">Themes</a></li>
										</ul>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="widget widget_links app_landing_widget_link clearfix">
										<h4>About Us</h4>

										<ul>
											<li><a href="https://codex.wordpress.org/">Documentation</a></li>
											<li><a href="https://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
											<li><a href="https://wordpress.org/extend/plugins/">Plugins</a></li>
											<li><a href="https://wordpress.org/support/">Support Forums</a></li>
											<li><a href="https://wordpress.org/extend/themes/">Themes</a></li>
										</ul>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="widget widget_links app_landing_widget_link clearfix">
										<h4>Support</h4>

										<ul>
											<li><a href="https://codex.wordpress.org/">Documentation</a></li>
											<li><a href="https://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
											<li><a href="https://wordpress.org/extend/plugins/">Plugins</a></li>
											<li><a href="https://wordpress.org/support/">Support Forums</a></li>
											<li><a href="https://wordpress.org/extend/themes/">Themes</a></li>
										</ul>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="container">

					<div class="w-100" style="z-index: 3">
						Copyrights &copy; 2020 All Rights Reserved by Canvas Inc.<br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

				</div>
			</div><!-- #copyrights end -->

			<div class="video-wrap" style="height: 100%;position: absolute; left: 0; top: 0; z-index: 1;">
				<div class="video-overlay" style="background: -moz-linear-gradient(top,  rgba(30,35,42,1) 21%,, rgba(30,35,42,0) 100%); background: -webkit-linear-gradient(top,  rgba(30,35,42,1) 21%,rgba(30,35,42,0) 100%); background: linear-gradient(to bottom,  rgba(30,35,42,1) 21%,rgba(30,35,42,0) 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#001e232a', endColorstr='#1e232a',GradientType=0 );">
				</div>
			</div>

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugins.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/writer/js/hover3d.js" ></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="<?php echo base_url(); ?>assets/js/functions.js"></script>

	<script>

		jQuery(document).ready( function(){

			if( !jQuery('body').hasClass('device-touch') ) {

				var lFollowX = 0,
					lFollowY = 0,
					x = 0,
					y = 0,
					friction = 1 / 30;

				function moveBackground() {
					x += (lFollowX - x) * friction;
					y += (lFollowY - y) * friction;

					translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

					jQuery('.move-bg').css({
						'-webit-transform': translate,
						'-moz-transform': translate,
						'transform': translate
					});

					window.requestAnimationFrame(moveBackground);
				}

				jQuery(window).on('mousemove click', function(e) {

					var lMouseX = Math.max(-100, Math.min(100, jQuery(window).width() / 2 - e.clientX));
					var lMouseY = Math.max(-100, Math.min(100, jQuery(window).height() / 2 - e.clientY));
					lFollowX = (10 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
					lFollowY = (10 * lMouseY) / 100;

				});

				moveBackground();

				jQuery(".book-wrap").hover3d({
					selector: ".book-card",
					shine: false,
				});

			}

		});

	</script>

</body>

</html>