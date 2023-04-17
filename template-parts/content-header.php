<?php
$header_class = '';
if ( 
    is_page_template(['template-experiments.php'])
    || is_page_template(['template-delivery.php'])
    || is_page_template(['template-communications.php'])
    // || is_page_template(['template-practical.php'])
    // || is_page_template(['template-homepage.php'])

) {
    $header_class = 'header_primary header_primary_active';
}
?>



<!-- start wrapper-->
<div class="wrapper" id="wrapper">

    <header class="header <?php echo $header_class; ?>">
        <div class="container_center">
            <div class="header__row">
                
                <?php if (get_field('logo_boolean', 'option')) { ?>
                    <?php get_template_part( 'template-parts/parts/part', 'logo' ); ?>
                <?php } ?>

                <?php if (get_field('switch_boolean', 'option')) { ?>
                    <?php get_template_part( 'template-parts/parts/part', 'switch' ); ?>
                <?php } ?>

                <div class="header__col">
                    <div class="search desktop">
                        <?php get_template_part( 'template-parts/parts/part', 'search' ); ?>
                    </div>

                    <?php get_template_part( 'template-parts/parts/part', 'headerAction' ); ?>

                </div>

                <div class="header__col mobile">
                    <div class="header__action">
                        <div class="header__button search-toggle-js"><i class="icon_loop"></i></div>

                        <div class="header__content header__content_search">
                            <a class="header__close" href="#"></a>
                            <div class="header__title"><span>Поиск</span></div>

                            <div class="search">
                                <?php get_template_part( 'template-parts/parts/part', 'search' ); ?>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="header__toggle">
                    <div class="toggle">
                        <div class="toggle__button">
                            <div class="toggle__toggle"></div>
                        </div>
                        <div class="toggle__label desktop"><span>меню</span></div>
                    </div>
                </div>

            </div>

            <div class="header__nav figure">
                <?php get_template_part( 'template-parts/parts/part', 'figureList' ); ?>
            
                <div class="navbar__content">
                    <div class="navbar__main">
                        <div class="container_center">

                            <nav class="navbar" id="navbar">

                                <div class="navbar__row">

                                    <div class="navbar__col navbar__col_nav_sm navbar__col_icon">
                                        <div class="navbar__label"><span>Цифровые лаборатории</span></div>

                                        <div class="navbar__row">
                                            <?php wp_nav_menu(array(
                                                'theme_location' => 'laboratories_1',
                                                'container'=>'ul',
                                                )); 
                                            ?>
                                            <?php wp_nav_menu(array(
                                                'theme_location' => 'laboratories_2',
                                                'container'=>'ul',
                                                )); 
                                            ?>
                                        </div>
                                    </div>

                                    <div class="navbar__col navbar__col_nav_sm">
                                        <div class="navbar__label"><span>Справочный центр</span></div>
                                            <?php wp_nav_menu(array(
                                                'theme_location' => 'help_center',
                                                'container'=>'ul',
                                                )); 
                                            ?>
                                    </div>

                                    <div class="navbar__col navbar__col_nav_lg">
                                        <?php wp_nav_menu(array(
                                            'theme_location' => 'main',
                                            'container'=>'ul',
                                            )); 
                                        ?>
                                    </div>

                                </div>
                            </nav>
                        </div>
                    </div>

                    <div class="navbar__bottom">
                        <div class="container_center">
                            <div class="navbar__row">

                                <div class="navbar__col">
                                    <div class="navbar__download">
                                        <?php get_template_part( 'template-parts/parts/part', 'download' ); ?>
                                    </div>
                                </div>

                                <?php if (get_field('header_btn', 'option')) { ?>
                                    <?php 
                                        $link = get_field('header_btn', 'option');
                                        $title = $link['title'];
                                        $url = $link['url'];
                                        $target = $link['target'];
                                    ?>
                                    <div class="navbar__col">
                                        <div class="navbar__button">
                                            <a class="btn btn_transparent" <?php if ($target) { echo 'target="_blank"'; } ?> href="<?php echo $url; ?>"><span><?php echo $title; ?></span><i class="icon_arrow_right"></i></a>
                                        </div>
                                    </div>
                                <?php } ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
