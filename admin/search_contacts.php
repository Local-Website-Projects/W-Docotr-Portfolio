<?php
session_start();
require_once('config/dbConfig.php');
$db_handle = new DBController();

if (isset($_POST['query'])) {
    $search = $_POST['query'];
    $fetch_contact_number = $db_handle->runQuery("SELECT * FROM patients_data WHERE contact_number LIKE '%$search%' LIMIT 10");
    $fetch_contact_number_no = $db_handle->numRows("SELECT * FROM patients_data WHERE contact_number LIKE '%$search%' LIMIT 10");

    if ($fetch_contact_number_no > 0) {
        for ($i = 0; $i < $fetch_contact_number_no; $i++) {
            $contact = htmlspecialchars($fetch_contact_number[$i]['contact_number']);
            $id = (int)$fetch_contact_number[$i]['patient_id']; // make sure it's a valid integer
            echo "<div class='suggestion-item-contact' data-id='{$id}' style='padding:8px; cursor:pointer;'>{$contact}</div>";
        }
    } else {
        echo '<div class="suggestion-item-contact" style="padding:8px;">No results found</div>';
    }
}