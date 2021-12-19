<?php
$this->load->view('layout/header');
?>

<!-- Slider
                ============================================= -->
<section id="slider" class="slider-element include-header" style="background:#1E232A; height: 450px;">
    <div class="move-bg position-absolute w-100 h-100" style="top: 0; left: 0; background: url('<?php echo base_url(); ?>assets/writer/images/fire.jpg') center 40% no-repeat; background-size: cover;"></div>
    <div class="vertical-middle">
        <div class="container dark center">
            <h2 style="font-size: 44px;" class="mb-0 nott">SPONSOR A FAMILY'S GROCERIES </h2>

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

    <div class="content-wrap pb-2" style="background-color: #1E232A;" style="padding: 0;">

        <div class="section dark m-0 bg-transparent" style="padding: 0;">
            <div class="container">
                <div class="mx-auto row" >


                    <div class="clear"></div>
                    <div class="col-lg-6">

                        <p> 

                            Praise the Lord, beloved. I believe you are doing well. The global health crisis has reminded us of the need to be there for one another and help those in need. Many households have been affected by the pandemic and the difficult living conditions, making it impossible to sustain their livelihoods by themselves. As Christians, we should ensure that we share what we have with other people. On that account, I am happy to invite you to join the Sponsor A Family's Groceries initiative.

                        </p>
                        <p>
                            The Bible says in 2 Corinthians 9:11 that you will be enriched in every way so that you can be generous on every occasion, and through us, your generosity will result in thanksgiving to God. 
                        </p>
                        <p>As the Church of Christ, we have agreed to heed the calling and support needy families by providing them with groceries every month. We know that many people out there would be happy to join the cause, which is why we happily invite you with open arms.</p>
                        <p>
                            Your monthly contributions will allow us to identify families that we will provide groceries with every month. We desire to make life easier for vulnerable people by providing them with the essential groceries to help them maintain good health. The initiative also aims to impact communities by strengthening hope in God and humanity and showing that we can make life easier if we support one another. 
                        </p>
                        <p>We are encouraged by the Bible to give in Luke 6:38, which says, “Give, and it will be given to you. A good measure, pressed down, shaken together and running over, will be poured into your lap. For with the measure you use, it will be measured to you.”</p>
                        <p>
                            Kindly fill the below form, and we will get back to you asap. May the Almighty Father bless you as you purpose to contribute towards this cause. We would be honoured to work with you to ensure that the initiative is successful and we feed many families every month. Thank you for your time.
                        </p>

                        <p>   In His firm grip,</p>

                        <p>   Evans Francis</p>

                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5">
                        <div class="form-widget1 mt-0">

                            <div class="form-result"></div>

                            <form class="mb-0" id="template-contactform" action="#" method="post">

                                <div class="form-process">
                                    <div class="css3-spinner">
                                        <div class="css3-spinner-scaler"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label class="nott" for="first_name">First Name <small>*</small></label>
                                        <input type="text" id="first_name" name="first_name" value="" class="sm-form-control required" required="" />
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label class="nott" for="last_name">Last Name <small>*</small></label>
                                        <input type="text" id="last_name" name="last_name" value="" class="sm-form-control required" required="" />
                                    </div>

                                    <div class="col-sm-12 form-group">
                                        <label class="nott" for="email">Email <small>*</small></label>
                                        <input type="email" id="email" name="email" value="" class="required email sm-form-control" />
                                    </div>

                                    <div class="w-100"></div>

                                    <div class="col-12 form-group">
                                        <label class="nott" for="contact_no">Contact No.</label>
                                        <input type="text" id="contact_no" name="contact_no" value="" required="" class="sm-form-control" />
                                    </div>
                                    <div class="col-12 form-group">
                                        <label class="nott" for="donation"  >Make Donation Every</label>
                                         <select id="cars"  name="donation_period"  class="sm-form-control" >

                                            <option value="Day">Day</option>
                                            <option value="Week">Week</option>
                                            <option value="Month">Month</option>
                                            <option value="Quarter" selected>Quarter</option>
                                            <option value="Year" >Year</option>

                                        </select>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label class="nott" for="amount">Amount<small>*</small></label>
                                        <input type="text" id="amount" name="amount" value="" class="required email sm-form-control" />
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label class="nott" for="country">Country<small>*</small></label>
                                        <input type="text" id="country" name="country" value="" class="sm-form-control required" />
                                    </div>


                                    <hr/>
                                    <div class="col-sm-8 form-group">

                                        <div class="captchaarea" >
                                            <div class="input-group divcenter">
                                                <div class="input-group-prepend">

                                                    <img src="<?php echo site_url("Pages/createCaptha/family"); ?>" id="captchaimg" style="height: fit-content;"> 

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
</section><!-- #content end -->


<?php
$this->load->view('layout/footer');
?>
    <?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

