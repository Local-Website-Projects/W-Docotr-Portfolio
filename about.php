<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>About || HTML Template</title>
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

<!-- Offcanvas area start -->
<?php include ('includes/mobilemenu.php');?>
<!-- Offcanvas area start -->

<!-- Body main wrapper start -->
<main>

    <!-- breadcrumb area start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one p-relative">
        <div class="rs-breadcrumb-bg bg-white" data-background="assets/images/bg/breadcrumb-bg-01.png"></div>
        <div class="rs-breadcrumb-bg bg-black" data-background="assets/images/bg/breadcrumb-bg-dark-01.png"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-8 col-lg-8">
                    <div class="rs-breadcrumb-content-wrapper">
                        <div class="rs-breadcrumb-title-wrapper text-center">
                            <h1 class="rs-breadcrumb-title">About</h1>
                        </div>
                        <div class="rs-breadcrumb-menu text-center">
                            <nav>
                                <ul>
                                    <li><span><a href="Home">Home</a></span></li>
                                    <li><span>About</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- about area start -->
    <section class="rs-about-area section-space rs-about-fourteen primary-bg">
        <div class="container">
            <div class="row align-items-center justify-content-center g-5">
                <div class="col-xl-5 col-lg-5">
                    <div class="rs-about-thumb-wrapper position-relative wow fadeInLeft" data-wow-delay=".3s">
                        <div class="rs-about-thumb">
                            <img src="assets/images/about/about-thumb-10.png" alt="image">
                            <div class="rs-about-exp gsap-move up-100 start-70">
                                <h3 class="rs-about-exp-title"><span data-purecounter-duration="1" data-purecounter-end="<?php echo $fetch_doctor_basic_info[0]['doctors_years_of_experience'];?>"
                                                                     class="purecounter"><?php echo $fetch_doctor_basic_info[0]['doctors_years_of_experience'];?></span>+</h3>
                                <p>Years of Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="rs-about-content-wrapper wow fadeInRight" data-wow-delay=".3s">
                        <div class="rs-section-title-wrapper">
                                <span class="rs-section-subtitle justify-content-start">
                           <img src="assets/images/shape/small-arrow.png" alt="image">
                           About Me
                        </span>
                            <h2 class="rs-section-title mb-15 rs-split-text-enable split-in-fade">My Name is <span class="rs-text-primary"><?php echo $fetch_doctor_basic_info[0]['doctors_name'];?></span> </h2>
                            <p class="rs-about-designation">Freelance Designer &amp; Developer</p>
                            <p class="rs-about-description">Hello there, My name is Marshall. I’m a freelancer, I’m winner
                                of the world’s most prestigious web design awards in the fields of UI, UX, and innovation.
                                With a diverse background in art direction, design leadership, website and app UI/UX design,
                                3D design, and branding, I bring a well-rounded skill set to every project I take on.</p>
                        </div>
                        <div class="rs-about-bio">
                            <ul>
                                <li>
                                    Age
                                    <span><?php echo $fetch_doctor_basic_info[0]['doctors_age'];?> Years</span>
                                </li>
                                <li>
                                    Bron In
                                    <span><?php echo $fetch_doctor_basic_info[0]['doctors_birthplace'];?></span>
                                </li>
                                <li>
                                    Phone
                                    <span><a href="tel:+88<?php echo $fetch_doctor_basic_info[0]['doctors_phone_number'];?>"> <?php echo $fetch_doctor_basic_info[0]['doctors_phone_number'];?> </a></span>
                                </li>
                                <li>
                                    Email
                                    <span><a href="mailto:<?php echo $fetch_doctor_basic_info[0]['doctors_email'];?>"><?php echo $fetch_doctor_basic_info[0]['doctors_email'];?></a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->

    <!-- skill area start -->
    <section class="rs-skill-area rs-skill-one has-space-none primary-bg has-bg-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="rs-section-title-wrapper section-title-space text-center">
                            <span class="rs-section-subtitle">
                        <img src="assets/images/shape/small-arrow.png" alt="image">Expertise
                     </span>
                        <h2 class="rs-section-title rs-split-text-enable split-in-fade">My Soft Skills</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="rs-skill-wrapper wow fadeInUp" data-wow-delay=".3s">
                        <div class="rs-skill-item">
                            <div class="rs-skill-top">
                                <div class="rs-skill-icon">
                                    <img src="assets/images/icon/figma.png" alt="image">
                                </div>
                                <h5 class="rs-skill-title">Figma</h5>
                            </div>
                            <div class="rs-skill-bottom">
                                <div class="rs-skill-description">
                                    <p> I have had the opportunity to work on several projects.</p>
                                </div>
                                <div class="rs-skill-progress">
                                    <div class="single-progress">
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".3s" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                            <span class="progress-number">90%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="rs-skill-wrapper wow fadeInUp" data-wow-delay=".5s">
                        <div class="rs-skill-item">
                            <div class="rs-skill-top">
                                <div class="rs-skill-icon">
                                    <img src="assets/images/icon/wordpress.png" alt="image">
                                </div>
                                <h5 class="rs-skill-title">WordPress</h5>
                            </div>
                            <div class="rs-skill-bottom">
                                <div class="rs-skill-description">
                                    <p> We are helping client to create UI websites.</p>
                                </div>
                                <div class="rs-skill-progress">
                                    <div class="single-progress">
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".3s" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                            <span class="progress-number">95%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="rs-skill-wrapper wow fadeInUp" data-wow-delay=".7s">
                        <div class="rs-skill-item">
                            <div class="rs-skill-top">
                                <div class="rs-skill-icon">
                                    <img src="assets/images/icon/react.png" alt="image">
                                </div>
                                <h5 class="rs-skill-title">React</h5>
                            </div>
                            <div class="rs-skill-bottom">
                                <div class="rs-skill-description">
                                    <p> Contrary the popular belief Lorem Ipsum not simply.</p>
                                </div>
                                <div class="rs-skill-progress">
                                    <div class="single-progress">
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".3s" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                            <span class="progress-number">80%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="rs-skill-wrapper wow fadeInUp" data-wow-delay=".9s">
                        <div class="rs-skill-item">
                            <div class="rs-skill-top">
                                <div class="rs-skill-icon">
                                    <img src="assets/images/icon/html.png" alt="image">
                                </div>
                                <h5 class="rs-skill-title">HTML</h5>
                            </div>
                            <div class="rs-skill-bottom">
                                <div class="rs-skill-description">
                                    <p> Excepteur sint occaecat sunt in culpa qui officia.</p>
                                </div>
                                <div class="rs-skill-progress">
                                    <div class="single-progress">
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".3s" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                            <span class="progress-number">85%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- skill area start -->

    <!-- qualification area start -->
    <section class="rs-qualification-area rs-qualification-three section-space primary-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="rs-section-title-wrapper section-title-space text-center">
                            <span class="rs-section-subtitle">
                        <img src="assets/images/shape/small-arrow.png" alt="image">Qualification
                     </span>
                        <h2 class="rs-section-title rs-split-text-enable split-in-fade">Work Experience</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-5">
                <div class="col-xl-9 col-lg-10">
                    <div class="rs-qualification-content">
                        <div class="rs-qualification-item">
                            <div class="left-part wow fadeInLeft" data-wow-delay=".3s">
                                <h6 class="rs-qualification-title">Web Developer</h6>
                                <span class="rs-qualification-meta">2021 - 20023 (Present)</span>
                            </div>
                            <div class="rs-divider"></div>
                            <div class="right-part wow fadeInRight" data-wow-delay=".3s">
                                <h6 class="rs-qualification-title">Envato Marketplace</h6>
                                <span class="rs-qualification-meta">I'm winner of the world's most prestigious web design awards in the fields.</span>
                            </div>
                        </div>
                        <div class="rs-qualification-item">
                            <div class="left-part wow fadeInLeft" data-wow-delay=".5s">
                                <h6 class="rs-qualification-title">Online Marketing</h6>
                                <span class="rs-qualification-meta">Many desktop publishing packages and web page editors now use Lorem Ipsum</span>
                            </div>
                            <div class="rs-divider"></div>
                            <div class="right-part wow fadeInRight" data-wow-delay=".5s">
                                <h6 class="rs-qualification-title">Sr. Developer</h6>
                                <span class="rs-qualification-meta">2019 - 2020</span>
                            </div>
                        </div>
                        <div class="rs-qualification-item">
                            <div class="left-part wow fadeInLeft" data-wow-delay=".7s">
                                <h6 class="rs-qualification-title">UI/UX Designer</h6>
                                <span class="rs-qualification-meta">2018 - 2019</span>
                            </div>
                            <div class="rs-divider"></div>
                            <div class="right-part wow fadeInRight" data-wow-delay=".7s">
                                <h6 class="rs-qualification-title">Dribbble</h6>
                                <span class="rs-qualification-meta">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.</span>
                            </div>
                        </div>
                        <div class="rs-qualification-item">
                            <div class="left-part wow fadeInLeft" data-wow-delay=".9s">
                                <h6 class="rs-qualification-title">Upwork Market</h6>
                                <span class="rs-qualification-meta">Making this the first true generator on the uses a dictionary of over 200</span>
                            </div>
                            <div class="rs-divider"></div>
                            <div class="right-part wow fadeInRight" data-wow-delay=".9s">
                                <h6 class="rs-qualification-title">Jr. Developer</h6>
                                <span class="rs-qualification-meta">2016 - 2017</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- qualification area end -->

    <!-- faq-contact area start -->
    <?php include ('includes/faq_contact.php');?>
    <!-- faq-contact area end -->


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
</html>