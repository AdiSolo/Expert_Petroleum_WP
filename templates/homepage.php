<?php
/*
* Template Name: Home
*/

?>
    <body>


        <?php
            if (have_posts()) : the_post();
                $home_cover = get_field('homepage_cover');

                $services_data = get_field('homepage_services');

            if( have_rows('homepage_services') ): //child group field
                while( have_rows('homepage_services') ): the_row();
                    // vars
                    $content_type = get_sub_field('content_type');

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
                </h1>
                <div class="line large"></div>
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
                                    <h5>STORIES</h5>
                                    <ul>
                                        <li>People</li>
                                        <li>Sustainability</li>
                                        <li>Technology</li>
                                    </ul>
                                </div>


                            </div>
                            <div class="col-md-8 px-0 content-block">
                                <div class="row">

                                    <?php
                                        $args = array('post_type' => 'story','post_per_page' => 3);
                                        $query = new WP_Query($args);
                                        $posts = [];

                                            if($query->have_posts()) :
                                                while($query->have_posts()) : $query->the_post();

                                                $posts[] = [
                                                    'title' => get_the_title(),
                                                    'link' => get_the_permalink(),
                                                    'image' => get_the_post_thumbnail_url(),

                                                ];
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
                                <div class="col-md-4 more-stories">
                                    <a href="page-stories.html">More Stories <span>→</span></a>
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
                    </h2>
                    <div class="line special"></div>
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