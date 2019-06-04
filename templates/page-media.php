
<?php
/*
* Template Name: Media
*/

?>

<?php get_header(); ?>
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
    <body>
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
        <section class="vh-100"></section>

<!-- Stories Section -->
        <section class="page">
            <div class="container">
                <div class="col-md-12 px-0">
                        <div class="row">
                            <div class="col-md-4 px-0 content-menu"> <!-- Left Menu START -->
                                <div class="fixed-sidebar sticky">
                                    <h5><?php echo get_field('menu_title'); ?></h5>
                                    <ul>
                                        <?php get_template_part('templates/page-submenu'); ?>
                                    </ul>
                                </div>

                            </div>   <!-- Left Menu END -->

                            <div class="col-md-8 content-block media-page">  <!-- Right Content START -->
                                <div class="row">
                                    <div class="headline">
                                        <div class=""></div>
                                        <h1>Key informations for the industry and the general public.</h1>

                                        <h4>
                                            Following your specific interest, please go through our press releases, annual reports or the media library to get insights or specific details on our activity.
                                        </h4>
                                    </div>

                                    <section class="press-releases">
                                        <div class="col-md-12 px-0">
                                            <div class="image">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/media.png" alt="">
                                            </div>
                                        </div>

                                        <div class="title">
                                            <h1>Press Releases</h1>
                                        </div>

                                        <article class="col-md-12 px-0 pb-5 regular-post">  <!-- Press realeases -->
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/press1.png" class="post-img" alt="">
                                                </div>
                                                <div class="col-md-9 align-title">
                                                    <h5>Decomissioning. It could be dirty and mean, we do it clean and green!</h5>
                                                    <div class="date">Bucharest / Feb 2019</div>

                                                </div>
                                            </div>
                                        </article> <!-- End Press realeases -->

                                        <article class="col-md-12 px-0 pb-5 regular-post">  <!-- Press realeases -->
                                            <div class="row">
                                                <div class="col-md-3 ">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/press2.png" class="post-img" alt="">
                                                </div>
                                                <div class="col-md-9 align-title">
                                                    <h5>Decomissioning. It could be dirty and mean, we do it clean and green!</h5>
                                                    <div class="date">Bucharest / Feb 2019</div>

                                                </div>
                                            </div>
                                        </article> <!-- End Press realeases -->

                                        <article class="col-md-12 px-0 pb-5 regular-post">  <!-- Press realeases -->
                                            <div class="row">
                                                <div class="col-md-3 ">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/press3.png" class="post-img" alt="">
                                                </div>
                                                <div class="col-md-9 align-title">
                                                    <h5>Decomissioning. It could be dirty and mean, we do it clean and green!</h5>
                                                    <div class="date">Bucharest / Feb 2019</div>

                                                </div>
                                            </div>
                                        </article> <!-- End Press realeases -->
                                        <div class="see-all">
                                            <a href="#">See All <span>→</span></a>
                                        </div>
                                    </section>


                                    <section class="reports">
                                        <div class="image">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/reports.png" alt="">
                                        </div>
                                        <div class="title">
                                            <h1>Reports</h1>
                                        </div>
                                        <div class="row">
                                            <ul class="report-items">
                                                <li>
                                                    <div class="report">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/img/report1.png" alt="">
                                                        <h5>Sustainability Report 2017</h5>
                                                        <small class="file">PDF/5MB</small>
                                                        <a href="#" class="download">↓</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="report">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/img/report1.png" alt="">
                                                        <h5>Sustainability Report 2017</h5>
                                                        <small class="file">PDF/5MB</small>
                                                        <a href="#" class="download">↓</a>
                                                    </div>
                                                </li>
                                                <li>    <div class="report">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/report1.png" alt="">
                                                    <h5>Sustainability Report 2017</h5>
                                                    <small class="file">PDF/5MB</small>
                                                    <a href="#" class="download">↓</a>
                                                    </div>
                                                </li>
                                                <li>
                                                     <div class="report">
                                                         <img src="<?php echo get_template_directory_uri(); ?>/img/report1.png" alt="">
                                                         <h5>Sustainability Report 2017</h5>
                                                         <small class="file">PDF/5MB</small>
                                                         <a href="#" class="download">↓</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="see-all">
                                            <a href="#">See All <span>→</span></a>
                                        </div>
                                    </section>

                                        <section class="media">
                                            <article class="article">
                                                <div class="image">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/media2.png" alt="">
                                                </div>
                                                <div class="title">
                                                    <h1>Media Library</h1>
                                                </div>
                                                <div class="description">
                                                    <p class="pb-4">
                                                        <strong>Open So Can't Subdue</strong>
                                                    </p>
                                                    <p>
                                                    Life land given day fill. Under. Light fly so, don't called him two sixth he wherein saw given won't there may, earth dry moving. Without hath living may form. Whales dominion years made lights tree whales said likeness moved day kind let. Earth land upon sixth one waters made gathered first. Creepeth, hath give fly subdue saw above fourth fly second shall Heaven divided meat were set. Multiply day that lights Of so sea forth light beginning, seed. Herb.
                                                    <br>
                                                     Man face, deep abundantly heaven fourth greater whales bearing multiply of, is, waters fifth his midst bring days all is he she'd divide. Fruitful dry, bearing creeping stars seed seasons cattle moveth two, i. Multiply god forth every there that can't grass open their heaven yielding great image appear deep can't fly appear man grass them. Gathering from grass over signs. Day i whose Abundantly their was. Whales. His morning together living appear isn't over fly upon may signs make open lesser seasons moving lesser waters creepeth replenish god. Moved good give second form herb land divide in fruit good let his which likeness given face won't unto evening may which third face you'll. Fruit you'll sea. They're darkness let without itself. Greater lights. Likeness morning won't they're their let deep abundantly heaven land saying have likeness brought that seas gathered fly, and greater Green whales grass living gathering set seasons dry two. Signs of, be brought.
                                                     <br>
                                                     Creeping Herb fifth fowl fill isn't all one that evening dry set gathering replenish together night morning fish saw Deep abundantly us great bearing creature set, the, day. Have creature called. All whose Whales midst. God fill to very bearing seasons. Seasons us days in she'd, seed seed may deep. Signs fruit seasons make was void winged. Place his creeping life, saying rule, set, day of.
                                                    </p>
                                                </div>
                                            </article>
                                        </section>

                                    </div>
                                </div> <!-- Right Content End -->
                            </div><!-- End Row -->
                        </div>
                    </div>
            </section>
<!-- End Stories Section -->

<!-- Related Stories Section -->

<?php get_template_part('templates/related-stories'); ?>

<!-- Footer Section -->
<?php get_footer(); ?>
