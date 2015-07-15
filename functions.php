<?php

add_action( "wp_enqueue_scripts", "enqueue_assets" );
function enqueue_assets() {
    $temp_dir   = get_template_directory_uri();

    $css_dir    = "${temp_dir}/assets/css";
    $js_dir     = "${temp_dir}/assets/js";

    wp_enqueue_style( "main-stylesheet", "${css_dir}/main.css" );
} ?>
