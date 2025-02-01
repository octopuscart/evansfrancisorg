<?php
$this->load->view('layout/header');
?>

<!-- Slider
                ============================================= -->
<section id="slider" class="slider-element include-header" style="background:#1E232A; height: 450px;">
    <div class="move-bg position-absolute w-100 h-100"
        style="top: 0; left: 0; background: url('<?php echo base_url(); ?>assets/writer/images/cloud.jpg') center 40% no-repeat; background-size: cover;">
    </div>
    <div class="vertical-middle">
        <div class="container dark center">
            <h2 style="font-size: 44px;" class="mb-0 nott">404</h2>

        </div>
    </div>

    <!-- Slider Video Overlay -->
    <div class="video-wrap" style="height: 450px; position: absolute; left: 0; bottom: 0;">
        <div class="video-overlay"
            style="background: -moz-linear-gradient(top,  rgba(30,35,42,0) 21%, rgba(30,35,42,0) 66%, rgba(30,35,42,1) 100%); background: -webkit-linear-gradient(top,  rgba(30,35,42,0) 21%,rgba(30,35,42,0) 66%,rgba(30,35,42,1) 100%); background: linear-gradient(to bottom,  rgba(30,35,42,0) 21%,rgba(30,35,42,0) 66%,rgba(30,35,42,1) 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#001e232a', endColorstr='#1e232a',GradientType=0 );">
        </div>
    </div>
</section>

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap pb-2" style="background-color: #1E232A;" style="padding: 0;">

        <div class="section dark m-0 bg-transparent" style="padding: 0;">
            <div class="container">

                <!--Start 404 Error-->
                <section class="error bg-gradient pad-tb">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center mt50 mb50">
                                <div class="layer-div">
                                    <div class="error-block">
                                        <h1>Page not Found</h1>

                                     
                                        <a href="<?php echo site_url("/"); ?>" class="btn-outline">Back to Home</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--End 404 Error-->
            </div>
        </div>
    </div>
</section><!-- #content end -->

    <?php
    $this->load->view('layout/footer');
    ?>