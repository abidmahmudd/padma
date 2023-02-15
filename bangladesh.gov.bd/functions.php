<?php
    	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
     	wp_enqueue_style( 'style-boot', get_template_directory_uri() . './assets/css/bootstrap.min.css'  );
        wp_enqueue_script( 'script-name', get_template_directory_uri() . './assets/js/bootstrap.min.js', array(), '1.0.0', true );
       
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'custom-logo' );
        add_theme_support( 'post-thumbnails' );

        register_sidebar( array(
            'name'=>'i1',
            'id'=>'i1',
            'before_widget' => '',
            'after_widget'  => ''
        ) );

        register_nav_menus( array(
            'tm'=>'pramiry',
            'sec'=>'secand',
        ) );

        register_sidebar( array(
            'name'=>'i2',
            'id'=>'i2',
            'before_widget' => '',
            'after_widget'  => ''
        ) );

        register_sidebar( array(
            'name'=>'sr1',
            'id'=>'sr1',
            'before_widget' => '',
            'after_widget'  => ''
        ) );
        register_sidebar( array(
            'name'=>'udd',
            'id'=>'udd',
            'before_widget' => '',
            'after_widget'  => ''
        ) );
        register_sidebar( array(
            'name'=>'i3',
            'id'=>'i3',
            'before_widget' => '',
            'after_widget'  => ''
        ) );
        register_sidebar( array(
            'name'=>'i4',
            'id'=>'i4',
            'before_widget' => '',
            'after_widget'  => ''
        ) );
        register_sidebar( array(
            'name'=>'i5',
            'id'=>'i5',
            'before_widget' => '',
            'after_widget'  => ''
        ) );
        register_sidebar( array(
            'name'=>'i6',
            'id'=>'i6',
            'before_widget' => '',
            'after_widget'  => ''
        ) );
        register_sidebar( array(
            'name'=>'i7',
            'id'=>'i7',
            'before_widget' => '',
            'after_widget'  => ''
        ) );
        register_sidebar( array(
            'name'=>'i8',
            'id'=>'i8',
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