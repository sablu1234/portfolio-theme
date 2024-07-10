<?php

if(!function_exists('mytheme')){
    function mytheme() {
        register_post_type('wporg_product',
            array(
                   'supports'              => array( 'title', 'editor' ,'thumbnail'),
                    'public'      => true,
                    'has_archive' => true,
                    'labels'=>array(
                        'name'          => __('hasan'),
                        'menu_name'  => 'all girl friends name',
                        'not_found' => 'Not found girl friends name',
                        'add_new'=> 'Add New girl friends name',
                        'featured_image'=> 'the Featured Image',
                        'set_featured_image'=> 'girl friends featured image',
                        




                    )
            )
        );
    }
    add_action('init', 'mytheme');
}

?>