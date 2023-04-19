<div class="header__action">
    <div class="header__button feedback-toggle-js"><i class="icon_phone"></i></div>

    <div class="header__content">

        <a class="header__close" href="#"></a>

        <div class="header__title">
            <span class="desktop">Наши контакты</span>
            <span class="mobile">Наш телефон</span>
        </div>

        <div class="header__list">

            <?php if (get_field('location', 'option')) { ?>
                <div class="header__item desktop">
                    <div class="header__icon"><i class="icon_location"></i></div>
                    <span><?php the_field('location', 'option'); ?></span>
                </div>
            <?php } ?>

            <?php if (get_field('phone', 'option')) { 
                $number=preg_replace('/\s+/', '', get_field('phone', 'option'));
            ?>
                <div class="header__item">
                    <div class="header__icon"><i class="icon_phone"></i></div>
                    <span class="desktop"><?php the_field('phone', 'option'); ?></span>
                    <a class="mobile" href="tel:<?php echo $number; ?>"><?php the_field('phone', 'option'); ?></a>
                </div>
            <?php } ?>

            <div class="header__label mobile"><span>Вы можете позвонить нам в любое время</span></div>
            <div class="header__btn mobile"><a class="btn" href="tel:<?php echo $number; ?>">Позвонить</a></div>

            <?php if (get_field('mail', 'option')) { ?>
                <div class="header__item desktop">
                    <div class="header__icon"><i class="icon_mail"></i></div>
                    <span><?php the_field('mail', 'option'); ?></span>
                </div>
            <?php } ?>


        </div>
    </div>
</div>