<?php
/*
* Template Name: Stories
*/ ?>
    <?php get_header(); ?>
    <body>
        <?php
            if (have_posts()) : the_post();
                $home_cover = get_field('homepage_cover');

                $services_data = get_field('homepage_services');

                $submenu_title = get_field('menu_title');

                if( have_rows('homepage_cover') ): // get settings for home cover section
                    while( have_rows('homepage_cover') ): the_row();
                        // vars
                        $line = get_sub_field('upload_line');
                        $line_pos_y = get_sub_field('line_position_y');
                        $line_pos_x = get_sub_field('line_position_x');
                        $line_angle = get_sub_field('line_angle');
                        endwhile;
                    endif;

                if( have_rows('page_settings') ): // get settings for services section
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
            endif;
         ?>
         <section class="">
             <div class="container cover-page fixed">
                 <div class="col-md-4 cover-logo px-0">
                     <div class="logo">
                         <a href="<?php echo get_site_url(); ?>"> <img src="http://petroleum.highcontrast.ro/wp-content/uploads/2019/06/logo.svg" alt=""> </a>
                     </div>
                 </div>
                 <div class="cover-page-bg" style="background: url('<?php echo $image; ?>') top/cover no-repeat;"></div>
                 <div class="row">
                     <div class="col-md-4">
                     </div>
                     <div class="col-md-8">
                         <?php if($line) : ?>
                             <span class="line-img" style=" top: <?php echo $line_pos_y; ?>%; left: <?php echo $line_pos_x; ?>%; transform: rotate(<?php echo $line_angle; ?>deg); ">
                                 <img src="<?php echo $line; ?>" alt="line"/>
                             </span>
                         <?php endif; ?>
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

<!-- Stories Section -->
<section class="vh-100"></section>
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
                                        $args = array('post_type' => 'story','posts_per_page' => 5);
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

                                            include( locate_template( 'templates/post_size/large.php', false, false ) );
                                            include( locate_template( 'templates/post_size/column.php', false, false ) );
                                    ?>

                                    <?php if( $count >= 3 ) : ?>
                                            <div class="col-md-6 px-0">
                                                <div class="row">
                                                    <?php
                                                            for ($i=2; $i <= 3; $i++) :
                                                                include( locate_template( 'templates/post_size/small.php', false, false ) );
                                                            endfor;
                                                    ?>
                                                </div>
                                            </div>
                                <?php  endif;
                                        for ($i=4; $i <= count($posts) - 1; $i++) :
                                            include( locate_template( 'templates/post_size/small-full.php', false, false ) );
                                        endfor;
                                  ?>
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

<?php get_footer(); ?>
