<?php
/*
* Template Name: Home
*/

?>

<?php get_header() ?>
    <body>
        <?php
            if (have_posts()) : the_post();
                $home_cover = get_field('homepage_cover');

                $services_data = get_field('homepage_services');

                $submenu_title = get_field('menu_title');

                $show_stories_grid = get_field('show_stories_grid');



                if( have_rows('homepage_cover') ): // get settings for home cover section
                    while( have_rows('homepage_cover') ): the_row();
                        // vars
                        $line = get_sub_field('upload_line');
                        $line_pos_y = get_sub_field('line_position_y');
                        $line_pos_x = get_sub_field('line_position_x');
                        $line_angle = get_sub_field('line_angle');
                        endwhile;
                    endif;

                if( have_rows('homepage_services') ): // get settings for services section
                    while( have_rows('homepage_services') ): the_row();
                        // vars
                        $content_type = get_sub_field('content_type');
                        $service_line = get_sub_field('upload_line');
                        $service_line_pos_y = get_sub_field('line_position_y');
                        $service_line_pos_x = get_sub_field('line_position_x');
                        $service_line_angle = get_sub_field('line_angle');

                        endwhile;
                    endif;
            endif;
         ?>

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
                                        <?php echo $home_cover['description']; ?>

                                        </p>
                                        <h1>
                                            <?php echo $home_cover['title']; ?>
                                            <span class="line-img" style=" top: <?php echo $line_pos_y; ?>%; left: <?php echo $line_pos_x; ?>%; transform: rotate(<?php echo $line_angle; ?>deg); ">
                                                <img src="<?php echo $line; ?>" alt="line"/>
                                            </span>
                                        </h1>
                                    </div>

                                </div>

                                <div class="col-8 cover-bg-head px-0">
                                    <img src="<?php echo $home_cover['image']; ?>" alt="cover">
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
                        <span class="top-line"></span>
                        <span class="left-line"></span>
                    </div>
                </div>
            </div>
        </section>

        <section class="vh-100"></section>

<?php if($show_stories_grid == true) {?>
<!-- Stories Section -->
        <section class="stories">
            <div class="container">
                <div class="col-md-12 px-0">
                        <div class="row">
                            <div class="col-md-4 px-0 content-menu">
                                <div class="fixed-sidebar sticky">
                                    <h5><?php echo $submenu_title; ?></h5>
                                    <ul>
                                        <?php get_template_part('templates/page-submenu'); ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8 px-0 content-block">
                                <div class="row">
                                    <?php
                                        $args = array('post_type' => 'story','post_per_page' => 3);
                                        $query = new WP_Query($args);
                                        $count = 0;
                                        $posts = [];
                                        // Get content from Post
                                            if($query->have_posts()) :
                                                while($query->have_posts()) : $query->the_post();

                                                $posts[] = [
                                                    'title'             => get_the_title(),
                                                    'link'              => get_the_permalink(),
                                                    'image'             => get_the_post_thumbnail_url(),
                                                    'short_description' => get_the_excerpt(),
                                                    'post_date'         => get_the_date(),
                                                    'post_location'     => get_the_terms($post, 'story_location'),
                                                ];

                                                // Get content from Post Custom Fields
                                                if( $count == 0 && have_rows('post_settings') ) {

                                                    while(have_rows('post_settings')) {
                                                        the_row();
                                                        $post_line = get_sub_field('upload_line');
                                                        $post_line_pos_y = get_sub_field('line_position_y');
                                                        $post_line_pos_x = get_sub_field('line_position_x');
                                                        $post_line_angle = get_sub_field('line_angle');
                                                        $post_title_icon = get_sub_field('upload_icon');
                                                        $post_icon_pos_y = get_sub_field('icon_position_y');
                                                        $post_icon_pos_x = get_sub_field('icon_position_x');
                                                    }
                                                }

                                                $count++;
                                                endwhile;
                                            endif;
                                            wp_reset_query();
                                            wp_reset_postdata();

                                            include( locate_template( 'templates/post_size/large.php', false, false ) );
                                            include( locate_template( 'templates/post_size/column.php', false, false ) );
                                    ?>


                                            <div class="col-md-6 px-0">
                                                <div class="row">
                                                    <?php
                                                            for ($i=2; $i <= 3; $i++) :
                                                                include( locate_template( 'templates/post_size/small.php', false, false ) );
                                                            endfor;
                                                    ?>
                                                </div>
                                            </div>
                                </div> <!-- End Stories posts -->
                                <div class="col-md-6 px-0 ">
                                    <div class="col-md-6 more-stories">
                                        <a href="<?php echo get_site_url(); ?>/stories">More Stories <span>→</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- End Stories Section -->
<?php } ?>
            <!-- Services Section -->
            <section class="services">
                <div class="container">
                    <div class="services-cover">

                        <?php
                            switch ($content_type) {
                                case 'image':
                                    echo '<img src="'. $services_data["content"]["image"]["url"] .'" alt="">';
                                    break;

                                default:
                                    // code...
                                    break;
                            }
                         ?>
                    </div>
                    <div class="services-title d-flex">
                    <div class="col-md-8">

                        <h2>
                            <?php echo $services_data['title']; ?>
                            <span class="line-img" style="top: <?php echo $service_line_pos_y; ?>%; left: <?php echo $service_line_pos_x; ?>%; transform: rotate(<?php echo $service_line_angle; ?>deg); ">
                                <img src="<?php echo $service_line; ?>" alt="line"/>
                            </span>
                        </h2>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Related Stories and Custom Content Section -->

            <?php
                $show_related_post = get_field('enable_related_posts');
                $category_slug = get_field('select_category');
                $posts_number = get_field('number_of_posts');
                $show_custom_content = get_field('show_custom_content');
                $sidebar_menu_title = get_field('menu_custom_content');
            ?>


            <?php ( $show_related_post == true && $show_custom_content == false ) ? include(locate_template('templates/related-stories.php')) :  include(locate_template('templates/custom_content.php')); ?>

            <!-- End Related Stories and Custom Content Section -->
<?php get_footer(); ?>
