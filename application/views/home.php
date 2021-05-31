<?php
$this->load->view('layout/header');
?>

<!-- header end-->
<main class="main">
    <!-- promo start-->
    <div class="front-promo">
        <div class="front-promo__layout"></div>
        <picture>
            <source srcset="<?php echo base_url(); ?>assets/img/promo_2.jpg" media="(min-width: 992px)"/><img class="img--bg" src="<?php echo base_url(); ?>assets/img/promo_2.jpg" alt="img"/>
        </picture>
        <div class="align-container">
            <div class="align-container__item">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-xl-6">
                            <h2 class="front-promo__title">Worldwide Shipping<span class="front-promo__overlay">Smart Tech</span></h2>
                            <p class="front-promo__subtitle">We have been shipping cargo for our clients all over <br/>the world since more than <?php echo date("y"); ?> years</p><a class="button button--promo" href="#"><span>Explore more</span> 
                                <svg class="icon">
                                <use xlink:href="#arrow"></use>
                                </svg></a>
                        </div>
                        <div class="col-md-7 col-lg-5 col-xl-4 offset-xl-2 top-50 top-lg-0">
                            <form class="form promo-form" action="javascript:void(0);" autocomplete="off">
                                <div class="fieldset">
                                    <h6 class="promo-form__title">Request a Quote</h6>
                                    <p class="promo-form__subtitle">Feel free to contact us</p>
                                    <label>
                                        <i class="icon fas fa-user"></i>


                                        <input class="form__field" type="text" name="name" placeholder="Name"/>
                                    </label>
                                    <label>
                                        <i class="icon fas fa-envelope"></i>

                                        <input class="form__field" type="text" name="from" placeholder="Email"/>
                                    </label>
                                    <label>
                                        <svg class="icon">
                                        <use xlink:href="#pin"></use>
                                        </svg>
                                        <input class="form__field" type="text" name="from" placeholder="From"/>
                                    </label>
                                    <label>
                                        <svg class="icon">
                                        <use xlink:href="#pin"></use>
                                        </svg>
                                        <input class="form__field" type="text" name="To" placeholder="To"/>
                                    </label>
                                    <label>
                                        <svg class="icon">
                                        <use xlink:href="#calendar_2"></use>
                                        </svg>
                                        <input class="form__field" data-toggle="datepicker" type="text" name="date" placeholder="Date"/>
                                    </label>
                                    <select class="form__select" name="transport">
                                        <option data-display="Choose transport">Choose transport</option>
                                        <option value="value">Shipping</option>

                                    </select>
                                </div>
                                <input class="form__submit" type="submit" value="Send Request"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- promo end-->
    <!-- section start-->
    <section class="section">
        <div class="container">
            <div class="row flex-column-reverse flex-xl-row">
                <div class="col-md-8 col-lg-7 col-xl-5 top-50 top-xl-0">
                    <div class="counters-holder text-center text-sm-left"><img class="img--bg" src="<?php echo base_url(); ?>assets/img/map_back.png" alt="img"/>
                        <div class="row offset-50">
                            <div class="col-12">
                                <div class="counter counter--white">
                                    <div class="counter__top"><span class="js-counter counter__count color--green"><?php echo date("y"); ?></span><span class="counter__subject color--green">yrs</span></div>
                                    <div class="counter__lower"><span class="counter__details color--lgray">Experience in transportation</span></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="counter counter--white">
                                    <div class="counter__top"><span class="js-counter counter__count color--green">500</span><span class="counter__subject color--green">+</span></div>
                                    <div class="counter__lower"><span class="counter__details color--lgray">Skilled drivers in our fleet</span></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="counter counter--white">
                                    <div class="counter__top"><span class="js-counter counter__count color--green">2</span><span class="counter__subject color--green">billion</span></div>
                                    <div class="counter__lower"><span class="counter__details color--lgray">Milles driven per year</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1">
                    <div class="heading bottom-20"><span class="heading__pre-title">About Smart Tech</span>
                        <h3 class="heading__title">The Best Transportation Company in Hong Kong</h3><span class="heading__layout">About</span>
                    </div>
                    <p>In 1995 we started our business from Pak-Afghan Forwarders International Company as a forwarders company. The fast growing market took us one step further in business. Later on, in 2000 we establish Smart Tech  Logistics (HK) Ltd and made the Pak-Afghan Forwarders International a sub-company of Smart Tech  Logistics (HK) Ltd.</p>
                    <p>At the beginning, its business was mainly shipping from Hong Kong to all over the world, but afterward, we expanded our business and now we have a number of agents in different countries, so that we can keep up with the rapid expansion of our business and provide excellent service to our clients.</p>
                    <p class="bottom-40"><strong>Smart Tech  has more than <?php echo date("y"); ?> years of experience in Shipping, Transportation and Logistics. We guarantee our customer reliable service and support.</strong></p><a class="button button--green" href="#"><span>More about</span> 
                        <svg class="icon">
                        <use xlink:href="#arrow"></use>
                        </svg></a>
                </div>
            </div>
        </div>
    </section>
    <!-- section end-->
    <!-- section start-->
    <section class="section pb-0 services_2 bg--lgray">
        <div class="container bottom-70">
            <div class="row">
                <div class="col-lg-4">
                    <div class="heading"><span class="heading__pre-title">Services</span>
                        <h3 class="heading__title">Transporterium Services</h3><span class="heading__layout layout--lgray">Services</span>
                    </div>
                </div>
                <div class="col-lg-8 top-20 top-lg-0">
                    <p class="bottom-0">
                        <strong>Smart Tech  has more than <?php echo date("y"); ?> years of experience in Shipping</strong>, Transportation and Logistics. We guarantee our customer reliable service and support.
                    </p><a class="button button--green d-none d-lg-inline-block top-30 top-lg-none" href="#"><span>All services</span> 
                        <svg class="icon">
                        <use xlink:href="#arrow"></use>
                        </svg></a>
                </div>
            </div>
        </div>
        <div class="container container--wide">
            <div class="row offset-50">

                <div class="col-md-6 col-xl-3">
                    <div class="img-box">
                        <div class="img-box__overlay"></div>
                        <div class="img-box__text-layout">Transporterium Services</div><img class="img--bg" src="<?php echo base_url(); ?>assets/img/box_4.jpg" alt="img"/>
                        <div class="img-box__details">
                            <h5 class="img-box__title"><a href="#">Shipping</a></h5>
                            <div class="img-box__count">01</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="img-box">
                        <div class="img-box__overlay"></div>
                        <div class="img-box__text-layout">Transporterium Services</div><img class="img--bg" src="<?php echo base_url(); ?>assets/img/box_3.jpg" alt="img"/>
                        <div class="img-box__details">
                            <h5 class="img-box__title"><a href="#">Forwarders</a></h5>
                            <div class="img-box__count">02</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="img-box">
                        <div class="img-box__overlay"></div>
                        <div class="img-box__text-layout">Transporterium Services</div><img class="img--bg" src="<?php echo base_url(); ?>assets/img/box_1.jpg" alt="img"/>
                        <div class="img-box__details">
                            <h5 class="img-box__title"><a href="#">Transportation</a></h5>
                            <div class="img-box__count">03</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="img-box">
                        <div class="img-box__overlay"></div>
                        <div class="img-box__text-layout">Transporterium Services</div><img class="img--bg" src="<?php echo base_url(); ?>assets/img/box_2.jpg" alt="img"/>
                        <div class="img-box__details">
                            <h5 class="img-box__title"><a href="#">Selling Cranes</a></h5>
                            <div class="img-box__count">04</div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="container top-50 d-block d-lg-none">
            <div class="row">
                <div class="col-12 text-center"><a class="button button--green" href="#"><span>All services</span> 
                        <svg class="icon">
                        <use xlink:href="#arrow"></use>
                        </svg></a></div>
            </div>
        </div>
    </section>
    <!-- section end-->


    <!-- section start-->
    <section class="section front-gallery">
        <div class="container">
            <div class="row align-items-end bottom-70">
                <div class="col-lg-8">
                    <div class="heading"><span class="heading__pre-title">Gallery</span>
                        <h3 class="heading__title">Our stunning gallery</h3>
                        <p class="heading__text">A collection of a number of pictures of Smart-Tech Logistics in action. </p><span class="heading__layout">Gallery</span>
                    </div>
                </div>
                <div class="col-lg-4 text-right d-none d-lg-block"><a class="button button--green" href="#"><span>View all gallery</span> 
                        <svg class="icon">
                        <use xlink:href="#arrow"></use>
                        </svg></a>
                </div>
            </div>
        </div>
        <div class="gallery">
            <div class="row no-gutters">
                <?php
                $galleryimage = [
                    "stl-gallery1.jpg",
                    "stl-gallery2.jpg",
                    "stl-gallery3.jpg",
                    "stl-gallery4.jpg",
                    "stl-gallery5.jpg",
                    "stl-gallery6.jpg",
                    "stl-gallery7.jpg",
                    "stl-gallery8.jpg",
                ];
                foreach ($galleryimage as $key => $value) {
                    ?>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a class="gallery__item" href="<?php echo base_url(); ?>assets/gallery/<?php echo $value; ?>" data-fancybox="gallery">
                            <span class="overlay"></span>
                            <img class="img--bg" src="<?php echo base_url(); ?>assets/gallery/<?php echo $value; ?>" alt="img"/>
                        </a>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="row top-50 d-block d-lg-none">
                <div class="col-12 text-center"><a class="button button--green" href="#"><span>View all gallery</span> 
                        <svg class="icon">
                        <use xlink:href="#arrow"></use>
                        </svg></a>
                </div>
            </div>
        </div>
    </section>

    <!-- section start-->
    <section class="section bg--lgray">
        <div class="container">
            <div class="row align-items-end bottom-60">
                <div class="col-lg-12 col-xl-12">
                    <div class="heading"><span class="heading__pre-title">Features</span>
                        <h3 class="heading__title">Powerfull Features of <span class="color--green">Smart Tech  </span> Logistics</h3><span class="heading__layout layout--lgray">Features</span>
                    </div>
                </div>
            </div>
            <div class="row offset-50">

                <div class="col-sm-4 col-lg-4">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <svg class="icon">
                            <use xlink:href="#support"></use>
                            </svg>
                        </div>
                        <h6 class="icon-item__title">Support 24/7</h6>
                        <p class="icon-item__text"> We always maintain close and effective 24/7 communication with clients </p>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <svg class="icon">
                            <use xlink:href="#location"></use>
                            </svg>
                        </div>
                        <h6 class="icon-item__title">Online Tracking</h6>
                        <p class="icon-item__text">Fast delivery and real-time parcel tracking capabilities. </p>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <svg class="icon">
                            <use xlink:href="#insurance"></use>
                            </svg>
                        </div>
                        <h6 class="icon-item__title">Logistics Guarantee</h6>
                        <p class="icon-item__text">
                            We guarantee our customer reliable service and support.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end-->

    <!-- section start-->
    <section class="section testimonials y">
        <div class="testimonials__bg"><img class="section--bg t50 r0" src="<?php echo base_url(); ?>assets/img/testimonials-bg.png" alt="img"/></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="heading heading--white"><span class="heading__pre-title">Leading Logistics Company</span>
                        <h3 class="heading__title">Director's  <span class="color--green">Message</span> </h3><span class="heading__layout layout--dgray"></span>
                    </div>
                </div>
                <div class="col-lg-6 text-center">

                    <div class="testimonials__nav"></div><img class="testimonials__img" src="<?php echo base_url(); ?>assets/images/director.jpeg" alt="img"/>
                </div>
                <div class="col-lg-6 ">
                    <div class="testimonials-slider" style="    margin-top: 100px;">
                        <div class="testimonials-slider__item">
                            <p>We started very small but due to the hardwork of my team, we have reached an international status.</p>
                            <p>We have always provided quality services to our clients and have never looked at the companies we do business with just as our clients rather as our partners and it has benefitted us a lot. </p>
                            <p>   Now our goal is to become one of the leading logistics company in the world.</p>
                            <div class="testimonials-slider__author"><img src="<?php echo base_url(); ?>assets/img/quotes.png" alt="img"/>
                                <h6>Director</h6><span>Smart Tech Logistics (HK) Ltd</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end-->

    <!-- section start-->
    <section class="section">
        <div class="container">
            <div class="row flex-column-reverse flex-xl-row align-items-end2">
                <div class="col-xl-5 top-20 top-xl-0">
                    <div class="heading bottom-20"><span class="heading__pre-title">Our World Wide</span>
                        <h3 class="heading__title">Clients</h3>
                    </div>
                    <p class="bottom-0">
                        Other than Hong Kong we have a number of clients in the following countries
                    </p>
                    <div class="row top-20">
                        <div class="col-sm-6 col-lg-6 col-xl-6">

                            <ul class="list list--check list--reset">
                                <li class="list__item">Pakistan</li>
                                <li class="list__item">Dubai</li>
                                <li class="list__item">India</li>
                                <li class="list__item">Philippines</li>

                            </ul>
                        </div>
                        <div class="col-sm-6 col-lg-6 col-xl-6">

                            <ul class="list list--check list--reset">

                                <li class="list__item">Thailand</li>
                                <li class="list__item">Afghanistan</li>
                                <li class="list__item">Iran</li>
                                <li class="list__item">Cambodia</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-7 text-center text-xl-left"><img class="truck-img" src="<?php echo base_url(); ?>assets/img/sea.png" style="width:100%" alt="img"/></div>
            </div>
        </div>
    </section>
    <!-- section end-->
</main>

<?php
$this->load->view('layout/footer');
?>