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

if(isset($_GET['id'])){
    $patient_details = $db_handle->runQuery("SELECT * FROM `patients_data` WHERE `patient_id` = {$_GET['id']}");
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
                    <form action="Insert" method="post">
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

                                            <?php if (isset($_GET['id'])) {
                                                ?>
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
                                                <?php
                                            }?>
                                        </div>
                                    </div>
                                    <?php if (isset($_GET['id'])) {
                                    ?>
                                    <form action="Insert" method="POST">
                                        <div class="card mt-5">
                                            <div class="card-body">
                                                <input type="hidden" readonly="" class="form-control-plaintext" value="<?php if(isset($_GET['id'])) echo $patient_details[0]['patient_id']; else echo '';?>" name="patient_id">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group row mb-3">
                                                            <label for="staticEmail" class="col-sm-4 col-form-label">Patient's Name</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" readonly="" class="form-control-plaintext" value="<?php if(isset($_GET['id'])) echo $patient_details[0]['full_name']; else echo '';?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group row mb-3">
                                                            <label for="staticEmail" class="col-sm-4 col-form-label">Contact Number</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" readonly="" class="form-control-plaintext" value="<?php if(isset($_GET['id'])) echo $patient_details[0]['contact_number']; else echo '';?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group row mb-3">
                                                            <label for="staticEmail" class="col-sm-4 col-form-label">Age</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" readonly="" class="form-control-plaintext" value="<?php if(isset($_GET['id'])) echo $patient_details[0]['age']; else echo '';?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group row mb-3">
                                                            <label for="staticEmail" class="col-sm-4 col-form-label">Gender</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" readonly="" class="form-control-plaintext" value="<?php if(isset($_GET['id'])) echo $patient_details[0]['gender']; else echo '';?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mt-5">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label" for="patient_complain">Patient's General Data</label>
                                                            <textarea class="form-control" id="patient_data" name="patient_data" rows="5" style="color: #000000;"></textarea>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label class="form-label" for="patient_complain">Patient's Complains</label>
                                                            <textarea class="form-control" id="patient_complain" name="patient_complain" rows="5" style="color: #000000;"></textarea>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label class="form-label" for="medical_tests">Medical Tests / Diagnosis</label>
                                                            <textarea class="form-control" id="medical_tests" name="medical_tests" rows="5" style="color: #000000;"></textarea>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label class="form-label" for="doctor_observation">Doctor's Observation</label>
                                                            <textarea class="form-control" id="doctor_observation" name="doctor_observation" rows="5" style="color: #000000;"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-8">
                                                        <div id="medicine-container">
                                                            <div class="medicine-block">
                                                                <div class="form-group mb-3" style="position: relative;">
                                                                    <label class="form-label">Medicine Name </label>
                                                                    <input type="text" class="form-control medicine-input" placeholder="Medicine Name" name="medicine[]">
                                                                    <div class="suggestion-box bg-dark text-white border" style="position: absolute; width: 100%; z-index: 1000; display: none;"></div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <div class="form-group mb-3">
                                                                            <label class="form-label">Dose </label>
                                                                            <input type="text" class="form-control" placeholder="1 + 1 + 1" name="dose[]">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="form-group mb-3">
                                                                            <label class="form-label">Meal</label>
                                                                            <select class="form-select" name="meal[]">
                                                                                <option value="">-- Select Meal Time --</option>
                                                                                <option value="Before Meal">Before Meal</option>
                                                                                <option value="After Meal">After Meal</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group mb-3">
                                                                            <label class="form-label">Instruction / Duration</label>
                                                                            <input type="text" class="form-control" placeholder="X Days" name="duration[]">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <!-- Add Medicine Button -->
                                                        <button type="button" class="btn btn-theme me-2 mb-5 mt-3" id="add-medicine-btn">Add New Medicine</button>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label" for="doctor_observation">Advice or Instruction (if any)</label>
                                                            <textarea class="form-control" id="doctor_observation" name="doctor_advice" rows="5" style="color: #000000;"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-theme mb-5 mt-5" name="generate_prescription">Generate and Print</button>
                                    </form>
                                    <?php
                                    }
                                    ?>
                                </div>
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
    let editorInstances = {};

    document.querySelectorAll('textarea.form-control').forEach((textarea) => {
        ClassicEditor
            .create(textarea, {
                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote'],
                heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                    ]
                },
                ckfinder: {
                    uploadUrl: '/your-upload-endpoint'
                }
            })
            .then(editor => {
                editorInstances[textarea.id] = editor;

                editor.editing.view.change(writer => {
                    writer.setStyle('background-color', '#000', editor.editing.view.document.getRoot());
                    writer.setStyle('color', '#fff', editor.editing.view.document.getRoot());
                });
            })
            .catch(error => {
                console.error(error);
            });
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
        $(document).on('click', '.suggestion-item-contact', function() {
            var contact = $(this).text();
            var id = $(this).data('id');

            $('#contactSearch').val(contact);
            $('#suggestions').fadeOut();

            if (id) {
                // Get the current URL
                var url = new URL(window.location.href);

                // Set or update the `id` parameter
                url.searchParams.set('id', id);

                // Reload the page with the new URL
                window.location.href = url.toString();
            }
        });
    });

    function enableAutocomplete(input) {
        input.on('keyup', function () {
            const query = $(this).val();
            const suggestionBox = $(this).siblings('.suggestion-box');
            if (query.length >= 3) {
                $.ajax({
                    url: 'fetch_medicines.php',
                    type: 'POST',
                    data: { query: query },
                    success: function (data) {
                        suggestionBox.html(data).show();
                    }
                });
            } else {
                suggestionBox.hide();
            }
        });

        input.siblings('.suggestion-box').on('click', '.suggestion-item', function () {
            input.val($(this).text());
            $(this).parent().hide();
        });
    }

    $(document).ready(function () {
        // Enable autocomplete for initial block
        enableAutocomplete($('.medicine-input').first());

        $('#add-medicine-btn').click(function () {
            const newBlock = $('.medicine-block').first().clone();

            // Reset values
            newBlock.find('input, textarea').val('');
            newBlock.find('input[type=checkbox], input[type=radio]').prop('checked', false);
            newBlock.find('.suggestion-box').html('').hide();

            // Append and re-enable autocomplete
            $('#medicine-container').append(newBlock);
            enableAutocomplete(newBlock.find('.medicine-input'));
        });
    });
</script>
</body>

</html>

