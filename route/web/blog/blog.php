<section id="blog" class="blog">
    <div class="container">
        <div class="section-header">
            <h2>news and articles</h2>
            <p>Always upto date with our latest News and Articles </p>
        </div>
        <!--/.section-header-->
        <div class="blog-content">
            <div class="row">
                <?php 
            $blog = $portCont->blogPost();
            if (!empty($blog)) {
              foreach ($blog as $key => $blog) {
            ?>
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog-item">
                        <div class="single-blog-item-img">
                            <img src="./public/assets/images/blog/b1.jpg" alt="blog image">
                        </div>
                        <div class="single-blog-item-txt">
                            <h2><a href="#"><?php echo $blog['title']; ?></a></h2>
                            <h4>posted <span>by</span> <a href="#">admin</a> <?php echo $blog['date_created']; ?></h4>
                            <p>
                                <?php echo $blog['short_description']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php } } ?>
            </div>
        </div>
    </div>
    <!--/.container-->

</section>