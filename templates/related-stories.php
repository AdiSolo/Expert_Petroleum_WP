<section class="related-stories">
    <div class="container related-content">
        <div class="col-md-12  px-0">
            <div class="row">
                <div class="col-md-4  px-0 content-menu">
                        <h5>RELATED <br/> STORIES</h5>
                        <ul>
                            <?php  print_the_taxonomies_name('story_category'); ?>
                        </ul>

                </div>
                <div class="col-md-8 px-0">
                    <div class="row">
                        <div class="col-md-12 px-0">
                            <div class="row">
                                <?php
                                    wp_reset_query();
                                    wp_reset_postdata();

                                    $args_related = array(
                                                            'post_type' =>'story',
                                                            'posts_per_page' => $posts_number,
                                                            'tax_query' => array(
                                                                                   array(
                                                                                       'taxonomy' => 'story_category',
                                                                                       'field' => 'slug',
                                                                                       'terms' => $category_slug->slug,
                                                                                   ),
                                                                                )
                              );
                                    $query_related = new WP_Query($args_related);

                                    $posts = [];
                                    // Get content from Post
                                        if($query_related->have_posts()) :
                                            while($query_related->have_posts()) : $query_related->the_post();

                                                $posts[] = [
                                                    'title'             => get_the_title(),
                                                    'link'              => get_the_permalink(),
                                                    'image'             => get_the_post_thumbnail_url(),
                                                    'short_description' => get_the_excerpt(),
                                                    'post_date'         => get_the_date(),
                                                    'post_location'     => get_the_terms($post, 'story_location'),

                                                ]; ?>
                                                    <article class="col-md-6 pb-5  px-0 small-post">  <!-- Small post -->
                                                        <div class="row">
                                                            <div class="col-6 col-md-6">
                                                                <img src="<?php echo  get_the_post_thumbnail_url(); ?>" class="post-img" alt="">
                                                            </div>
                                                            <div class="col-6 col-md-6 align-title">
                                                                <h5><?php echo get_the_title(); ?></h5>
                                                                <div class="date"> <a href="<?php the_permalink(); ?>"><?php echo get_the_terms($post, 'story_location')[0]->name . ' / ' . get_the_date(); ?> <span>→</span></a></div>

                                                            </div>
                                                        </div>
                                                    </article> <!-- End Small post -->

                                        <?php    endwhile; ?>
                                        <?php endif;       ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
