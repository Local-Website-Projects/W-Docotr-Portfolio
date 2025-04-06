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
    <title>Expertise | Admin</title>
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
            <?php
            if(isset($_SESSION['status'])){
                if($_SESSION['status'] == 'Success'){
                    ?>
                    <div class="alert alert-success mt-3 mb-3">
                        <strong>Success!</strong> Information added successfully.
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
            }
            ?>
            <!-- modal-cover -->
            <button type="button" class="btn btn-theme me-2 mb-5 mt-3" data-bs-toggle="modal" data-bs-target="#modalCoverExample">Add Expertise</button>
            <div class="modal modal-cover fade" id="modalCoverExample">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Add New Expertise!</h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form action="Insert" method="post">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="exampleFormControlInput1">Expertise Name</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="expertise_name" placeholder="Expertise Name" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="exampleFormControlInput1">Success Percentage (without % sign)</label>
                                            <input type="number" class="form-control" id="exampleFormControlInput1" name="percent" placeholder="Enter percentage (80)" required>
                                        </div>
                                        <div class="form-group mb-3 mt-5">
                                            <button type="submit" name="add_expertise" class="btn btn-theme">Add</button>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="exampleFormControlInput1">Short Description</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="desc" placeholder="Write a single line description" required>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            if(isset($_GET['edit'])){
                $fetch_details = $db_handle->runQuery("select * from doctors_expertise where expertise_id = '".$_GET['edit']."'");
                ?>
                <div class="card">
                    <?php
                    if(isset($_SESSION['status'])){
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
                    }
                    ?>

                    <div class="card-header with-btn">
                        INSTALLATION
                        <div class="card-header-btn">
                            <a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
                            <a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
                            <a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
                        </div>
                    </div>
                    <div class="card-body pb-2 mb-5">
                        <form action="Update" method="post">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="exampleFormControlInput1">Expertise Name</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="expertise_name" placeholder="Expertise Name" value="<?php echo $fetch_details[0]['title'];?>" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="exampleFormControlInput1">Success Percentage (without % sign)</label>
                                        <input type="number" class="form-control" id="exampleFormControlInput1" name="percent" placeholder="Enter percentage (80)" value="<?php echo $fetch_details[0]['percentage'];?>" required>
                                    </div>
                                    <div class="form-group mb-3 mt-5">
                                        <button type="submit" name="update_expertise" class="btn btn-theme">Update Data</button>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="exampleFormControlInput1">Short Description</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="desc" placeholder="Write a single line description" value="<?php echo $fetch_details[0]['description'];?>" required>
                                    </div>
                                </div>
                                <input type="hidden" value="<?php echo $fetch_details[0]['expertise_id'];?>" name="expertise_id"/>

                            </div>
                        </form>
                    </div>
                </div>
                <?php
            }
            ?>

            <!-- BEGIN row -->
            <div class="row justify-content-center">
                <!-- BEGIN col-10 -->
                <div class="col-xl-12">
                    <!-- BEGIN row -->
                    <div class="row">
                        <!-- BEGIN col-9 -->
                        <div class="col-xl-12">
                            <h1 class="page-header">
                                Expertise <small>all your expertise goes here...</small>
                            </h1>

                            <hr class="mb-4 opacity-3" />

                            <!-- BEGIN #datatable -->
                            <div id="datatable" class="mb-5">
                                <div class="card">
                                    <div class="card-header with-btn">
                                        INSTALLATION
                                        <div class="card-header-btn">
                                            <a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
                                            <a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
                                            <a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <table id="datatableDefault" width="100%" class="table text-nowrap">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Expertise</th>
                                                <th>Short Description</th>
                                                <th>Success Percentage</th>
                                                <th>Edit</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $query = "SELECT * FROM doctors_expertise where doctors_id = '1'";
                                            $expertise = $db_handle->runQuery($query);
                                            $e_no = $db_handle->numRows($query);
                                            for($i=0; $i<$e_no; $i++){
                                                ?>
                                                <tr>
                                                    <td><?php echo $i+1;?></td>
                                                    <td><?php echo $expertise[$i]['title'];?></td>
                                                    <td><?php echo $expertise[$i]['description'];?></td>
                                                    <td><?php echo $expertise[$i]['percentage'];?></td>
                                                    <td><a href="Expertise?edit=<?php echo $expertise[$i]['expertise_id'];?>"><i class="fas fa-lg fa-fw me-2 fa-pencil-alt"></i></a></td>
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

