<?php

function rw_theme_styles(){

    // CSS
    // wp_enqueue_style("bootstrap", get_template_directory_uri()."/assets/scss/bootstrap.css");
    // wp_enqueue_style("bootstrap", get_template_directory_uri()."/style.scss");

    // JS
    wp_enqueue_script("jquery", get_template_directory_uri()."/assets/js/jquery-3.4.1.min.js");
    wp_enqueue_script("boostrap_js", get_template_directory_uri()."/assets/js/bootstrap.min.js");
    wp_enqueue_script("popper_js", "https://unpkg.com/@popperjs/core@2.0.0-rc.2");
    
}



function rw_after_setup(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

    register_nav_menus(
        array(
            "primary" => __('Menu Header', 'wp_example'),
            "footer_menu" => __('Menu Footer', 'odin')
        )
    );


}


?>