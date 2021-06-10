

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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">

        <div class="collapse navbar-collapse" id="navbarNav">
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

            </ul>
        </div>
    </div>
</nav>

<link rel="stylesheet" href="    https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" type="text/css" />
<!-- Slider
                ============================================= -->

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap pb-2" >

        <div class="section dark m-0 bg-transparent" style="padding: 0;">
            <div class="container">
                <h2><?php echo $title; ?></h2>

                <table id="example" class="table table-bordered" style="width:100%">


                    <thead>
                        <tr>

                            <?php
                            foreach ($headings as $values) {
                                ?>
                                <th><?php echo $values ?></th>

                            <?php } ?>
                        </tr>
                    </thead>
                    <?php
                    foreach ($data as $rows) {
                        ?>
                        <tr>
                            <?php
                            foreach ($rows as $value) {
                                ?>
                                <td><?php echo $value ?></td>
                            <?php } ?>

                        </tr>
                    <?php } ?>
                </table>

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