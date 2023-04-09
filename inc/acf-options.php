<?php

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Шапка',
        'menu_title'	=> 'Шапка',
        'menu_slug' 	=> 'theme-header',
        'capability'	=> 'edit_posts',
        'redirect'		=> false,
        // 'icon_url' => 'dashicons-arrow-up',
    ));		
	acf_add_options_page(array(
		'page_title' 	=> 'Контакты',
		'menu_title'	=> 'Контакты',
		'menu_slug' 	=> 'theme-contact',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
        'icon_url' => 'dashicons-phone',
	));	
	acf_add_options_page(array(
		'page_title' 	=> 'Настройки контента',
		'menu_title'	=> 'Контент сайта',
		'menu_slug' 	=> 'theme-global-content',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
        'icon_url' => 'dashicons-text',
	));
    acf_add_options_page(array(
        'page_title' 	=> 'Подвал',
        'menu_title'	=> 'Подвал',
        'menu_slug' 	=> 'theme-footer',
        'capability'	=> 'edit_posts',
        'redirect'		=> false,
        // 'icon_url' => 'dashicons-arrow-down',
    ));
}

function my_template_acf_mataboxes(){
    // BEGIN GLOBAL CONTACTS
    acf_add_local_field_group(array(
        'key' => 'acf_global_contacts',
        'title' => 'Контактные данные',
        'fields' => array(
            array(
                'key' => 'phone',
                'label' => 'Номер телефона',
                'name' => 'phone',
                'type' => 'text',
            ),
            array(
                'key' => 'clock',
                'label' => 'Время работы',
                'name' => 'clock',
                'type' => 'text',
            ),
            array(
                'key' => 'location',
                'label' => 'Локация',
                'name' => 'location',
                'type' => 'text',
            ),
            array(
                'key' => 'inn',
                'label' => 'ИНН:',
                'name' => 'inn',
                'type' => 'text',
            ),
            array(
                'key' => 'mail',
                'label' => 'Email',
                'name' => 'mail',
                'type' => 'text',
            ),
            array(
                'key' => 'mail_to',
                'label' => '<b>Email для получения заявок с сайта</b>',
                'name' => 'mail_to',
                'type' => 'text',
                // 'instructions' => 'Почта получателя в одинарных <b>кавычках</b>, через запятую можно указать несколько адресов.',
                // 'placeholder' => 'daria11140@gmail.com',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-contact',
                )
            )
        ),
    ));
    // END GLOBAL CONTACTS
    // ---------------------------------------------------------
    // BEGIN GLOBAL HEADER
    acf_add_local_field_group(array(
        'key' => 'acf_global_header',
        'title' => 'Настройки шапки',
        'fields' => array(
            // ------------------------------- tab_header_general
            array (
                'key' => 'tab_header_general',
                'label' => 'Общие настройки', 
                'type' => 'tab',
            ),
            array(
                'key' => 'logo_boolean',
                'label' => 'Отображать логотип?',
                'name' => 'logo_boolean',
                'type' => 'true_false',
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Да',
                'ui_off_text' => 'Нет',
            ),
            array(
                'key' => 'logo_img_id',
                'label' => 'Цветной логотип',
                'name' => 'logo_img_id',
                'type' => 'image',
                'return_format' => 'id',  // 'id' || 'url'
                'preview_size' => 'full',
            ),
            array(
                'key' => 'logo_img_id_w',
                'label' => 'Белый логотип',
                'name' => 'logo_img_id_w',
                'type' => 'image',
                'return_format' => 'id',  // 'id' || 'url'
                'preview_size' => 'full',
            ),
            // ------------------------------- tab_header_scripts
            array (
                'key' => 'tab_header_scripts',
                'label' => 'Скрипты', 
                'type' => 'tab',
            ),
            array(
                'key' => 'header_scripts',
                'label' => 'Скрипты перед закрывающим тегом <b>/HEAD</b>',
                'name' => 'header_scripts',
                'type' => 'textarea',
                'rows'  => 20,
            ),
            // ------------------------------- nav_links
            array (
                'key' => 'tab_nav_links',
                'label' => 'Кнопка', 
                'type' => 'tab',
            ),
            array(
                'key' => 'test_message',
                'name' => 'test_message',
                'type' => 'message',
                'message' => '<p>Дополнительные кнопка в открытом меню снизу:</p>',
                'new_lines' => 'wpautop',
                'esc_html' => 0,
            ),
            array(
                'key' => 'header_btn',
                'label' => 'Кнопка',
                'name' => 'header_btn',
                'type' => 'link',
                'return_format' => 'array',  // 'array' || 'url'
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-header',
                )
            )
        ),
    ));
    // END GLOBAL HEADER
    // ---------------------------------------------------------
    // BEGIN GLOBAL FOOTER
    acf_add_local_field_group(array(
        'key' => 'acf_global_footer',
        'title' => 'Настройки подвала',
        'fields' => array(
            // ------------------------------- tab_footer_scripts
            array (
                'key' => 'tab_footer_scripts',
                'label' => 'Скрипты', 
                'type' => 'tab',
            ),
            array(
                'key' => 'footer_scripts',
                'label' => 'Скрипты перед закрывающим тегом <b>/BODY</b>',
                'name' => 'footer_scripts',
                'type' => 'textarea',
                'rows'  => 20,
            ),
            // ------------------------------- footer_links
            array (
                'key' => 'tab_footer_links',
                'label' => 'Ссылки', 
                'type' => 'tab',
            ),
            array(
                'key' => 'boolean_footer_policy',
                'label' => 'Отображать блок? (Политика конфендициальности)',
                'name' => 'boolean_footer_policy',
                'type' => 'true_false',
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Да',
                'ui_off_text' => 'Нет',
            ),
            array(
                'key' => 'footer_link_map',
                'label' => 'Карта сайта',
                'name' => 'footer_link_map',
                'type' => 'link',
                'return_format' => 'array',  // 'array' || 'url'
            ),
            array(
                'key' => 'boolean_footer_links',
                'label' => 'Отображать блок? (Cобщить об ошибке)',
                'name' => 'boolean_footer_links',
                'type' => 'true_false',
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Да',
                'ui_off_text' => 'Нет',
            ),

        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-footer',
                )
            )
        ),
    ));
    // END GLOBAL FOOTER
    // ---------------------------------------------------------
    // BEGIN GLOBAL CONTENT
    acf_add_local_field_group(array(
        'key' => 'acf_global_content',
        'title' => 'Настройки контента',
        'fields' => array(
            // ------------------------------- Preloader
            array (
                'key' => 'tab_content_preloader',
                'label' => 'Preloader', 
                'type' => 'tab',
            ),
            array(
                'key' => 'preloader_boolean',
                'label' => 'Отображать блок?',
                'name' => 'preloader_boolean',
                'type' => 'true_false',
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Да',
                'ui_off_text' => 'Нет',
            ),
            // ------------------------------- privacy
            array (
                'key' => 'tab_content_privacy',
                'label' => 'Политика конфиденциальности', 
                'type' => 'tab',
            ),
            array(
                'key' => 'privacy_title',
                'label' => 'Заголовок',
                'name' => 'privacy_title',
                'type' => 'text',
            ),
            array(
                'key' => 'privacy_content',
                'label' => 'Контент',
                'name' => 'privacy_content',
                'type' => 'wysiwyg',
                'tabs' => 'all',  // 'visual' || 'text'
                'toolbar' => 'full',  // 'basic'
                'media_upload' => 0,
                'delay' => 0,
            ),
            // ------------------------------- icon
            array (
                'key' => 'tab_icon',
                'label' => 'Иконки', 
                'type' => 'tab',
            ),
            array(
                'key' => 'icon_message',
                'label' => 'Иконки на сайте',
                'name' => 'icon_message',
                'type' => 'message',
                'message' => '
                    Физика:   <i class="icon_physics"></i>
                    Математика:   <i class="icon_maths"></i>
                    Химия:   <i class="icon_chemistry"></i>
                    Биология:   <i class="icon_biology"></i>
                    География:   <i class="icon_geography"></i>
                    Естествознание:   <i class="icon_natural_science"></i>
                    Экология:   <i class="icon_ecology"></i>
                    ОБЖ:   <i class="icon_obj"></i>
                    Окружающий мир:   <i class="icon_world"></i>
                    Нанотехнологии:   <i class="icon_nanotechnology"></i>
                    Для дошкольного образования и начальной школы:   <i class="icon_baby"></i>
                    Основы технологии и инженерии:   <i class="icon_engineering"></i>
                    Астрономия:   <i class="icon_astronomy"></i>
                    История и Археология:   <i class="icon_history"></i>
                    Физическая культура:   <i class="icon_physical"></i>
                ',
                'new_lines' => 'wpautop',
                'esc_html' => 1,
            ),
            // ------------------------------- download
            array (
                'key' => 'tab_download',
                'label' => 'Ссылки на загрузку', 
                'type' => 'tab',
            ),
            array(
                'key' => 'download_links',
                'label' => 'Список ссылок на скачивание',
                'name' => 'download_links',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row' || 'table'
                'min' => 0,
                'max' => 3,
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'download_icon',
                        'label' => 'Иконка',
                        'name' => 'download_icon',
                        'type' => 'select',
                        'ui' => 1,
                        'return_format' => 'value',  // 'array' || 'label'
                        'choices' => [
                            'icon_windows' => 'windows',   
                            'icon_linux' => 'linux',   
                            'icon_mac' => 'mac',   
                        ],
                        'default_value' => 'icon_windows',
                        'wrapper' => array (
                            'width' => '33',
                        ),
                    ),
                    array(
                        'key' => 'download_text',
                        'label' => 'Текст ссылки',
                        'name' => 'download_text',
                        'type' => 'text',
                        'wrapper' => array (
                            'width' => '33',
                        ),
                    ),
                    // array(
                    //     'key' => 'download_text_m',
                    //     'label' => 'Текст ссылки, на мобильной версии',
                    //     'name' => 'download_text_m',
                    //     'type' => 'text',
                    //     'wrapper' => array (
                    //         'width' => '30',
                    //     ),
                    // ),
                    array(
                        'key' => 'download_url',
                        'label' => 'Cсылка',
                        'name' => 'download_url',
                        'type' => 'link',
	                    'return_format' => 'url',  // 'array'
                        'wrapper' => array (
                            'width' => '33',
                        ),
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-global-content',
                )
            )
        ),
    ));
    // END GLOBAL CONTENT
    // ---------------------------------------------------------



    // BEGIN firstscreen section
    acf_add_local_field_group(array(
        'key' => 'acf_firstscreen_settings',
        'title' => 'Настройки секции робота',
        'fields' => array(
            array(
                'key' => 'firstscreen_title',
                'label' => 'Заголовок',
                'name' => 'firstscreen_title',
                'type' => 'text',
            ),
            array(
                'key' => 'test_message',
                'label' => 'ПРИМЕЧАНИЕ!!!  ID - должен быть уникальным',
                'name' => 'test_message',
                'type' => 'message',
                'message' => '<h2 style="color:#0659FB;">Список необходимых <b>ID</b> для робота:</h2>
                <ol>
                    <li>Globus</li>
                    <li>Bottle</li>
                    <li>Book</li>
                    <li>Counter</li>
                    <li>Atom</li>
                    <li>Rain</li>
                </ol>',
                'new_lines' => 'wpautop',
                'esc_html' => 0,
            ),
            array(
                'key' => 'firstscreen_list',
                'label' => 'Список',
                'name' => 'firstscreen_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row' || 'table'
                'min' => 6,
                'max' => 6,
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'hexagon_boolean',
                        'label' => 'Включить?',
                        'name' => 'hexagon_boolean',
                        'type' => 'true_false',
                        'default_value' => 1,
                        'ui' => 1,
                        'ui_on_text' => 'Да',
                        'ui_off_text' => 'Нет',
                        'wrapper' => array (
                            'width' => '20',
                        ),
                    ),
                    array(
                        'key' => 'hexagon_id',
                        'label' => '<b>ID</b>',
                        'name' => 'hexagon_id',
                        'type' => 'text',
                        'wrapper' => array (
                            'width' => '20',
                        ),
                        'required' => 1,
                    ),
                    array(
                        'key' => 'hexagon_icon',
                        'label' => 'Иконка',
                        'name' => 'hexagon_icon',
                        'type' => 'select',
                        'allow_null' => 1,
                        'multiple' => 0,
                        'ui' => 1,
                        'return_format' => 'value',  // 'array' || 'label'
                        'choices' => [
                            'icon_physics' => 'Физика',   
                            'icon_maths' => 'Математика',   
                            'icon_chemistry' => 'Химия',   
                            'icon_biology' => 'Биология',   
                            'icon_geography' => 'География',   
                            'icon_natural_science' => 'Естествознание',   
                            'icon_ecology' => 'Экология',   
                            'icon_obj' => 'ОБЖ',   
                            'icon_world' => 'Окружающий мир',   
                            'icon_nanotechnology' => 'Нанотехнологии',   
                            'icon_baby' => 'Дошкольного образования',   
                            'icon_engineering' => 'Основы тех. и ин.',   
                            'icon_astronomy' => 'Астрономия',   
                            'icon_history' => 'История и Археология',   
                            'icon_physical' => 'Физическая культура',
                        ],
                        'default_value' => 'icon_physics',
                        'wrapper' => array (
                            'width' => '20',
                        ),
                        'required' => 1,
                    ),
                    array(
                        'key' => 'hexagon_label',
                        'label' => 'Текст',
                        'name' => 'hexagon_label',
                        'type' => 'text',
                        'wrapper' => array (
                            'width' => '20',
                        ),
                        'required' => 1,
                    ),
                ),
            ),
            array(
                'key' => 'hexagon_link',
                'label' => 'Ссылка',
                'name' => 'hexagon_link',
                'type' => 'text',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-homepage.php',
                )
            ),
        ),
        'menu_order' => 1,
    ));
    // END firstscreen section
    // ---------------------------------------------------------
    // BEGIN digitalLab section
    acf_add_local_field_group(array(
        'key' => 'acf_digitalLab_settings',
        'title' => 'Настройки "Цифровая лаборатория"',
        'fields' => array(
            array(
                'key' => 'digitalLab_title',
                'label' => 'Заголовок',
                'name' => 'digitalLab_title',
                'type' => 'text',
            ),
            array(
                'key' => 'digitalLab_desc',
                'label' => 'Описание',
                'name' => 'digitalLab_desc',
                'type' => 'textarea',
                'rows' => 2,
                'instructions' => 'Используйте тег <b>p</b> для выделения абзацев',
                'placeholder' => '<p>Абзац</p>'
            ),
            array(
                'key' => 'digitalLab_btn_white',
                'label' => 'Белая кнопка',
                'name' => 'digitalLab_btn_white',
                'type' => 'link',
                'return_format' => 'array',  // 'array' || 'url'
            ),
            array(
                'key' => 'digitalLab_btn_blue',
                'label' => 'Синяя кнопка',
                'name' => 'digitalLab_btn_blue',
                'type' => 'link',
                'return_format' => 'array',  // 'array' || 'url'
            ),
            array(
                'key' => 'digitalLab_label',
                'label' => 'Описание PWA',
                'name' => 'digitalLab_label',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => '* - PWA является способность трансформировать сайт в приложение. При этом выглядит оно как полноценный <br> mobile app, но имеет совсем небольшой размер, тратит меньше ресурсов, а загружается быстрее.',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-homepage.php',
                )
            ),
        ),
        'menu_order' => 10,
    ));
    // END digitalLab section
    // ---------------------------------------------------------
    // BEGIN neuro section
    acf_add_local_field_group(array(
        'key' => 'acf_neuro_settings',
        'title' => 'Настройки "РобикЛаб Нейро"',
        'fields' => array(
            array(
                'key' => 'neuro_title',
                'label' => 'Заголовок',
                'name' => 'neuro_title',
                'type' => 'text',
            ),
            array(
                'key' => 'neuro_desc',
                'label' => 'Описание',
                'name' => 'neuro_desc',
                'type' => 'textarea',
                'rows' => 2,
                'instructions' => 'Используйте тег <b>p</b> для выделения абзацев',
                'placeholder' => '<p>Абзац</p>'
            ),
            array(
                'key' => 'neuro_btn_white',
                'label' => 'Белая кнопка',
                'name' => 'neuro_btn_white',
                'type' => 'link',
                'return_format' => 'array',  // 'array' || 'url'
            ),
            array(
                'key' => 'neuro_btn_blue',
                'label' => 'Синяя кнопка',
                'name' => 'neuro_btn_blue',
                'type' => 'link',
                'return_format' => 'array',  // 'array' || 'url'
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-homepage.php',
                )
            ),
        ),
        'menu_order' => 20,
    ));
    // END neuro section
    // ---------------------------------------------------------
    // BEGIN practical section
    acf_add_local_field_group(array(
        'key' => 'acf_practical_settings',
        'title' => 'Настройки "Практикум"',
        'fields' => array(
            array(
                'key' => 'practical_title',
                'label' => 'Заголовок',
                'name' => 'practical_title',
                'type' => 'text',
            ),
            array(
                'key' => 'practical_desc',
                'label' => 'Описание',
                'name' => 'practical_desc',
                'type' => 'textarea',
                'rows' => 2,
                'instructions' => 'Используйте тег <b>p</b> для выделения абзацев',
                'placeholder' => '<p>Абзац</p>'
            ),
            array(
                'key' => 'practical_img_id',
                'label' => 'Изображение',
                'name' => 'practical_img_id',
                'type' => 'image',
                'return_format' => 'id',  // 'id' || 'url' || 'array'
                'preview_size' => 'thumbnail', // (thumbnail, medium, large, full or custom size)
                'instructions' => 'Рекомендуемое разрешение изображения не более 640/640px. Формат: .gif',
            ),
            array(
                'key' => 'practical_btn_white',
                'label' => 'Белая кнопка',
                'name' => 'practical_btn_white',
                'type' => 'link',
                'return_format' => 'array',  // 'array' || 'url'
            ),
            array(
                'key' => 'practical_btn_blue',
                'label' => 'Синяя кнопка',
                'name' => 'practical_btn_blue',
                'type' => 'link',
                'return_format' => 'array',  // 'array' || 'url'
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-homepage.php',
                )
            ),
        ),
        'menu_order' => 30,
    ));
    // END practical section
    // ---------------------------------------------------------
    // BEGIN robotics section
    acf_add_local_field_group(array(
        'key' => 'acf_robotics_settings',
        'title' => 'Настройки "Робототехника"',
        'fields' => array(
            array(
                'key' => 'robotics_title',
                'label' => 'Заголовок',
                'name' => 'robotics_title',
                'type' => 'text',
            ),
            array(
                'key' => 'robotics_desc',
                'label' => 'Описание',
                'name' => 'robotics_desc',
                'type' => 'textarea',
                'rows' => 2,
                'instructions' => 'Используйте тег <b>p</b> для выделения абзацев',
                'placeholder' => '<p>Абзац</p>'
            ),
            array(
                'key' => 'robotics_btn_white',
                'label' => 'Белая кнопка',
                'name' => 'robotics_btn_white',
                'type' => 'link',
                'return_format' => 'array',  // 'array' || 'url'
            ),
            array(
                'key' => 'robotics_btn_blue',
                'label' => 'Синяя кнопка',
                'name' => 'robotics_btn_blue',
                'type' => 'link',
                'return_format' => 'array',  // 'array' || 'url'
            ),
            array(
                'key' => 'robotics_message',
                'name' => 'robotics_message',
                'type' => 'message',
                'message' => '<h4 style="color:#0659FB;">Отображение элементов в следующем порядке по часовой стрелке:</h4>
                <ol>
                    <li> - элемент <b>1</b></li>
                    <li> - элемент <b>2</b></li>
                    <li> - элемент <b>6</b></li>
                    <li> - элемент <b>3</b></li>
                    <li> - элемент <b>5</b></li>
                    <li> - элемент <b>4</b></li>
                </ol>',
                'new_lines' => 'wpautop',
                'esc_html' => 0,
            ),
            array(
                'key' => 'robotics_list',
                'label' => 'Список',
                'name' => 'robotics_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row' || 'table'
                'min' => 6,
                'max' => 6,
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'robotics_icon',
                        'label' => 'Иконка',
                        'name' => 'robotics_icon',
                        'type' => 'select',
                        'allow_null' => 1,
                        'multiple' => 0,
                        'ui' => 1,
                        'return_format' => 'value',  // 'array' || 'label'
                        'choices' => [
                            'icon_physics' => 'Физика',   
                            'icon_maths' => 'Математика',   
                            'icon_chemistry' => 'Химия',   
                            'icon_biology' => 'Биология',   
                            'icon_geography' => 'География',   
                            'icon_natural_science' => 'Естествознание',   
                            'icon_ecology' => 'Экология',   
                            'icon_obj' => 'ОБЖ',   
                            'icon_world' => 'Окружающий мир',   
                            'icon_nanotechnology' => 'Нанотехнологии',   
                            'icon_baby' => 'Дошкольного образования',   
                            'icon_engineering' => 'Основы тех. и ин.',   
                            'icon_astronomy' => 'Астрономия',   
                            'icon_history' => 'История и Археология',   
                            'icon_physical' => 'Физическая культура',
                        ],
                        'default_value' => 'icon_physics',
                    ),
                    array(
                        'key' => 'robotics_label',
                        'label' => 'Текст',
                        'name' => 'robotics_label',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'robotics_link',
                        'label' => 'Ссылка',
                        'name' => 'robotics_link',
                        'type' => 'text',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-homepage.php',
                )
            ),
        ),
        'menu_order' => 40,
    ));
    // END robotics section
    // ---------------------------------------------------------



    // BEGIN products section template-laboratories.php
    acf_add_local_field_group(array(
        'key' => 'acf_products_settings',
        'title' => 'Настройки "Цифровые лаборатории"',
        'fields' => array(
            array(
                'key' => 'products_list',
                'label' => 'Список лабораторий',
                'name' => 'products_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row' || 'table'
                'max' => 15,
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'boolean_products',
                        'label' => 'Светлый фон?',
                        'name' => 'boolean_products',
                        'type' => 'true_false',
                        'default_value' => 0,
                        'ui' => 1,
                        'ui_on_text' => 'Да',
                        'ui_off_text' => 'Нет',
                    ),
                    array(
                        'key' => 'products_icon',
                        'label' => 'Иконка',
                        'name' => 'products_icon',
                        'type' => 'select',
                        'allow_null' => 1,
                        'multiple' => 0,
                        'ui' => 1,
                        'return_format' => 'value',  // 'array' || 'label'
                        'choices' => [
                            'icon_physics' => 'Физика',   
                            'icon_maths' => 'Математика',   
                            'icon_chemistry' => 'Химия',   
                            'icon_biology' => 'Биология',   
                            'icon_geography' => 'География',   
                            'icon_natural_science' => 'Естествознание',   
                            'icon_ecology' => 'Экология',   
                            'icon_obj' => 'ОБЖ',   
                            'icon_world' => 'Окружающий мир',   
                            'icon_nanotechnology' => 'Нанотехнологии',   
                            'icon_baby' => 'Дошкольного образования',   
                            'icon_engineering' => 'Основы тех. и ин.',   
                            'icon_astronomy' => 'Астрономия',   
                            'icon_history' => 'История и Археология',   
                            'icon_physical' => 'Физическая культура',
                        ],
                        'default_value' => 'icon_physics',
                    ),
                    array(
                        'key' => 'products_label',
                        'label' => 'Текст',
                        'name' => 'products_label',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'products_link',
                        'label' => 'Ссылка',
                        'name' => 'products_link',
                        'type' => 'text',
                    ),
                ),
            ),
            array(
                'key' => 'products_title',
                'label' => 'Заголовок',
                'name' => 'products_title',
                'type' => 'text',
            ),
            array(
                'key' => 'products_desc',
                'label' => 'Описание',
                'name' => 'products_desc',
                'type' => 'textarea',
                'rows' => 2,
                'instructions' => 'Используйте тег <b>p</b> для выделения абзацев',
                'placeholder' => '<p>Абзац</p>'
            ),
            array(
                'key' => 'products_btn_white',
                'label' => 'Белая кнопка',
                'name' => 'products_btn_white',
                'type' => 'link',
                'return_format' => 'array',  // 'array' || 'url'
            ),
            array(
                'key' => 'products_btn_blue',
                'label' => 'Синяя кнопка',
                'name' => 'products_btn_blue',
                'type' => 'link',
                'return_format' => 'array',  // 'array' || 'url'
            ),

        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-laboratories.php',
                )
            ),
        ),
        'menu_order' => 1,
    ));
    // END products section
    // ---------------------------------------------------------



    
    // BEGIN heading section template-laboratory.php
    acf_add_local_field_group(array(
        'key' => 'acf_heading_settings',
        'title' => 'Настройки верхнего блока',
        'fields' => array(
            array(
                'key' => 'heading_desc',
                'label' => 'Описание',
                'name' => 'heading_desc',
                'type' => 'textarea',
                'rows' => 2,
                'instructions' => 'Используйте тег <b>p</b> для выделения абзацев',
                'placeholder' => '<p>Абзац</p>'
            ),
            array(
                'key' => 'heading_btn_white',
                'label' => 'Белая кнопка',
                'name' => 'heading_btn_white',
                'type' => 'link',
                'return_format' => 'array',  // 'array' || 'url'
            ),
            array(
                'key' => 'heading_btn_blue',
                'label' => 'Синяя кнопка',
                'name' => 'heading_btn_blue',
                'type' => 'link',
                'return_format' => 'array',  // 'array' || 'url'
            ),
            array(
                'key' => 'heading_label',
                'label' => 'Описание PWA',
                'name' => 'heading_label',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => '* - PWA является способность трансформировать сайт в приложение. При этом выглядит оно как полноценный <br> mobile app, но имеет совсем небольшой размер, тратит меньше ресурсов, а загружается быстрее.',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-laboratory.php',
                )
            ),
        ),
        'menu_order' => 1,
    ));
    // END heading section
    // ---------------------------------------------------------
    // BEGIN equipment section template-laboratory.php
    acf_add_local_field_group(array(
        'key' => 'acf_equipment_settings',
        'title' => 'Настройки табов',
        'fields' => array(
            array(
                'key' => 'equipment_title',
                'label' => 'Заголовок секции (перед табами)',
                'name' => 'equipment_title',
                'type' => 'text',
                'default_value' => 'Состав лаборатории',
            ),
            array(
                'key' => 'compare_modal_title',
                'label' => 'Заголовок модального окна "Сравнить наборы"',
                'name' => 'compare_modal_title',
                'type' => 'text',
                'wrapper' => array (
                    'width' => '50',
                ),
                'default_value' => 'Сравнение наборов',
            ),
            array(
                'key' => 'bargain_modal_title',
                'label' => 'Заголовок модального окна "Оформить покупку"',
                'name' => 'bargain_modal_title',
                'type' => 'text',
                'wrapper' => array (
                    'width' => '50',
                ),
                'default_value' => 'Покупка лаборатории',
            ),
            // ------------------------------- equipment_base base
            array (
                'key' => 'tab_equipment_base',
                'label' => 'Базовая', 
                'type' => 'tab',
            ),
            array(
                'key' => 'base_sensors_list',
                'label' => 'Набор цифровых датчиков:',
                'name' => 'base_sensors_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row' || 'table'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'item',
                        'label' => 'Элемент',
                        'name' => 'item',
                        'type' => 'text',
                    ),
                ),
            ),
            array(
                'key' => 'base_included_list',
                'label' => 'В комплекте',
                'name' => 'base_included_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row' || 'table'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'icon',
                        'label' => 'Иконка',
                        'name' => 'icon',
                        'type' => 'select',
                        'allow_null' => 1,
                        'multiple' => 0,
                        'ui' => 1,
                        'return_format' => 'value',  // 'array' || 'label'
                        'choices' => [
                            'icon_sim' => 'Симка',   
                            'icon_check_mark' => 'Cертификат',   
                            'icon_glasses_book' => 'Методичка',   
                            'icon_cheak_list' => 'Cпецификация',   
                            'icon_note' => 'Инструкции',   
                            'icon_physics' => 'Физика',   
                            'icon_maths' => 'Математика',   
                            'icon_chemistry' => 'Химия',   
                            'icon_biology' => 'Биология',   
                            'icon_geography' => 'География',   
                            'icon_natural_science' => 'Естествознание',   
                            'icon_ecology' => 'Экология',   
                            'icon_obj' => 'ОБЖ',   
                            'icon_world' => 'Окружающий мир',   
                            'icon_nanotechnology' => 'Нанотехнологии',   
                            'icon_baby' => 'Дошкольного образования',   
                            'icon_engineering' => 'Основы тех. и ин.',   
                            'icon_astronomy' => 'Астрономия',   
                            'icon_history' => 'История и Археология',   
                            'icon_physical' => 'Физическая культура',
                        ],
                        'default_value' => 'icon_sim',
                    ),
                    array(
                        'key' => 'item',
                        'label' => 'Элемент',
                        'name' => 'item',
                        'type' => 'text',
                    ),
                ),
            ),
            array(
                'key' => 'base_list',
                'label' => 'Дополнительная комплектация:',
                'name' => 'base_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row' || 'table'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'item',
                        'label' => 'Элемент',
                        'name' => 'item',
                        'type' => 'text',
                    ),
                ),
            ),
            // ------------------------------- equipment_standard standard
            array (
                'key' => 'tab_equipment_standard',
                'label' => 'Стандартная', 
                'type' => 'tab',
            ),
            array(
                'key' => 'standard_sensors_list',
                'label' => 'Набор цифровых датчиков:',
                'name' => 'standard_sensors_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row' || 'table'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'item',
                        'label' => 'Элемент',
                        'name' => 'item',
                        'type' => 'text',
                    ),
                ),
            ),
            array(
                'key' => 'standard_included_list',
                'label' => 'В комплекте',
                'name' => 'standard_included_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row' || 'table'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'icon',
                        'label' => 'Иконка',
                        'name' => 'icon',
                        'type' => 'select',
                        'allow_null' => 1,
                        'multiple' => 0,
                        'ui' => 1,
                        'return_format' => 'value',  // 'array' || 'label'
                        'choices' => [
                            'icon_sim' => 'Симка',   
                            'icon_check_mark' => 'Cертификат',   
                            'icon_glasses_book' => 'Методичка',   
                            'icon_cheak_list' => 'Cпецификация',   
                            'icon_note' => 'Инструкции',   
                            'icon_physics' => 'Физика',   
                            'icon_maths' => 'Математика',   
                            'icon_chemistry' => 'Химия',   
                            'icon_biology' => 'Биология',   
                            'icon_geography' => 'География',   
                            'icon_natural_science' => 'Естествознание',   
                            'icon_ecology' => 'Экология',   
                            'icon_obj' => 'ОБЖ',   
                            'icon_world' => 'Окружающий мир',   
                            'icon_nanotechnology' => 'Нанотехнологии',   
                            'icon_baby' => 'Дошкольного образования',   
                            'icon_engineering' => 'Основы тех. и ин.',   
                            'icon_astronomy' => 'Астрономия',   
                            'icon_history' => 'История и Археология',   
                            'icon_physical' => 'Физическая культура',
                        ],
                        'default_value' => 'icon_sim',
                    ),
                    array(
                        'key' => 'item',
                        'label' => 'Элемент',
                        'name' => 'item',
                        'type' => 'text',
                    ),
                ),
            ),
            array(
                'key' => 'standard_list',
                'label' => 'Дополнительная комплектация:',
                'name' => 'standard_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row' || 'table'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'item',
                        'label' => 'Элемент',
                        'name' => 'item',
                        'type' => 'text',
                    ),
                ),
            ),
            // ------------------------------- equipment_profile profile
            array (
                'key' => 'tab_equipment_profile',
                'label' => 'Профильная', 
                'type' => 'tab',
            ),
            array(
                'key' => 'profile_sensors_list',
                'label' => 'Набор цифровых датчиков:',
                'name' => 'profile_sensors_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row' || 'table'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'item',
                        'label' => 'Элемент',
                        'name' => 'item',
                        'type' => 'text',
                    ),
                ),
            ),
            array(
                'key' => 'profile_included_list',
                'label' => 'В комплекте',
                'name' => 'profile_included_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row' || 'table'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'icon',
                        'label' => 'Иконка',
                        'name' => 'icon',
                        'type' => 'select',
                        'allow_null' => 1,
                        'multiple' => 0,
                        'ui' => 1,
                        'return_format' => 'value',  // 'array' || 'label'
                        'choices' => [
                            'icon_sim' => 'Симка',   
                            'icon_check_mark' => 'Cертификат',   
                            'icon_glasses_book' => 'Методичка',   
                            'icon_cheak_list' => 'Cпецификация',   
                            'icon_note' => 'Инструкции',   
                            'icon_physics' => 'Физика',   
                            'icon_maths' => 'Математика',   
                            'icon_chemistry' => 'Химия',   
                            'icon_biology' => 'Биология',   
                            'icon_geography' => 'География',   
                            'icon_natural_science' => 'Естествознание',   
                            'icon_ecology' => 'Экология',   
                            'icon_obj' => 'ОБЖ',   
                            'icon_world' => 'Окружающий мир',   
                            'icon_nanotechnology' => 'Нанотехнологии',   
                            'icon_baby' => 'Дошкольного образования',   
                            'icon_engineering' => 'Основы тех. и ин.',   
                            'icon_astronomy' => 'Астрономия',   
                            'icon_history' => 'История и Археология',   
                            'icon_physical' => 'Физическая культура',
                        ],
                        'default_value' => 'icon_sim',
                    ),
                    array(
                        'key' => 'item',
                        'label' => 'Элемент',
                        'name' => 'item',
                        'type' => 'text',
                    ),
                ),
            ),
            array(
                'key' => 'profile_list',
                'label' => 'Дополнительная комплектация:',
                'name' => 'profile_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row' || 'table'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'item',
                        'label' => 'Элемент',
                        'name' => 'item',
                        'type' => 'text',
                    ),
                ),
            ),
            // ------------------------------- equipment_dot dot
            array (
                'key' => 'tab_equipment_dot',
                'label' => 'Точка роста', 
                'type' => 'tab',
            ),
            array(
                'key' => 'dot_sensors_list',
                'label' => 'Набор цифровых датчиков:',
                'name' => 'dot_sensors_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row' || 'table'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'item',
                        'label' => 'Элемент',
                        'name' => 'item',
                        'type' => 'text',
                    ),
                ),
            ),
            array(
                'key' => 'dot_included_list',
                'label' => 'В комплекте',
                'name' => 'dot_included_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row' || 'table'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'icon',
                        'label' => 'Иконка',
                        'name' => 'icon',
                        'type' => 'select',
                        'allow_null' => 1,
                        'multiple' => 0,
                        'ui' => 1,
                        'return_format' => 'value',  // 'array' || 'label'
                        'choices' => [
                            'icon_sim' => 'Симка',   
                            'icon_check_mark' => 'Cертификат',   
                            'icon_glasses_book' => 'Методичка',   
                            'icon_cheak_list' => 'Cпецификация',   
                            'icon_note' => 'Инструкции',   
                            'icon_physics' => 'Физика',   
                            'icon_maths' => 'Математика',   
                            'icon_chemistry' => 'Химия',   
                            'icon_biology' => 'Биология',   
                            'icon_geography' => 'География',   
                            'icon_natural_science' => 'Естествознание',   
                            'icon_ecology' => 'Экология',   
                            'icon_obj' => 'ОБЖ',   
                            'icon_world' => 'Окружающий мир',   
                            'icon_nanotechnology' => 'Нанотехнологии',   
                            'icon_baby' => 'Дошкольного образования',   
                            'icon_engineering' => 'Основы тех. и ин.',   
                            'icon_astronomy' => 'Астрономия',   
                            'icon_history' => 'История и Археология',   
                            'icon_physical' => 'Физическая культура',
                        ],
                        'default_value' => 'icon_sim',
                    ),
                    array(
                        'key' => 'item',
                        'label' => 'Элемент',
                        'name' => 'item',
                        'type' => 'text',
                    ),
                ),
            ),
            array(
                'key' => 'dot_list',
                'label' => 'Дополнительная комплектация:',
                'name' => 'dot_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row' || 'table'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'item',
                        'label' => 'Элемент',
                        'name' => 'item',
                        'type' => 'text',
                    ),
                ),
            ),

        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-laboratory.php',
                )
            ),
        ),
        'menu_order' => 10,
    ));
    // END equipment section
    // ---------------------------------------------------------




    // BEGIN delivery section
    acf_add_local_field_group(array(
        'key' => 'acf_delivery_settings',
        'title' => 'Настройки "Доставка и заказ"',
        'fields' => array(
            array(
                'key' => 'delivery_subtitle',
                'label' => 'Под заголовок',
                'name' => 'delivery_subtitle',
                'type' => 'text',
            ),
            array(
                'key' => 'delivery_list',
                'label' => 'Контент',
                'name' => 'delivery_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row' || 'table'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'delivery_item',
                        'label' => 'Абзац',
                        'name' => 'delivery_item',
                        'type' => 'textarea',
                        'rows' => 2,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-delivery.php',
                )
            ),
        ),
        'menu_order' => 1,
    ));
    // END delivery section
    // ---------------------------------------------------------




    // BEGIN communications section
    acf_add_local_field_group(array(
        'key' => 'acf_communications_settings',
        'title' => 'Настройки "Контактов"',
        'fields' => array(
            array(
                'key' => 'communications_content_left',
                'label' => 'Контент слева',
                'name' => 'communications_content_left',
                'type' => 'textarea',
                'rows' => 3,
                'wrapper' => array (
                    'width' => '50',
                ),
            ),
            array(
                'key' => 'communications_content_right',
                'label' => 'Контент справа',
                'name' => 'communications_content_right',
                'type' => 'textarea',
                'rows' => 3,
                'wrapper' => array (
                    'width' => '50',
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-communications.php',
                )
            ),
        ),
        'menu_order' => 1,
    ));
    // END communications section
    // ---------------------------------------------------------




    // BEGIN helpcenter section template-helpcenter.php
    acf_add_local_field_group(array(
        'key' => 'acf_helpcenter_top_settings',
        'title' => 'Настройки шапки "Справочный центр"',
        'fields' => array(
            array(
                'key' => 'helpcenter_top_title',
                'label' => 'Заголовок',
                'name' => 'helpcenter_top_title',
                'type' => 'text',
            ),
            array(
                'key' => 'helpcenter_top_desc',
                'label' => 'Описание',
                'name' => 'helpcenter_top_desc',
                'type' => 'textarea',
                'rows' => 2,
                'instructions' => 'Используйте тег <b>p</b> для выделения абзацев',
                'placeholder' => '<p>Абзац</p>'
            ),
            array(
                'key' => 'helpcenter_top_img_id',
                'label' => 'Изображение',
                'name' => 'helpcenter_top_img_id',
                'type' => 'image',
                'return_format' => 'id',  // 'id' || 'url' || 'array'
                'preview_size' => 'thumbnail', // (thumbnail, medium, large, full or custom size)
                'instructions' => 'Рекомендуемое разрешение изображения не более 550/575px.',
            ),
            array(
                'key' => 'helpcenter_top_btn_blue',
                'label' => 'Кнопка',
                'name' => 'helpcenter_top_btn_blue',
                'type' => 'link',
                'return_format' => 'array',  // 'array' || 'url'
            ),

        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-helpcenter.php',
                )
            ),
        ),
        'menu_order' => 1,
    ));
    // END helpcenter section
    // ---------------------------------------------------------
    // BEGIN helpcenter helpcenter_main section
    acf_add_local_field_group(array(
        'key' => 'acf_helpcenter_main_settings',
        'title' => 'Основные настройки "Справочный центр"',
        'fields' => array(
            // ------------------------------- offline Offline version on PC
            array (
                'key' => 'tab_offline_general',
                'label' => 'Офлайн версия на ПК', 
                'type' => 'tab',
            ),
            array(
                'key' => 'offline_boolean',
                'label' => 'Отображать таб?',
                'name' => 'offline_boolean',
                'type' => 'true_false',
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Да',
                'ui_off_text' => 'Нет',
            ),
            array(
                'key' => 'offline_row',
                'label' => 'Ряд',
                'name' => 'offline_row',
                'type' => 'repeater',
                'layout' => 'block',  // 'block' || 'row' || 'table'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'row_img_id',
                        'label' => 'Изображение',
                        'name' => 'row_img_id',
                        'type' => 'image',
                        'return_format' => 'id',  // 'id' || 'url' || 'array'
                        'preview_size' => 'full', // (thumbnail, medium, large, full or custom size)
                        'instructions' => 'Рекомендуемое разрешение изображения не более 34/34px.',
                        'wrapper' => array (
                            'width' => '30',
                        ),
                    ),
                    array(
                        'key' => 'row_title',
                        'label' => 'Заголовок',
                        'name' => 'row_title',
                        'type' => 'text',
                        'instructions' => 'Windows, Linux, Mac OS',
                        'default_value' => 'Windows',
                        'wrapper' => array (
                            'width' => '70',
                        ),
                    ),
                    array(
                        'key' => 'row_desc',
                        'label' => 'Описание',
                        'name' => 'row_desc',
                        'type' => 'textarea',
                        'rows' => 2,
                        'default_value' => 'Рекомендации входят в состав готовых решений по цифровым лабораториям и содержат руководство по работе с ними, а также описание экспериментов.',
                        'wrapper' => array (
                            'width' => '70',
                        ),
                    ),
                    array(
                        'key' => 'row_link',
                        'label' => 'Ссылка',
                        'name' => 'row_link',
                        'type' => 'link',
                        'instructions' => 'Скачать инструкцию',
                        'return_format' => 'array',  // 'array' || 'url'
                        'wrapper' => array (
                            'width' => '30',
                        ),
                    ),
                    array(
                        'key' => 'row_list',
                        'label' => 'Ссылки',
                        'name' => 'row_list',
                        'type' => 'repeater',
                        'layout' => 'table',  // 'block' || 'row' || 'table'
                        'button_label' => 'Добавить',
                        'sub_fields' => array(
                            array(
                                'key' => 'row_list_link',
                                'label' => 'Ссылка',
                                'name' => 'row_list_link',
                                'type' => 'link',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'row_relations',
                        'label' => 'Выбирите: "Видео-инструкции"',
                        'name' => 'row_relations',
                        'type' => 'post_object',
                        'allow_null' => 1,
                        'multiple' => 1,
                        'return_format' => 'id',  // 'id' || 'object'
                        'post_type' => 'video',  // or array of post types e.g. ['post', 'page']
                        'taxonomy' => '',  // or array of terms e.g. ['category:term-slug']
                    ),
                ),
            ),
            // ------------------------------- onnline onnline version on PC
            array (
                'key' => 'tab_onnline_general',
                'label' => 'Онлайн версия на ПК', 
                'type' => 'tab',
            ),
            array(
                'key' => 'onnline_boolean',
                'label' => 'Отображать таб?',
                'name' => 'onnline_boolean',
                'type' => 'true_false',
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Да',
                'ui_off_text' => 'Нет',
            ),
            array(
                'key' => 'onnline_row',
                'label' => 'Ряд',
                'name' => 'onnline_row',
                'type' => 'repeater',
                'layout' => 'block',  // 'block' || 'row' || 'table'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'row_img_id',
                        'label' => 'Изображение',
                        'name' => 'row_img_id',
                        'type' => 'image',
                        'return_format' => 'id',  // 'id' || 'url' || 'array'
                        'preview_size' => 'full', // (thumbnail, medium, large, full or custom size)
                        'instructions' => 'Рекомендуемое разрешение изображения не более 34/34px.',
                        'wrapper' => array (
                            'width' => '30',
                        ),
                    ),
                    array(
                        'key' => 'row_title',
                        'label' => 'Заголовок',
                        'name' => 'row_title',
                        'type' => 'text',
                        'instructions' => 'Windows, Linux, Mac OS',
                        'default_value' => 'Windows',
                        'wrapper' => array (
                            'width' => '70',
                        ),
                    ),
                    array(
                        'key' => 'row_desc',
                        'label' => 'Описание',
                        'name' => 'row_desc',
                        'type' => 'textarea',
                        'rows' => 2,
                        'default_value' => 'Рекомендации входят в состав готовых решений по цифровым лабораториям и содержат руководство по работе с ними, а также описание экспериментов.',
                        'wrapper' => array (
                            'width' => '70',
                        ),
                    ),
                    array(
                        'key' => 'row_link',
                        'label' => 'Ссылка',
                        'name' => 'row_link',
                        'type' => 'link',
                        'instructions' => 'Скачать инструкцию',
                        'return_format' => 'array',  // 'array' || 'url'
                        'wrapper' => array (
                            'width' => '30',
                        ),
                    ),
                    array(
                        'key' => 'row_list',
                        'label' => 'Ссылки',
                        'name' => 'row_list',
                        'type' => 'repeater',
                        'layout' => 'table',  // 'block' || 'row' || 'table'
                        'button_label' => 'Добавить',
                        'sub_fields' => array(
                            array(
                                'key' => 'row_list_link',
                                'label' => 'Ссылка',
                                'name' => 'row_list_link',
                                'type' => 'link',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'row_relations',
                        'label' => 'Выбирите: "Видео-инструкции"',
                        'name' => 'row_relations',
                        'type' => 'post_object',
                        'allow_null' => 1,
                        'multiple' => 1,
                        'return_format' => 'id',  // 'id' || 'object'
                        'post_type' => 'video',  // or array of post types e.g. ['post', 'page']
                        'taxonomy' => '',  // or array of terms e.g. ['category:term-slug']
                    ),
                ),
            ),
            // ------------------------------- tablet_and_phone
            array (
                'key' => 'tab_tablet_and_phone_general',
                'label' => 'Планшет и телефон', 
                'type' => 'tab',
            ),
            array(
                'key' => 'tablet_and_phone_boolean',
                'label' => 'Отображать таб?',
                'name' => 'tablet_and_phone_boolean',
                'type' => 'true_false',
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Да',
                'ui_off_text' => 'Нет',
            ),
            array(
                'key' => 'tablet_and_phone_row',
                'label' => 'Ряд',
                'name' => 'tablet_and_phone_row',
                'type' => 'repeater',
                'layout' => 'block',  // 'block' || 'row' || 'table'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'row_img_id',
                        'label' => 'Изображение',
                        'name' => 'row_img_id',
                        'type' => 'image',
                        'return_format' => 'id',  // 'id' || 'url' || 'array'
                        'preview_size' => 'full', // (thumbnail, medium, large, full or custom size)
                        'instructions' => 'Рекомендуемое разрешение изображения не более 34/34px.',
                        'wrapper' => array (
                            'width' => '30',
                        ),
                    ),
                    array(
                        'key' => 'row_title',
                        'label' => 'Заголовок',
                        'name' => 'row_title',
                        'type' => 'text',
                        'instructions' => 'Windows, Linux, Mac OS',
                        'default_value' => 'Windows',
                        'wrapper' => array (
                            'width' => '70',
                        ),
                    ),
                    array(
                        'key' => 'row_desc',
                        'label' => 'Описание',
                        'name' => 'row_desc',
                        'type' => 'textarea',
                        'rows' => 2,
                        'default_value' => 'Рекомендации входят в состав готовых решений по цифровым лабораториям и содержат руководство по работе с ними, а также описание экспериментов.',
                        'wrapper' => array (
                            'width' => '70',
                        ),
                    ),
                    array(
                        'key' => 'row_link',
                        'label' => 'Ссылка',
                        'name' => 'row_link',
                        'type' => 'link',
                        'instructions' => 'Скачать инструкцию',
                        'return_format' => 'array',  // 'array' || 'url'
                        'wrapper' => array (
                            'width' => '30',
                        ),
                    ),
                    array(
                        'key' => 'row_list',
                        'label' => 'Ссылки',
                        'name' => 'row_list',
                        'type' => 'repeater',
                        'layout' => 'table',  // 'block' || 'row' || 'table'
                        'button_label' => 'Добавить',
                        'sub_fields' => array(
                            array(
                                'key' => 'row_list_link',
                                'label' => 'Ссылка',
                                'name' => 'row_list_link',
                                'type' => 'link',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'row_relations',
                        'label' => 'Выбирите: "Видео-инструкции"',
                        'name' => 'row_relations',
                        'type' => 'post_object',
                        'allow_null' => 1,
                        'multiple' => 1,
                        'return_format' => 'id',  // 'id' || 'object'
                        'post_type' => 'video',  // or array of post types e.g. ['post', 'page']
                        'taxonomy' => '',  // or array of terms e.g. ['category:term-slug']
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-helpcenter.php',
                ),
            ),
        ),
        'menu_order' => 10,
    ));
    // END helpcenter helpcenter_main section
    // ---------------------------------------------------------
    // BEGIN faq section
    acf_add_local_field_group(array(
        'key' => 'acf_faq_settings',
        'title' => 'Популярные вопросы',
        'fields' => array(
            array(
                'key' => 'faq_boolean',
                'label' => 'Отображать блок?',
                'name' => 'faq_boolean',
                'type' => 'true_false',
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Да',
                'ui_off_text' => 'Нет',
            ),
            array(
                'key' => 'faq_title',
                'label' => 'Заголовок',
                'name' => 'faq_title',
                'type' => 'text',
                'default_value' => 'Популярные вопросы',
            ),
            // ------------------------------- tab_faq_left
            array (
                'key' => 'tab_faq_left',
                'label' => 'Колонка слева', 
                'type' => 'tab',
            ),
            array(
                'key' => 'faq_list_left',
                'label' => 'Вопрос - Ответ',
                'name' => 'faq_list_left',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'faq_question',
                        'label' => 'Вопрос',
                        'name' => 'faq_question',
                        'type' => 'textarea',
                        'rows' => 2,
                        'wrapper' => array (
                            'width' => '40',
                        ),
                    ),
                    array(
                        'key' => 'faq_answer',
                        'label' => 'Ответ',
                        'name' => 'faq_answer',
                        'type' => 'textarea',
                        'rows' => 2,
                        'instructions' => 'Используйте тег p для абзацев.',
                        'wrapper' => array (
                            'width' => '60',
                        ),
                    ),
                ),
            ),
            // ------------------------------- tab_faq_right
            array (
                'key' => 'tab_faq_right',
                'label' => 'Колонка справа', 
                'type' => 'tab',
            ),
            array(
                'key' => 'faq_list_right',
                'label' => 'Вопрос - Ответ',
                'name' => 'faq_list_right',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'faq_question',
                        'label' => 'Вопрос',
                        'name' => 'faq_question',
                        'type' => 'textarea',
                        'rows' => 2,
                        'wrapper' => array (
                            'width' => '40',
                        ),
                    ),
                    array(
                        'key' => 'faq_answer',
                        'label' => 'Ответ',
                        'name' => 'faq_answer',
                        'type' => 'textarea',
                        'rows' => 2,
                        'instructions' => 'Используйте тег p для абзацев.',
                        'wrapper' => array (
                            'width' => '60',
                        ),
                    ),
                ),
            ),

        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-helpcenter.php',
                )
            ),
        ),
        'menu_order' => 20,
    ));
    // END faq section
    // ---------------------------------------------------------
    // BEGIN documentation section
    acf_add_local_field_group(array(
        'key' => 'acf_documentation_settings',
        'title' => 'Документация',
        'fields' => array(
            array(
                'key' => 'documentation_boolean',
                'label' => 'Отображать блок?',
                'name' => 'documentation_boolean',
                'type' => 'true_false',
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Да',
                'ui_off_text' => 'Нет',
            ),
            array(
                'key' => 'documentation_title',
                'label' => 'Заголовок',
                'name' => 'documentation_title',
                'type' => 'text',
                'default_value' => 'Документация лицензии в Минпром торг',
            ),
            array(
                'key' => 'documentation_list',
                'label' => 'Список',
                'name' => 'documentation_list',
                'type' => 'repeater',
                'layout' => 'block',  // 'block' || 'row' || 'table'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'documentation_item',
                        'label' => 'Заголовок',
                        'name' => 'documentation_item',
                        'type' => 'text',
                        'wrapper' => array (
                            'width' => '80',
                        ),
                    ),
                    array(
                        'key' => 'documentation_button',
                        'label' => 'Ссылка',
                        'name' => 'documentation_button',
                        'type' => 'link',
                        'return_format' => 'url',  // 'array' || 'url'
                        'wrapper' => array (
                            'width' => '20',
                        ),
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-helpcenter.php',
                )
            ),
        ),
        'menu_order' => 30,
    ));
    // END documentation section
    // ---------------------------------------------------------




    // BEGIN heading_practical section
    acf_add_local_field_group(array(
        'key' => 'acf_heading_practical_settings',
        'title' => 'Настройки первого блока',
        'fields' => array(
            array(
                'key' => 'heading_practical_desc',
                'label' => 'Описание',
                'name' => 'heading_practical_desc',
                'type' => 'textarea',
                'rows' => 2,
                'instructions' => 'Используйте тег <b>p</b> для выделения абзацев',
                'placeholder' => '<p>Абзац</p>'
            ),
            array(
                'key' => 'heading_practical_img_id',
                'label' => 'Изображение',
                'name' => 'heading_practical_img_id',
                'type' => 'image',
                'return_format' => 'id',  // 'id' || 'url' || 'array'
                'preview_size' => 'thumbnail', // (thumbnail, medium, large, full or custom size)
                'instructions' => 'Рекомендуемое разрешение изображения не более 640/640px. Формат: .gif',
            ),
            array(
                'key' => 'heading_practical_btn_white',
                'label' => 'Белая кнопка',
                'name' => 'heading_practical_btn_white',
                'type' => 'link',
                'return_format' => 'array',  // 'array' || 'url'
            ),
            array(
                'key' => 'heading_practical_btn_blue',
                'label' => 'Синяя кнопка',
                'name' => 'heading_practical_btn_blue',
                'type' => 'link',
                'return_format' => 'array',  // 'array' || 'url'
            ),
            array(
                'key' => 'heading_practical_list',
                'label' => 'Смотреть другие практикумы:',
                'name' => 'heading_practical_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row' || 'table'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'heading_practical_icon',
                        'label' => 'Иконка',
                        'name' => 'heading_practical_icon',
                        'type' => 'select',
                        'allow_null' => 1,
                        'multiple' => 0,
                        'ui' => 1,
                        'return_format' => 'value',  // 'array' || 'label'
                        'choices' => [
                            'icon_physics' => 'Физика',   
                            'icon_maths' => 'Математика',   
                            'icon_chemistry' => 'Химия',   
                            'icon_biology' => 'Биология',   
                            'icon_geography' => 'География',   
                            'icon_natural_science' => 'Естествознание',   
                            'icon_ecology' => 'Экология',   
                            'icon_obj' => 'ОБЖ',   
                            'icon_world' => 'Окружающий мир',   
                            'icon_nanotechnology' => 'Нанотехнологии',   
                            'icon_baby' => 'Дошкольного образования',   
                            'icon_engineering' => 'Основы тех. и ин.',   
                            'icon_astronomy' => 'Астрономия',   
                            'icon_history' => 'История и Археология',   
                            'icon_physical' => 'Физическая культура',
                        ],
                        'default_value' => 'icon_physics',
                    ),
                    array(
                        'key' => 'heading_practical_label',
                        'label' => 'Текст',
                        'name' => 'heading_practical_label',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'heading_practical_link',
                        'label' => 'Ссылка',
                        'name' => 'heading_practical_link',
                        'type' => 'text',
                    ),
                ),
            ),

        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-practical.php',
                ),
            ),
        ),
        'menu_order' => 1,
    ));
    // END heading_practical section
    // ---------------------------------------------------------
    // BEGIN composition section
    acf_add_local_field_group(array(
        'key' => 'acf_composition_settings',
        'title' => 'Состав',
        'fields' => array(
            array(
                'key' => 'composition_title',
                'label' => 'Заголовок',
                'name' => 'composition_title',
                'type' => 'text',
                'instructions' => 'Для переноса строки используйте тег br.',

            ),
            array(
                'key' => 'composition_desc',
                'label' => 'Описание',
                'name' => 'composition_desc',
                'type' => 'textarea',
                'rows' => 2,
            ),
            // ------------------------------- tab_composition_imgs composition_imgs
            array (
                'key' => 'tab_composition_imgs',
                'label' => 'Галерея', 
                'type' => 'tab',
            ),
            array(
                'key' => 'composition_imgs_list',
                'label' => 'Изображения',
                'name' => 'composition_imgs_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row' || 'table'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'composition_img_id',
                        'label' => 'Изображение',
                        'name' => 'composition_img_id',
                        'type' => 'image',
                        'return_format' => 'id',  // 'id' || 'url' || 'array'
                        'preview_size' => 'thumbnail', // (thumbnail, medium, large, full or custom size)
                        'instructions' => 'Рекомендуемое разрешение изображения не более 700/700px.',
                    ),

                ),
            ),
            // ------------------------------- tab_composition_equipment composition_equipment
            array (
                'key' => 'tab_composition_equipment',
                'label' => 'Комплектация', 
                'type' => 'tab',
            ),
            array(
                'key' => 'composition_equipment_boolean',
                'label' => 'Отображать таб?',
                'name' => 'composition_equipment_boolean',
                'type' => 'true_false',
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Да',
                'ui_off_text' => 'Нет',
            ),
            array(
                'key' => 'composition_equipment_list',
                'label' => 'Список',
                'name' => 'composition_equipment_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row' || 'table'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'list_item',
                        'label' => 'Элемент списка',
                        'name' => 'list_item',
                        'type' => 'text',
                    ),
                ),
            ),
            // ------------------------------- tab_composition_more composition_more
            array (
                'key' => 'tab_composition_more',
                'label' => 'Дополнительное оборудование', 
                'type' => 'tab',
            ),
            array(
                'key' => 'composition_more_boolean',
                'label' => 'Отображать таб?',
                'name' => 'composition_more_boolean',
                'type' => 'true_false',
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Да',
                'ui_off_text' => 'Нет',
            ),
            array(
                'key' => 'composition_more_list',
                'label' => 'Список',
                'name' => 'composition_more_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row' || 'table'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'list_item',
                        'label' => 'Элемент списка',
                        'name' => 'list_item',
                        'type' => 'text',
                    ),
                ),
            ),
            // ------------------------------- tab_composition_documentation composition_documentation
            array (
                'key' => 'tab_composition_documentation',
                'label' => 'Документация', 
                'type' => 'tab',
            ),
            array(
                'key' => 'composition_documentation_boolean',
                'label' => 'Отображать таб?',
                'name' => 'composition_documentation_boolean',
                'type' => 'true_false',
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Да',
                'ui_off_text' => 'Нет',
            ),
            array(
                'key' => 'composition_documentation_list',
                'label' => 'Список',
                'name' => 'composition_documentation_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row' || 'table'
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'composition_documentation_link',
                        'label' => 'Ссылка',
                        'name' => 'composition_documentation_link',
                        'type' => 'link',
                        'return_format' => 'array',  // 'array' || 'url'
                    ),
        
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-practical.php',
                )
            ),
        ),
        'menu_order' => 10,
    ));
    // END composition section
    // ---------------------------------------------------------




    // BEGIN test section
    acf_add_local_field_group(array(
        'key' => 'acf_test_settings',
        'title' => 'Настройки test',
        'fields' => array(
            array(
                'key' => 'test_boolean',
                'label' => 'Отображать блок?',
                'name' => 'test_boolean',
                'type' => 'true_false',
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Да',
                'ui_off_text' => 'Нет',
            ),
            array(
                'key' => 'test_title',
                'label' => 'Заголовок',
                'name' => 'test_title',
                'type' => 'text',

                'instructions' => '',
                'required' => 0,
                'default_value' => '',
                'placeholder' => '',
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
            ),
            array(
                'key' => 'test_desc',
                'label' => 'Описание',
                'name' => 'test_desc',
                'type' => 'textarea',
                'rows' => 2,
            ),
            array(
                'key' => 'test_img_id',
                'label' => 'Изображение',
                'name' => 'test_img_id',
                'type' => 'image',
                'return_format' => 'id',  // 'id' || 'url' || 'array'
                'preview_size' => 'thumbnail', // (thumbnail, medium, large, full or custom size)
                'instructions' => 'Рекомендуемое разрешение изображения не более 230/350px.',
            ),
            array(
                'key' => 'test_list',
                'label' => 'Список',
                'name' => 'test_list',
                'type' => 'repeater',
                'layout' => 'table',  // 'block' || 'row' || 'table'
                'min' => 0,
                'max' => 0,
                'button_label' => 'Добавить',
                'sub_fields' => array(
                    array(
                        'key' => 'list_item',
                        'label' => 'Элемент списка',
                        'name' => 'list_item',
                        'type' => 'text',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-homepage.php',
                )
            ),
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-contacts.php',
                ),
            ),
        ),
        'menu_order' => 100,
    ));
    // END test section
    // ---------------------------------------------------------




    // BEGIN video post_type
    acf_add_local_field_group(array(
        'key' => 'acf_video_settings',
        'title' => 'Настройки видео',
        'fields' => array(
            array(
                'key' => 'video_img_id',
                'label' => 'Изображение обложки',
                'name' => 'video_img_id',
                'type' => 'image',
                'return_format' => 'id',  // 'id' || 'url' || 'array'
                'preview_size' => 'thumbnail', // (thumbnail, medium, large, full or custom size)
                'instructions' => 'Рекомендуемое разрешение изображения не более 350/200px.',
                'wrapper' => array (
                    'width' => '50',
                ),
            ),
            array(
                'key' => 'video_src',
                'label' => 'Ссылка на видео',
                'name' => 'video_src',
                'type' => 'text',
                'instructions' => 'Формат mp4',
                'required' => 1,
                'wrapper' => array (
                    'width' => '50',
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'video',
                )
            ),
        ),
        'menu_order' => 1,
    ));
    // END video post_type
    // ---------------------------------------------------------

}
add_action('acf/init', 'my_template_acf_mataboxes');

// https://awhitepixel.com/blog/advanced-custom-fields-complete-reference-adding-fields-groups-by-code/

// LIST

// array(
//     'key' => 'test_list',
//     'label' => 'Список',
//     'name' => 'test_list',
//     'type' => 'repeater',
//     'layout' => 'table',  // 'block' || 'row' || 'table'
//     'min' => 0,
//     'max' => 0,
//     'button_label' => 'Добавить',
//     'sub_fields' => array(
//         array(
//             'key' => 'list_item',
//             'label' => 'Элемент списка',
//             'name' => 'list_item',
//             'type' => 'text',
//         ),
//     ),
// ),

// END LIST

// ---------------------------------------------------------

// IMG ID

// array(
//     'key' => 'test_img_id',
//     'label' => 'Изображение',
//     'name' => 'test_img_id',
//     'type' => 'image',
//     'return_format' => 'id',  // 'id' || 'url' || 'array'
//     'preview_size' => 'thumbnail', // (thumbnail, medium, large, full or custom size)
//     'instructions' => 'Рекомендуемое разрешение изображения не более 230/350px.',
// ),

// END IMG ID

// ---------------------------------------------------------

// TAB

// ------------------------------- tab_test
// array (
//     'key' => 'tab_test',
//     'label' => 'Таб', 
//     'type' => 'tab',
// ),

// END TAB

// ---------------------------------------------------------

// BOOLEAN

// array(
//     'key' => 'boolean_test',
//     'label' => 'Отображать блок?',
//     'name' => 'boolean_test',
//     'type' => 'true_false',
//     'default_value' => 1,
//     'ui' => 1,
//     'ui_on_text' => 'Да',
//     'ui_off_text' => 'Нет',
// ),

// END BOOLEAN

// ---------------------------------------------------------

// VIDEO ID

// array(
//     'key' => 'video_id_test',
//     'label' => 'ID видео',
//     'name' => 'video_id_test',
//     'type' => 'text',
//     'instructions' => 'ID - это набор символов после "watch?v=" в строке браузера. Как пример из строки https://www.youtube.com/watch?v=QEPbamO8i9s , id= 1FBNIVQXhPc',
//     'placeholder' => '1FBNIVQXhPc',
// ),

// END VIDEO ID

// ---------------------------------------------------------

// LINK

// array(
//     'key' => 'test_link',
//     'label' => 'Ссылка',
//     'name' => 'test_link',
//     'type' => 'link',
//     'return_format' => 'array',  // 'array' || 'url'
// ),

// END LINK

// ---------------------------------------------------------

// NUMBER

// array(
//     'key' => 'test_number',
//     'label' => 'Число',
//     'name' => 'test_number',
//     'type' => 'number',
//     'min' => 0,
//     'max' => 100,
//     'step' => 1,    
// ),

// END NUMBER

// ---------------------------------------------------------

// Range slider

// array(
//     'key' => 'test_range',
//     'label' => 'Числовой слайдер',
//     'name' => 'test_range',
//     'type' => 'range',
// 	'min' => 0,
// 	'max' => 100,
// 	'step' => 1,
// 	'default_value' => 50,
// 	'prepend' => 'Prepend text',
// 	'append' => 'Appended text',
// ),

// END Range slider

// ---------------------------------------------------------

// WYSIWYG Editor

// array(
//     'key' => 'test_content',
//     'label' => 'Контент',
//     'name' => 'test_content',
//     'type' => 'wysiwyg',
//     'tabs' => 'all',  // 'visual' || 'text' || 'all'
//     'toolbar' => 'full',  // 'basic' \\ 'full'
//     'media_upload' => 0,
//     'delay' => 0,
//     'instructions' => 'Используйте заголовки (h1 - h6), абзацы (p), списки (ul)',
// ),

// END WYSIWYG Editor

// ---------------------------------------------------------

// Select

// array(
//     'key' => 'test_select',
//     'label' => 'Выбор',
//     'name' => 'test_select',
//     'type' => 'select',
//     'allow_null' => 1,
//     'multiple' => 0,
//     'ui' => 1,
//     'return_format' => 'label',  // 'array' || 'label'
//     'choices' => [
//         'serial' => 'Серийный',   
//         'individual' => 'Индивидуальный',
//     ],
//     'default_value' => '',
//     'wrapper' => array (
//         'width' => '20',
//     ),
// ),

// END Select

// ---------------------------------------------------------

// Checkbox

// array(
//     'key' => 'test_checkbox',
//     'label' => 'Чекбокс',
//     'name' => 'test_checkbox',
//     'type' => 'checkbox',
//     'layout' => 'horizontal',  // 'vertical' || 'horizontal'
//     'toggle' => 0,
//     'return_format' => 'value',  // 'array' || 'label' || 'value'
//     'choices' => [
//         'pdf' => 'Скачать презентацию',
//         'phone' => 'Оставить заявку',
//         'percentage' => 'Акции',
       
//     ],
//     'default_value' => ['pdf'],
//     'allow_custom' => 0,
//     'save_custom' => 0,
// ),

// END Checkbox

// ---------------------------------------------------------

// Radio Button

// array(
//     'key' => 'test_radio',
//     'label' => 'Радио кнопка',
//     'name' => 'test_radio',
//     'type' => 'radio',
//     'layout' => 'horizontal', // horizontal   ||   vertical
//     'choices' => array(
//         'light' => 'Светлая',
//         'dark' => 'Темная',
//     ),
//     'default_value' => 'light',
//     'return_format' => 'value',  // 'array' || 'label'
// ),

// END Radio Button

// ---------------------------------------------------------

// Post Object

// 'fields' => array(
//     array(
//         'key' => 'test_relations',
//         'label' => 'Выбирите квиз',
//         'name' => 'test_relations',
//         'type' => 'post_object',
//         'allow_null' => 1,
//         'multiple' => 0,
//         'return_format' => 'id',  // 'id' || 'object'
//         'post_type' => 'test',  // or array of post types e.g. ['post', 'page']
//         'taxonomy' => '',  // or array of terms e.g. ['category:term-slug']
//     ),
// ),

// END Post Object

// ---------------------------------------------------------

// HTML Message

// array(
//     'key' => 'test_message',
//     'label' => 'ПРИМЕЧАНИЕ!!!',
//     'name' => 'test_message',
//     'type' => 'message',
//     'message' => '<h1 style="color:#0659FB;;">Далее настройки</h1>',
//     'new_lines' => 'wpautop',
//     'esc_html' => 0,
// ),

// END HTML Message












