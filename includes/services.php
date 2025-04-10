<section class="rs-servcies-area section-space rs-services-eight secondary-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6">
                <div class="rs-section-title-wrapper section-title-space text-center">
                            <span class="rs-section-subtitle has-text-style">
                        <img class="has-thumb" src="assets/images/icon/medical-symbol-icon.png" alt="image">
                        My Services
                     </span>
                    <h2 class="rs-section-title rs-split-text-enable split-in-fade">How can I Help You</h2>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <?php
            for ($i=0; $i < $fetch_services_no; $i++){

                ?>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="rs-services-wrapper wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                        <div class="rs-services-item">
                            <h5 class="rs-services-title"><a href="javascript:void(0);"><?php echo $fetch_services[$i]['service_title'];?></a></h5>
                            <div class="rs-services-description">
                                <p><?php echo $fetch_services[$i]['short_desc'];?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>

        </div>
    </div>
</section>