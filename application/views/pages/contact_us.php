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

                    <div class="form-widget2 mt-5">

                        <div class="form-result"></div>

                        <form class="mb-0"  action="#" method="post">

                            <div class="form-process">
                                <div class="css3-spinner">
                                    <div class="css3-spinner-scaler"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label class="nott" for="name">Name <small>*</small></label>
                                    <input type="text" id="name" name="name" value="" class="sm-form-control required" required="" />
                                </div>

                                <div class="col-sm-6 form-group">
                                    <label class="nott" for="email">Email <small>*</small></label>
                                    <input type="email" id="email" name="email" value="" class="required email sm-form-control" required="" />
                                </div>

                                <div class="w-100"></div>

                                <div class="col-12 form-group">
                                    <label class="nott" for="contact_no">Contact No.</label>
                                    <input type="text" id="contact_no" name="contact_no" value="" required="" class="sm-form-control" />
                                </div>
                                <div class="col-12 form-group">
                                    <label class="nott" for="subject">Subject</label>
                                    <input type="text" id="subject" name="subject" value="" class="sm-form-control" required="" />
                                </div>
                                <div class="col-12 form-group">
                                    <label class="nott" for="message">Message <small>*</small></label>
                                    <textarea class="required sm-form-control" id="message" name="message" rows="6" cols="30"></textarea>
                                </div>

                               
                                <div class="col-sm-6 form-group">

                                    <div class="captchaarea" >
                                        <div class="input-group divcenter">
                                            <div class="input-group-prepend">

                                                <img src="<?php echo site_url("Pages/createCaptha/contact_us"); ?>" id="captchaimg" style="height: fit-content;"> 

                                            </div>

                                            <input type="text" id="widget-subscribe-form-email2" name="captcha" class="form-control required email" required="" placeholder="Type Here">

                                        </div>

                                        <small class="details">Can't read the image? <span  type="button" onclick="refreshCaptcha()" style="color:yellow;cursor:pointer;">click here</span> to refresh</small>
                                    </div>
                                </div>


                                <div class="col-sm-6 form-group">
                                    <button class="button button-rounded button-large m-0 "  style="float: right" type="submit" id="template-contactform-submit" name="submit" value="submit">Send Message</button>
                                </div>
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section><!-- #content end -->

<?php
if ($message["title"]) {
    ?>
    <script>
        swal({
            title: "<?php echo $message["title"];?>",
            type: "<?php echo $message["type"];?>",
            html: "<?php echo $message["message"];?>",
            timer: 5000,
        }).then(
//                    function () {
    //                        window.location = "<?php echo site_url("contact-us"); ?>";
    //                    },
    //                    function (dismiss) {
    //                        window.location = "<?php echo site_url("contact-us"); ?>";
    //                    }
        )
    </script>
    <?php
}
?>

<?php
$this->load->view('layout/footer');
?>