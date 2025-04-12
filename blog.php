<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blog || HTML Template</title>
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
                            <h1 class="rs-breadcrumb-title">Blog</h1>
                        </div>
                        <div class="rs-breadcrumb-menu text-center">
                            <nav>
                                <ul>
                                    <li><span><a href="Home">Home</a></span></li>
                                    <li><span>Blog</span></li>
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
    <section class="rs-postbox-area section-space primary-bg">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-12 col-lg-12">
                    <div class="rs-postbox-wrapper">
                        <?php
                        for ($i=0; $i<$fetch_blog_no; $i++){
                        ?>
                        <article class="rs-postbox-item">
                            <div class="rs-postbox-thumb">
                                <a href="Blog-Details?id=<?php echo $fetch_blog[$i]['blog_id'];?>">
                                    <img src="<?php echo $fetch_blog[$i]['blog_image'];?>" alt="image">
                                </a>
                            </div>
                            <div class="rs-postbox-content">
                                <div class="rs-postbox-meta-list">
                                    <div class="rs-postbox-meta-item has-separator">
                                            <span class="rs-meta-text">By<a class="meta-author" href="Blog-Details?id=<?php echo $fetch_blog[$i]['blog_id'];?>">
                                       Admin</a></span>
                                    </div>
                                    <div class="rs-postbox-meta-item">
                                            <span class="rs-postbox-meta-text"><a href="Blog-Details?id=<?php echo $fetch_blog[$i]['blog_id'];?>"><?php echo $fetch_blog[$i]['publish_date'];?></a></span>
                                    </div>
                                </div>
                                <h3 class="rs-postbox-title">
                                    <a href="Blog-Details?id=<?php echo $fetch_blog[$i]['blog_id'];?>"><?php echo $fetch_blog[$i]['blog_title'];?></a>
                                </h3>
                                <div class="rs-postbox-text">
                                    <p><?php echo substr($fetch_blog[$i]['blog_body'], 0, 200); ?>...</p>
                                </div>
                                <div class="rs-postbox-btn">
                                    <a class="rs-btn has-color has-icon has-radius" href="Blog-Details?id=<?php echo $fetch_blog[$i]['blog_id'];?>">Continue Reading
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
                            </div>
                        </article>
                            <?php
                        }
                        ?>
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