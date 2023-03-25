<!-- begin communications-->
<section class="communications section section_changeTheme animate_bg pt" id="communications">
    <div class="container_center">

        <h1 class="section__title mobile section__title_black"><span><?php the_title(); ?></span></h1>

        <div class="communications__top">
            <div class="communications__map">
                <div class="map" id="map"></div>
            </div>
            <div class="communications__contacts">
                <h1 class="section__title desktop section__title_black"><span><?php the_title(); ?></span></h1>
                <?php get_template_part( 'template-parts/parts/part', 'contacts' ); ?>
            </div>
        </div>

        <div class="communications__bottom">
            <?php if (get_field('communications_content_left')) { ?>
                <div class="section__content section__content_black">
                    <p><?php the_field('communications_content_left'); ?></p>
                </div>
            <?php } ?>

            <?php if (get_field('communications_content_right')) { ?>
                <div class="section__content section__content_black">
                    <p><?php the_field('communications_content_right'); ?></p>
                </div>
            <?php } ?>
        </div>

        <?php get_template_part( 'template-parts/forms/form', 'communications' ); ?>

    </div>
</section>
<!-- end communications-->