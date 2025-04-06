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


if(isset($_POST['add_expertise'])){
    $expertise_name = $db_handle->checkValue($_POST['expertise_name']);
    $percent = $db_handle->checkValue($_POST['percent']);
    $desc = $db_handle->checkValue($_POST['desc']);

    $insert_expertise = $db_handle->insertQuery("INSERT INTO `doctors_expertise`(`title`, `description`, `percentage`, `inserted_at`) VALUES ('$expertise_name','$desc','$percent','$inserted_at')");

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