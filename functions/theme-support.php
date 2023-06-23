<?php

function dragon_theme_support(){
    //dynamically add title tag to header
    add_theme_support('title-tag');
    //dynamically add logo to header
    add_theme_support('custom-logo');
    //dynamically add thumbnails and featured images to posts
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'dragon_theme_support');