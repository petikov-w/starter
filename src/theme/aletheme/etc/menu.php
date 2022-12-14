<?php
class Ale_Walker_Nav_Menu extends Walker_Nav_Menu
{

    function start_el(&$output, $item, $depth = 0, $args = Array(), $current_object_id = 0)
    {

        global $wp_query;
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $class_names = $value = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
        $class_names = ' class="' . esc_attr( $class_names ) . ' '. sanitize_title( $item->title ) . '"';

        if ($depth==0) {
            $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
        } else {
            $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
        }

        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

        

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        if(array_search('menu-item-has-children', $classes)) {
            $item_output .= '<span class="open_current_dropdown"></span>';
        }
        

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

    }
}