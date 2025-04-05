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

$fetch_doctor_data = $db_handle->runQuery("SELECT * FROM `doctors_basic_info` where doctors_id = '".$_SESSION['admin']."'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Basic Info | Admin</title>
    <?php include ('includes/css.php');?>

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
                <div class="col-xl-10">
                    <!-- BEGIN row -->
                    <div class="row">
                        <!-- BEGIN col-9 -->
                        <div class="col-xl-12">

                            <h1 class="page-header">
                                Basic Information <small>you can see and update your basic information from here...</small>
                            </h1>

                            <hr class="mb-4 opacity-3" />

                            <!-- BEGIN #formControls -->
                            <div id="formControls" class="mb-5">
                                <div class="card">
                                    <?php
                                    if($_SESSION['status'] == 'Success'){
                                        ?>
                                        <div class="alert alert-success mt-3 mb-3">
                                            <strong>Success!</strong> Information updated successfully.
                                        </div>
                                        <?php
                                    } if($_SESSION['status'] == 'Error'){
                                        ?>
                                        <div class="alert alert-danger mt-3 mb-3">
                                            <strong>Sorry!</strong> Something went wrong.
                                        </div>
                                        <?php
                                    }
                                    unset($_SESSION['status']);
                                    ?>

                                    <div class="card-header with-btn">
                                        INSTALLATION
                                        <div class="card-header-btn">
                                            <a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
                                            <a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
                                            <a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
                                        </div>
                                    </div>
                                    <div class="card-body pb-2">
                                        <form action="Update" method="post">
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="form-group mb-3">
                                                        <label class="form-label" for="exampleFormControlInput1">Name</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Full Name" value="<?php echo $fetch_doctor_data[0]['doctors_name'];?>" required>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label class="form-label" for="exampleFormControlInput1">Birth Place</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="birth_place" placeholder="Birth Place (City, Country)" value="<?php echo $fetch_doctor_data[0]['doctors_birthplace'];?>" required>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label class="form-label" for="exampleFormControlInput1">Email</label>
                                                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="Email (name@example.com)" value="<?php echo $fetch_doctor_data[0]['doctors_email'];?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group mb-3">
                                                        <label class="form-label" for="exampleFormControlInput1">Age</label>
                                                        <input type="number" class="form-control" id="exampleFormControlInput1" name="age" placeholder="Age (35)" value="<?php echo $fetch_doctor_data[0]['doctors_age'];?>" required>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label class="form-label" for="exampleFormControlInput1">Contact Number</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="contact_number" placeholder="Contact Number" value="<?php echo $fetch_doctor_data[0]['doctors_phone_number'];?>" required>
                                                    </div>
                                                    <input type="hidden" value="<?php echo $_SESSION['admin'];?>" name="id"/>
                                                    <div class="form-group mb-3 mt-5">
                                                        <button type="submit" name="update_basic_info" class="btn btn-theme">Update</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- END #formControls -->
                        </div>
                        <!-- END col-9-->
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

<?php include ('includes/js.php');?>
</body>

</html>

