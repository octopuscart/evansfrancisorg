<?php
$this->load->view('layout/header');
?>

<!-- Slider
                ============================================= -->
<section id="slider" class="slider-element include-header" style="background:#1E232A; height: 450px;">
    <div class="move-bg position-absolute w-100 h-100" style="top: 0; left: 0; background: url('<?php echo base_url(); ?>assets/writer/images/contact.jpg') center 40% no-repeat; background-size: cover;"></div>
    <div class="vertical-middle">
        <div class="container dark center">
            <h2 style="font-size: 44px;" class="mb-0 nott">Contact Us</h2>
            <span class="lead">Get in Touch with Us</span>
        </div>
    </div>

    <!-- Slider Video Overlay -->
    <div class="video-wrap" style="height: 450px; position: absolute; left: 0; bottom: 0;">
        <div class="video-overlay" style="background: -moz-linear-gradient(top,  rgba(30,35,42,0) 21%, rgba(30,35,42,0) 66%, rgba(30,35,42,1) 100%); background: -webkit-linear-gradient(top,  rgba(30,35,42,0) 21%,rgba(30,35,42,0) 66%,rgba(30,35,42,1) 100%); background: linear-gradient(to bottom,  rgba(30,35,42,0) 21%,rgba(30,35,42,0) 66%,rgba(30,35,42,1) 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#001e232a', endColorstr='#1e232a',GradientType=0 );">
        </div>
    </div>
</section>

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap pb-2" style="background-color: #1E232A;">

        <div class="section dark m-0 bg-transparent">
            <div class="container">
                <div class="mx-auto" style="max-width: 630px">
                    <div class="center"><i class="icon-phone-sign mb-3 i-plain i-large mx-auto"></i></div>
                    <p class="lead center">We’re here to answer any questions you may have. Reach out to us and we’ll respond as soon as we can.</p><br>
                    <p class="lead center"><b>Evans Francis</b><br/>
                        Nagpur, Maharashtra, India
                        <br>contact@evansfrancis.org <br/> +91-9960877313</p>

                    <div class="clear"></div>

                    <div class="form-widget mt-5">

                        <div class="form-result"></div>

                        <form class="mb-0" id="template-contactform" name="template-contactform" action="#" method="post">

                            <div class="form-process">
                                <div class="css3-spinner">
                                    <div class="css3-spinner-scaler"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label class="nott" for="template-contactform-name">Name <small>*</small></label>
                                    <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
                                </div>

                                <div class="col-sm-6 form-group">
                                    <label class="nott" for="template-contactform-email">Email <small>*</small></label>
                                    <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
                                </div>

                                <div class="w-100"></div>

                                <div class="col-12 form-group">
                                    <label class="nott" for="template-contactform-phone">Phone</label>
                                    <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
                                </div>
                                <div class="col-12 form-group">
                                    <label class="nott" for="template-contactform-phone">Subject</label>
                                    <input type="text" id="template-contactform-subject" name="template-contactform-phone" value="" class="sm-form-control" />
                                </div>
                                <div class="col-12 form-group">
                                    <label class="nott" for="template-contactform-message">Message <small>*</small></label>
                                    <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                                </div>

                                <div class="col-12 form-group d-none">
                                    <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                                </div>

                                <div class="col-12 form-group">
                                    <button class="button button-rounded button-large m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
                                </div>
                            </div>

                            <input type="hidden" name="prefix" value="template-contactform-">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- #content end -->


<?php
$this->load->view('layout/footer');
?>