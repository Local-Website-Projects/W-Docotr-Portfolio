<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Doctor || Portfolio</title>
    <meta name="description" content="">
    <?php include ('includes/css.php');?>
</head>

<body class="rs-smoother-yes">

<!-- preloader start -->
<?php include ('includes/preloader.php');?>
<!-- preloader end -->

<!-- preloader start -->

<?php include ('includes/cursor.php');?>

<!-- preloader end -->

<!-- Header area start -->
<?php include ('includes/header.php');?>
<!-- Header area end -->

<?php include ('includes/mobilemenu.php');?>


<!-- Body main wrapper start -->
<main>

    <!-- banner area start -->
    <section class="rs-banner-area rs-banner-eight p-relative">
        <div class="rs-banner-bg bg-white" data-background="assets/images/bg/banner-bg-06.png">
        </div>
        <div class="rs-banner-bg bg-black" data-background="assets/images/bg/banner-bg-dark-04.png">
        </div>
        <div class="container">
            <div class="row g-5 align-items-xl-center">
                <div class="col-xxl-7 col-xl-6 col-lg-6">
                    <div class="rs-banner-content-wrapper">
                        <div class="rs-banner-content">
                                <span class="rs-banner-subtitle wow fadeInUp" data-wow-delay=".3s"
                                      data-wow-duration=".7s">Family Doctor</span>
                            <h1 class="rs-banner-title wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".9s">I'm Dr. <?php echo $fetch_doctor_basic_info[0]['doctors_name'];?>
                                <span class="rs-mark-text">
                              Expert
                              <span class="cd-headline slide rs-title-slide">
                                 <span class="cd-words-wrapper">
                                     <?php
                                     for ($i=0; $i < $fetch_expertise_no; $i++) {
                                         ?>
                                         <b class="<?php if ($i==0) echo 'is-visible'; else echo 'is-hiden'?>"><?php echo $fetch_expertise[$i]['title'];?></b>
                                         <?php
                                     }
                                     ?>
                                 </span>
                                    </span>
                                    </span>
                            </h1>
                            <div class="rs-banner-description wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1.1s">
                                <p>We denounce with righteo usn dignation andiner dislike mr turet suscipit lobortis nisl ut
                                    aliquip erat volutpat autem.</p>
                            </div>
                            <div class="rs-banner-info-btn wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1.3s">
                                <div class="rs-banner-btn">
                                    <a class="rs-btn has-color has-icon has-radius" href="Contact">Let's Talk
                                        <span class="icon-box">
                                    <svg class="icon-first" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                       <path
                                           d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                       </path>
                                    </svg>
                                    <svg class="icon-second" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                       <path
                                           d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                       </path>
                                    </svg>
                                 </span>
                                    </a>
                                </div>
                                <div class="rs-banner-social">
                                    <div class="rs-banner-social">
                                        <div class="rs-theme-social">
                                            <?php if($fetch_doctor_social_media[0]['whatsapp'] != "#"){
                                                ?>
                                                <a href="https://wa.me/<?php echo $fetch_doctor_social_media[0]['whatsapp'];?>"><i class="ri-whatsapp-fill"></i></a>
                                                <?php
                                            }?>

                                            <?php if($fetch_doctor_social_media[0]['facebook'] != "#"){
                                                ?>
                                                <a href="<?php echo $fetch_doctor_social_media[0]['facebook'];?>"><i class="ri-facebook-fill"></i></a>
                                                <?php
                                            }?>
                                            <?php if($fetch_doctor_social_media[0]['linkedin'] != "#"){
                                                ?>
                                                <a href="<?php echo $fetch_doctor_social_media[0]['linkedin'];?>"><i class="ri-linkedin-fill"></i></a>
                                                <?php
                                            }?>
                                            <?php if($fetch_doctor_social_media[0]['instagram'] != "#"){
                                                ?>
                                                <a href="<?php echo $fetch_doctor_social_media[0]['instagram'];?>"><i class="ri-instagram-line"></i></a>
                                                <?php
                                            }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rs-client-meta wow fadeInUp" data-wow-delay="1.1s" data-wow-duration="1.5s">
                                <div class="rs-client-thumb">
                                    <img src="assets/images/user/user-group.jpg" alt="image">
                                </div>
                                <div class="rs-client-meta-text">
                                    <p>Trusted By 5000+ Worldwide <br> Brand & Customers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-6 col-lg-6">
                    <div class="rs-banner-thumb wow fadeInRight" data-wow-delay="1.3s" data-wow-duration="1.7s">
                        <img src="assets/images/banner/banner-thumb-09.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner area end -->

    <!-- feature area start -->
    <section class="rs-feature-area rs-feature-three theme-bg">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="rs-feature-wrapper wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                        <div class="rs-feature-item">
                            <div class="rs-feature-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" height="512" viewBox="0 0 512 512" width="512">
                                    <g>
                                        <path d="m382.008 277.431c.982.432 2.007.636 3.015.636 2.885 0 5.635-1.674 6.87-4.484l37.395-85.069c1.02-2.319.799-4.996-.586-7.118s-3.747-3.4-6.28-3.4h-46.799c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h35.31l-32.772 74.552c-1.668 3.791.055 8.216 3.847 9.883z">
                                        </path>
                                        <path d="m284.556 190.769c-.494-5.931-3.997-10.748-8.924-12.274-2.331-.723-8.364-1.659-13.978 5.23-4.849 5.949-28.927 49.45-33.705 58.11-1.281 2.323-1.24 5.151.109 7.436s3.805 3.687 6.458 3.687h34.993c-.045 6.219-.093 12.2-.139 17.543-.035 4.142 3.293 7.528 7.436 7.564h.065c4.112 0 7.463-3.315 7.499-7.435.027-3.198.082-9.695.14-17.672h3.428c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-3.327c.126-20.933.202-44.11-.055-47.189zm-14.949 47.189h-22.353c8.164-14.635 17.349-30.809 22.462-39.245.04 8.47-.016 23.592-.109 39.245z">
                                        </path>
                                        <path d="m223.964 211.416c.057-.245.1-.493.133-.742l.421-3.29c.04-.315.061-.633.061-.952 0-16.138-13.13-29.268-29.268-29.268-13.954 0-26.032 9.926-28.718 23.602-.799 4.064 1.85 8.007 5.914 8.805 4.066.797 8.007-1.849 8.805-5.913 1.309-6.66 7.196-11.494 14-11.494 7.724 0 14.035 6.169 14.262 13.84l-.304 2.367c-1.108 4.487-3.731 9.705-7.801 15.519-13.499 19.287-21.557 29.838-25.886 35.507-5.307 6.948-7.094 9.288-5.773 13.58.761 2.47 2.639 4.368 5.152 5.205 1.009.336 2.191.732 18.484.732 6.441 0 15.248-.062 27.333-.214 4.143-.052 7.458-3.452 7.405-7.594-.051-4.11-3.398-7.406-7.497-7.406-.032 0-.064 0-.096 0-10.335.13-21.377.197-29.584.194 4.793-6.339 12.108-16.199 22.751-31.405 5.278-7.541 8.712-14.632 10.206-21.073z">
                                        </path>
                                        <path d="m312.334 278.899c2.981 0 5.802-1.791 6.971-4.73l34.167-85.901c1.531-3.849-.348-8.21-4.197-9.741-3.847-1.529-8.209.348-9.74 4.197l-34.167 85.902c-1.531 3.849.348 8.21 4.197 9.741.909.361 1.846.532 2.769.532z">
                                        </path>
                                        <path d="m455.568 77.852c-2.732-3.114-7.471-3.425-10.584-.694-3.114 2.731-3.426 7.469-.695 10.584 35.593 40.592 54.275 92.763 52.603 146.904-1.679 54.381-23.801 105.528-62.292 144.02-17.423 17.421-37.395 31.514-59.42 41.941-1.781-2.3-3.879-4.372-6.257-6.143l-9.503-7.148c23.183-9.724 44.018-23.742 62.054-41.777 75.821-75.822 75.821-199.193 0-275.015-73.013-73.012-190.379-76.268-267.192-7.408-3.085 2.765-3.344 7.506-.579 10.591 2.765 3.083 7.506 3.343 10.591.578 70.886-63.542 179.194-60.535 246.574 6.845 69.974 69.974 69.974 183.829 0 253.802-18.767 18.767-40.815 32.811-65.54 41.781l-32.982-24.81c-9.052-6.809-21.817-5.805-29.695 2.333l-26.679 27.569c-.813.84-2.122 1.003-3.117.384-57.695-35.886-107.16-85.351-143.047-143.047-.618-.993-.456-2.304.385-3.117l27.569-26.68c8.139-7.877 9.142-20.642 2.333-29.694l-24.813-32.986c6.485-17.866 15.731-34.505 27.516-49.476 2.562-3.254 2.001-7.97-1.253-10.532s-7.971-2.001-10.532 1.254c-10.784 13.697-19.611 28.68-26.33 44.666l-7.127-9.474c-1.779-2.389-3.858-4.495-6.164-6.282 10.429-22.027 24.52-42.004 41.941-59.425 38.022-38.022 88.532-60.122 142.225-62.23 53.392-2.102 105.176 15.679 145.81 50.052 3.163 2.675 7.895 2.279 10.569-.882 2.676-3.162 2.28-7.894-.882-10.57-43.503-36.8-98.926-55.829-156.086-53.589-57.478 2.257-111.546 25.913-152.246 66.612-18.7 18.701-33.818 40.163-44.994 63.837-1.276-.25-2.572-.432-3.884-.527-9.434-.688-18.658 2.753-25.339 9.433l-37.681 37.681c-5.893 5.894-9.556 13.554-10.315 21.569-2.327 24.592 3.391 52.578 16.995 83.18 1.684 3.785 6.115 5.49 9.9 3.807s5.489-6.115 3.807-9.9c-12.545-28.219-17.85-53.679-15.768-75.674.431-4.549 2.558-8.944 5.989-12.375l37.681-37.681c3.597-3.598 8.582-5.443 13.642-5.079 5.075.369 9.728 2.921 12.789 7.031l42.561 56.578c2.27 3.017 1.936 7.272-.778 9.897l-27.569 26.68c-5.882 5.692-7.014 14.868-2.689 21.819 37.094 59.637 88.223 110.767 147.861 147.861 6.95 4.324 16.127 3.19 21.818-2.69l26.679-27.569c2.626-2.713 6.883-3.047 9.898-.778l56.608 42.582c4.08 3.039 6.633 7.692 7.002 12.766s-1.482 10.047-5.08 13.644l-37.679 37.68c-3.468 3.467-8.085 5.614-13.001 6.047-86.253 7.604-194.319-99.309-195.399-100.389-.396-.395-39.864-40.107-69.2-90.523-2.083-3.58-6.676-4.794-10.255-2.71-3.58 2.083-4.793 6.674-2.71 10.254 30.307 52.085 69.888 91.916 71.558 93.586 1.149 1.149 28.583 28.44 67.7 55.167 48.624 33.221 92.037 50.008 129.249 50.007 3.512 0 6.973-.15 10.373-.449 8.42-.741 16.336-4.428 22.292-10.382l37.679-37.681c6.68-6.68 10.119-15.916 9.433-25.339-.095-1.311-.277-2.605-.526-3.88 23.673-11.176 45.132-26.295 63.837-44.998 41.202-41.201 64.882-95.951 66.679-154.163 1.788-57.95-18.213-113.798-56.318-157.256z">
                                        </path>
                                    </g>
                                </svg>
                            </div>
                            <h5 class="rs-feature-title">24/7 Emergency</h5>
                            <div class="rs-feature-description">
                                <p>Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in
                                    porttitor theo lacus egestas text generator.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="rs-feature-wrapper wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                        <div class="rs-feature-item">
                            <div class="rs-feature-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" id="Capa_12" height="512" viewBox="0 0 512 512" width="512">
                                    <g>
                                        <path d="m315.5 69.721c4.143 0 7.5-3.358 7.5-7.5v-22.649c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v22.649c0 4.142 3.357 7.5 7.5 7.5zm-36.904 1.392c2.055 3.646 6.664 4.851 10.217 2.847 3.608-2.035 4.883-6.609 2.848-10.217l-9.511-16.86c-2.034-3.607-6.61-4.881-10.217-2.847-3.608 2.035-4.883 6.609-2.848 10.217zm63.592 2.847c3.545 1.999 8.161.799 10.217-2.847l9.511-16.86c2.035-3.608.761-8.182-2.848-10.217-3.605-2.035-8.182-.76-10.217 2.847l-9.511 16.86c-2.035 3.608-.761 8.182 2.848 10.217zm144.173 206.015-60.8-20.26c-3.446-1.149-6.219-3.742-7.605-7.116l-33.879-82.428c-5.798-14.118-19.413-23.241-34.688-23.241h-.389v-13.502c0-18.472-15.028-33.5-33.5-33.5s-33.5 15.028-33.5 33.5v13.502h-50.961c-.013 0-.026-.002-.039-.002s-.026.002-.039.002h-193.461c-20.678 0-37.5 16.822-37.5 37.5v49.498c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-49.498c0-12.407 10.094-22.5 22.5-22.5h186v161.998h-208.5v-55c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v118.002c0 20.678 16.822 37.5 37.5 37.5h19.212c3.723 31.212 30.339 55.498 62.538 55.498s58.815-24.286 62.538-55.498h136.674c3.723 31.212 30.339 55.498 62.538 55.498s58.815-24.286 62.538-55.498h30.962c20.678 0 37.5-16.822 37.5-37.5v-71.38c0-16.171-10.304-30.468-25.639-35.575zm-367.111 184.953c-26.468 0-48-21.533-48-48s21.532-48 48-48 48 21.533 48 48-21.532 48-48 48zm104.25-55.498h-41.712c-3.721-31.214-30.339-55.502-62.538-55.502s-58.817 24.288-62.538 55.502h-19.212c-12.406 0-22.5-10.093-22.5-22.5v-48.002h208.5zm73.5-276.002c0-10.201 8.299-18.5 18.5-18.5s18.5 8.299 18.5 18.5v13.502h-37zm84 331.5c-26.468 0-48-21.533-48-48s21.532-48 48-48 48 21.533 48 48-21.532 48-48 48zm116-141h-114.397c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h114.397v48.002c0 12.407-10.094 22.5-22.5 22.5h-30.962c-3.721-31.214-30.339-55.502-62.538-55.502s-58.817 24.288-62.538 55.502h-79.962v-70.502h109.103c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-109.103v-161.998h110.89c9.165 0 17.335 5.471 20.813 13.941l33.879 82.43c3.047 7.413 9.147 13.114 16.737 15.644l60.801 20.26c9.199 3.064 15.38 11.642 15.38 21.344zm-140.781-139.167c-1.915-4.758-6.467-7.833-11.596-7.833h-78.623c-6.893 0-12.5 5.607-12.5 12.5v69.5c0 6.893 5.607 12.5 12.5 12.5h106.598c8.63.064 14.889-9.16 11.596-17.168zm-87.719 71.667v-64.5h74.434l25.963 64.5zm112.5 138c-12.406 0-22.5 10.093-22.5 22.5s10.094 22.5 22.5 22.5 22.5-10.093 22.5-22.5-10.094-22.5-22.5-22.5zm0 30c-4.136 0-7.5-3.364-7.5-7.5s3.364-7.5 7.5-7.5 7.5 3.364 7.5 7.5-3.364 7.5-7.5 7.5zm-252.75-247.5h-18c-7.444 0-13.5 6.056-13.5 13.5v30h-30c-7.444 0-13.5 6.056-13.5 13.5v18c0 7.444 6.056 13.5 13.5 13.5h30v30c0 7.444 6.056 13.5 13.5 13.5h18c7.444 0 13.5-6.056 13.5-13.5v-30h30c7.444 0 13.5-6.056 13.5-13.5v-18c0-7.444-6.056-13.5-13.5-13.5h-30v-30c0-7.444-6.056-13.5-13.5-13.5zm42 58.5v15h-33c-5.79 0-10.5 4.71-10.5 10.5v33h-15v-33c0-5.79-4.71-10.5-10.5-10.5h-33v-15h33c5.79 0 10.5-4.71 10.5-10.5v-33h15v33c0 5.79 4.71 10.5 10.5 10.5zm-51 159c-12.406 0-22.5 10.093-22.5 22.5s10.094 22.5 22.5 22.5 22.5-10.093 22.5-22.5-10.094-22.5-22.5-22.5zm0 30c-4.136 0-7.5-3.364-7.5-7.5s3.364-7.5 7.5-7.5 7.5 3.364 7.5 7.5-3.364 7.5-7.5 7.5z">
                                        </path>
                                    </g>
                                </svg>
                            </div>
                            <h5 class="rs-feature-title">Emergency Case</h5>
                            <div class="rs-feature-description">
                                <p>Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in
                                    porttitor theo lacus egestas text generator.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="rs-feature-wrapper wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                        <div class="rs-feature-item">
                            <div class="rs-feature-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Capa_11" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path d="M482.726,485.783l-22.65-132.603c-2.441-14.287-12.576-25.764-26.453-29.95l-61.092-18.433   c-1.265-14.934-7.388-29.023-17.578-40.175c-8.151-8.92-18.403-15.415-29.704-18.999c1.934-2.146,3.727-4.285,5.372-6.377   c14.528-18.477,22.306-38.833,24.286-52.724h4.713c12.258,0,22.231-9.972,22.231-22.231v-11.396   c0-8.181-4.602-15.594-11.523-19.441V106.05c0-4.141-3.357-7.498-7.498-7.498s-7.497,3.356-7.497,7.498v30.764   c-2.92,0.507-6.404,1.383-9.968,2.884c-0.365,0.133-0.72,0.287-1.056,0.472c-0.805,0.367-1.611,0.754-2.414,1.19V80.938   c0-16.693-13.58-30.273-30.273-30.273h-20.695c-7.138,0-14.111,2.487-19.637,7.005l-2.031,1.66c-3.73,3.05-8.438,4.73-13.257,4.73   c-4.819,0-9.528-1.68-13.258-4.73l-2.03-1.66c-5.526-4.517-12.499-7.005-19.637-7.005H200.38   c-16.693,0-30.273,13.58-30.273,30.273v60.422c-0.803-0.436-1.609-0.823-2.414-1.19c-0.336-0.185-0.69-0.339-1.055-0.472   c-3.564-1.501-7.049-2.377-9.968-2.884V59.025c0-24.278,19.752-44.03,44.03-44.03h110.601c24.279,0,44.03,19.752,44.03,44.03   v11.786c0,4.141,3.357,7.498,7.497,7.498s7.498-3.356,7.498-7.498V59.025C370.326,26.479,343.847,0,311.301,0H200.7   c-32.547,0-59.025,26.479-59.025,59.025v74.43c-6.921,3.847-11.523,11.259-11.523,19.441v11.396   c0,12.259,9.973,22.231,22.231,22.231h4.713c1.979,13.891,9.758,34.247,24.286,52.724c1.643,2.09,3.435,4.227,5.367,6.371   c-25.98,8.252-44.926,31.61-47.277,59.179L78.378,323.23c-13.877,4.186-24.013,15.663-26.453,29.95l-9.198,53.849   c-0.697,4.082,2.047,7.955,6.128,8.652c4.08,0.699,7.955-2.046,8.653-6.128l9.198-53.849c1.476-8.644,7.608-15.586,16.003-18.118   l56.505-17.049v14.831c-12.952,2.384-23.973,11.281-28.512,23.608c-1.205,3.272-1.954,6.698-2.226,10.182l-5.461,70.095   c-0.412,5.28,1.415,10.538,5.01,14.423c3.595,3.886,8.694,6.116,13.989,6.116h9.348c4.141,0,7.498-3.356,7.498-7.498   c0-4.142-3.357-7.497-7.498-7.497h-9.348c-1.129,0-2.215-0.474-2.982-1.304c-0.766-0.828-1.155-1.948-1.067-3.073l5.461-70.096   c0.165-2.111,0.618-4.186,1.348-6.167c3.158-8.575,11.686-14.382,21.223-14.449l1.235-0.009c0.058-0.001,0.115-0.001,0.172-0.001   c9.269,0,17.474,5.256,20.935,13.427c0.971,2.291,1.561,4.713,1.755,7.199l5.463,70.097c0.087,1.124-0.302,2.244-1.068,3.073   c-0.766,0.828-1.853,1.303-2.982,1.303h-9.348c-4.141,0-7.498,3.356-7.498,7.497c0,4.141,3.357,7.498,7.498,7.498h9.348   c5.295,0,10.395-2.229,13.989-6.116c3.596-3.887,5.423-9.144,5.011-14.422l-5.463-70.096c-0.32-4.102-1.295-8.101-2.898-11.884   c-4.939-11.657-15.5-19.762-27.938-21.955v-19.306l25.774-7.777c2.345,4.939,6.992,15.612,16.197,38.619   c9.277,23.214,20.808,52.969,31.867,81.895c0.079,0.243,0.17,0.48,0.272,0.712c7.38,19.311,14.539,38.225,20.662,54.541   c1.098,2.926,3.895,4.864,7.02,4.864c3.125,0,5.922-1.938,7.02-4.864c6.122-16.316,13.281-35.23,20.662-54.541   c0.103-0.232,0.193-0.47,0.272-0.712c11.051-28.909,22.576-58.645,31.849-81.852c9.217-23.037,13.868-33.719,16.214-38.662   l25.774,7.777v44.285c-17.858,3.469-31.385,19.219-31.385,38.077c0,21.391,17.403,38.795,38.795,38.795   c21.392,0,38.795-17.403,38.795-38.795c0-18.796-13.438-34.508-31.21-38.045v-39.792l56.506,17.049   c8.395,2.532,14.526,9.474,16.003,18.118l22.65,132.603c0.376,2.199-0.209,4.349-1.648,6.054c-1.438,1.704-3.459,2.644-5.69,2.644   H51.393c-2.231,0-4.251-0.939-5.69-2.644c-1.438-1.705-2.024-3.854-1.648-6.054l7.475-43.762c0.697-4.082-2.047-7.955-6.128-8.652   c-4.08-0.7-7.955,2.047-8.653,6.128l-7.475,43.762c-1.115,6.532,0.696,13.183,4.968,18.248C38.516,509.096,44.767,512,51.393,512   h409.214c6.626,0,12.878-2.904,17.151-7.969C482.03,498.966,483.841,492.315,482.726,485.783z M355.421,152.089   c3.995-0.996,7.202-0.978,7.238-0.977c1.292,0.017,2.548-0.285,3.664-0.87c0.334,0.831,0.531,1.724,0.531,2.654v11.396   c0,3.99-3.246,7.236-7.236,7.236h-4.197V152.089z M156.579,171.528L156.579,171.528h-4.197c-3.99,0-7.236-3.246-7.236-7.236   v-11.396c0-0.93,0.198-1.823,0.531-2.653c1.115,0.585,2.371,0.887,3.664,0.869c0.057,0.01,3.255-0.008,7.238,0.981V171.528z    M171.574,179.935v-19.698c2.272,0.681,4.757,0.588,7.051-0.369c3.935-1.642,6.477-5.455,6.477-9.716V80.938   c0-8.424,6.854-15.278,15.278-15.278h20.695c3.688,0,7.291,1.285,10.146,3.619l2.03,1.66c6.401,5.234,14.48,8.115,22.749,8.115   c8.269,0,16.348-2.882,22.749-8.115l2.03-1.66c2.854-2.334,6.458-3.619,10.146-3.619h20.695c8.424,0,15.278,6.854,15.278,15.278   v69.215c0,4.26,2.542,8.074,6.477,9.716c1.314,0.548,2.69,0.814,4.054,0.814c1.017,0,2.026-0.149,2.997-0.439v19.691   c0,10.947-7.568,32.205-21.594,50.043c-4.646,5.909-10.618,12.257-17.971,17.805c-0.233,0.156-0.456,0.325-0.669,0.505   c-11.391,8.422-26.038,14.874-44.192,14.874s-32.801-6.452-44.193-14.875c-0.213-0.179-0.435-0.348-0.667-0.503   c-7.353-5.549-13.325-11.897-17.972-17.806C179.143,212.141,171.574,190.882,171.574,179.935z M305.12,301.07L256,337.784   l-49.12-36.714c4.871-6.191,7.6-14.138,7.6-21.23v-12.086c11.551,6.212,25.334,10.404,41.52,10.404s29.97-4.192,41.52-10.404   v12.086C297.52,286.932,300.249,294.879,305.12,301.07z M194.367,292.701c-4.004-1.525-8.443-1.775-12.642-0.636   c-0.184,0.043-0.364,0.092-0.539,0.144l-25.903,7.816c4.381-21.542,21.873-38.688,44.202-42.009v21.824   C199.485,284.544,197.385,289.407,194.367,292.701z M214.716,352.889c-0.014-0.035-0.028-0.07-0.041-0.104   c-0.38-0.961-0.755-1.909-1.127-2.846c-0.067-0.17-0.134-0.339-0.201-0.507c-0.364-0.917-0.725-1.827-1.081-2.722   c-0.025-0.063-0.05-0.125-0.075-0.189c-1.111-2.793-2.182-5.472-3.212-8.039c-0.075-0.186-0.15-0.375-0.225-0.56   c-0.296-0.736-0.587-1.461-0.876-2.177c-0.106-0.263-0.211-0.523-0.316-0.783c-0.28-0.694-0.558-1.384-0.832-2.059   c-0.082-0.202-0.162-0.398-0.243-0.599c-0.497-1.226-0.983-2.421-1.457-3.586c-0.128-0.315-0.259-0.636-0.386-0.947   c-0.186-0.454-0.367-0.896-0.549-1.341c-0.196-0.48-0.392-0.956-0.584-1.424c-0.072-0.175-0.147-0.36-0.219-0.534   c-0.058-0.14-0.111-0.269-0.168-0.408c-0.866-2.104-1.689-4.087-2.47-5.952c-0.006-0.015-0.013-0.03-0.019-0.045   c-0.416-0.993-0.823-1.963-1.214-2.887c-0.203-0.479-0.403-0.95-0.599-1.412l42.245,31.574l-17.652,7.499   c-0.031,0.013-0.063,0.026-0.094,0.04l-7.37,3.131C215.533,354.955,215.124,353.919,214.716,352.889z M232.606,398.797   c-1.481-3.843-2.973-7.708-4.468-11.569c-2.338-6.039-4.571-11.781-6.708-17.251l2.798-1.189l11.432,13.289L232.606,398.797z    M256.145,459.735c-0.215-0.446-0.471-0.867-0.767-1.259c-3.388-8.955-7.688-20.286-12.447-32.753l7-38.325h12.138l7,38.325   C264.082,438.784,259.603,450.594,256.145,459.735z M264.881,372.404h-17.762l-8.405-9.77L256,355.291l17.286,7.343   L264.881,372.404z M283.862,387.228c-1.495,3.861-2.987,7.726-4.468,11.569l-3.054-16.721l11.432-13.289l2.798,1.189   C288.433,375.446,286.2,381.189,283.862,387.228z M312.58,315.18c-0.371,0.876-0.757,1.795-1.15,2.733   c-0.051,0.122-0.103,0.245-0.154,0.368c-0.389,0.93-0.785,1.88-1.195,2.869c-0.027,0.065-0.055,0.134-0.082,0.2   c-0.354,0.853-0.717,1.733-1.086,2.63c-0.069,0.168-0.134,0.323-0.203,0.492c-0.082,0.201-0.17,0.414-0.253,0.617   c-0.164,0.4-0.331,0.808-0.499,1.216c-0.206,0.503-0.411,1.004-0.622,1.519c-0.067,0.164-0.136,0.335-0.204,0.5   c-0.522,1.279-1.058,2.597-1.606,3.951c-0.086,0.212-0.171,0.42-0.257,0.635c-0.271,0.669-0.547,1.352-0.824,2.039   c-0.108,0.269-0.217,0.537-0.326,0.809c-0.286,0.709-0.575,1.427-0.867,2.155c-0.082,0.203-0.165,0.411-0.247,0.615   c-1.017,2.532-2.072,5.173-3.167,7.925c-0.036,0.091-0.072,0.18-0.108,0.272c-0.354,0.889-0.712,1.793-1.074,2.704   c-0.067,0.17-0.135,0.34-0.203,0.511c-0.374,0.942-0.751,1.894-1.133,2.861c-0.007,0.018-0.014,0.036-0.021,0.053   c-0.412,1.042-0.826,2.09-1.248,3.16l-7.377-3.134c-0.026-0.011-0.052-0.022-0.077-0.033l-17.662-7.503l42.245-31.574   C312.982,314.23,312.782,314.7,312.58,315.18z M330.814,292.21c-0.001,0-0.003-0.001-0.004-0.001   c-0.006-0.002-0.013-0.003-0.019-0.006c-4.35-1.305-8.99-1.089-13.157,0.498c-3.019-3.294-5.118-8.157-5.118-12.861v-21.835   c22.469,3.312,39.908,20.297,44.232,42.029L330.814,292.21z M389.001,398.375c0,13.124-10.677,23.8-23.8,23.8   s-23.8-10.676-23.8-23.8c0-13.124,10.677-23.8,23.8-23.8S389.001,385.251,389.001,398.375z">
                                                </path>
                                            </g>
                                        </g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    </svg>
                            </div>
                            <h5 class="rs-feature-title">Qualified Doctor</h5>
                            <div class="rs-feature-description">
                                <p>Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in
                                    porttitor theo lacus egestas text generator.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature area end -->

    <!-- about area start -->
    <section class="rs-about-area section-space rs-about-eight">
        <div class="container">
            <div class="row g-5 align-items-xl-center">
                <div class="col-xxl-6 col-xl-5 col-lg-5">
                    <div class="rs-about-thumb wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="1s">
                        <img src="assets/images/about/about-thumb-05.png" alt="image">
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-7 col-lg-7">
                    <div class="rs-about-content wow fadeInRight" data-wow-delay=".3s" data-wow-duration="1s">
                        <div class="rs-section-title-wrapper section-title-space">
                                <span class="rs-section-subtitle justify-content-start has-text-style">
                           <img class="has-thumb" src="assets/images/icon/medical-symbol-icon.png" alt="image">About Me
                        </span>
                            <h2 class="rs-section-title mb-30 rs-split-text-enable split-in-fade">The Medical Field is Grow Evolving with Doctors Playing
                                Crucial Roles in</h2>
                            <p class="rs-section-paragraph">
                                Adable content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                it has a more-or-less normal distribution of letters, as opposed to using 'Content here,
                                content here', making it look like readable English.
                            </p>
                        </div>
                        <div class="rs-about-bottom">
                            <div class="rs-about-btn">
                                <a class="rs-btn has-color has-icon has-radius" href="About">Contact Me Now
                                    <span class="icon-box">
                                 <svg class="icon-first" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                    <path
                                        d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                    </path>
                                 </svg>
                                 <svg class="icon-second" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                    <path
                                        d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                    </path>
                                 </svg>
                              </span>
                                </a>
                            </div>

                            <div class="counter-text">
                                <h2 class="counter-text-title"><span data-purecounter-duration="1"
                                                                     data-purecounter-end="5" class="purecounter">0</span>+
                                </h2>
                                <p>Years Experience</p>
                            </div>
                            <div class="counter-text">
                                <h2 class="counter-text-title"><span data-purecounter-duration="1"
                                                                     data-purecounter-end="500" class="purecounter">0</span>+
                                </h2>
                                <p>
                                    Satisfied Patients
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->

    <!-- services area start -->
<?php include ('includes/services.php');?>
    <!-- services area end -->

    <!-- team area start -->
    <div class="rs-team-area rs-team-one">
        <div class="rs-team-bg-thumb" data-background="assets/images/team/doctor-team.jpg">
        </div>
    </div>
    <!-- team area end -->

<?php include ('includes/faq_contact.php');?>

    <!-- testimonial area start -->
    <section class="rs-testimonial-area rs-testimonial-five section-space p-relative">
        <div class="rs-testimonial-bg" data-background="assets/images/bg/testimonial-bg-01.png">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="rs-section-title-wrapper section-title-space text-center">
                            <span class="rs-section-subtitle has-text-style">
                        <img class="has-thumb" src="assets/images/icon/medical-symbol-icon.png" alt="image">
                        Testimonial
                     </span>
                        <h2 class="rs-section-title rs-split-text-enable split-in-fade">What My Patients Say</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="swiper testimonial_active_one wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="rs-testimonial-wrapper">
                                    <div class="rs-testimonial-item">
                                        <div class="rs-testimonial-content">
                                            <div class="rs-testimonial-top">
                                                <h5 class="rs-testimonial-title">Great Advice</h5>
                                                <div class="rs-rating">
                                                    <span><i class="ri-star-fill"></i></span>
                                                    <span><i class="ri-star-fill"></i></span>
                                                    <span><i class="ri-star-fill"></i></span>
                                                    <span><i class="ri-star-fill"></i></span>
                                                    <span><i class="ri-star-fill"></i></span>
                                                </div>
                                            </div>
                                            <div class="rs-testimonial-description">
                                                <p> The standard chunk of lorem Ipsum used since the some music reproduced below
                                                    for
                                                    those interested.</p>
                                            </div>
                                        </div>
                                        <div class="rs-testimonial-bottom">
                                            <div class="rs-testimonial-avater-info">
                                                <h6 class="rs-testimonial-avater-title">Mel Gibson</h6>
                                                <span class="rs-testimonial-avater-designation">Clients</span>
                                            </div>
                                            <div class="rs-testimonial-icon">
                                                <img src="assets/images/shape/quote-shape.png" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="rs-testimonial-wrapper">
                                    <div class="rs-testimonial-item">
                                        <div class="rs-testimonial-content">
                                            <div class="rs-testimonial-top">
                                                <h5 class="rs-testimonial-title">Design Quality</h5>
                                                <div class="rs-rating">
                                                    <span><i class="ri-star-fill"></i></span>
                                                    <span><i class="ri-star-fill"></i></span>
                                                    <span><i class="ri-star-fill"></i></span>
                                                    <span><i class="ri-star-fill"></i></span>
                                                    <span><i class="ri-star-fill"></i></span>
                                                </div>
                                            </div>
                                            <div class="rs-testimonial-description">
                                                <p> The standard chunk of lorem Ipsum used since the some music reproduced below
                                                    for
                                                    those interested.</p>
                                            </div>
                                        </div>
                                        <div class="rs-testimonial-bottom">
                                            <div class="rs-testimonial-avater-info">
                                                <h6 class="rs-testimonial-avater-title">Tom Hanks</h6>
                                                <span class="rs-testimonial-avater-designation">Jackson S.</span>
                                            </div>
                                            <div class="rs-testimonial-icon">
                                                <img src="assets/images/shape/quote-shape.png" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="rs-testimonial-wrapper">
                                    <div class="rs-testimonial-item">
                                        <div class="rs-testimonial-content">
                                            <div class="rs-testimonial-top">
                                                <h5 class="rs-testimonial-title">Great Solution</h5>
                                                <div class="rs-rating">
                                                    <span><i class="ri-star-fill"></i></span>
                                                    <span><i class="ri-star-fill"></i></span>
                                                    <span><i class="ri-star-fill"></i></span>
                                                    <span><i class="ri-star-fill"></i></span>
                                                    <span><i class="ri-star-fill"></i></span>
                                                </div>
                                            </div>
                                            <div class="rs-testimonial-description">
                                                <p> The standard chunk of lorem Ipsum used since the some music reproduced below
                                                    for
                                                    those interested.</p>
                                            </div>
                                        </div>
                                        <div class="rs-testimonial-bottom">
                                            <div class="rs-testimonial-avater-info">
                                                <h6 class="rs-testimonial-avater-title">Johnny Depp</h6>
                                                <span class="rs-testimonial-avater-designation">Ceo</span>
                                            </div>
                                            <div class="rs-testimonial-icon">
                                                <img src="assets/images/shape/quote-shape.png" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rs-pagination justify-content-center mt-50"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial area end -->

    <!-- blog area start -->
    <section class="rs-blog-area rs-blog-one section-space secondary-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="rs-section-title-wrapper section-title-space text-center">
                            <span class="rs-section-subtitle has-text-style">
                        <img class="has-thumb" src="assets/images/icon/medical-symbol-icon.png" alt="image">
                        Update
                     </span>
                        <h2 class="rs-section-title rs-split-text-enable split-in-fade">Latest News & Blogs</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="swiper blog_active_one wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <?php include ('includes/blog.php');?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- blog area end -->

    <!-- Google map area start -->
    <div class="rs-map-area rs-map-one">
        <div class="rs-google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d34214.60083365065!2d-74.01068688015093!3d40.714229226069826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1713786758295!5m2!1sen!2sbd" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
    <!-- Google map area end-->

</main>
<!-- Body main wrapper end -->

<!-- footer area start -->
<?php include ('includes/footer.php');?>
<!-- footer area end -->

<!-- back to top -->
<!-- Backtotop start -->
<?php include ('includes/backtotop.php');?>
<!-- Backtotop end -->

<!-- JS here -->
<?php include ('includes/js.php');?>
</body>

</html>