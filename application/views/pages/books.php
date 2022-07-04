<?php
$this->load->view('layout/header');
?>

<!-- Slider
                ============================================= -->
<section id="slider" class="slider-element include-header" style="background:#1E232A; height: 450px;">
    <div class="move-bg position-absolute w-100 h-100" style="top: 0; left: 0; background: url('<?php echo base_url(); ?>assets/writer/images/invite.jpg') center 40% no-repeat; background-size: cover;"></div>
    <div class="vertical-middle">
        <div class="container dark center">
            <h2 style="font-size: 44px;" class="mb-0 nott">Our Books</h2>
            <p>
Evans has written and composed a number of biblical books and songs. Evans shares the Word of God through his YouTube channel name "Evans Francis", and millions have viewed his videos till date. Without any fear, he shares the dreams, visions and messages that God gives him for the body of Christ, which is posted on his mobile app. App name is "Evans Francis". It is available on Google play store and App store for free.              </p>
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
    <div class="content-wrap pb-0" style="background-color: #1E232A;">

        <div class="section p-0 m-0" style="background: url('demos/writer/images/section/bg1.jpg') center center no-repeat; background-size: cover;">
            <div class="container clearfix">


                <div id="portfolio" class="portfolio row grid-container gutter-50">
                    <?php
                    $bookslist = array(
                        array(
                            "title" => "Why Pain ",
                            "link" => "https://notionpress.com/read/why-pain",
                            "image1" => "wp.jpg",
                            "image" => "Why_Pain_By_Evans_Francis.png"
                        ),
                        array(
                            "title" => "Choose Wisely",
                            "link" => "https://notionpress.com/read/choose-wisely",
                            "image1" => "cw.jpg",
                            "image" => "Choose_Wisely_By_Neha_Evans_Francis.png"
                        ),
                        array(
                            "title" => "Biblical Courtship",
                            "link" => "https://notionpress.com/read/biblical-courtship",
                            "image1" => "bc.jpg",
                            "image" => "Biblical_Courtship_By_Evans_Francis.png"
                        ),
                    );
                    foreach ($bookslist as $key => $value) {
                        ?>

                        <div class="portfolio-item col-12 col-sm-6 col-md-4 mb-3 mb-sm-0">
                            <div class="book-wrap">
                                <div class="book-card">
                                    <a href="<?php echo $value["link"]; ?>" target="_blank" class=" book-image" ><img src="<?php echo base_url(); ?>assets/bookcover/<?php echo $value["image1"]; ?>" alt="Book Image"></a>
                                    <div class="book-detail">
                                        <h2 class="book-title"><a href="#"><?php echo $value["title"]; ?></a></h2>

                                        <a href="<?php echo $value["link"]; ?>" class="button button-white button-light text-capitalize button-circle"><i class="icon-line-zoom-in"></i><span>Buy Now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                </div>
                <div class="center"><a href="https://notionpress.com/author/evans_francis" class="button button-large button-white button-light text-capitalize topmargin-lg bottommargin button-rounded" target="_blank">View all Books</a></div>
            </div>

            <div class="video-wrap" style=" height: auto; position: absolute; left: 0; bottom: 0; z-index:1;">
                <div class="video-overlay" style="background: -moz-linear-gradient(top,  rgba(30,35,42,1) 21%,, rgba(30,35,42,0) 100%); background: -webkit-linear-gradient(top,  rgba(30,35,42,1) 21%,rgba(30,35,42,0) 100%); background: linear-gradient(to bottom,  rgba(30,35,42,1) 21%,rgba(30,35,42,0) 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#001e232a', endColorstr='#1e232a',GradientType=0 );">
                </div>
            </div>
        </div>


    </div>
</section>


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
                function () {
                    window.location = "<?php echo site_url("invite"); ?>";
                },
                function (dismiss) {
                    window.location = "<?php echo site_url("invite"); ?>";
                }
        )
    </script>
    <?php
}
?>
<?php
$this->load->view('layout/footer');
?>