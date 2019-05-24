<article class="pb-5 large-post">  <!-- Large post -->
    <div class="row">
        <div class="col-md-6">
        <img src="<?php echo $posts[0]['image']; ?>" class="post-img" alt="">
        </div>
        <div class="col-md-6 d-flex align-title">
                <h1>
                    <?php if($post_line) : ?>
                        <span class="line-img" style=" top: <?php echo $post_line_pos_y; ?>%; left: <?php echo $post_line_pos_x; ?>%; transform: rotate(<?php echo $post_line_angle; ?>deg); ">
                            <img src="<?php echo $post_line; ?>" alt="line"/>
                        </span>
                    <?php endif; ?>

                    <a href="<?php echo $posts[0]['link']; ?>"><?php echo $posts[0]['title']; ?></a>
                    <?php if( $post_title_icon ) : ?>
                        <span class="icon-img" style=" top: <?php echo $post_icon_pos_y;?>%; left: <?php echo $post_icon_pos_x; ?>%;">
                            <img src="<?php echo $post_title_icon; ?>" alt="icon"/>
                        </span>
                    <?php endif; ?>
                </h1>
                <div class="date">RO / Țicleni / Feb 2019</div>
                <div class="description">This is what our teams struggle to become everyday, on the fields and in their private life...</div>
                <a href="<?php echo $posts[0]['link']; ?>" class="read-more">READ MORE <span>→</span></a>
        </div>
    </div>
</article> <!-- End Large post -->
