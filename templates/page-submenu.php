<?php
    // check if the repeater field has rows of data
    if( have_rows('menu_page') ):
        // loop through the rows of data
        while ( have_rows('menu_page') ) : the_row();
            // display a sub field value
            echo '<li data-trigger="'. get_sub_field('link__trigger') .'">' . get_sub_field('item_title'). '</li>';
        endwhile;
    endif;
?>
