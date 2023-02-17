<?php 
wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_style( 'style-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' ) ;
wp_enqueue_script( 'script-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0.0', true );


add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );


register_nav_menus([
    'TM' => 'Primary menu',
    'FM' => 'Footer menu'
]);

register_sidebar([
    'name'=>'TOP HEADER LEFT',
    'id'=>'thl',
    'before_widget'=>'',
    'after_widget'=>'',

]);

register_sidebar([
    'name'=>'TOP HEADER RIGHT',
    'id'=>'thr',
    'before_widget'=>'',
    'after_widget'=>'',

]);

register_sidebar([
    'name'=>'SEARCH',
    'id'=>'search',
    'before_widget'=>'',
    'after_widget'=>'',

]);
register_sidebar([
    'name'=>'a2i',
    'id'=>'a2i',
    'before_widget'=>'',
    'after_widget'=>'',

]);


register_sidebar([
    'name'=>'sclogo',
    'id'=>'sclogo',
    'before_widget'=>'',
    'after_widget'=>'',

]);

register_sidebar([
    'name'=>'BANNER IMAGE',
    'id'=>'banner',
    'before_widget'=>'',
    'after_widget'=>'',

]);

register_sidebar([
    'name'=>'TAB ITEM 1',
    'id'=>'tabitem1',
    'before_widget'=>'',
    'after_widget'=>'',

]);

register_sidebar([
    'name'=>'NEWS TITLE+LIST',
    'id'=>'news',
    'before_widget'=>'',
    'after_widget'=>'',

]);


register_sidebar([
    'name'=>'SIDEBAR IMG 1',
    'id'=>'sideimg1',
    'before_widget'=>'',
    'after_widget'=>'',

]);

register_sidebar([
    'name'=>'SIDE VIDEO 1',
    'id'=>'sidevideo',
    'before_widget'=>'',
    'after_widget'=>'',

]);

register_sidebar([
    'name'=>'FOOTERT IMAGE',
    'id'=>'ftimage',
    'before_widget'=>'',
    'after_widget'=>'',

]);
register_sidebar([
    'name'=>'FOOTER NP IMAGE',
    'id'=>'np_logo',
    'before_widget'=>'',
    'after_widget'=>'',

]);






















; ?>