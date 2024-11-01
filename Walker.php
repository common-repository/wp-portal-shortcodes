<?php


class WP_Portal_Sitemap_Menu_Walker extends Walker{

    var $db_fields = array(
        'parent' => 'menu_item_parent',
        'id'     => 'db_id'
    );


    public function start_lvl( &$output, $depth = 0, $args = array())
    {

        $output .= '<ul class="sitemap-menu menu-depth-'. $depth .'">';

    }


    public function end_lvl( &$output, $depth = 0, $args = array() )
    {

        $output .= '</ul>';

    }

    public function start_el( &$output, $object, $depth = 0, $args = array(), $current_object_id = 0 )
    {

        $output .= sprintf( "<li><a href='%s'>%s",
            $object->url,
            $object->title
        );

    }


    public function end_el( &$output, $object, $depth = 0, $args = array() ) {

        $output .= '</a></li>';

    }

}