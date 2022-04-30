<?php
$this->load->view('layout/header');
?>

<!-- Slider
                ============================================= -->
<section id="slider" class="slider-element include-header" style="background:#1E232A; height: 0px;">
    <div class="move-bg position-absolute w-100 h-25" style="top: 0; left: 0; background: url('') center 40% no-repeat; background-size: cover;"></div>
    <div class="vertical-middle">
        <div class="container dark center">
            <h2 style="font-size: 44px;color:#333" class="mb-0 nott"></h2>
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


                            <img src="<?php echo base_url(); ?>assets/writer/images/youthretreatregistration3.jpg"/>

                            <div class="form-result"></div>

                            <form class="mb-0 mt-5" id="template-contactform" name="template-contactform" action="#" method="post">

                                <img src="<?php echo base_url(); ?>assets/images/registration_closed.png">



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