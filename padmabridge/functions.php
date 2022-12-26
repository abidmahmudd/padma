<?php
    	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
     	wp_enqueue_style( 'style-boot', get_template_directory_uri() . './assets/css/bootstrap.min.css'  );
        wp_enqueue_script( 'script-name', get_template_directory_uri() . './assets/js/bootstrap.min.js', array(), '1.0.0', true );
       
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'custom-logo' );
        add_theme_support( 'post-thumbnails' );

        register_sidebar( array(
            'name'=>'logo2',
            'id'=>'logo2',
            'before_widget' => '',
            'after_widget'  => ''
        ) );

        register_nav_menus( array(
            'tm'=>'pramiry',
        ) );

        register_sidebar( array(
            'name'=>'npart',
            'id'=>'npart',
            'before_widget' => '',
            'after_widget'  => ''
        ) );

        register_sidebar( array(
            'name'=>'ci1',
            'id'=>'ci1',
            'before_widget' => '',
            'after_widget'  => ''
        ) );
        register_sidebar( array(
            'name'=>'c1',
            'id'=>'c1',
            'before_widget' => '',
            'after_widget'  => ''
        ) );
        register_sidebar( array(
            'name'=>'ci2',
            'id'=>'ci2',
            'before_widget' => '',
            'after_widget'  => ''
        ) );
        register_sidebar( array(
            'name'=>'c2',
            'id'=>'c2',
            'before_widget' => '',
            'after_widget'  => ''
        ) );
        register_sidebar( array(
            'name'=>'ci3',
            'id'=>'ci3',
            'before_widget' => '',
            'after_widget'  => ''
        ) );
        register_sidebar( array(
            'name'=>'c3',
            'id'=>'c3',
            'before_widget' => '',
            'after_widget'  => ''
        ) );
        register_sidebar( array(
            'name'=>'line1',
            'id'=>'line1',
            'before_widget' => '',
            'after_widget'  => ''
        ) );
        register_sidebar( array(
            'name'=>'line2',
            'id'=>'line2',
            'before_widget' => '',
            'after_widget'  => ''
        ) );
        register_sidebar( array(
            'name'=>'brimg',
            'id'=>'brimg',
            'before_widget' => '',
            'after_widget'  => ''
        ) );
        register_sidebar( array(
            'name'=>'brbody',
            'id'=>'brbody',
            'before_widget' => '',
            'after_widget'  => ''
        ) );
        register_sidebar( array(
            'name'=>'footleft',
            'id'=>'footleft',
            'before_widget' => '',
            'after_widget'  => ''
        ) );
        register_sidebar( array(
            'name'=>'footright',
            'id'=>'footright',
            'before_widget' => '',
            'after_widget'  => ''
        ) );


?>