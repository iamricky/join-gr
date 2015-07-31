<?php

add_action( "wp_enqueue_scripts", "enqueue_assets" );
function enqueue_assets() {
    $temp_dir   = get_stylesheet_directory_uri();

    $css_dir    = "${temp_dir}/assets/css";
    $js_dir     = "${temp_dir}/assets/js";

    wp_enqueue_style( "main-stylesheet", "${css_dir}/main.css", array( "font-awesome" ) );
    wp_enqueue_style( "font-awesome", "https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" );
} ?>
