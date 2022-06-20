

<?php
$jsarray = [
    "https://code.jquery.com/jquery-3.5.1.js",
    "https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js",
    "https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js",
    "https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js",
    "https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js",
    "https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js",
    "https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js",
    "https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js",
    "https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js",
];
foreach ($jsarray as $key => $value) {
    ?>
    <script src="<?php echo $value; ?>" ></script>

    <?php
}
?>
<style>
    a.nav-link.active {
        font-weight: 600;
        border-bottom: 1px solid #fff;
    }
</style>

<title><?php echo $title; ?></title>


<link rel="stylesheet" href="    https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" type="text/css" />
<!-- Slider
                ============================================= -->

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap pb-2" >

        <div class="section dark m-0 bg-transparent row" style="padding: 0;">
            <div class="col-md-2">
 
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url("Report/contact_us"); ?>">Contact Report</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url("Report/invite"); ?>">Invite Report</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url("Report/pillar_of_cloud"); ?>">Pillar Of Cloud Report</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url("Report/pillar_of_fire"); ?>">Pillar Of Fire Report</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url("Report/website_subscribe"); ?>">Subscribe Report</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url("Report/child_fee"); ?>">Child Fee Report</a>
                </li>
                     <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url("Report/church_rent"); ?>">Church Rent Report</a>
                </li>
                     <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url("Report/family_grocery"); ?>">Family Grocery Report</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url("Report/website_pastor"); ?>">Pastor Report</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url("Report/feebook_subscribe"); ?>">Free Book &  Subscription</a>
                </li>
                
            </ul>

            </div>
            <div class="col-md-10">
            <div class="container">
                <h2><?php echo $title; ?></h2>

                <table id="example" class="table table-bordered" style="width:100%">


                    <thead>
                        <tr>
                            <th>S. No.</th>
                            <?php
                            foreach ($headings as $values) {
                                ?>
                                <th><?php echo $values ?></th>

                            <?php } ?>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <?php
                    $index = 1;
                    foreach ($data as $rows) {
                        ?>
                        <tr>
                            <td><?php echo $index; ?></td>
                            <?php
                            $index2 = 0;
                            foreach ($rows as $key => $value) {

                                if ($index2 > 0) {
                                    ?>
                                    <td><?php echo $value ?></td>
                                    <?php
                                }
                                $index2++;
                            }
                            $tableid = $rows["id"];
                            ?>
                            <td><a href="<?php echo site_url("Report/deleteData/$tablename/$tableid/$page"); ?>" class="btn btn-danger">Delete</a></td>

                        </tr>
                        <?php
                        $index++;
                    }
                    ?>
                </table>

            </div>
            </div>
        </div>
    </div>
</section>


<script>
    $(function () {


        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf'
            ]
        });

        $(".nav-link").each(function (index, ele) {
            if (($(ele).attr("href")) == window.location.href) {
                $(ele).addClass("active");
            }
        })

    })



</script>