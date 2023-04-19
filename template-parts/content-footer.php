<?php get_template_part( 'template-parts/parts/part', 'figureList' ); ?>

<div class="navbar__content">
    <div class="navbar__main">
        <div class="container_center">
            <nav class="navbar">
                <div class="navbar__row">
                    <div class="navbar__col navbar__col_nav_sm navbar__col_icon desktop">
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

                    <div class="navbar__col navbar__col_nav_sm desktop">
                        <?php get_template_part( 'template-parts/parts/part', 'helpNav' ); ?>
                    </div>

                    <div class="navbar__col">
                        <div class="navbar__label"><span>Контакты</span></div>
                        <div class="navbar__contacts">
                            <?php get_template_part( 'template-parts/parts/part', 'contacts' ); ?>
                        </div>
                    </div>

                </div>
            </nav>
        </div>
    </div>

    <?php get_template_part( 'template-parts/parts/part', 'footerLinks' ); ?>

    <?php if ( is_page_template(['template-homepage.php']) ) { ?>
        <div class="footerScroll__hand bg desktop"></div>
    <?php } else { ?> 
        <div class="footer__hand bg desktop"></div>
    <?php } ?>

</div>
