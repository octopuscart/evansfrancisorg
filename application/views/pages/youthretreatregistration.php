<?php
$this->load->view('layout/header');
?>

<!-- Slider
                ============================================= -->
<section id="slider" class="slider-element include-header" style="background:#1E232A; height: 450px;">
    <div class="move-bg position-absolute w-100 h-100" style="top: 0; left: 0; background: url('<?php echo base_url(); ?>assets/writer/images/youthretreatregistration.jpg') center 40% no-repeat; background-size: cover;"></div>
    <div class="vertical-middle">
        <div class="container dark center">
            <h2 style="font-size: 44px;color:#333" class="mb-0 nott">Youth Retreat</h2>
        </div>
    </div>


</section>

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap pb-2" style="background-color: #1E232A;    padding: 0;">

        <div class="section dark m-0 bg-transparent" style="    padding: 0;">
            <div class="container">
                <div class="mx-auto" style="max-width: 630px">


                    <div class="clear"></div>

                    <div class="form-widget2 mt-5">

                        <div class="form-result"></div>

                        <div class="form-widget1 mt-0">

                            <div class="form-result"></div>

                            <form class="mb-0" id="template-contactform" name="template-contactform" action="#" method="post">

                                <div class="form-process">
                                    <div class="css3-spinner">
                                        <div class="css3-spinner-scaler"></div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-sm-6 form-group">
                                        <label class="nott" for="first_name">Full Name <small>*</small></label>
                                        <input type="text" id="first_name" name="full_name" value="" class="sm-form-control required" required="" />
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label class="nott" for="contact_name">Contact No.<small>*</small></label>
                                        <input type="text" id="last_name" name="contact_no" value="" class="sm-form-control required" required="" />
                                    </div>

                                    <div class="col-sm-12 form-group">
                                        <label class="nott" for="email">Email <small>*</small></label>
                                        <input type="email" id="email" name="email" value="" class="required email sm-form-control" />
                                    </div>

                                    <div class="w-100"></div>

                                    <div class="col-12 form-group">
                                        <label class="nott" for="contact_no">Church Name</label>
                                        <input type="text" id="contact_no" name="church_name" value="" required="" class="sm-form-control" />
                                    </div>

                                    <div class="col-sm-4 form-group">
                                        <label class="nott" for="age">Age</label>
                                        <input type="text" id="country" name="age" value="" class="sm-form-control required" />
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label class="nott" for="prayer_time">Gender</label>
                                        <select  name="gender" class="required email sm-form-control" >
                                            <option selected="">Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label class="nott" for="food_preference">Food Preference</label>
                                        <select  name="food_preference" class="required email sm-form-control" >
                                            <option selected="">Veg</option>
                                            <option>Non-Veg</option>
                                        </select>
                                    </div>


                                    <hr/>
                                    <div class="col-sm-8 form-group">

                                        <div class="captchaarea" >
                                            <div class="input-group divcenter">
                                                <div class="input-group-prepend">

                                                    <img src="<?php echo site_url("Pages/createCaptha/youthretreatregistration"); ?>" id="captchaimg" style="height: fit-content;"> 

                                                </div>

                                                <input type="text" id="widget-subscribe-form-email2" name="captcha" class="form-control required email" required="" placeholder="Type Here">

                                            </div>

                                            <small class="details">Can't read the image? <span  type="button" onclick="refreshCaptcha()" style="color:yellow;cursor:pointer;">click here</span> to refresh</small>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 form-group"></div>
                                    <div class="col-12 form-group">
                                        <button class="button button-rounded button-large m-0" type="submit" id="template-contactform-submit" name="submit" value="submit">Submit</button>
                                    </div>
                                </div>


                            </form>
                        </div>
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
            title: "<?php echo $message["title"]; ?>",
            type: "<?php echo $message["type"]; ?>",
            html: "<?php echo $message["message"]; ?>",
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