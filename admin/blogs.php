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
    <title>Blogs | Admin</title>
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
            if(isset($_SESSION['dlt_status']) && $_SESSION['dlt_status'] == 'Success'){
                ?>
                <div class="alert alert-success mt-3 mb-3">
                    <strong>Success!</strong> Information deleted successfully.
                </div>
                <?php
                unset($_SESSION['dlt_status']);
            }
            ?>


            <!-- modal-cover -->
            <button type="button" class="btn btn-theme me-2 mb-5 mt-3" data-bs-toggle="modal" data-bs-target="#modalCoverExample">Add Blog</button>
            <div class="modal modal-cover fade modal-lg" id="modalCoverExample">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Add New Blog!</h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form action="Insert" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="exampleFormControlInput1">Blog Title <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="blog_title" placeholder="Blog Title" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="defaultFile">Blog Image (1200*650) <span class="text-danger">*</span></label>
                                            <input type="file" class="form-control" id="defaultFile" name="image" accept="image/*" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label">Publish Date <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="datepicker-default" placeholder="dd/mm/yyyy" name="publish_date" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="editor">Blog Body <span class="text-danger">*</span></label>
                                            <textarea class="form-control" id="editor" name="blog_body" rows="5" style="color: #000000;" ></textarea>
                                        </div>
                                        <div class="form-group mb-3 mt-5">
                                            <button type="submit" name="add_blog" class="btn btn-theme">Add</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BEGIN row -->
            <div class="row justify-content-center">
                <!-- BEGIN col-10 -->
                <div class="col-xl-12">
                    <!-- BEGIN row -->
                    <div class="row">
                        <!-- BEGIN col-9 -->
                        <div class="col-xl-12">
                            <h1 class="page-header">
                                Blogs <small>all your blogs goes here...</small>
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
                                                <th>Blog Title</th>
                                                <th>Publish Date</th>
                                                <th>Blog Image</th>
                                                <th>Edit</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $query = "SELECT * FROM doctors_blog where doctor_id = '1'";
                                            $blogs = $db_handle->runQuery($query);
                                            $b_no = $db_handle->numRows($query);
                                            for($i=0; $i<$b_no; $i++){
                                                ?>
                                                <tr>
                                                    <td><?php echo $i+1;?></td>
                                                    <td><?php echo $blogs[$i]['blog_title'];?></td>
                                                    <td><?php echo $blogs[$i]['publish_date'];?></td>
                                                    <td><img style="height: 50px; width: auto" src="../<?php echo $blogs[$i]['blog_image'];?>"/> </td>
                                                    <td>
                                                        <a href="Delete?dlt=<?php echo $blogs[$i]['blog_id'];?>"><i class="fas fa-lg fa-fw me-2 fa-trash-alt"></i></a>
                                                    </td>
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
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<script>
    let editorInstance;

    ClassicEditor
        .create(document.querySelector('#editor'), {
            toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote'],
            // Custom styling inside the editor
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                ]
            },
            // Custom CSS injected into the editable area
            ckfinder: {
                uploadUrl: '/your-upload-endpoint' // optional
            },
            // This is the important part:
            editorConfig: function(config) {
                config.uiColor = '#000000'; // For CKEditor 4 only
            }
        })
        .then(editor => {
            editorInstance = editor;

            // Apply custom styles to the editor content area
            editor.editing.view.change(writer => {
                writer.setStyle('background-color', '#000', editor.editing.view.document.getRoot());
                writer.setStyle('color', '#fff', editor.editing.view.document.getRoot());
            });
        })
        .catch(error => {
            console.error(error);
        });
</script>
</body>

</html>

