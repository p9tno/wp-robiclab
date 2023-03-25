<?php
function custom_register_post_type() {

    // START apartment

    $labels = array(
    'name'              => ( 'Лаборатории' ),
    'singular_name'     => ( 'Лаборатория' ),
    'search_items'      => ( 'Поиск по лабораторий' ),
    'all_items'         => ( 'Все лаборатории' ),
    'edit_item'         => ( 'Редактировать лабораторию' ),
    'update_item'       => ( 'Обновить' ),
    'add_new_item'      => ( 'Добавить' ),
    'new_item_name'     => ( 'Название новой лаборатории' ),
    'menu_name'         => ( 'Лаборатории' ),
    );

    $args = array(
        //вложеность термов(например вложность для стран и городов) иерархический
        'hierarchical'	=> true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        // 'rewrite'           => array( 'slug' => 'portfolio-cat' ),
        'rewrite'           => true,
        // 'show_in_rest'      => true,
        
    );

    if (!taxonomy_exists( 'video-lab' )) {
        register_taxonomy('video-lab', array('video'), $args);
    }
 
    register_post_type('video', array(
		'labels'             => array(
			'name'               => 'Видео', 
			'singular_name'      => 'Видео', 
			'add_new'            => 'Добавить видео',
			'add_new_item'       => 'Добавить новое видео',
			'edit_item'          => 'Редактировать видео',
			'new_item'           => 'Новое видео',
			'view_item'          => 'Посмотреть видео',
			'menu_name'          => 'Видео', 
		  ),
		'public'     => false,
		'supports'   => array('title'),
        'menu_icon'  => 'dashicons-format-video',
        'show_ui' => true, 
        'menu_position' => 5,
		'rewrite'    => [
			'with_front' => false
		]
	));
    // END apartment

    // очищаем $args
    unset($args);
    unset($labels);

    // //START raboty
    // $labels = array(
    //     'name'              => ( 'Услуга' ),
    //     'singular_name'     => ( 'Услуга' ),
    //     'search_items'      => ( 'Поиск по услугам' ),
    //     'all_items'         => ( 'Все услуги' ),
    //     'parent_item'       => ( 'Родительская услуга' ),
    //     'parent_item_colon' => ( 'Родительская услуга:' ),
    //     'edit_item'         => ( 'Редактировать услугу' ),
    //     'update_item'       => ( 'Обновить услугу' ),
    //     'add_new_item'      => ( 'Добавить новую услугу' ),
    //     'new_item_name'     => ( 'Название новой услуги' ),
    //     'menu_name'         => ( 'Услуга' ),
    // );

    // $args = array(
    //     //вложеность термов(например вложность для стран и городов) иерархический
    //     'hierarchical'	=> true,
    //     'labels'            => $labels,
    //     'show_ui'           => true,
    //     'show_admin_column' => true,
    //     'query_var'         => true,
    //     'rewrite'           => array( 'slug' => 'usluga' ),
        
    // );

    // if (!taxonomy_exists( 'usluga' )) {
    //     register_taxonomy('usluga', array('raboty'), $args);
    // }
    
    // // очищаем $args
    // unset($args);

    // $labels = array(
    //     'name'                  => ( 'Работы' ),
    //     'singular_name'         => ( 'Работы' ),
    //     'menu_name'             => ( 'Работы' ),
    //     'name_admin_bar'        => ( 'Работы' ),
    //     'add_new'               => ( 'Добавить' ),
    //     'add_new_item'          => ( 'Добавить' ),
    //     'new_item'              => ( 'Новый проект'),
    //     'edit_item'             => ( 'Редактировать' ),
    //     'view_item'             => ( 'Вид' ),
    //     'all_items'             => ( 'Все' ),
    //     'search_items'          => ( 'Поиск' ),
    //     'parent_item_colon'     => ( 'Родитель:' ),
    //     'not_found'             => ( 'не наден.'),
    //     'not_found_in_trash'    => ( 'В корзине не обнаружен.' ),
    //     'featured_image'        => ( 'Изображение на обложке' ),
    //     'set_featured_image'    => ( 'Установить обложку' ),
    //     'remove_featured_image' => ( 'Удалить изображение обложки' ),
    //     'use_featured_image'    => ( 'Использовать как обложку' ),
    //     'archives'              => ( 'Архивы' ),
    //     'insert_into_item'      => ( 'Вставить' ),
    //     'uploaded_to_this_item' => ( 'Загружено' ),
    //     'filter_items_list'     => ( 'Список фильтров' ),
    //     'items_list_navigation' => ( 'по списку навигации' ),
    //     'items_list'            => ( 'Список' ),   
    // );

    // $args = array(
    //     'labels'             => $labels,
    //     'public'             => true,
    //     'publicly_queryable' => true,
    //     'show_ui'            => true,
    //     'show_in_menu'       => true,
    //     'query_var'          => true,
    //     'rewrite'            => array( 'slug' => 'raboty' ),
    //     'capability_type'    => 'post',
    //     'has_archive'        => true,
    //     'hierarchical'       => false,
    //     'menu_position'      => null,
    //     'supports'           => array( 'title' ),
    //     'menu_icon'			 => 'dashicons-hammer',
    //     'show_in_rest'       => true,
    // );

    // register_post_type( 'raboty', $args );
    // // очищаем $args $labels
    // unset($args);
    // unset($labels);


    // //END raboty


   
}
 
add_action( 'init', 'custom_register_post_type' );

//обновления ЧПУ после инициализации post type
function my_template_rewrite_rules(){
    my_template_rewrite_rukes();
    flush_rewrite_rules();
}

add_action('after_switch_theme', 'my_template_rewrite_rules');

