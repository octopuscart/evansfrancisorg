<?php
$this->load->view('layout/header');
?>

<!-- Slider
                ============================================= -->
<section id="slider" class="slider-element include-header" style="background:#1E232A; height: 800px;">
    <div class="move-bg position-absolute w-100 h-100" style="top: 0; left: 0;background: url('<?php echo base_url(); ?>assets/writer/images/hero/hero.jpg') center center no-repeat; background-size: cover;"></div>
    <div class="vertical-middle ignore-header">
        <div class="container dark py-5">
            <div class="row">
                <div class="col-lg-6 offset-lg-1 col-md-8" data-lightbox="gallery">
                    <a href="<?php echo base_url(); ?>assets/writer/images/hero/slider-book-lg.jpg" data-lightbox="gallery-item" class="slider-book-img" data-animate="fadeInUp"><img src="<?php echo base_url(); ?>assets/writer/images/hero/slider-book.png" alt="Image"></a>
                    <a href="<?php echo base_url(); ?>assets/writer/images/hero/slider-book2-lg.jpg" data-lightbox="gallery-item" class="slider-book-img" data-animate="fadeInUp" data-delay="300"><img src="<?php echo base_url(); ?>assets/writer/images/hero/slider-book2.png" alt="Image"></a>
                    <div class="emphasis-title bottommargin-sm">
                        <h1 class="400" data-animate="fadeInUp" data-delay="600">An evangelist, author, teacher and lyricist. <br><span></span></h1>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Slider Video Overlay -->
    <div class="video-wrap" style="height: 800px; position: absolute; left: 0; bottom: 0;">
        <div class="video-overlay" style="background: -moz-linear-gradient(top,  rgba(30,35,42,0) 21%, rgba(30,35,42,0) 66%, rgba(30,35,42,1) 100%); background: -webkit-linear-gradient(top,  rgba(30,35,42,0) 21%,rgba(30,35,42,0) 66%,rgba(30,35,42,1) 100%); background: linear-gradient(to bottom,  rgba(30,35,42,0) 21%,rgba(30,35,42,0) 66%,rgba(30,35,42,1) 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#001e232a', endColorstr='#1e232a',GradientType=0 );">
        </div>
    </div>
</section>

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap pb-0" style="background-color: #1E232A;">

        <!-- Latest All Books
        ============================================= -->
        <div class="section p-0 m-0" style="background: url('<?php echo base_url(); ?>assets/writer/images/section/bg1.jpg') center center no-repeat; background-size: cover;">

            <div class="container clearfix">

                <div class="row clearfix">
                    <div class="col-lg-5 offset-lg-1">
                        <img src="<?php echo base_url(); ?>assets/writer/images/section/2.png" alt="Evans Neha" style="margin-top: 10px;">
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <h3 class="color fw-normal" style="font-size: 36px;">About  Evans</h3>
                        <p class="dark lead">
                            An evangelist, author, teacher and lyricist with uncompromising faithfulness to the Holy Scriptures, Evans brings clarity to the message needed for the Body of Christ to uncover the unseen riches in God's word.
                        </p>
                        <a href="#" class="button button-large text-capitalize button-rounded">Read More</a>
                    </div>
                </div>

                <div class="clear topmargin-sm bottommargin-lg"></div>



            </div>

            <div class="dark subscribe-widget center topmargin-sm" style="background-color: rgba(0,0,0,.25); padding: 80px 0;">
                <div class="container clearfix">
                    <div class="mx-auto" style="max-width: 600px;">
                        <div class="heading-block center border-bottom-0">
                            <h3 class="fw-normal nott" style="font-size: 40px;">Stay Tuned for Updates</h3>
                            <span class="font-primary" style="font-size: 17px; color: #666;">I send thoughtful and caring emails</span>
                        </div>
                        <div class="widget-subscribe-form-result"></div>
                        <form id="widget-subscribe-form" action="http://themes.semicolonweb.com/html/canvas/include/subscribe.php" method="post" class="mb-0">
                            <div class="input-group mx-auto">
                                <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control form-control-lg not-dark required email" placeholder="Enter your Email" style="border-top-left-radius: 23px; border-bottom-left-radius: 23px;">
                                <button class="btn btn-lg bg-color" type="submit" style="border-top-right-radius: 23px; border-bottom-right-radius: 23px;">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="video-wrap" style=" height: auto; position: absolute; left: 0; bottom: 0; z-index:1;">
                <div class="video-overlay" style="background: -moz-linear-gradient(top,  rgba(30,35,42,1) 21%,, rgba(30,35,42,0) 100%); background: -webkit-linear-gradient(top,  rgba(30,35,42,1) 21%,rgba(30,35,42,0) 100%); background: linear-gradient(to bottom,  rgba(30,35,42,1) 21%,rgba(30,35,42,0) 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#001e232a', endColorstr='#1e232a',GradientType=0 );">
                </div>
            </div>

        </div>

        <!-- Testimonials
        ============================================= -->
        <div id="section-testimonial" class="section m-0 center" style="background: url('<?php echo base_url(); ?>assets/writer/images/section/bg2.jpg') center center no-repeat; background-size: cover; padding: 100px 0;">
            <div class="container clearfix">

           
            </div>

            <?php
            $quotes = array(
                "When the devil attacks any area of your life, know that that's the area God wants to use you mightily for his glory.",
                "Every wife will submit to her husband if he has a character of Christ in Him. It is time we stop blaming wives for everything and start telling the truth.",
                "A church that teaches storing treasures on earth can never teach storing treasures in heaven.",
                "Those who give first priority to God; they never lack his provisions."
            );
            ?>

            <div class="fslider testimonial testimonial-full writer-feedback bg-transparent border-0 shadow-none" data-animation="fade" data-arrows="false" style="max-width: none;">
                <div class="flexslider">
                    <div class="slider-wrap mx-auto" style="max-width: 650px;">
                        <?php
                        foreach ($quotes as $key => $value) {
                            ?>
                            <div class="slide">

                                <div class="testi-content">
                                    <p style="    font-size: 34px;font-style:initial;">
                                        <?php echo $value;?>
                                    </p>
                                
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section><!-- #content end -->

<?php
$this->load->view('layout/footer');
?>