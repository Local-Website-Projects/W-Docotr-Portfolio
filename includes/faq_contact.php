<!-- faq area start -->
<section class="secondary-bg section-space">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-xl-6 col-lg-6">
                <div class="rs-faq-wrapper rs-faq-three wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="1s">
                    <div class="rs-section-title-wrapper section-title-space">
                                <span class="rs-section-subtitle has-text-style justify-content-start">
                           <img class="has-thumb" src="assets/images/icon/medical-symbol-icon.png" alt="image">
                           Ask Question
                        </span>
                        <h2 class="rs-section-title rs-split-text-enable split-in-fade">Let's Talk Any Question</h2>
                    </div>
                    <div class="rs-faq-content accordion-style-two">
                        <div class="accordion-wrapper">
                            <div class="accordion" id="accordionExampleOne">
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                            How do I get a quotation for my project?
                                            <span class="accordion-btn"></span>
                                        </button>
                                    </h4>
                                    <div id="collapseNine" class="accordion-collapse collapse show" data-bs-parent="#accordionExampleOne">
                                        <div class="accordion-body"> 10+ years later and I’ve learned that in order to
                                            succeed in this business, I need to be your business partner and problem
                                            solver. Which is the same as saying through shrinking from toil and pain these
                                            cases.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                            How many landing pages I can work with your product?
                                            <span class="accordion-btn"></span>
                                        </button>
                                    </h6>
                                    <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExampleOne">
                                        <div class="accordion-body">10+ years later and I’ve learned that in order to
                                            succeed in this business, I need to be your business partner and problem
                                            solver. Which is the same as saying through shrinking from toil and pain these
                                            cases.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                            What are good questions to ask a doctor?
                                            <span class="accordion-btn"></span>
                                        </button>
                                    </h6>
                                    <div id="collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionExampleOne">
                                        <div class="accordion-body">10+ years later and I’ve learned that in order to
                                            succeed in this business, I need to be your business partner and problem
                                            solver. Which is the same as saying through shrinking from toil and pain these
                                            cases.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                            What Do I Need to Tell the Doctor?
                                            <span class="accordion-btn"></span>
                                        </button>
                                    </h6>
                                    <div id="collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#accordionExampleOne">
                                        <div class="accordion-body">10+ years later and I’ve learned that in order to
                                            succeed in this business, I need to be your business partner and problem
                                            solver. Which is the same as saying through shrinking from toil and pain these
                                            cases.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                            How to interview a doctor?
                                            <span class="accordion-btn"></span>
                                        </button>
                                    </h6>
                                    <div id="collapseThirteen" class="accordion-collapse collapse" data-bs-parent="#accordionExampleOne">
                                        <div class="accordion-body">10+ years later and I’ve learned that in order to
                                            succeed in this business, I need to be your business partner and problem
                                            solver. Which is the same as saying through shrinking from toil and pain these
                                            cases.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="rs-contact-form rs-contact-three has-white has-bg-black wow fadeInRight" data-wow-delay=".3s" data-wow-duration="1s">
                    <h3 class="rs-contact-title">Book Appointment</h3>
                    <form action="#" method="POST">
                        <div class="row g-5">
                            <div class="col-md-6">
                                <div class="rs-contact-input">
                                    <input id="name" name="name" type="text" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="rs-contact-input">
                                    <input id="email" name="email" type="email" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="rs-contact-input">
                                    <input id="phone" name="phone" type="text" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="rs-contact-input">
                                    <textarea id="message" name="message" placeholder="Write Your Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="rs-contact-btn">
                                    <button type="submit" name="Contact" class="rs-btn has-color has-radius w-100">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div id="form-messages"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require 'admin/PHPMailer/src/Exception.php';
require 'admin/PHPMailer/src/PHPMailer.php';
require 'admin/PHPMailer/src/SMTP.php';
date_default_timezone_set("Asia/Dhaka");
$inserted_at = date("Y-m-d H:i:s");
if(isset($_POST['Contact'])){
    $name = $db_handle->checkValue($_POST['name']);
    $email = $db_handle->checkValue($_POST['email']);
    $phone = $db_handle->checkValue($_POST['phone']);
    $message = $db_handle->checkValue($_POST['message']);

    $insert_contact = $db_handle->insertQuery("INSERT INTO `doctors_contact`(`doctor_id`, `name`, `phone_number`, `email`, `message`, `inserted_at`) VALUES ('1','$name','$phone','$email','$message','$inserted_at')");
    if($insert_contact){
        $fetch_doctor_email = $db_handle->runQuery("select * from doctors_basic_info where doctors_id = '1'");
        $subject = "You have received a new message";
        $messege = "<html>
<body style='background-color: #eee; font-size: 16px;'>
<div style='max-width: 600px; min-width: 200px; background-color: #ffffff; padding: 20px; margin: auto;'>

    <p style='text-align: center;color:#29a9e1;font-weight:bold'>You have received a new message</p>

    <p style='color:black;text-align: center'>
       You have received a new message from <strong>$name</strong>. Please login to your dashboard to view the details
    </p>
</div>

</body>
</html>";

        $sender_name = "FrogBID Digital & Technologies";


        $sender_email = "contact@frogbid.com";
        $username = "contact@frogbid.com";
        $password = "I1d:j31m4)4";

        $receiver_email = $fetch_doctor_email[0]['doctors_email'];

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = "mail.frogbid.com";
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom($sender_email, $sender_name);
        $mail->Username = $username;
        $mail->Password = $password;

        $mail->CharSet = 'UTF-8';

        $mail->Subject = $subject;
        $mail->msgHTML($messege);
        $mail->addAddress($receiver_email);
        if ($mail->send()) {
            $result = 1;
            exit;
        }
    }
}

?>
<!-- faq area end -->