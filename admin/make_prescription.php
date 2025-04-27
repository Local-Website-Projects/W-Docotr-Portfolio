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
    <title>Make Prescription | Admin</title>
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
                        <strong>Success!</strong> Patient added successfully.
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
            <button type="button" class="btn btn-theme me-2 mb-5 mt-3" data-bs-toggle="modal" data-bs-target="#modalCoverExample">Add New Patient</button>
            <div class="modal modal-cover fade modal-lg" id="modalCoverExample">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Add New Patient!</h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form action="Insert" method="post">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="exampleFormControlInput1">Patient Full Name<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="full_name" placeholder="Patient Full Name" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label">Age <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="25 yr" name="patient_age" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label">Contact Number <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Contact Number" name="contact_number" required>
                                        </div>
                                        <label class="form-label">Gender <span class="text-danger">*</span></label>
                                            <div class="form-group mb-3">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" name="gender" type="radio" value="Male">
                                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" name="gender" type="radio" value="Female">
                                                    <label class="form-check-label" for="gender">Female</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" name="gender" type="radio" value="Other">
                                                    <label class="form-check-label" for="gender">Other</label>
                                                </div>
                                            </div>
                                        <div class="form-group mb-3 mt-5">
                                            <button type="submit" name="add_patient" class="btn btn-theme">Add</button>
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
                    <form action="Insert">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-5">
                                    <h4>Create Prescription</h4>
                                    <div class="card">
                                        <div class="card-header with-btn">
                                            <div class="card-header-btn">
                                                <a href="#" data-toggle="card-collapse" class="btn"><iconify-icon icon="material-symbols-light:stat-minus-1"></iconify-icon></a>
                                                <a href="#" data-toggle="card-expand" class="btn"><iconify-icon icon="material-symbols-light:fullscreen"></iconify-icon></a>
                                                <a href="#" data-toggle="card-remove" class="btn"><iconify-icon icon="material-symbols-light:close-rounded"></iconify-icon></a>
                                            </div>
                                        </div>
                                        <div class="card-body pb-2">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label" for="contactSearch">Start Typing Patient Registered Contact Number</label>
                                                            <input type="text" id="contactSearch" class="form-control" placeholder="Start Typing Patient Registered Contact Number" autocomplete="off">
                                                            <div id="suggestions" style="position: absolute; background: transparent; border: 1px solid #ccc; z-index: 1000; color: #ffffff;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="row mt-3">
                                                <div class="col-6">
                                                    <div class="list-group mb-3">
                                                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center text-body">
                                                            <img src="assets/img/user/user.jpg" alt="" class="w-35px h-35px object-fit-cover">
                                                            <div class="flex-fill ps-3">
                                                                <div class="fw-semibold d-flex align-items-center">
                                                                    Previous Prescription 1 <span class="fa fa-circle text-success fs-4px ms-2"></span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center text-body">
                                                            <img src="assets/img/user/user-2.jpg" alt="" class="w-35px h-35px object-fit-cover">
                                                            <div class="flex-fill ps-3">
                                                                <div class="fw-semibold d-flex align-items-center">
                                                                    Previous Prescription 2 <span class="fa fa-circle text-body text-opacity-50 fs-4px ms-2"></span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="card mt-5">
                                            <div class="card-body">
                                                <input type="hidden" readonly="" class="form-control-plaintext" value="Patient ID">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group row mb-3">
                                                            <label for="staticEmail" class="col-sm-4 col-form-label">Patient's Name</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" readonly="" class="form-control-plaintext" value="Test Patient">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group row mb-3">
                                                            <label for="staticEmail" class="col-sm-4 col-form-label">Contact Number</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" readonly="" class="form-control-plaintext" value="01729277768">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group row mb-3">
                                                            <label for="staticEmail" class="col-sm-4 col-form-label">Age</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" readonly="" class="form-control-plaintext" value="27 yr">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group row mb-3">
                                                            <label for="staticEmail" class="col-sm-4 col-form-label">Gender</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" readonly="" class="form-control-plaintext" value="Male">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="col-4">

                            </div>
                            <div class="col-8">

                            </div>
                        </div>
                    </form>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        console.log('Function works');
        $('#contactSearch').on('input', function() {
            var query = $(this).val();
            if (query.length > 2) { // Start searching after 2 characters
                $.ajax({
                    url: 'search_contacts.php',
                    method: 'POST',
                    data: { query: query },
                    success: function(data) {
                        $('#suggestions').fadeIn();
                        $('#suggestions').html(data);
                    }
                });
            } else {
                $('#suggestions').fadeOut();
            }
        });

        // When a suggestion is clicked
        $(document).on('click', '.suggestion-item', function() {
            $('#contactSearch').val($(this).text());
            $('#suggestions').fadeOut();
        });
    });
</script>
</body>

</html>

