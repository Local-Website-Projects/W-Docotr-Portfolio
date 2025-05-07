<?php
session_start();
require_once('config/dbConfig.php');
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");
$inserted_at = date("Y-m-d H:i:s");
if($_GET['id']){
    $prescription_id = $_GET['id'];
    $fetch_prescription_info = $db_handle->runQuery("SELECT * FROM `prescription_data` WHERE `prescription_id` = '$prescription_id'");
    $patient_id = $fetch_prescription_info[0]["patient_id"];
    $fetch_patient_data = $db_handle->runQuery("SELECT * FROM `patients_data` WHERE `patient_id` = '$patient_id'");
} else {
    echo "
    <script>
    window.location.href='Make-Prescription';
</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Doctor Prescription</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #eee;
        }

        #prescription-wrapper {
            width: 210mm;
            height: 297mm;
            margin: 0 auto;
            overflow: hidden;
            background: #eee;
            position: relative;
        }

        #scale-container {
            transform-origin: top left;
            width: fit-content;
        }

        .prescription {
            width: 210mm;
            background: #fff;
            padding: 30px 40px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            border-bottom: 2px solid #0a5275;
            padding-bottom: 10px;
        }

        .doctor-info h1 {
            margin: 0;
            font-size: 26px;
            color: #0a5275;
        }

        .doctor-info p {
            margin: 4px 0;
            font-size: 14px;
        }

        .contact-info {
            text-align: right;
        }

        .contact-info p {
            margin: 4px 0;
            font-size: 14px;
        }

        .patient-info {
            font-size: 16px;
            font-weight: 500;
            padding: 10px;
            background-color: #f2f8fc;
            border: 1px solid #cde5f3;
            border-radius: 6px;
        }

        .content {
            display: flex;
            gap: 20px;
            flex-grow: 1;
        }

        .left-side {
            flex: 2;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .left-section {
            padding: 10px;
            border: 1px solid #cde5f3;
            border-radius: 8px;
            min-height: 80px;
        }

        .left-section h3 {
            margin: 0 0 5px;
            font-size: 16px;
            color: #0a5275;
        }

        .left-section p {
            margin: 0;
            font-size: 14px;
        }

        .right-side {
            flex: 2;
            padding-left: 15px;
            border-left: 2px solid #0a5275;
        }

        .right-side h3 {
            margin-top: 0;
            font-size: 16px;
            color: #856404;
        }

        .medicine {
            margin-bottom: 15px;
            font-size: 14px;
            line-height: 1.4;
        }

        .medicine strong {
            font-size: 15px;
            color: #0a5275;
        }

        .footer {
            border-top: 1px solid #ccc;
            padding-top: 10px;
            text-align: center;
            font-size: 13px;
            color: #777;
        }
    </style>
</head>
<body>
<div id="prescription-wrapper">
    <div id="scale-container">
        <div class="prescription">
            <div class="header">
                <div class="doctor-info">
                    <h1>Dr. John Smith</h1>
                    <p>MBBS, MD - General Physician</p>
                    <p>Reg No: 123456</p>
                </div>
                <div class="contact-info">
                    <p>Email: john.smith@clinic.com</p>
                    <p>ABC Health Clinic</p>
                    <p>123 Wellness Ave, New York</p>
                    <p>Date: <?php echo date('d F, Y', strtotime($fetch_prescription_info[0]['inserted_at'])); ?></p>
                </div>
            </div>

            <div class="patient-info">
                <?php ?>
                Name: <?php echo $fetch_patient_data[0]['full_name'];?> &nbsp; | &nbsp; Age: <?php echo $fetch_patient_data[0]['age'];?> &nbsp; | &nbsp; Gender: <?php echo $fetch_patient_data[0]['gender'];?> &nbsp; | &nbsp; Contact: <?php
                echo $fetch_patient_data[0]['contact_number'];
                ?>
            </div>

            <div class="content">
                <div class="left-side">
                    <div class="left-section">
                        <h3>Vital Signs</h3>
                        <?php
                        $fetch_general = $db_handle->runQuery("SELECT * FROM `prescription_general_info` WHERE `prescription_id` = '$prescription_id'");
                        echo $fetch_general[0]['patient_data'];
                        ?>
                    </div>
                    <div class="left-section">
                        <h3>Presenting Complaints</h3>
                        <?php
                        $fetch_symptoms = $db_handle->runQuery("SELECT * FROM `prescription_patient_symptoms` WHERE `prescription_id` = '$prescription_id'");
                        echo $fetch_symptoms[0]['patient_symptoms'];
                        ?>
                    </div>
                    <div class="left-section">
                        <h3>Recommended Investigations</h3>
                        <?php
                        $fetch_tests = $db_handle->runQuery("SELECT * FROM `prescription_test_info` WHERE `prescription_id` = '$prescription_id'");
                        echo $fetch_tests[0]['medical_test'];
                        ?>
                    </div>
                    <div class="left-section">
                        <h3>Clinical Observations</h3>
                        <?php
                        $fetch_advice = $db_handle->runQuery("SELECT * FROM `prescription_doctor_observation` WHERE `prescription_id` = '$prescription_id'");
                        echo $fetch_advice[0]['doctor_observation'];
                        ?>
                    </div>
                </div>

                <div class="right-side">
                    <h3>Prescribed Medicines</h3>
                        <?php
                        $medicines = explode(',', $fetch_prescription_info[0]['medicine_name']);
                        $doses     = explode(',',  $fetch_prescription_info[0]['dose']);
                        $timings   = explode(',', $fetch_prescription_info[0]['meal']);
                        $durations = explode(',', $fetch_prescription_info[0]['duration']);

                        // Count how many medicines
                        $count = count($medicines);

                        echo '<ol>';

                        for ($i = 0; $i < $count; $i++) {
                            echo '<li class="medicine">';
                            echo '<strong>' . trim($medicines[$i]) . '</strong><br>';
                            echo trim($doses[$i]) . ' &nbsp; | &nbsp; ' . trim($timings[$i]) . '<br>';
                            echo trim($durations[$i]);
                            echo '</li>';
                        }

                        echo '</ol>';
                        ?>
                </div>
            </div>

                <?php
                $fetch_instruction = $db_handle->runQuery("SELECT * FROM `prescription_advice` WHERE `prescription_id`");
                if($fetch_instruction[0]['doctors_advice'] != NULL){
                    ?>
                    <div class="patient-info">
                        <?php echo $fetch_instruction[0]['doctors_advice'];?>
                    </div>
                    <?php
                }

                ?>
            <div class="footer">
                Made with FrogBID
            </div>
        </div>
    </div>
</div>

<script>
    function scaleToFit() {
        const wrapper = document.getElementById('prescription-wrapper');
        const scaleContainer = document.getElementById('scale-container');
        const prescription = scaleContainer.querySelector('.prescription');

        scaleContainer.style.transform = 'scale(1)';
        const maxHeight = wrapper.clientHeight;
        const actualHeight = prescription.offsetHeight;

        if (actualHeight > maxHeight) {
            const scale = maxHeight / actualHeight;
            scaleContainer.style.transform = `scale(${scale})`;
        }
    }

    window.addEventListener('load', scaleToFit);
    window.addEventListener('resize', scaleToFit);
</script>
</body>
</html>
