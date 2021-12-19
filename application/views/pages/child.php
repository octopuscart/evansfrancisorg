<?php
$this->load->view('layout/header');
?>

<!-- Slider
                ============================================= -->
<section id="slider" class="slider-element include-header" style="background:#1E232A; height: 450px;">
    <div class="move-bg position-absolute w-100 h-100" style="top: 0; left: 0; background: url('<?php echo base_url(); ?>assets/writer/images/fire.jpg') center 40% no-repeat; background-size: cover;"></div>
    <div class="vertical-middle">
        <div class="container dark center">
            <h2 style="font-size: 44px;" class="mb-0 nott">SPONSOR A CHILD'S SCHOOL FEE</h2>

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

                            Nelson Mandela once said that education is the most powerful weapon you can use to change the world. He also said that education is the great engine of personal development. Through education, the daughter of a peasant can become a doctor, that the son of a mineworker can become the head of the mine, that a child of farm workers can become the president of a great nation. What we make out of what we have, not what we are given, separates one person from another. On that account, we are pleased to invite you to partner with us in the Sponsor A Child’s School Fee initiative.     
                        </p>
                        <p>We strongly believe that our value in this world is not determined by the material wealth we acquire for ourselves but by our actions’ impact on other people's lives. One of the best ways to ensure that our impact benefits as many people as possible is by supporting children’s education. This is because the power of education extends beyond the development of skills we need for economic success. It can contribute to nation-building and reconciliation. </p>
                        <p>Many children fail to achieve their potential because they are not presented with opportunities that propel them towards becoming the best versions of themselves. As Christians, we are responsible for supporting them by making it easier for them to acquire new knowledge and allow them to explore their abilities.</p>
                        <p>We invite you to join us in supporting the future of our children and young Christians by paying for their school fees. The Bible urges us to give in 2 Corinthians 9:6-8, which says, “Remember this: Whoever sows sparingly will also reap sparingly, and whoever sows generously will also reap generously. Each of you should give what you have decided in your heart to give, not reluctantly or under compulsion, for God loves a cheerful giver.” </p>

                        <p>We invite you to join us in supporting the future of our children and young Christians by paying for their school fees. The Bible urges us to give in 2 Corinthians 9:6-8, which says, “Remember this: Whoever sows sparingly will also reap sparingly, and whoever sows generously will also reap generously. Each of you should give what you have decided in your heart to give, not reluctantly or under compulsion, for God loves a cheerful giver.” </p>


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
                                        <label class="nott" for="donation_period">Make Donation Every</label>
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

                                                    <img src="<?php echo site_url("Pages/createCaptha/child"); ?>" id="captchaimg" style="height: fit-content;"> 

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

