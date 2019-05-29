    <?php get_header(); ?>
    <body>

        <?php if( have_posts() ) : the_post(); ?>
        <section>
            <div class="cover fixed"  style="background-image: url('<?php  echo get_the_post_thumbnail_url(); ?>)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-8 cover-description">

                            <h1>
                                <?php the_title(); ?>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-8">
                        <span class="left-line"></span>
                    </div>
                </div>
            </div>
        </section>
        <section class="vh-100"></section>

<!-- Stories Section -->
        <section class="page single">
            <div class="container">
                <div class="col-md-12 px-0">
                        <div class="row">
                            <div class="col-md-4 px-0 content-menu">
                                <div class="post-meta">
                                <h5>STORIES / People</h5>
                                     RO / Țicleni 22/03/2019
                                 </div>
                                <div class="people-in-story">
                                    <h5>People in this Story</h5>
                                    <div class="col-md-6 px-0">
                                        <div class="row">
                                            <?php
                                                // check if the repeater field has rows of data
                                                if( have_rows('people') ):
                                                    // loop through the rows of data
                                                    while ( have_rows('people') ) : the_row(); ?>

                                                        <div class="col-md-6 px-0 people">
                                                            <img src="<?php echo get_sub_field('image'); ?>" alt="">
                                                            <h6 class="pt-4"><?php echo get_sub_field('name');?></h6>
                                                            <p><?php echo get_sub_field('job_title'); ?></p>
                                                        </div>
                                                <?php    endwhile;
                                                endif;
                                            ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-8 content-block">
                                <div class="content">
                                    <?php the_content(); ?>
                                </div>

                            </div>
                        </div>
                    </div>
            </section>
<!-- End Stories Section -->
<?php endif; ?>
<!-- Related Stories Section -->

<?php get_template_part('templates/related-stories'); ?>

<?php get_footer(); ?>
