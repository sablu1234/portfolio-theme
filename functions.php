<?php
if(!function_exists('hasan')){
    function hasan(){
        add_theme_support('post-thumbnails');
    }

    function name($content){
        return $content= str_replace(__('Set featured image'),__('Sablu Hasan featured image'),$content);
    }
    add_filter('admin_post_thumbnail_html','name');
}
add_action('after_setup_theme','hasan');

?>