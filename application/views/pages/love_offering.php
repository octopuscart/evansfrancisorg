
<?php
$this->load->view('layout/header');
$paymentlinks = array(
);
?>
<style>
    .swal2-image{
        border-radius: 50%;
    }
    .font-12{
        font-size: 12px;
    }

    .swal-subtitle{
        margin-bottom: 5px;
        float: left;
        width: 100%;
    }
    .swal-table{
        width: 100%;
    }

    .swal-table tr td:first{
        text-align: right;
    }
    .swal-table td{
        text-align: left;
    }
    
    .loveofferingicon .card-header{
        font-size: 15px;
    }
    .loveofferingicon .author-image{
       width: 100%;
    margin: 0;
    float: inherit;
    display: inline-block;
    }
</style>
<!-- Slider
                ============================================= -->
<section id="slider" class="slider-element include-header" style="background:#1E232A; height: 450px;">
    <div class="move-bg position-absolute w-100 h-100" style="top: 0; left: 0; background: url('<?php echo base_url(); ?>assets/writer/images/love.jpg') center 40% no-repeat; background-size: cover;"></div>
    <div class="vertical-middle">
        <div class="container dark center">
            <h2 style="font-size: 44px;" class="mb-0 nott">Love Offerings</h2>
            <span class="lead"></span>
        </div>
    </div>

    <!-- Slider Video Overlay -->
    <div class="video-wrap" style="height: 450px; position: absolute; left: 0; bottom: 0;">
        <div class="video-overlay" style="background: -moz-linear-gradient(top,  rgba(30,35,42,0) 21%, rgba(30,35,42,0) 66%, rgba(30,35,42,1) 100%); background: -webkit-linear-gradient(top,  rgba(30,35,42,0) 21%,rgba(30,35,42,0) 66%,rgba(30,35,42,1) 100%); background: linear-gradient(to bottom,  rgba(30,35,42,0) 21%,rgba(30,35,42,0) 66%,rgba(30,35,42,1) 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#001e232a', endColorstr='#1e232a',GradientType=0 );">
        </div>
    </div>
</section>
<section id="content">

    <div class="content-wrap py-0" style="background-color: #1E232A;">

        <!-- Testimonials
        ============================================= -->
        <div id="section-testimonial" class="section dark m-0 center bg-transparent">


            <div class="fslider testimonial testimonial-full writer-feedback bg-transparent border-0 shadow-none" data-animation="fade" data-arrows="false" style="max-width: none;">
                <div class="flexslider">
                    <div class="slider-wrap mx-auto" style="max-width: 650px;">
                        <div class="slide">
                            <div class="">
                                <a href="#"><img src="<?php echo base_url(); ?>assets/writer/images/loveoffer.jpg" alt="Lover Offerings Evans" style="border-radius: 20px;"></a>
                            </div>
                            <div class="testi-content">
                                <p>"God will richly bless the people who take care of his servants (Luke 6:38). Put God first, and he will add to your life daily what you need.</p>
                                <div class="testi-meta">
                                    (Matthew 6:35)
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
                <hr/>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 row">
                        <div class="card loveofferingicon col-sm-3">
                            <div class="card-header text-center" ><strong> <a href="#">PayPal</a></strong></div>
                            <div class="author-image" onclick="paypal()">
                                <img src="<?php echo base_url(); ?>assets/writer/images/paypal.jpg" alt="Image" class="rounded-circle">
                            </div>


                        </div>


                        <div class="card loveofferingicon col-sm-3">
                            <div class="card-header text-center" "><strong> <a href="#">Google Pay</a></strong></div>

                            <div class="author-image" onclick="googlePay()">
                                <img src="<?php echo base_url(); ?>assets/writer/images/gpay.jpg" alt="Image" class="rounded-circle">
                            </div>

                        </div>

                        <div class="card loveofferingicon col-md-3">
                            <div class="card-header text-center " ><strong> <a href="#">Bank Transfer</a></strong></div>

                            <div class="author-image" onclick="sbibank()">
                                <img src="<?php echo base_url(); ?>assets/writer/images/sbi.jpg" alt="Image" class="rounded-circle">
                            </div>

                        </div>

                        <div class="card loveofferingicon col-md-3">
                            <div class="card-header text-center" ><strong> <a href="#">PayTm</a></strong></div>

                            <div class="author-image" onclick="payTm()">
                                <img src="<?php echo base_url(); ?>assets/writer/images/paytm.jpg" alt="Image" class="rounded-circle">
                            </div>


                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>

            </div>



        </div>
</section><!-- #content end -->


<script>

    function paypal() {
        swal({
            html: '<span class="font-12 swal-subtitle">You can send your love offering via PayPal</span><br/><a href="https://www.paypal.me/evansfrancis" target="_blank" class="text-dark">www.paypal.me/evansfrancis</a>',
            imageUrl: "<?php echo base_url(); ?>assets/writer/images/paypal.jpg",
            imageWidth: 100,
            imageAlt: 'Evans PayPal',

        })
    }

    function googlePay() {
        swal({
            html: '<span class="font-12 swal-subtitle">You can send your love offering via Google Pay</span><br/><a href="#" target="_blank" class="text-dark">evansfrancis333@oksbi</a>',
            imageUrl: "<?php echo base_url(); ?>assets/writer/images/gpay.jpg",
            imageWidth: 100,
            imageAlt: 'Evans Google Pay',

        })
    }

    function payTm() {
        swal({
            html: '<span class="font-12 swal-subtitle">You can send your love offering via PayTm</span><br/><a href="#" target="_blank" class="text-dark">9960877313</a>',
            imageUrl: "<?php echo base_url(); ?>assets/writer/images/paytm.jpg",
            imageWidth: 100,
            imageAlt: 'Evans PayTm',

        })
    }

    function sbibank() {
        swal({
            html: `<span class="font-12 swal-subtitle">You can send your love offering via Bank Transfer</span><br/> <table class='swal-table'>
          <tr><td>   Account Holder's name</td><td>: Evans Francis Albert</td></tr>
          <tr><td>       Account number</td><td>: 32783806272 </td></tr>
          <tr><td>       Bank</td><td>: SBI</td></tr>
          <tr><td>       District</td><td>: Nagpur</td></tr>
          <tr><td>        Branch</td><td>: Jaripatka</td></tr>
          <tr><td>        IFSC Code</td><td>: SBIN0014726</td></tr>
          <tr><td>     Swift Code</td><td>: SBININBB239</td></tr>
         </table>`,
            imageUrl: "<?php echo base_url(); ?>assets/writer/images/sbi.jpg",
            imageWidth: 100,
            imageAlt: 'Evans SBI',

        })
    }
</script>

<?php
$this->load->view('layout/footer');
?>



