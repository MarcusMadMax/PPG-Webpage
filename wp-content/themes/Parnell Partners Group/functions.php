<?php
  function register_resource() {
   register_nav_menu('main-menu',__( 'Main menu' )
   );

       //--- Register post types
       $args = array(
        'public'    => true,
        'label'     => 'What we do',
        'menu_icon'   => 'dashicons-hammer',
    );
    register_post_type( 'what we do', $args );

    $args = array(
        'public'    => true,
        'label'     => 'What we do top',
        'menu_icon'   => 'dashicons-hammer',
    );
    register_post_type( 'what we do top', $args );

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
