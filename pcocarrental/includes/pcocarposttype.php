<?php
/** * Register Custom Post (PCO CAR) Type * */

function custom_post_type() {
  $labels = array( 
      'name' => _x('pcocars', 'Post Type General Name', 'pco-cars'),
      'singular_name' => _x('pcocar', 'Post Type Singular Name', 'pco-cars'), 
      'menu_name' => __('PCO Cars', 'pco-cars'),
      'name_admin_bar' => __('PCO Cars', 'pco-cars'),   
      'archives' => __('Item Archives', 'pco-cars'),   
      'attributes' => __('Item Attributes', 'pco-cars'),    
      'parent_item_colon' => __('Parent Item:', 'pco-cars'),
      'all_items' => __('All Cars', 'pco-cars'),  
      'add_new_item' => __('Add New Car', 'pco-cars'), 
      'add_new' => __('Add New Car', 'pco-cars'),  
      'new_item' => __('New Car', 'pco-cars'),    
      'edit_item' => __('Edit Car', 'pco-cars'),  
      'update_item' => __('Update Car', 'pco-cars'), 
      'view_item' => __('View Car', 'pco-cars'),   
      'view_items' => __('View Cars', 'pco-cars'), 
      'search_items' => __('Search Car', 'pco-cars'),
      'not_found' => __('Not found', 'pco-cars'),   
      'not_found_in_trash' => __('Not found in Trash', 'pco-cars'), 
      'featured_image' => __('Featured Image', 'pco-cars'),
      'set_featured_image' => __('Set featured image', 'pco-cars'),  
      'remove_featured_image' => __('Remove featured image', 'pco-cars'),
      'use_featured_image' => __('Use as featured image', 'pco-cars'),   
      'insert_into_item' => __('Insert into item', 'pco-cars'),    
      'uploaded_to_this_item' => __('Uploaded to this item', 'pco-cars'),
      'items_list' => __('Items list', 'pco-cars'), 
      'items_list_navigation' => __('Items list navigation', 'pco-cars'),  
      'filter_items_list' => __('Filter items list', 'pco-cars'),  ); 
  $args = array(    
      'label' => __('pcocar', 'pco-cars'),  
      'description' => __('pcocar Description', 'pco-cars'),
      'labels' => $labels,  
      'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),    
      'taxonomies' => array('category', 'post_tag'),    
      'hierarchical' => true,      
      'public' => true,  
      'show_ui' => true,  
      'show_in_menu' => true, 
      'menu_position' => 5,  
      'menu_icon' => 'dashicons-car', 
      'show_in_admin_bar' => true,   
      'show_in_nav_menus' => true,
      'can_export' => true,  
      'has_archive' => true,   
      'exclude_from_search' => false,  
      'publicly_queryable' => true,   
      'capability_type' => 'post',  
      'show_in_rest' => true, 
      ); 
  register_post_type('pcocar', $args);
  
} 
add_action('init', 'custom_post_type', 0);

/** * Register Custom Post (PCO CAR) Type * */

function pco_driver_post_type() {
  $labels = array( 
      'name' => _x('PCO Drivers', 'Post Type General Name', 'pco_driver'),
      'singular_name' => _x('PCO Driver', 'Post Type Singular Name', 'pco_driver'), 
      'menu_name' => __('PCO Drivers', 'pco_driver'),
      'name_admin_bar' => __('PCO Driver', 'pco_driver'),   
      'archives' => __('Item Archives', 'pco_driver'),   
      'attributes' => __('Item Attributes', 'pco_driver'),    
      'parent_item_colon' => __('Parent Item:', 'pco_driver'),
      'all_items' => __('All Drivers', 'pco_driver'),  
      'add_new_item' => __('Add New Driver', 'pco_driver'), 
      'add_new' => __('Add New Driver', 'pco_driver'),  
      'new_item' => __('New Driver', 'pco_driver'),    
      'edit_item' => __('Edit Driver', 'pco_driver'),  
      'update_item' => __('Update Driver', 'pco_driver'), 
      'view_item' => __('View Driver', 'pco_driver'),   
      'view_items' => __('View Drivers', 'pco_driver'), 
      'search_items' => __('Search Driver', 'pco_driver'),
      'not_found' => __('Not found', 'pco_driver'),   
      'not_found_in_trash' => __('Not found in Trash', 'pco_driver'), 
      'featured_image' => __('Featured Image', 'pco_driver'),
      'set_featured_image' => __('Set featured image', 'pco_driver'),  
      'remove_featured_image' => __('Remove featured image', 'pco_driver'),
      'use_featured_image' => __('Use as featured image', 'pco_driver'),   
      'insert_into_item' => __('Insert into item', 'pco_driver'),    
      'uploaded_to_this_item' => __('Uploaded to this item', 'pco_driver'),
      'items_list' => __('Items list', 'pco_driver'), 
      'items_list_navigation' => __('Items list navigation', 'pco_driver'),  
      'filter_items_list' => __('Filter items list', 'pco_driver'),  ); 
  $args = array(    
      'label' => __('PCO Drivers', 'pco_driver'),  
      'description' => __('PCO Driver Description', 'pco_driver'),
      'labels' => $labels,  
      'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),    
      'taxonomies' => array('category', 'post_tag'),    
      'hierarchical' => true,      
      'public' => true,  
      'show_ui' => true,  
      'show_in_menu' => true, 
      'menu_position' => 5,  
      'menu_icon' => 'dashicons-games', 
      'show_in_admin_bar' => true,   
      'show_in_nav_menus' => true,
      'can_export' => true,  
      'has_archive' => true,   
      'exclude_from_search' => false,  
      'publicly_queryable' => true,   
      'capability_type' => 'post',  
      'show_in_rest' => true, 
      ); 
  register_post_type('pco_driver', $args);
  
} 
add_action('init', 'pco_driver_post_type', 10);
