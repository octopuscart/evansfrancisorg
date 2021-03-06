<?php
$this->load->view('layout/header');
?>

<!-- Slider
                ============================================= -->
<section id="slider" class="slider-element include-header" style="background:#1E232A; height: 450px;">
    <div class="move-bg position-absolute w-100 h-100" style="top: 0; left: 0; background: url('<?php echo base_url(); ?>assets/writer/images/invite.jpg') center 40% no-repeat; background-size: cover;"></div>
    <div class="vertical-middle">
        <div class="container dark center">
            <h2 style="font-size: 44px;" class="mb-0 nott">Invite Evans Francis</h2>
            <p>
                If you like to invite Evans for a conference, kindly fill the below form, and we will get back to you shortly. Evans' mission is to minister the Word of Faith by teaching believers who they are in Christ Jesus, taking them from the milk of the Word to the meat and from religion to reality.
            </p>
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


                    <div class="clear"></div>

                    <div class="form-widget1 mt-0">

                        <div class="form-result"></div>

                        <form class="mb-0" id="template-contactform" name="template-contactform" action="#" method="post">

                            <div class="form-process">
                                <div class="css3-spinner">
                                    <div class="css3-spinner-scaler"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <label class="nott" for="name_org">Name of Organization (Church/Ministry)<small>*</small></label>
                                    <input type="text" id="name_org" name="name_org" value="" class="sm-form-control required" required="" />
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label class="nott" for="full_name">Full Name<small>*</small></label>
                                    <input type="text" id="full_name" name="full_name" value="" class="sm-form-control required" required="" />
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label class="nott" for="email">Email <small>*</small></label>
                                    <input type="email" id="email" name="email" value="" class="required email sm-form-control" required="" />
                                </div>

                                <div class="w-100"></div>

                                <div class="col-12 form-group">
                                    <label class="nott" for="contact_no">Contact No.</label>
                                    <input type="text" id="tcontact_no" name="contact_no" value="" class="sm-form-control" required="" />
                                </div>
                                <hr/>
                                <div class="col-12 form-group">
                                    <label class="nott" for="address">Address</label>
                                    <input type="text" id="address" name="address" value="" class="sm-form-control"  required="" />
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label class="nott" for="country">Country<small>*</small></label>
                                    <input type="text" id="country" name="country" value="" class="sm-form-control required"  required="" />
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label class="nott" for="state">State <small>*</small></label>
                                    <input type="text" id="state" name="state" value="" class="required email sm-form-control" required="" />
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label class="nott" for="city">City<small>*</small></label>
                                    <input type="text" id="city" name="city" value="" class="sm-form-control required"  required="" />
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label class="nott" for="zip">Zip/Postal Code <small>*</small></label>
                                    <input type="text" id="zip" name="zip" value="" class="required email sm-form-control"  required="" />
                                </div>
                                <div class="col-12 form-group">
                                    <label class="nott" for="website">Website</label>
                                    <input type="text" id="website" name="website" value="" class="sm-form-control"  required="" />
                                </div>
                                <hr/>

                                <div class="col-sm-6 form-group">
                                    <label class="nott" for="contact_person">Contact Person<small>*</small></label>
                                    <input type="text" id="contact_person" name="contact_person" value="" class="sm-form-control required"  required="" />
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label class="nott" for="contact_person_phone">Contact Person Phone <small>*</small></label>
                                    <input type="tel" id="contact_person_phone" name="contact_person_phone" value="" class="required email sm-form-control"  required="" />
                                </div>

                                <div class="col-12 form-group">
                                    <label class="nott" for="pastor">Pastor/Overseer</label>
                                    <input type="text" id="pastor" name="pastor" value="" class="sm-form-control"  required="" />
                                </div>
                                <hr/>
                                <div class="col-sm-6 form-group">
                                    <label class="nott" for="event_title">Event Title<small>*</small></label>
                                    <input type="text" id="event_title" name="event_title" value="" class="sm-form-control required"  required="" />
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label class="nott" for="event_theme">Event Theme <small>*</small></label>
                                    <input type="text" id="event_theme" name="event_theme" value="" class="required email sm-form-control"  required="" />
                                </div>

                                <div class="col-sm-6 form-group">
                                    <label class="nott" for="event_date">Event Date</label>
                                    <input type="date" id="event_date" name="event_date" value="" class="sm-form-control" required="" />
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label class="nott" for="event_attendance">Event Attendance</label>
                                    <input type="text" id="event_attendance" name="event_attendance" value="" class="sm-form-control"  required="" />
                                </div>
                               
                                <hr/>
                                <div class="col-sm-6 form-group">

                                    <div class="captchaarea" >
                                        <div class="input-group divcenter">
                                            <div class="input-group-prepend">

                                                <img src="<?php echo site_url("Pages/createCaptha/invite"); ?>" id="captchaimg" style="height: fit-content;"> 

                                            </div>

                                            <input type="text" id="widget-subscribe-form-email2" name="captcha" class="form-control required email" required="" placeholder="Type Here">

                                        </div>

                                        <small class="details">Can't read the image? <span  type="button" onclick="refreshCaptcha()" style="color:yellow;cursor:pointer;">click here</span> to refresh</small>
                                    </div>
                                </div>
                                <div class="col-sm-6 form-group"></div>

                                <div class="col-sm-12 form-group">
                                    <button class="button button-rounded button-large m-0" type="submit" name="submit" value="submit">Submit</button>
                                </div>
                            </div>


                        </form>
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
                function () {
                    window.location = "<?php echo site_url("invite"); ?>";
                },
                function (dismiss) {
                    window.location = "<?php echo site_url("invite"); ?>";
                }
        )
    </script>
    <?php
}
?>
<?php
$this->load->view('layout/footer');
?>