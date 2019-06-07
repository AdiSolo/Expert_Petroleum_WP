<article class="col-md-6 gutter-b column-post">  <!-- Column post -->
    <img src="<?php echo $posts[1]['image']; ?>" class="post-img" alt="">
    <h5 class="gutter-t"><a href="<?php echo $posts[1]['link']; ?>"><?php echo $posts[1]['title']; ?></a> </h5>
    <div class="date">RO / <?php echo $posts[1]['post_location'][0]->name; ?> / <?php echo $posts[1]['post_date'] ?></div>
    <div class="description">
     <p class="pb-3"><?php echo $posts[1]['short_description']; ?>
     </p>
        <a href="<?php echo $posts[1]['link']; ?>" class="read-more">READ MORE <span>→</span></a>
    </div>
</article> <!-- End Column post -->
