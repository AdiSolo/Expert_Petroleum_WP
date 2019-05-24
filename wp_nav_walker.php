<?php

/*
    ================================
    Nav Menu Walker
    ===============================
*/



/*

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
</ul>

*/


class Walker_Nav_Primary extends Walker_Nav_menu {

    function start_lvl( &$output, $depth) { // ul
        $indent = str_repeat("\t", $depth);
        $submenu = ($depth > 0) ? ' sub-menu' : '';

        $output .= "\n$indent<ul class=\"$submenu sub-menu depth_$depth\">\n";
    }

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0  ) { //li sub-menu
        $indent = ( $depth ) ? str_repeat("\t", $depth) : '';

        $li_attributes = "";
        $class_names = $value = '' ;

        $classes =  empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = ($args->walker->has_children) ? 'sub-menu': '';
        $classes[] = ($item->current || $item->current_item_anchestor) ? 'active' : '';
        $classes[]  = 'menu-item-' . $item->ID;
        if( $depth && $args->walker->has_children) {
            $classes[] = 'dropdown-submenu';
        }

        $class_names =join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args ) );

        $class_names = ' class="'. esc_attr($class_names) .'"';

        $id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args);
        $id = strlen( $id ) ? ' id="' . esc_attr( $id) . '"' : '' ;

        $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

        $attributes = !empty( $item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty( $item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty( $item->xfn) ? ' rel="' . esc_attr($item->xnf) . '"' : '';
        $attributes .= !empty( $item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

        $attributes .= !empty( $item->walker->has_children ) ? ' class=" dropdown-toggle" data-toggle="dropdown"' : '';

        $image = !empty( $item->thumbnail_id) ? '<img src="'. wp_get_attachment_url( $item->thumbnail_id ). '" />'  : '';

        $item_output = $args->before;
        $item_output .= ( $args->show_image == true) ? $image : '';
        $item_output .= '<a '. $attributes.'>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= ( $depth == 0 && $args->walker->has_children) ? ' <b class="caret"></b></a>' : '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );



    }
    //
    // function end_el() { //end li sub-menu
    //
    // }
    //
    // function end_lvl() { // closing ul
    //
    // }

}
