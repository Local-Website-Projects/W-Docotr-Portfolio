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

$admin = $_SESSION['admin'];


if(isset($_POST['add_expertise'])){
    $expertise_name = $db_handle->checkValue($_POST['expertise_name']);
    $percent = $db_handle->checkValue($_POST['percent']);
    $desc = $db_handle->checkValue($_POST['desc']);

    $insert_expertise = $db_handle->insertQuery("INSERT INTO `doctors_expertise`(`title`, `doctors_id`, `description`, `percentage`, `inserted_at`) VALUES ('$expertise_name','$admin','$desc','$percent','$inserted_at')");

    if($insert_expertise){
        $_SESSION['status'] = 'Success';
        echo "
        <script>
        window.location.href = 'Expertise';
</script>
        ";
    } else {
        $_SESSION['status'] = 'Error';
        echo "
        <script>
        window.location.href = 'Expertise';
</script>
        ";
    }
}

if(isset($_POST['add_experience'])){
    $experience_title = $db_handle->checkValue($_POST['experience_title']);
    $short_desc = $db_handle->checkValue($_POST['short_desc']);
    $duration = $db_handle->checkValue($_POST['duration']);

    $insert_experience = $db_handle->insertQuery("INSERT INTO `doctors_experience`(`doctors_id`, `experience_title`, `short_desc`, `duration`, `inserted_at`) VALUES ('$admin','$experience_title','$short_desc','$duration','$inserted_at')");
    if($insert_experience){
        $_SESSION['status'] = 'Success';
        echo "
        <script>
        window.location.href = 'Experience';
</script>
        ";
    } else {
        $_SESSION['status'] = 'Error';
        echo "
        <script>
        window.location.href = 'Experience';
</script>
        ";
    }
}

if(isset($_POST['add_service'])){
    $service_title = $db_handle->checkValue($_POST['service_title']);
    $short_desc = $db_handle->checkValue($_POST['short_desc']);

    $insert_service = $db_handle->insertQuery("INSERT INTO `doctors_services`(`doctor_id`, `service_title`, `short_desc`, `inserted_at`) VALUES ('$admin','$service_title','$short_desc','$inserted_at')");
    if($insert_service){
        $_SESSION['status'] = 'Success';
        echo "
        <script>
        window.location.href = 'Services';
</script>
        ";
    } else {
        $_SESSION['status'] = 'Error';
        echo "
        <script>
        window.location.href = 'Services';
</script>
        ";
    }
}


if(isset($_POST['add_blog'])){
    $blog_title = $db_handle->checkValue($_POST['blog_title']);
    $publish_date = $db_handle->checkValue($_POST['publish_date']);
    $blog_body = $db_handle->checkValue($_POST['blog_body']);

    $image = '';
    if (!empty($_FILES['image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp  = $_FILES['image']['tmp_name'];
        move_uploaded_file($file_tmp, "../blog_image/" . $file_name);
        $image = "blog_image/" . $file_name;
    }

    $insert_blog = $db_handle->insertQuery("INSERT INTO `doctors_blog`(`doctor_id`, `blog_title`, `publish_date`, `blog_body`,`blog_image`, `inserted_at`) VALUES ('$admin','$blog_title','$publish_date','$blog_body','$image','$inserted_at')");
    if($insert_blog){
        $_SESSION['status'] = 'Success';
        echo "
        <script>
        window.location.href = 'Blogs';
</script>
        ";
    } else {
        $_SESSION['status'] = 'Error';
        echo "
        <script>
        window.location.href = 'Blogs';
</script>
        ";
    }
}


if(isset($_POST['add_patient'])){
    $full_name = $db_handle->checkValue($_POST['full_name']);
    $patient_age = $db_handle->checkValue($_POST['patient_age']);
    $contact_number = $db_handle->checkValue($_POST['contact_number']);
    $gender = $db_handle->checkValue($_POST['gender']);

    $insert_patient = $db_handle->insertQuery("INSERT INTO `patients_data`(`full_name`, `age`, `contact_number`, `gender`, `inserted_at`) VALUES ('$full_name','$patient_age','$contact_number','$gender','$inserted_at')");
    if($insert_patient){
        $_SESSION['status'] = 'Success';
        echo "
        <script>
        window.location.href = 'Make-Prescription';
</script>
        ";
    } else {
        $_SESSION['status'] = 'Error';
        echo "
        <script>
        window.location.href = 'Make-Prescription';
</script>
        ";
    }
}