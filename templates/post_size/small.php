<article class="small-post px-0 pb-5">  <!-- Small post -->
    <div class="row">
        <div class="col-6 col-md-6">
            <img src="<?php echo $posts[$i]['image']; ?>" class="post-img" alt="">
        </div>
        <div class="col-6 col-md-6 align-title">
            <h5> <a href="<?php the_permalink(); ?>"><?php echo $posts[$i]['title']; ?></a> </h5>
            <div class="date">RO / <?php echo $posts[$i]['post_location'][0]->name; ?> / <?php echo $posts[$i]['post_date'] ?></div>

        </div>
    </div>
</article> <!-- End Small post -->
