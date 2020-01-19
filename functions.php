<?php

  define('Page Support', '1.0.2');
  /*** Ajout un script */
    function wpdocs_theme_name_scripts() {
      wp_register_style('support-kliner-style', get_template_directory_uri().'/assets/css/style.css', array(), true);
        wp_enqueue_style('support-kliner-style');

      wp_register_style('bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), true);
        wp_enqueue_style('bootstrap-style');
  
      wp_register_style('animate-style', get_template_directory_uri().'/assets/css/animate.css', array(), true);
        wp_enqueue_style('animate-style');
    
      wp_register_script('script', get_template_directory_uri().'/assets/js/jquery.min.js', array(), true);
        wp_enqueue_script('script');
    
      wp_register_script('bootstrap-min', get_template_directory_uri().'/assets/js/bootstrap.min.js', array(), true);
        wp_enqueue_script('bootstrap-min');

    }
  add_action('wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

  function Setup(){
    //Ajouter une image a la une au niveau de la page admin
    add_theme_support('post-thumbnails');
    
    //supprimer le nom de la version au niveau du header
    remove_action('wp_head', 'wp_generator');
  
    //Creer format image slider front
    add_image_size( 'front-slider', 1140, 420, true);
  
    //active la gestion des menus
    register_nav_menus( array('primary'=> 'principal') );
    register_nav_menus( array('sidebar'=> 'Sidebar') );
  }
  add_action('after_setup_theme', 'Setup');


  function get_breadcrumb() {
    // echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        // the_category(' &bull; ');

        if (is_category()) {
          echo "<img src=\"https://support.kliner.com/wp-content/themes/supportkliner/assets/img/icon-right.png\"/>";
          the_title();
      }

            if (is_single()) {
                echo "<img src=\"https://support.kliner.com/wp-content/themes/supportkliner/assets/img/icon-right.png\"/>";
                the_title();
            }

    } elseif (is_page()) {
        echo "<img src=\"https://support.kliner.com/wp-content/themes/supportkliner/assets/img/icon-right.png\"/>";

    } elseif (is_search()) {
        echo "<img src=\"https://support.kliner.com/wp-content/themes/supportkliner/assets/img/icon-right.png\"/>";

        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}


// CUSTOM SINGLE TEMPLATES BY CATEGORY
add_filter('single_template', 'check_for_category_single_template');
function check_for_category_single_template( $t )
{
  foreach( (array) get_the_category() as $cat ) 
  { 
    if ( file_exists(get_stylesheet_directory() . "/single-category-{$cat->slug}.php") ) return get_stylesheet_directory() . "/single-category-{$cat->slug}.php"; 
    if($cat->parent)
    {
      $cat = get_the_category_by_ID( $cat->parent );
      if ( file_exists(get_stylesheet_directory() . "/single-category-{$cat->slug}.php") ) return get_stylesheet_directory() . "/single-category-{$cat->slug}.php";
    }
  } 
  return $t;
}