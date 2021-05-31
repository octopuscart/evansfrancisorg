<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="manifest" href="/manifest.webmanifest">
        <meta name="theme-color" content="#c7ecff">
        <meta name="author" content="Costco Development Team">
        <!-- Document Title -->
        <?php
        meta_tags();
        ?>
        <script type="application/ld+json">
            {
            "@context": "https://schema.org/",
            "@type": "Movers Company",
            "name": "PROFESSIONAL MOVING SERVICES",

            "datePublished": "2020-11-10",
            "description": "Top PROFESSIONAL MOVING SERVICES Company",
            "prepTime": "PT20M"
            }
        </script>




        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>


        <!-- styles-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.min.css"/>
        <!-- web-font loader-->
        <script>
            WebFontConfig = {
                google: {

                    families: ['Inter:300,400,500,700', 'Open+Sans:700'],

                }
            }

            function font() {

                var wf = document.createElement('script')

                wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js'
                wf.type = 'text/javascript'
                wf.async = 'true'

                var s = document.getElementsByTagName('script')[0]

                s.parentNode.insertBefore(wf, s)

            }

            font()
            setInterval(function () {
                $(".smat-footer").hide();
            }, 2000);
            setTimeout(function () {
                $(".smat-footer").hide();
            }, 2000);
        </script>
        <script>var chatbot_id = 7452;!function () {
                var t, e, a = document, s = "smatbot-chatbot";
                a.getElementById(s) || (t = a.createElement("script"), t.id = s, t.type = "text/javascript", t.src = "https://smatbot.s3.amazonaws.com/files/smatbot_plugin.js.gz", e = a.getElementsByTagName("script")[0], e.parentNode.insertBefore(t, e))
            }();</script><script src="https://cdnjs.cloudflare.com/ajax/libs/fingerprintjs2/1.5.1/fingerprint2.min.js"></script>

    </head>
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>

    <?php
    $mainmenu = [
        array("title" => "HOME"),
        array("title" => "GALLERY"),
        array("title" => "SERVICES"),
        array("title" => "ABOUT"),
        array("title" => "CONTACT"),
    ];
    ?>


</head>
<body>
    <!-- menu dropdown start-->
    <div class="menu-dropdown">
        <div class="menu-dropdown__inner" data-value="start">
            <div class="screen screen--start">
                <div class="menu-dropdown__close">
                    <i class="icon fas fa-times"></i>
                </div>
                <div class="d-block d-lg-none bottom-20">
                    <?php
                    foreach ($mainmenu as $key => $value) {
                        ?>
                        <div class="screen__item screen--trigger " data-category="screen-one"><span><?php echo $value["title"]; ?></span><span>
                                <svg class="icon">
                                <use xlink:href="#chevron-right"></use>
                                </svg></span></div>
                        <?php
                    }
                    ?>
                </div>


            </div>
        </div>

    </div>
    <!-- menu dropdown end-->
    <div class="page-wrapper">
        <!-- header start-->
        <header class="page-header_2">
            <div class="page-header__top d-none d-xl-block">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-8"><span>

                                <svg class="icon">
                                <use xlink:href="#phone"></use>
                                </svg><a href="tel:+852 2736 6552">+(852) 2736 6552</a></span><span>
                                <svg class="icon">
                                <use xlink:href="#mail"></use>
                                </svg><a href="mailto:smarttech8@biznetvigator.com">smarttech8@biznetvigator.com</a></span></div>
                        <div class="col-xl-4 text-right">
                            <ul class="socials list--reset">
                                <li class="socials__item"><a class="socials__link" href="#">
                                        <svg class="icon">
                                        <use xlink:href="#youtube"></use>
                                        </svg></a></li>
                                <li class="socials__item"><a class="socials__link" href="#">
                                        <svg class="icon">
                                        <use xlink:href="#facebook"></use>
                                        </svg></a></li>
                                <li class="socials__item"><a class="socials__link" href="#">
                                        <svg class="icon">
                                        <use xlink:href="#twitter"></use>
                                        </svg></a></li>
                                <li class="socials__item"><a class="socials__link" href="#">
                                        <svg class="icon">
                                        <use xlink:href="#linkedin"></use>
                                        </svg></a></li>
                                <li class="socials__item"><a class="socials__link" href="#">
                                        <svg class="icon">
                                        <use xlink:href="#inst"></use>
                                        </svg></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-header__lower">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-8 col-md-6 col-lg-3 d-flex align-items-center">

                            <!-- menu-trigger end-->
                            <div class="page-header__logo logo--white"><a href="<?php echo site_url("/"); ?>"><img src="<?php echo base_url(); ?>assets/images/logo_w.png" alt="logo"/></a></div>
                            <div class="page-header__logo logo--dark"><a href="<?php echo site_url("/"); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="logo"/></a></div>
                        </div>
                        <div class="col-lg-5 d-none d-lg-block">
                            <!-- main menu start-->
                            <ul class="main-menu main-menu--white">
                                <?php
                                foreach ($mainmenu as $key => $value) {
                                    ?>
                                    <li class="main-menu__item  "><a class="main-menu__link" href="javascript:void(0);"><span><?php echo $value["title"]; ?></span></a>

                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                            <!-- main menu end-->
                        </div>
                        <div class="col-4 col-md-6 col-lg-4 d-flex justify-content-end align-items-center">
                            <div class="lang-block">
                                <div class="lang-icon"><img class="img--contain" src="<?php echo base_url(); ?>assets/img/gbr.png" alt="img"/></div>
                                <!-- lang select start-->
                                <ul class="lang-select lang-select--white">
                                    <li class="lang-select__item lang-select__item--active"><span>En</span>

                                    </li>
                                </ul>
                                <!-- lang select end-->
                            </div>

                            <!-- menu-trigger start-->
                            <div class="hamburger d-inline-block d-md-none hamburger--white">
                                <div class="hamburger-inner"></div>
                            </div>
                            <!-- menu-trigger end-->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end-->