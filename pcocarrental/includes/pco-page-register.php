<?php
/**
 *  Dependency page 
 */

add_action( 'after_setup_theme', 'create_report_page' );
function create_report_page(){
    $title = 'Expression Reminder';
    $slug = 'report';
    $page_content = '[date_reminder]'; // your page content here
    $post_type = 'page';

    $page_args = array(
        'post_type' => $post_type,
        'post_title' => $title,
        'post_content' => $page_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => $slug
    );
    require_once ABSPATH . '/wp-admin/includes/post.php';
    if(post_exists($title) === 0){
        $page_id = wp_insert_post($page_args);
    }

}  