<?php
$this->load->view('layout/header');
?>

<!-- Slider
                ============================================= -->
<section id="slider" class="slider-element include-header" style="background:#1E232A; height: 450px;">
    <div class="move-bg position-absolute w-100 h-100" style="top: 0; left: 0; background: url('<?php echo base_url(); ?>assets/writer/images/fire.jpg') center 40% no-repeat; background-size: cover;"></div>
    <div class="vertical-middle">
        <div class="container dark center">
            <h2 style="font-size: 44px;" class="mb-0 nott">SPONSOR A PASTOR</h2>

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

                            Praise the Lord, beloved. I believe you are doing well. Pastors play a crucial role in the Church. They are the leaders of Christian congregations, and they also give godly advice and counsel to people and communities. 
                        </p>
                        <p>
                            The book of Jeremiah 3:15 says, “Then I will give you shepherds after my own heart, who will lead you with knowledge and understanding.”                         
                        </p>
                        <p>   It also says in Ephesians 4:11-12 that; “So Christ himself gave the apostles, the prophets, the evangelists, the pastors and teachers, to equip his people for works of service, so that the body of Christ may be built up.”                        
                        </p>
                        <p>
                            Every believer has at one point in their lives sort guidance from Pastors or emulated their ways of life in their desire to live godly lives. For this reason, pastors have the highest calling from God in His ministry because their primary responsibility is to shepherd God’s people and to teach us for the spiritual well-being and knowing God’s will in our lives.                         
                        </p>
                        <p>
                            As believers, we have a moral responsibility to support pastors in every way we can to ensure that the gospel of Christ reaches more people. Hebrews 13:17 says, “Have confidence in your leaders and submit to their authority, because they keep watch over you as those who must give an account. Do this so that their work will be a joy, not a burden, for that would be of no benefit to you.”
                        </p>
                        <p>
                            You can contribute to the excellent work of spreading the gospel of Christ by sponsoring a pastor. Your contribution will enable the men of God to have the things they need to effectively go about their pastoral duties. The support that you will give will be directed towards doing God’s work, which will help us achieve our mission of impacting other people’s lives by bringing them closer to the gospel of Christ. 
                        </p>
                        <p>Kindly fill the below form, and we will get back to you asap. May the Almighty Father bless you as you purpose to contribute towards this cause. </p>

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

                                                    <img src="<?php echo site_url("Pages/createCaptha/pastor"); ?>" id="captchaimg" style="height: fit-content;"> 

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

