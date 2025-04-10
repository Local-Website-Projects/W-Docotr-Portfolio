<?php
require_once('admin/config/dbConfig.php');
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");
$inserted_at = date("Y-m-d H:i:s");

$fetch_doctor_basic_info = $db_handle->runQuery("SELECT * FROM `doctors_basic_info` WHERE `doctors_id` = 1");
$fetch_doctor_social_media = $db_handle->runQuery("SELECT * FROM `doctors_social_media` WHERE `doctors_id` = 1");
$fetch_expertise = $db_handle->runQuery("select * from doctors_expertise where `doctors_id` = 1 order by expertise_id desc");
$fetch_expertise_no = $db_handle->numRows("select * from doctors_expertise where `doctors_id` = 1 order by expertise_id desc");

$fetch_experience = $db_handle->runQuery("SELECT * FROM `doctors_experience` ORDER BY `experience_id` DESC");
$fetch_experience_no = $db_handle->numRows("SELECT * FROM `doctors_experience` ORDER BY `experience_id` DESC");

?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Place favicon.ico in the root directory -->
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
<!-- CSS here -->
<link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/vendor/animate.min.css">
<link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
<link rel="stylesheet" href="assets/css/plugins/nice-select.css">
<link rel="stylesheet" href="assets/css/vendor/magnific-popup.css">
<link rel="stylesheet" href="assets/css/vendor/fontawesome-pro.css">
<link rel="stylesheet" href="assets/css/vendor/spacing.css">
<link rel="stylesheet" href="assets/css/vendor/remixicon.css">
<link rel="stylesheet" href="assets/css/main.css">