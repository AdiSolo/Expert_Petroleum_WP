<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Expert Petroleum</title>

        <?php wp_head(); ?>
    </head>
    <header class="<?php echo (!is_front_page() && !is_single()) ? 'page-header' : ''; ?>">
        <nav class="nav-menu d-flex">

            <div class="menu">
                <div class="menu-btn open-menu">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>

            </div>
        </nav>
        <div class="site-menu">
            <div class="menu-bar">
                <div class="close-btn open-menu"> <img src="http://petroleum.highcontrast.ro/wp-content/uploads/2019/06/Close_Icon.svg" alt=""> </div>
            </div>
            <div class="container">
            <div class="menu-logo"> <a href="<?php get_site_url(); ?>"><img src="http://petroleum.highcontrast.ro/wp-content/uploads/2019/06/XP_Logotype.svg" alt=""></a></div>
                <?php
                  /* Primary navigation Header */
                    wp_nav_menu( array(
                        'menu'             => 'header-menu',
                        'menu_class'       => 'parrent-li ',
                        'show_image'       => true,
                        'walker'           => new Walker_Nav_Primary()
                    )
                    );
                ?>
            </div>
        </div>
    </header>
