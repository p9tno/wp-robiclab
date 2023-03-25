<div class="contacts">
    <div class="contacts__list">

        <?php if (get_field('phone', 'option')) { 
            $number=preg_replace('/\s+/', '', get_field('phone', 'option'));
        ?>
            <div class="contacts__item">
                <i class="icon_phone"></i>
                <span class="desktop"><?php the_field('phone', 'option'); ?></span>
                <a class="mobile" href="tel:<?php echo $number; ?>"><?php the_field('phone', 'option'); ?></a>
            </div>
        <?php } ?>

        <?php if (get_field('clock', 'option')) { ?>
            <div class="contacts__item">
                <i class="icon_clock"></i>
                <span><?php the_field('clock', 'option'); ?></span>
            </div>
        <?php } ?>

        <?php if (get_field('mail', 'option')) { ?>
            <div class="contacts__item">
                <i class="icon_mail"></i>
                <span class="desktop"><?php the_field('mail', 'option'); ?></span>
                <a class="mobile" href="mailto:<?php the_field('mail', 'option'); ?>"><?php the_field('mail', 'option'); ?></a>
            </div>
        <?php } ?>

        <?php if (get_field('location', 'option')) { ?>
            <div class="contacts__item">
                <i class="icon_location"></i>
                <span><?php the_field('location', 'option'); ?></span>
            </div>
        <?php } ?>

        <?php if (get_field('inn', 'option')) { ?>
            <div class="contacts__item">
                <i class="icon_certification"></i>
                <span><?php the_field('inn', 'option'); ?></span>
            </div>
        <?php } ?>

    </div>
</div>

