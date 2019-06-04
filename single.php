    <?php get_header(); ?>
    <body>

        <?php if( have_posts() ) : the_post(); ?>


        <section class="">
            <div class="cover fixed">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 cover-logo px-0">
                            <div class="logo">
                                <a href="<?php echo get_site_url(); ?>"> <img src="http://petroleum.highcontrast.ro/wp-content/uploads/2019/06/logo.svg" alt=""> </a>
                            </div>
                        </div>
                        <div class="col-md-8 ">
                            <div class="row">
                                <div class="col-4 px-0">

                                    <div class="cover-description">
                                        <p class="cover-title">
                                        <?php //echo $home_cover['description']; ?>

                                        </p>
                                        <h1>
                                            <?php the_title(); ?>
                                            <span class="line-img" style=" top: <?php echo $line_pos_y; ?>%; left: <?php echo $line_pos_x; ?>%; transform: rotate(<?php echo $line_angle; ?>deg); ">
                                                <img src="<?php echo $line; ?>" alt="line"/>
                                            </span>
                                        </h1>
                                    </div>

                                </div>

                                <div class="col-8 cover-bg-head px-0">
                                    <img src="<?php  echo get_the_post_thumbnail_url(); ?>" alt="">
                                </div>
                            </div>
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
                                <h5>STORIES / <strong>People</strong></h5>
                                <p class="mt-4">RO / Țicleni 22/03/2019</p>

                                 </div>
                            </div>
                            <div class="col-md-8 content-block">
                                <div class="content">

                                    <h1><?php echo strip_tags( get_the_excerpt()); ?></h1>
                                </div>

                            </div>

                            <div class="col-md-4 px-0 content-menu">
                                <div class="people-in-story">
                                    <h5 class="blue">People in this Story</h5>
                                    <div class="col-md-6 mt-4 px-0">
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
