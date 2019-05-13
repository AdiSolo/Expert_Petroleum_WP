
<?php get_header(); ?>

    <body>
        <?php if(have_posts()) : the_post(); ?>
        <section class="cover-page fixed">
            <div class="container cover-page-bg"></div>
            <h1><?php the_title(); ?></h1>
        </section>
        <section class="vh-100"></section>

<!-- Stories Section -->
        <section class="page">
            <div class="container">
                <div class="col-md-12 px-0">
                        <div class="row">
                            <div class="col-md-4 content-menu">
                                <h5><?php the_title(); ?></h5>
                                <ul>
                                    <li>Safety</li>
                                    <li>Environment</li>
                                    <li>Communities</li>
                                </ul>

                            </div>
                            <div class="col-md-8 content-block">
                                <div class="row">
                                    <div class="page-content">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <?php endif; ?>
<!-- End Stories Section -->

<!-- Related Stories Section -->

<?php get_template_part('templates/related-stories'); ?>

<!-- End Related Stories Section -->
<?php get_footer(); ?>
<!-- Footer Section -->
