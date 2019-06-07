
<?php get_header(); ?>

    <body>
        <?php if(have_posts()) : the_post(); ?>


            <?php if( have_rows('page_settings') ):

                	while( have_rows('page_settings') ): the_row();
                		// vars
                		$image = get_sub_field('page_cover');
                		$line = get_sub_field('upload_line');
                        $line_pos_y = get_sub_field('line_position_y');
                        $line_pos_x = get_sub_field('line_position_x');
                        $line_angle = get_sub_field('line_angle');
                        $title_icon = get_sub_field('upload_icon');
                        $icon_pos_y = get_sub_field('icon_position_y');
                        $icon_pos_x = get_sub_field('icon_position_x');

                    endwhile;
                endif;

            ?>
        <?php endif; ?>

        <section class="">
            <div class="container cover-page fixed">
                <div class="col-md-4 cover-logo px-0">
                    <div class="logo">
                        <a href="<?php echo get_site_url(); ?>"> <img src="http://petroleum.highcontrast.ro/wp-content/uploads/2019/06/logo.svg" alt=""> </a>
                    </div>
                </div>
                <div class="cover-page-bg" style="background: url('<?php echo $image; ?>') top/cover no-repeat;">
                    <?php if($line) : ?>
                        <span class="line-img" style=" top: <?php echo $line_pos_y; ?>%; left: <?php echo $line_pos_x; ?>%; transform: rotate(<?php echo $line_angle; ?>deg); ">
                            <img src="<?php echo $line; ?>" alt="line"/>
                        </span>
                    <?php endif; ?>

                </div>
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-8">

                    <h1>
                        <?php the_title(); ?>
                        <?php if( $title_icon ) : ?>
                            <span class="icon-img" style=" top: <?php echo $icon_pos_y;?>%; left: <?php echo $icon_pos_x; ?>%;">
                                <img src="<?php echo $title_icon; ?>" alt="icon"/>
                            </span>
                        <?php endif; ?>
                    </h1>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-8">
                        <span class="top-line"></span>
                        <span class="left-line"></span>

                    </div>
                </div>
            </div>
        </section>
        <section class="vh-100"></section>

<!-- Stories Section -->
        <section class="page">
            <div class="container">
                <div class="col-md-12 px-0">
                        <div class="row">
                            <div class="col-md-4 px-0 content-menu">
                                <div class="fixed-sidebar sticky">
                                    <h5><?php echo get_field('menu_title'); ?></h5>
                                    <ul class="second-menu">
                                        <?php get_template_part('templates/page-submenu'); ?>
                                    </ul>
                                </div>
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

<!-- End Stories Section -->

<!-- Related Stories Section -->

<?php
    $show_related_post = get_field('enable_related_posts');
    $post_type = get_field('select_post_type');
    $category_id = get_field('select_category');
?>


<?php ( $show_related_post == true ) ? include(locate_template('templates/related-stories.php')) : ''; ?>

<!-- End Related Stories Section -->
<?php get_footer(); ?>
<!-- Footer Section -->
