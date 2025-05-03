<?php
session_start();
require_once('config/dbConfig.php');
$db_handle = new DBController();

if (isset($_POST['query'])) {
    $search = $_POST['query'];

    // SQL query to fetch matching medicines
    $query = "SELECT * FROM medicines WHERE name LIKE '%$search%' OR genre_name LIKE '%$search%' LIMIT 10";
    $fetch_medicines = $db_handle->runQuery($query);
    $fetch_medicines_no = $db_handle->numRows($query);

    if ($fetch_medicines_no > 0) {
        for ($i = 0; $i < $fetch_medicines_no; $i++) {
            $name = htmlspecialchars($fetch_medicines[$i]['name']);
            $dosage_form = htmlspecialchars($fetch_medicines[$i]['dosage_form']);
            $dose = htmlspecialchars($fetch_medicines[$i]['dose']);

            $suggestion = "$dosage_form $name ($dose)";
            echo '<div class="suggestion-item" style="padding:8px; cursor:pointer;">' . $suggestion . '</div>';
        }
    }
}