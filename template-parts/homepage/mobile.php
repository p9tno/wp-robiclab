<div class="firstscreen__content firstscreen__content_mobile mobile">

    <?php if (get_field('firstscreen_title')) { ?>
        <h1 class="firstscreen__title"><span><?php the_field('firstscreen_title'); ?></span></h1>
    <?php } ?>

    <div class="robot__slider">
        <div class="swiper robot_swiper_js">

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="robot__img img"><img src="<?php echo get_template_directory_uri() . '/assets/img/Book.webp' ?>" alt="alt" /></div>
                </div>

                <div class="swiper-slide">
                    <div class="robot__img img"><img src="<?php echo get_template_directory_uri() . '/assets/img/Rain.webp' ?>" alt="alt" /></div>
                </div>

                <div class="swiper-slide">
                    <div class="robot__img img"><img src="<?php echo get_template_directory_uri() . '/assets/img/Atom.webp' ?>" alt="alt" /></div>
                </div>

                <div class="swiper-slide">
                    <div class="robot__img img"><img src="<?php echo get_template_directory_uri() . '/assets/img/Planet.webp' ?>" alt="alt" /></div>
                </div>

                <div class="swiper-slide">
                    <div class="robot__img img"><img src="<?php echo get_template_directory_uri() . '/assets/img/Chemi.webp' ?>" alt="alt" /></div>
                </div>

                <div class="swiper-slide">
                    <div class="robot__img img"><img src="<?php echo get_template_directory_uri() . '/assets/img/Count.webp' ?>" alt="alt" /></div>
                </div>
            </div>

        </div>
    </div>

    <div class="robot__menu">

        <div class="robot__col">

            <div class="hexagon__button active" data-index="0">
                <div class="hexagon__icon"><i class="icon_natural_science"></i></div>
                <div class="hexagon__label"><span>Естествознание</span></div>
            </div>

            <div class="hexagon__button" data-index="1">
                <div class="hexagon__icon"><i class="icon_world"></i></div>
                <div class="hexagon__label"><span>Окружающий<br> мир</span></div>
            </div>

            <?php if (get_field('hexagon_link')) { ?>
                <div class="hexagon__button hexagon__button_cor">
                    <a class="hexagon__link" target="_blank" href="<?php the_field('hexagon_link'); ?>">
                        <div class="cor" id="corMobile"></div>
                    </a>
                </div>
            <?php } ?>

        </div>

        <div class="robot__col">

            <div class="hexagon__button" data-index="2">
                <div class="hexagon__icon"><i class="icon_physics"></i></div>
                <div class="hexagon__label"><span>Физика</span></div>
            </div>
            <div class="hexagon__button" data-index="3">
                <div class="hexagon__icon"><i class="icon_geography"></i></div>
                <div class="hexagon__label"><span>География</span></div>
            </div>

        </div>

        <div class="robot__col">

            <div class="hexagon__button" data-index="4">
                <div class="hexagon__icon"><i class="icon_chemistry"></i></div>
                <div class="hexagon__label"><span>Химия</span></div>
            </div>

            <div class="hexagon__button" data-index="5">
                <div class="hexagon__icon"><i class="icon_maths"></i></div>
                <div class="hexagon__label"><span>Математика</span></div>
            </div>

        </div>
    </div>
</div>