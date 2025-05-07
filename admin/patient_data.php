<?php
session_start();
require_once('config/dbConfig.php');
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");
$inserted_at = date("Y-m-d H:i:s");
if(!isset($_SESSION['admin'])){
    echo "
    <script>window.location.href = 'Login';</script>
    ";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Patients | Admin</title>
    <!-- ================== BEGIN core-css ================== -->
    <link href="assets/css/vendor.min.css" rel="stylesheet" />
    <link href="assets/css/app.min.css" rel="stylesheet" />
    <!-- ================== END core-css ================== -->

    <link href="assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" />
    <link href="assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
    <link href="assets/plugins/bootstrap-table/dist/bootstrap-table.min.css" rel="stylesheet" />

</head>
<body >
<!-- BEGIN #loader -->
<?php include ('includes/preloader.php');?>
<!-- END #loader -->

<!-- BEGIN #app -->
<div id="app" class="app">
    <!-- BEGIN #header -->
    <?php include ('includes/headerfile.php');?>
    <!-- END #header -->

    <!-- BEGIN #sidebar -->
    <?php include ('includes/sidemenu.php');?>
    <!-- END #sidebar -->

    <!-- BEGIN mobile-sidebar-backdrop -->
    <?php include ('includes/mobilebutton.php');?>
    <!-- END mobile-sidebar-backdrop -->

    <!-- BEGIN #content -->
    <div id="content" class="app-content">
        <!-- BEGIN container -->
        <div class="container">

            <!-- BEGIN row -->
            <div class="row justify-content-center">
                <!-- BEGIN col-10 -->
                <div class="col-xl-12">
                    <!-- BEGIN row -->
                    <div class="row">
                        <!-- BEGIN col-12 -->
                        <div class="col-xl-12">
                            <h1 class="page-header">
                                Patient Lists <small>all your patient data goes here...</small>
                            </h1>

                            <hr class="mb-4 opacity-3" />

                            <!-- BEGIN #datatable -->
                            <div id="datatable" class="mb-5">
                                    <div class="card-body">
                                        <table id="datatableDefault" width="100%" class="table text-nowrap">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Contact Number</th>
                                                <th>Age</th>
                                                <th>Gender</th>
                                                <th>Total Visit</th>
                                                <th>Date of Last Visit</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $fetch_patient = $db_handle->runQuery("select * from patients_data order by patient_id DESC");
                                            $fetch_patient_no = $db_handle->numRows("select * from patients_data order by patient_id DESC");
                                            for ($i=0; $i < $fetch_patient_no; $i++) {
                                                $id = $fetch_patient[$i]['patient_id'];
                                                $fetch_prescription_data = $db_handle->runQuery("select * from prescription_data where patient_id='$id' order by prescription_id desc limit 1");
                                                $fetch_prescription_data_no = $db_handle->numRows("select * from prescription_data where patient_id='$id'");
                                                ?>
                                                <tr>
                                                    <td><?php echo $i+1;?>.</td>
                                                    <td><?php echo $fetch_patient[$i]['full_name'];?></td>
                                                    <td><?php echo $fetch_patient[$i]['contact_number'];?></td>
                                                    <td><?php echo $fetch_patient[$i]['age'];?></td>
                                                    <td><?php echo $fetch_patient[$i]['gender'];?></td>
                                                    <td><?php echo $fetch_prescription_data_no;?></td>
                                                    <td><?php $date = new DateTime($fetch_prescription_data[0]['inserted_at']);
                                                        echo $date->format('d M, Y');?></td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END #datatable -->
                        </div>
                        <!-- END col-12-->
                    </div>
                    <!-- END row -->
                </div>
                <!-- END col-10 -->
            </div>
            <!-- END row -->
        </div>
        <!-- END container -->
    </div>
    <!-- END #content -->

    <!-- BEGIN btn-scroll-top -->
    <?php include ('includes/scrolltop.php');?>
    <!-- END btn-scroll-top -->

    <!-- BEGIN theme-panel -->
    <?php include ('includes/themecolor.php');?>
    <!-- END theme-panel -->
</div>
<!-- END #app -->

<!-- ================== BEGIN core-js ================== -->
<script src="code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js" type="db2b09135a08fc45daa6eab4-text/javascript"></script>
<script src="assets/js/vendor.min.js" type="db2b09135a08fc45daa6eab4-text/javascript"></script>
<script src="assets/js/app.min.js" type="db2b09135a08fc45daa6eab4-text/javascript"></script>
<!-- ================== END core-js ================== -->

<script src="assets/plugins/%40highlightjs/cdn-assets/highlight.min.js" type="db2b09135a08fc45daa6eab4-text/javascript"></script>
<script src="assets/js/demo/highlightjs.demo.js" type="db2b09135a08fc45daa6eab4-text/javascript"></script>
<script src="assets/plugins/datatables.net/js/dataTables.min.js" type="db2b09135a08fc45daa6eab4-text/javascript"></script>
<script src="assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js" type="db2b09135a08fc45daa6eab4-text/javascript"></script>
<script src="assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js" type="db2b09135a08fc45daa6eab4-text/javascript"></script>
<script src="assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js" type="db2b09135a08fc45daa6eab4-text/javascript"></script>
<script src="assets/plugins/datatables.net-buttons/js/buttons.html5.min.js" type="db2b09135a08fc45daa6eab4-text/javascript"></script>
<script src="assets/plugins/datatables.net-buttons/js/buttons.print.min.js" type="db2b09135a08fc45daa6eab4-text/javascript"></script>
<script src="assets/plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js" type="db2b09135a08fc45daa6eab4-text/javascript"></script>
<script src="assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js" type="db2b09135a08fc45daa6eab4-text/javascript"></script>
<script src="assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js" type="db2b09135a08fc45daa6eab4-text/javascript"></script>
<script src="assets/plugins/bootstrap-table/dist/bootstrap-table.min.js" type="db2b09135a08fc45daa6eab4-text/javascript"></script>
<script src="assets/js/demo/table-plugins.demo.js" type="db2b09135a08fc45daa6eab4-text/javascript"></script>
<script src="assets/js/demo/sidebar-scrollspy.demo.js" type="db2b09135a08fc45daa6eab4-text/javascript"></script>

<script src="cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="db2b09135a08fc45daa6eab4-|49" defer></script>
</body>

</html>

