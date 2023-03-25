<!-- begin delivery-->
<section class="delivery section pt section_changeTheme animate_bg" id="delivery">
    <div class="container_center">
        <h1 class="section__title section__title_black"><span><?php the_title(); ?></span></h1>
        <div class="delivery__content">
            <div class="section__content section__content_black">
                <?php if (get_field('delivery_subtitle')) { ?>
                    <div class="delivery__label"><span><?php the_field('delivery_subtitle'); ?></span></div>
                <?php } ?>

                <?php 
                $rows = get_field('delivery_list');
                if( $rows ) { ?>
                    <?php foreach( $rows as $row ) { ?>
                        <p><?php echo $row['delivery_item']; ?></p>
                    <?php } ?>
                <?php } ?>
            </div>

            <div class="delivery__contacts">
                <div class="delivery__title"><span>Наши контакты</span></div>
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
                        
                    </div>
                </div>
            </div>

        </div>
        <?php get_template_part( 'template-parts/forms/form', 'delivery' ); ?>

    </div>
</section>
<!-- end delivery-->