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
                    <div class="menu-logo">XP</div>
                    <div class="open-menu">X</div>
                </div>
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
