<?php
    $no_img_url = get_template_directory_uri() . '/assets/img/box.webp';
    $size = 'full'; // (thumbnail, medium, full, vertical, horizon)

    $image_id = get_field('box_img_id');
    if( $image_id ) {
        $img_url = wp_get_attachment_image_url($image_id, $size);
    } else {
        $img_url = $no_img_url;
    }

    $image_id_dark = get_field('box_dark_img_id');
    if( $image_id_dark ) {
        $img_url_dark = wp_get_attachment_image_url($image_id_dark, $size);
    } else {
        $img_url_dark = $no_img_url;
    }

?>

<!-- begin equipment-->
<section class="equipment section section_changeTheme changeHeader_js" id="equipment">
    <div class="container_center">
        <div class="equipment__wrap">


            <div class="equipment__box chart-light bg" style="background-image: url('<?php echo $img_url; ?>')" ></div>
            <div class="equipment__box chart-dark bg" style="background-image: url('<?php echo $img_url_dark; ?>')" ></div>

            <div class="equipment__tabs">

                <?php if (get_field('equipment_title')) { ?>
                    <h2 class="section__title section__title_black" data-aos="fade-up"><span><?php the_field('equipment_title'); ?></span></h2>
                <?php } ?>

                <div class="tabs-wrapper">

                    <div class="tabs">
                        <span class="tab">Базовая</span>
                        <span class="tab">Стандартная</span>
                        <span class="tab">Профильная</span>

                        <?php if (get_field('equipment_dot_boolean')) { ?>
                            <span class="tab tab_danger">Точка роста</span>
                        <?php } ?>
                        
                    </div>

                    <div class="tabs-content">
                        <?php get_template_part( 'template-parts/tabs/tab', 'base' ); ?>
                        <?php get_template_part( 'template-parts/tabs/tab', 'standard' ); ?>
                        <?php get_template_part( 'template-parts/tabs/tab', 'profile' ); ?>

                        <?php if (get_field('equipment_dot_boolean')) { ?>
                            <?php get_template_part( 'template-parts/tabs/tab', 'dot' ); ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end equipment-->