<?php
// if(!function_exists('hasan')){
//     function hasan(){
//         add_theme_support('post-thumbnails');
//     }

//     function name($content){
//         return $content= str_replace(__('Set featured image'),__('Sablu Hasan featured image'),$content);
//     }
//     add_filter('admin_post_thumbnail_html','name');
// }
// add_action('after_setup_theme','hasan');






if(!function_exists('mytheme')){
    function mytheme() {
        register_post_type('wporg_product',
            array(
                'labels'      => array(
                    'name'          => __('hasan posts', 'textdomain'),
                    'singular_name' => __('Product', 'textdomain'),
                ),
                    'public'      => true,
                    'has_archive' => true,
            )
        );
    }
    add_action('init', 'mytheme');
}

?>