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