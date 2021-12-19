<?php
$this->load->view('layout/header');
?>

<!-- Slider
                ============================================= -->
<section id="slider" class="slider-element include-header" style="background:#1E232A; height: 450px;">
    <div class="move-bg position-absolute w-100 h-100" style="top: 0; left: 0; background: url('<?php echo base_url(); ?>assets/writer/images/fire.jpg') center 40% no-repeat; background-size: cover;"></div>
    <div class="vertical-middle">
        <div class="container dark center">
            <h2 style="font-size: 44px;" class="mb-0 nott">SPONSOR OUR CHURCH RENT</h2>

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
                            Praise the Lord beloved, I believe you are doing well. The Bible says in the book of Hebrews 10:25 that the Church is where we come together to encourage one another as members of Christ’s body. As believers in Jesus Christ, we need to assemble and give Him praise for who He is in our lives. The Church is not a gallery for the exhibition of eminent Christians but a school for the education of imperfect ones. On that account, the Church is essential for us because, as the Bible says in Romans 3:23, we have all sinned and fallen short of the glory of God.
                        </p>

                        <p>It is our responsibility as the Disciples of Christ to ensure that we remain faithful to the Church. We should also take on the responsibility of maintaining the physical buildings that facilitate God’s people’s fellowship, worship, and ministry. Many of us can testify to the positive impacts the Church buildings have had on our lives. Whenever we visit the Church, we feel a sense of peace and joy, and we can feel the presence of the Almighty. Many of us bring our burdens to the Church, where we present them before Jesus Christ. </p>

                        <p>The Bible tells us in Mathew 11:28-30 NIV, “Come to me, all you who are weary and burdened, and I will give you rest. Take my yoke upon you and learn from me, for I am gentle and humble in heart, and you will find rest for your souls. For my yoke is easy and my burden is light.” These beautiful words guide us towards a peaceful life, where we can experience God’s glory and purpose for our lives.
                        </p>

                        <p>One month church rent is 12000/-. God will indeed bless you if you stand with us to sponsor church rent by making monthly contributions towards the rent. Any amount that you can contribute will be highly appreciated. It will significantly enhance our efforts to make the house of the Lord accessible to as many believers as possible. </p>

                        <p>Kindly fill the below form, and we will get back to you asap. May the Almighty Father bless you as you purpose to contribute towards his house.</p>

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

                                                    <img src="<?php echo site_url("Pages/createCaptha/church"); ?>" id="captchaimg" style="height: fit-content;"> 

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