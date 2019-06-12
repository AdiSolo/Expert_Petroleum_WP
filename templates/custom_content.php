
<section class="related-stories">
    <div class="container related-content">
        <div class="col-md-12  px-0">
            <div class="row">
                <div class="col-md-4  px-0 content-menu">
                        <h5><?php echo $sidebar_menu_title ?></h5>
                </div>
                <div class="col-md-8 px-0">
                    <div class="row">
                        <div class="col-md-12 px-0">
                            <div class="row">
                            <?php
                            // check if the repeater field has rows of data
                            if( have_rows('featured_pages') ):
                                // loop through the rows of data
                                while ( have_rows('featured_pages') ) : the_row(); ?>
                                <article class="col-md-6 pb-5  px-0 custom-content">  <!-- Small post -->
                                    <div class="row">
                                        <div class="col-6 col-md-6">
                                            <img src="<?php echo get_sub_field('image'); ?>" class="post-img" alt="">
                                        </div>
                                        <div class="col-6 col-md-6 align-title">
                                            <p class="item"><?php echo get_sub_field('title');  ?></p>
                                            <h5><?php echo limit_words(get_sub_field('short_description'), 9); ?></h5>
                                            <div class="date"> <a href="<?php echo get_sub_field('link');  ?>">See more <span>→</span> </a> </div>
                                        </div>
                                    </div>
                                </article>
                            <?php  endwhile; ?>
                            <?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
