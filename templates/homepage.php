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

        <section class="cover d-flex fixed">
            <div class="cover-content my-auto mx-auto ">
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
        </section>

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
                                        $args = array('post_type' => 'story','post_per_page' => 3);
                                        $query = new WP_Query($args);
                                        $count = 0;
                                        $posts = [];
                                        // Get content from Post
                                            if($query->have_posts()) :
                                                while($query->have_posts()) : $query->the_post();

                                                $posts[] = [
                                                    'title' => get_the_title(),
                                                    'link' => get_the_permalink(),
                                                    'image' => get_the_post_thumbnail_url(),
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

                                            include( locate_template( 'inc/post_size/large.php', false, false ) );
                                            include( locate_template( 'inc/post_size/column.php', false, false ) );
                                    ?>


                                            <div class="col-md-6 px-0">
                                                <div class="row">
                                                    <?php
                                                            for ($i=2; $i <= 3; $i++) :
                                                                include( locate_template( 'inc/post_size/small.php', false, false ) );
                                                            endfor;
                                                    ?>
                                                </div>
                                            </div>
                                </div> <!-- End Stories posts -->
                                <div class="col-md-6 px-0 ">
                                    <div class="col-md-6 more-stories">
                                        <a href="page-stories.html">More Stories <span>→</span></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
            </section>
            <!-- End Stories Section -->

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
                    <h2>
                        <?php echo $services_data['title']; ?>
                        <span class="line-img" style="top: <?php echo $service_line_pos_y; ?>%; left: <?php echo $service_line_pos_x; ?>%; transform: rotate(<?php echo $service_line_angle; ?>deg); ">
                            <img src="<?php echo $service_line; ?>" alt="line"/>
                        </span>
                    </h2>
                    </div>

                    <div class=services-content>
                        <div class="col-md-12 px-0">
                            <div class="row">
                                <div class="col-md-4 px-0 content-menu">
                                        <h5>SERVICES</h5>
                                        <ul>
                                            <li>Mature to Nature</li>
                                            <li>Production Enhancement</li>
                                        </ul>

                                </div>
                                <div class="col-md-8 px-0">
                                    <div class="row">
                                        <div class="col-md-12 px-0">
                                            <div class="row">
                                              <article class="col-md-6 px-0 small-post">  <!-- Small post -->
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <img src="<?php echo get_template_directory_uri(); ?>/img/post-small1.png" class="post-img" alt="">
                                                      </div>
                                                      <div class="col-md-6 pl-4 align-title">
                                                          <h5>Decomissioning. It could be dirty and mean, we do it clean and green!</h5>
                                                          <div class="date">Bucharest / Feb 2019 <span>→</span></div>

                                                      </div>
                                                  </div>
                                              </article> <!-- End Small post -->
                                              <article class="col-md-6 px-0 small-post">  <!-- Small post -->
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <img src="<?php echo get_template_directory_uri(); ?>/img/post-small1.png" class="post-img" alt="">
                                                      </div>
                                                      <div class="col-md-6 align-title">
                                                          <h5>Decomissioning. It could be dirty and mean, we do it clean and green!</h5>
                                                          <div class="date">Bucharest / Feb 2019 <span>→</span></div>

                                                      </div>
                                                  </div>
                                              </article> <!-- End Small post -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<!-- End Services Section -->
<?php get_footer(); ?>
