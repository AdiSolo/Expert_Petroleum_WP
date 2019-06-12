<article class="col-md-12 px-0 pb-5 regular-post">  <!-- Story post -->
    <div class="row">
        <div class="col-md-3 ">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="post-img" alt="">
        </div>
        <div class="col-md-9 align-title">
            <h5><a href="#"><?php the_title(); ?></a></h5>
            <div class="date"> <?php echo get_the_date(); ?></div>
        </div>
    </div>
</article> <!-- END Story post -->
