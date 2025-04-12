<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blog Details || HTML Template</title>
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
                            <h1 class="rs-breadcrumb-title">Blog Details</h1>
                        </div>
                        <div class="rs-breadcrumb-menu text-center">
                            <nav>
                                <ul>
                                    <li><span><a href="Home">Home</a></span></li>
                                    <li><span>Blog</span></li>
                                    <li><span>Blog Details</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- postbox area start -->
    <?php
    if(isset($_GET['id'])){
        $fetch_blog_data = $db_handle->runQuery("SELECT * FROM doctors_blog WHERE blog_id = '".$_GET['id']."'");
    }
    ?>
    <section class="rs-postbox-area section-space primary-bg">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-12 col-lg-12">
                    <div class="rs-postbox-details-wrapper">
                        <div class="rs-postbox-details-thumb mb-40">
                            <img src="<?php echo $fetch_blog_data[0]['blog_image'];?>" alt="image">
                        </div>
                        <div class="rs-postbox-details-content">
                            <?php echo $fetch_blog_data[0]['blog_body'];?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- rs-postbox area end -->

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