<div class="rs-blog-wrapper">
<?php
for ($i=0; $i<$fetch_blog_no; $i++){
    ?>
        <div class="rs-blog-item">
            <div class="rs-blog-thumb">
                <a href="Blog-Details?id=<?php echo $fetch_blog[$i]['blog_id'];?>"> <img src="<?php echo $fetch_blog[$i]['blog_image'];?>" alt="image"></a>
            </div>
            <div class="rs-blog-content">
                <h5 class="rs-blog-title"><a href="Blog-Details?id=<?php echo $fetch_blog[$i]['blog_id'];?>"><?php echo $fetch_blog[$i]['blog_title'];?></a></h5>
                <div class="rs-blog-meta-list">
                    <div class="rs-blog-meta-item has-separator">
                                                        <span class="rs-meta-text"><a class="meta-author" href="blog-details.html">By
                                                Admin</a></span>
                    </div>
                    <div class="rs-blog-meta-item">
                                                        <span class="rs-meta-text"><a href="blog-details.html"><?php echo $fetch_blog[$i]['publish_date'];?></a></span>
                    </div>
                </div>
            </div>
        </div>
    <?php
}
?>
</div>
