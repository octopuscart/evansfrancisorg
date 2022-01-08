<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="theme-color" content="#c7ecff">
        <meta name="author" content="Varbin Softwares Development Team">
        <!-- Document Title -->
        <?php
        meta_tags();
        ?>




        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i|Lato:300,400,600,700|Parisienne&amp;display=swap" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dark.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/one-page/onepage.css" type="text/css" />

        <!-- Writer Demo Specific Stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/writer/writer.css" type="text/css" />
        <!-- / -->

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-icons.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/one-page/css/et-line.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css" type="text/css" />

        <!-- Writer Demo Specific Stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/colors4d28.css?color=FFC013" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/writer/css/fonts.css" type="text/css" />
        <!-- / -->

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/customstyle.css" type="text/css" />


        <!--sweet alert-->
        <script src="<?php echo base_url(); ?>assets/sweetalert2/sweetalert2.min.js"></script>
        <link rel="stylesheet" hreflang="en-us"  href="<?php echo base_url(); ?>assets/sweetalert2/sweetalert2.min.css">


        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <?php
        $mainmenu = [
            array("title" => "HOME"),
            array("title" => "GALLERY"),
            array("title" => "SERVICES"),
            array("title" => "ABOUT"),
            array("title" => "CONTACT"),
        ];
        ?>
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
            (function () {
                var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/615320a825797d7a89013d34/1fgmbf583';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
        <!--End of Tawk.to Script-->


    </head>
    <body class="sticky-footer stretched">

        <!-- Document Wrapper
        ============================================= -->
        <div id="wrapper" class="clearfix">

            <!-- Header
            ============================================= -->
            <header id="header" class="transparent-header dark header-size-custom" data-sticky-shrink="false" data-sticky-class="semi-transparent">
                <div id="header-wrap">
                    <div class="container" style="max-width: 100%;">
                        <div class="header-row justify-content-lg-between">

                            <!-- Logo
                            ============================================= -->
                            <div id="logo" class="col-auto me-lg-0 order-lg-2">
                                <a href="<?php echo site_url("/"); ?>" class="standard-logo"><img src="<?php echo base_url(); ?>assets/writer/images/logo.png" alt="Evans Logo"></a>
                                <a href="<?php echo site_url("/"); ?>" class="retina-logo"><img src="<?php echo base_url(); ?>assets/writer/images/logo%402x.png" alt="Evans Logo"></a>
                            </div><!-- #logo end -->

                            <div id="primary-menu-trigger">
                                <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                            </div>

                            <!-- Primary Navigation
                            ============================================= -->
                            <nav class="primary-menu not-dark col-lg-auto order-lg-1">

                                <ul class="menu-container">
                                    <li class="menu-item"><a class="menu-link" href="<?php echo site_url("/") ?>"><div>Home</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="<?php echo site_url("about-us"); ?>"><div>About</div></a></li>
                                    <li class="menu-item"><a class="menu-link" target="_blank" href="https://www.evansfrancisbooks.com/"><div>Books</div></a></li>
                                    <li class="menu-item"><a class="menu-link" target="_blank" href="https://christianappdevelopers.com/"><div>Apps</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="<?php echo site_url("invite"); ?>"><div>Invite</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="<?php echo site_url("contact-us"); ?>"><div>Contact Us</div></a></li>

                                </ul>

                            </nav>

                            <nav class="primary-menu not-dark col-lg-auto order-lg-3">

                                <ul class="menu-container justify-content-lg-end">
                                    <li class="menu-item"><a class="menu-link" href="<?php echo site_url("blog"); ?>"><div>Blog </div></a></li>

                                    <li class="menu-item"><a class="menu-link" href="<?php echo site_url("pillar-of-fire"); ?>"><div>Pillar of Fire </div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="<?php echo site_url("pillar-of-cloud"); ?>"><div>Pillar of Cloud </div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="<?php echo site_url("love-offering"); ?>"><div>Love Offering </div></a></li>

                                </ul>

                            </nav><!-- #primary-menu end -->

                        </div>
                    </div>
                </div>
                <div class="header-wrap-clone"></div>
            </header><!-- #header end -->