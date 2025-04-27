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
            echo '<div class="suggestion-item" style="padding:8px; cursor:pointer;">' .
                htmlspecialchars($fetch_contact_number[$i]['contact_number']) .
                '</div>';
        }
    } else {
        echo '<div class="suggestion-item" style="padding:8px;">No results found</div>';
    }
}