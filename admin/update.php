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


if(isset($_POST['update_basic_info'])){
    $id = $db_handle->checkValue($_POST['id']);
    $name = $db_handle->checkValue($_POST['name']);
    $birth_place = $db_handle->checkValue($_POST['birth_place']);
    $email = $db_handle->checkValue($_POST['email']);
    $age = $db_handle->checkValue($_POST['age']);
    $contact_number = $db_handle->checkValue($_POST['contact_number']);

    $update_basic_info = $db_handle->insertQuery("UPDATE `doctors_basic_info` SET `doctors_name`='$name',`doctors_age`='$age',`doctors_birthplace`='$birth_place',`doctors_phone_number`='$birth_place',`doctors_email`='$email',`updated_at`='$inserted_at' WHERE `doctors_id` = '$id'");
    if($update_basic_info){
        $_SESSION['status'] = 'Success';
        echo "
        <script>
        window.location.href = 'Basic-Info';
</script>
        ";
    } else {
        $_SESSION['status'] = 'Error';
        echo "
        <script>
        window.location.href = 'Basic-Info';
</script>
        ";
    }
}