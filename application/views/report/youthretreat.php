

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
<section id="content-fluid">

    <div class="content-wrap pb-2" >

        <div class="section dark m-0 bg-transparent" style="padding: 0;">
            <div class="container">
                <h2><?php echo $title; ?></h2>

                <table id="example" class="table table-bordered" style="width:100%;    font-size: 11px;">


                    <thead>
                        <tr>
                            <th>S. No.</th>
                            <?php
                            foreach ($headings as $values) {
                                ?>
                                <th><?php echo $values ?></th>

                            <?php } ?>
                            <th>Pass</th>
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
                            foreach ($columns as $key => $value) {

                                if ($index2 > 0) {
                                    ?>
                                    <td><?php echo $rows[$value]; ?></td>
                                    <?php
                                }
                                $index2++;
                            }
                            $tableid = $rows["id"];
                            ?>
                            <td><a href="<?php echo site_url("Report/deleteData/$tablename/$tableid/$page"); ?>" class="btn btn-success">Pass</a></td>

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