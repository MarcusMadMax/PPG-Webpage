<?php
  function register_resource() {
   register_nav_menu('main-menu',__( 'Main menu' )
   );

   $args = array(
        'public'    => true,
        'label'     => 'Photos',
        'menu_icon' => 'dashicons-buddicons-activity',
    );
    register_post_type( 'photo', $args );

    //Custom taxonomy
    $args = array(
        'label'        => 'Events',
        'public'       => true,
        'rewrite'      => false,
        'hierarchical' => true,
        'show_in_nav_menus' => true
    );
    
    register_taxonomy( 'event', 'photo', $args );



    $args = array(
        'public'    => true,
        'label'     => 'Clients',
        'menu_icon'   => 'dashicons-buddicons-buddypress-logo',
    );
    register_post_type( 'clients', $args );

  }
  add_action( 'init', 'register_resource' );
 
   function add_class_to_li( $classes, $item, $args ) {
 
       $classes[] = 'nav-item';
       return $classes;
   }
   add_filter( 'nav_menu_css_class' , 'add_class_to_li' , 10, 4 );
 
 
   function add_class_to_anchors( $atts ) {
       $atts['class'] = 'nav-link';
       return $atts;
   }
   add_filter( 'nav_menu_link_attributes', 'add_class_to_anchors', 10 );
?>
