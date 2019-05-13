<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Expert Petroleum</title>

        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/fonts.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"> -->
<?php wp_head(); ?>

    </head>
    <header class="<?php echo (!is_front_page() && !is_single()) ? 'page-header' : ''; ?>">
        <nav class="nav-menu d-flex">
            <div class="logo">
                <a href="<?php echo get_site_url(); ?>">Expert <br/>Petroleum</a>
            </div>
            <div class="menu">
                <div class="menu-btn open-menu">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>

            </div>
        </nav>
        <div class="site-menu">
            <div class="container">
                <div class="menu-bar">
                    <div class="menu-logo">xd</div>
                    <div class="open-menu">x</div>
                </div>
                <ul class="parrent-li">
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/cat-img1.png" alt="">
                        <a href="page.html">SUSTAINABILITY</a>
                        <ul class="sub-menu">
                            <li>Safety</li>
                            <li>Environment</li>
                            <li>Communities</li>
                        </ul>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/cat-img2.png" alt="">
                        <a href="#">ORGANIZATION</a>
                        <ul class="sub-menu">
                            <li>Safety</li>
                            <li>Environment</li>
                            <li>Communities</li>
                        </ul>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/cat-img3.png" alt="">
                        <a href="#">SERVICES</a>
                        <ul class="sub-menu">
                            <li>Safety</li>
                            <li>Environment</li>
                            <li>Communities</li>
                        </ul>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/cat-img4.png" alt="">
                        <a href="#">OPERATIONS</a>
                        <ul class="sub-menu">
                            <li>Safety</li>
                            <li>Environment</li>
                            <li>Communities</li>
                        </ul>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/cat-img6.png" alt="">
                        <a href="<?php get_site_url(); ?>/media">NEWS & MEDIA</a>
                        <ul class="sub-menu">
                            <li>Safety</li>
                            <li>Environment</li>
                            <li>Communities</li>
                        </ul>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/cat-img7.png" alt="">
                        <a href="<?php get_site_url(); ?>/stories">STORIES</a>
                        <ul class="sub-menu">
                            <li>Safety</li>
                            <li>Environment</li>
                            <li>Communities</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>
