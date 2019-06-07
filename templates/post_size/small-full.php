<article class="col-md-12 px-0 pb-5 regular-post">  <!-- Story post -->
    <div class="row">
        <div class="col-md-3 ">
            <img src="<?php echo $posts[$i]['image']; ?>" class="post-img" alt="">
        </div>
        <div class="col-md-9 align-title">
            <h5><a href="#"><?php echo $posts[$i]['title']; ?></a></h5>
            <div class="date">RO / <?php echo $posts[$i]['post_location'][0]->name; ?> / <?php echo $posts[$i]['post_date'] ?></div>
        </div>
    </div>
</article> <!-- END Story post -->
