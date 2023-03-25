<?php
if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

function robiclab_scripts() {
	wp_enqueue_style( 'robiclab-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_style('robiclab-aos', get_template_directory_uri() . '/assets/css/aos.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('robiclab-swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), _S_VERSION, 'all');
	if ( is_page_template(['template-homepage.php']) ){
		wp_enqueue_style('robiclab-onepage-scroll', get_template_directory_uri() . '/assets/css/onepage-scroll.css', array(), _S_VERSION, 'all');
	}
	wp_enqueue_style('robiclab-main-style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION, 'all');

	wp_deregister_script( 'jquery' ); //разрегистирируем скрипт jquery
    wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), false, true);
    wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'robiclab-ajax-search', get_template_directory_uri() . '/assets/js/ajax-search.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'robiclab-aos', get_template_directory_uri() . '/assets/js/aos.js', array(), _S_VERSION, true );
	// wp_enqueue_script( 'robiclab-form', get_template_directory_uri() . '/assets/js/form.js', array(), _S_VERSION, true );
	// wp_enqueue_script( 'robiclab-event-move', get_template_directory_uri() . '/assets/js/jquery.event.move.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'robiclab-masked-input', get_template_directory_uri() . '/assets/js/jquery.maskedinput.min.js', array(), _S_VERSION, true );

	if ( is_page_template(['template-homepage.php']) ){
		wp_enqueue_script( 'robiclab-onepage-scroll', get_template_directory_uri() . '/assets/js/jquery.onepage-scroll.min.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'robiclab-scroll', get_template_directory_uri() . '/assets/js/scroll.js', array(), _S_VERSION, true );
	}
	if ( !is_page_template(['template-homepage.php']) ){
		wp_enqueue_script( 'robiclab-preloader', get_template_directory_uri() . '/assets/js/preloader.js', array(), _S_VERSION, true );
	}

	if ( is_page_template(['template-communications.php']) ){
		wp_enqueue_script( 'robiclab-api-maps', 'https://api-maps.yandex.ru/2.1/?lang=ru_ru&apikey=*7494e3e7-008f-4e03-bd72-31a4650591f7', array(), null, true );
		wp_enqueue_script( 'robiclab-map', get_template_directory_uri() . '/assets/js/map.js', array(), _S_VERSION, true );
	}

	if ( is_page_template(['template-experiments.php']) ){
		wp_enqueue_script( 'robiclab-filter', get_template_directory_uri() . '/assets/js/filter.js', array(), _S_VERSION, true );
	}

	

	wp_enqueue_script( 'robiclab-laboratory', get_template_directory_uri() . '/assets/js/laboratory.js', array(), _S_VERSION, true );

	
	wp_enqueue_script( 'robiclab-modal', get_template_directory_uri() . '/assets/js/modal.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'robiclab-swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'robiclab-slider', get_template_directory_uri() . '/assets/js/slider.js', array(), _S_VERSION, true );


	wp_enqueue_script( 'robiclab-lottie_svg', get_template_directory_uri() . '/assets/js/lottie_svg.min.js', array(), _S_VERSION, true );
	// wp_enqueue_script( 'robiclab-bodymovin', 'https://cdnjs.com/libraries/bodymovin', array(), null, true );


	wp_enqueue_script( 'robiclab-function', get_template_directory_uri() . '/assets/js/function.js', array(), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'robiclab_scripts' );

function custom_admin_styles_scripts() {
	wp_enqueue_style("custom-admin-css", get_template_directory_uri() . '/assets/css/wp-admin.css');
}

add_action('admin_enqueue_scripts', 'custom_admin_styles_scripts');




function robiclab_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	// add_image_size( 'custom_img_sm', 500, 350, true);
	// add_image_size( 'custom_img', 1200, 960, true);

	register_nav_menus(
		array(
			'main' => esc_html__( 'main', 'robiclab' ),
			'laboratories_1' => esc_html__( 'laboratories_col_1', 'robiclab' ),
			'laboratories_2' => esc_html__( 'laboratories_col_2', 'robiclab' ),
			'help_center' => esc_html__( 'help_center', 'robiclab' ),
			// 'laboratories_2' => esc_html__( 'laboratories_col_2', 'robiclab' ),
			// 'menu-header' => esc_html__( 'header' ),
			// 'menu-footer' => esc_html__( 'footer' ),
			// 'menu-footer-service' => esc_html__( 'footer-service' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'robiclab_setup' );

function robiclab_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'robiclab_content_width', 640 );
}
add_action( 'after_setup_theme', 'robiclab_content_width', 0 );

//Разрешаем загрузку WebP
function webp_upload_mimes( $existing_mimes ) {
    // add webp to the list of mime types
    $existing_mimes['webp'] = 'image/webp';

    // return the array back to the function with our added mime type
    return $existing_mimes;
}
add_filter( 'mime_types', 'webp_upload_mimes' );

## отключаем создание миниатюр файлов для указанных размеров
add_filter( 'intermediate_image_sizes', 'delete_intermediate_image_sizes' );  
function delete_intermediate_image_sizes( $sizes ){
    // размеры которые нужно удалить
    return array_diff( $sizes, [
        // 'thumbnail',
        'medium',
        'medium_large',
        'large',
        '1536x1536',
        '2048x2048',
    ] );
}

add_filter( 'excerpt_length', function(){
	return 12;
} );
add_filter('excerpt_more', function($more) {
	return '...';
});

## Удаляет "Рубрика: ", "Метка: " и т.д. из заголовка архива
add_filter('get_the_archive_title', function( $title ){
	return preg_replace('~^[^:]+: ~', '', $title );
});


//скрываем пункты меню в админ панели
add_action('admin_menu', 'remove_menus');
function remove_menus() {
    //remove_menu_page('index.php');                # Консоль 
    remove_menu_page('edit.php');                 # Записи 
    remove_menu_page('edit-comments.php');        # Комментарии 
    //remove_menu_page('edit.php?post_type=page');  # Страницы 
    //remove_menu_page('upload.php');               # Медиафайлы 
    //remove_menu_page('themes.php');               # Внешний вид 
    //remove_menu_page('plugins.php');              # Плагины 
    // remove_menu_page('users.php');                # Пользователи 
    // remove_menu_page('tools.php');                # Инструменты 
    //remove_menu_page('options-general.php');      # Параметры 
    // remove_menu_page('edit.php?post_type=smart-custom-fields'); # ACF smart-custom-fields
}



// require get_template_directory() . '/inc/ajax-load-posts.php';
require get_template_directory() . '/inc/breadcrumb.php';
// Отключаем принудительную проверку новых версий WP, плагинов и темы в админке,
require get_template_directory() . '/inc/disable-verification.php';
require get_template_directory() . '/inc/helpers.php';

require get_template_directory() . '/inc/post-type.php';
require get_template_directory() . '/inc/acf-options.php';
require get_template_directory() . '/inc/ajax-search.php';
require get_template_directory() . '/inc/filter.php';


// require get_template_directory() . '/inc/filter-designers.php'; 
// require get_template_directory() . '/inc/filter-portfolio.php'; 



