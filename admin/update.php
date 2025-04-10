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
    $year_exp = $db_handle->checkValue($_POST['year_exp']);

    $update_basic_info = $db_handle->insertQuery("UPDATE `doctors_basic_info` SET `doctors_name`='$name',`doctors_age`='$age',`doctors_birthplace`='$birth_place',`doctors_phone_number`='$contact_number',`doctors_email`='$email',`updated_at`='$inserted_at', `doctors_years_of_experience` = '$year_exp' WHERE `doctors_id` = '$id'");
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


if(isset($_POST['update_social_media'])){
    $id = $db_handle->checkValue($_POST['id']);
    $whatsapp = $db_handle->checkValue($_POST['whatsapp']);
    $facebook = $db_handle->checkValue($_POST['facebook']);
    $linkedin = $db_handle->checkValue($_POST['linkedin']);
    $instagram = $db_handle->checkValue($_POST['instagram']);

    $update_social_media = $db_handle->insertQuery("UPDATE `doctors_social_media` SET `whatsapp`='$whatsapp',`facebook`='$facebook',`linkedin`='$linkedin',`instagram`='$instagram', `updated_at`='$inserted_at' WHERE `doctors_id` = '$id'");
    if($update_social_media){
        $_SESSION['status'] = 'Success';
        echo "
        <script>
        window.location.href = 'Social-Media';
</script>
        ";
    } else {
        $_SESSION['status'] = 'Error';
        echo "
        <script>
        window.location.href = 'Social-Media';
</script>
        ";
    }
}


if(isset($_POST['update_expertise'])){
    $id = $db_handle->checkValue($_POST['expertise_id']);
    $expertise_name = $db_handle->checkValue($_POST['expertise_name']);
    $percent = $db_handle->checkValue($_POST['percent']);
    $desc = $db_handle->checkValue($_POST['desc']);

    $update_expertise = $db_handle->insertQuery("UPDATE `doctors_expertise` SET `title`='$expertise_name',`description`='$desc',`percentage`='$percent',`updated_at`='$inserted_at' WHERE `expertise_id` = '$id'");
    if($update_expertise){
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

if(isset($_POST['update_experience'])){
    $id = $db_handle->checkValue($_POST['experience_id']);
    $experience_title = $db_handle->checkValue($_POST['experience_title']);
    $short_desc = $db_handle->checkValue($_POST['short_desc']);
    $duration = $db_handle->checkValue($_POST['duration']);

    $update_experience = $db_handle->insertQuery("UPDATE `doctors_experience` SET `experience_title`='$experience_title',`short_desc`='$short_desc',`duration`='$duration',`updated_at`='$inserted_at' WHERE `experience_id` = '$id'");
    if($update_experience){
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


if(isset($_POST['update_service'])){
    $id = $db_handle->checkValue($_POST['experience_id']);
    $service_title = $db_handle->checkValue($_POST['service_title']);
    $short_desc = $db_handle->checkValue($_POST['doctor_service_id']);

    $update_service = $db_handle->insertQuery("UPDATE `doctors_services` SET `service_title`='$service_title',`short_desc`='$short_desc',`updated_at`='$inserted_at' WHERE `doctor_service_id`='$id'");
    if($update_service){
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