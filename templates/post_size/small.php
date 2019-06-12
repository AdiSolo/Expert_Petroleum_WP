<article class="small-post px-0 pb-5">  <!-- Small post -->
    <div class="row">
        <div class="col-6 col-md-6">
            <img src="<?php echo $posts[$i]['image']; ?>" class="post-img" alt="">
        </div>
        <div class="col-6 col-md-6 align-title">
            <h5> <a href="<?php echo $posts[$i]['link']; ?>"><?php echo $posts[$i]['title']; ?></a> </h5>
            <div class="date"> <a href="<?php echo $posts[$i]['link']; ?>"><?php echo get_the_terms($post, 'story_location')[0]->name . ' / ' . get_the_date(); ?> <span>→</span></a></div>

        </div>
    </div>
</article> <!-- End Small post -->
