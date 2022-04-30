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

                                <a href="https://www.facebook.com/evansfrancis831" target="_blank" class="social-icon si-small si-borderless si-colored si-rounded si-facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                &nbsp;
                                <a href="https://www.instagram.com/evansfrancis831" target="_blank" class="social-icon si-small si-borderless si-colored si-rounded si-vimeo">
                                    <i class="icon-instagram"></i>
                                    <i class="icon-instagram"></i>
                                </a>
                                &nbsp;
                                <a href="https://www.twitter.com/evansfrancis831"  target="_blank" class="social-icon si-small si-borderless si-colored si-rounded si-twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>
                                &nbsp;
                                <a href="https://www.youtube.com/user/evans240288" target="_blank" class="social-icon si-small si-borderless si-colored si-rounded si-gplus">
                                    <i class="icon-youtube"></i>
                                    <i class="icon-youtube"></i>
                                </a>





                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-7">
                    <div class="row clearfix">


                        <div class="col-lg-6">
                            <div class="widget widget_links app_landing_widget_link clearfix">
                                <h4>About Us</h4>

                                <ul>
                                    <li class="menu-item"><a class="menu-link" href="<?php echo site_url("/") ?>"><div>Home</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="<?php echo site_url("about-us"); ?>"><div>About</div></a></li>
                                    <li class="menu-item"><a class="menu-link" target="_blank" href="https://www.evansfrancisbooks.com/"><div>Books</div></a></li>
                                    <li class="menu-item"><a class="menu-link" target="_blank" href="https://christianappdevelopers.com/"><div>Apps</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="<?php echo site_url("blog"); ?>"><div>Blog</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="<?php echo site_url("eyr"); ?>"><div>Encounter Youth Retreat</div></a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="widget widget_links app_landing_widget_link clearfix">
                                <h4>Support</h4>

                                <ul>
                                    <li class="menu-item"><a class="menu-link" href="<?php echo site_url("pillar-of-fire"); ?>"><div>Pillar of Fire </div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="<?php echo site_url("pillar-of-cloud"); ?>"><div>Pillar of Cloud </div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="<?php echo site_url("love-offering"); ?>"><div>Love Offering </div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="<?php echo site_url("invite"); ?>"><div>Invite</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="<?php echo site_url("contact-us"); ?>"><div>Contact Us</div></a></li>

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
                Copyrights &copy; 2020 All Rights Reserved by Evans Francis.<br>
            </div>

        </div>
    </div><!-- #copyrights end -->

    <div class="video-wrap" style="height: 100%;position: absolute; left: 0; top: 0; z-index: 1;">
        <div class="video-overlay" style="background: -moz-linear-gradient(top,  rgba(30,35,42,1) 21%, rgba(30,35,42,0) 100%); background: -webkit-linear-gradient(top,  rgba(30,35,42,1) 21%,rgba(30,35,42,0) 100%); background: linear-gradient(to bottom,  rgba(30,35,42,1) 21%,rgba(30,35,42,0) 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#001e232a', endColorstr='#1e232a',GradientType=0 );">
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

<style>
    #captchaimg{
        height: fit-content;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }
</style>

<script>
    function refreshCaptcha()
    {
        var img = document.images['captchaimg'];
        img.src = img.src;
    }
</script>

<script>

    jQuery(document).ready(function () {

        if (!jQuery('body').hasClass('device-touch')) {

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

            jQuery(window).on('mousemove click', function (e) {

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