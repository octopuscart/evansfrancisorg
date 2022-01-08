<?php
$this->load->view('layout/header');
?>

<!-- Slider
============================================= -->
<section id="slider" class="slider-element include-header" style="background:#1E232A; height: 300px;">
    <div class="move-bg position-absolute w-100 h-100" style="top: 0; left: 0; background: url('<?php echo base_url(); ?>assets/writer/images/testimonials.jpg') center 40% no-repeat; background-size: cover;"></div>
    <div class="vertical-middle">
        <div class="container dark center">
            <h2 style="font-size: 44px;" class="mb-0 nott">Blog</h2>

        </div>
    </div>

  
</section>

<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap pt-0" style="background-color: #1E232A;">

        <!-- Latest All Books
        ============================================= -->
        <div class="section dark pb-0 m-0 bg-transparent">
            <div class="container clearfix">

                <div class="row gutter-40 col-mb-80" style="min-height: 600px">
                    <!-- Post Content
                    ============================================= -->
                    <div class="postcontent col-lg-9">

                        <div class="single-post mb-0 posts-md">

                            <!-- Single Post -->
                            <div class="entry clearfix">
                                <div class="entry-title title-xs nott">
                                    <h3><a href="#" class="text-white"><?php echo $selected_blog['title']; ?></a></h3>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="icon-calendar3"></i><?php echo $selected_blog['date']; ?></li>
                                    </ul>
                                </div>
                                <!-- Entry Content
                                ============================================= -->
                                <div class="entry-content clearfix">

                                    <img src="https://dds.christianappdevelopers.com/evans_laravel_admin/storage/app/public/<?php echo $selected_blog['image']; ?>" alt="Blog Single" class="alignleft" width="50%">


                                    <p>
                                        <?php echo $selected_blog['description']; ?>
                                    </p>

                                    <div class="clear"></div>



                                </div>
                            </div><!-- .entry end -->


                            <h4>Related Blogs:</h4>


                            <div class="related-posts row posts-md col-mb-30">
                                <?php
                                foreach ($blog_data as $key => $value) {
                                    $getdata = $this->input->get();
                                    $getdata['blog_index'] = $key;
                                    $getdataurl = http_build_query($getdata);
                                    $blogurl = (site_url("blog")."?" . $getdataurl);
                                    
                                    ?>
                                    <div class="entry col-12 col-md-6">
                                        <div class="grid-inner row align-items-center gutter-20">
                                            <div class="col-4">
                                                <div class="entry-image">
                                                    <a href="<?php echo $blogurl;?>"><img src="https://dds.christianappdevelopers.com/evans_laravel_admin/storage/app/public/<?php echo $value['image']; ?>" alt="Blog Single"></a>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="entry-title title-xs nott">
                                                    <h3><a href="<?php echo $blogurl;?>" class="text-white" style="font-size: 14px;"><?php echo $value['title']; ?></a></h3>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li><i class="icon-calendar3"></i><?php echo $value['date']; ?></li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>


                            <!-- Comments
                            ============================================= -->

                        </div>

                    </div><!-- .postcontent end -->

                    <!-- Sidebar
                    ============================================= -->
                    <div class="sidebar col-lg-3">
                        <div class="sidebar-widgets-wrap">

                            <div id="" class="widget  clearfix">

                                <h4>Months</h4>
                                <!--                                <h5>Subscribe to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>-->
                                <form action="#" class="my-0">
                                    <div class="input-group mx-auto">
                                        <div class="col-12 form-group">
                                            <label class="nott" for="donation_period"></label>
                                            <select id="cars"  name="blogs-by-month"  class="sm-form-control" >
                                                <?php foreach ($data as $key => $value) { ?>


                                                    <option <?php echo $value == $select_month ? 'selected' : '' ?> value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <button class="btn btn-success" type="submit" name="submit" style="border-radius: 0.25rem;">Submit</button>
                                    </div>
                                </form>
                            </div>









                        </div>
                    </div><!-- .sidebar end -->
                </div>

            </div>

        </div>
    </div>
</section><!-- #content end -->

<!-- Footer
============================================= -->

<?php
$this->load->view('layout/footer');
?>

