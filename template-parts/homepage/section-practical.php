<?php
    $no_img_url = get_template_directory_uri() . '/assets/img/FlashAlpha.gif';
    $image_id = get_field('practical_img_id');
    $size = 'full'; // (thumbnail, medium, full, vertical, horizon)

    if( $image_id ) {
        $img_url = wp_get_attachment_image_url($image_id, $size);
    } else {
        $img_url = $no_img_url;
    }

?>
<!-- begin practical-->
<section class="practical section bg section_scrool figure" id="practical">
    <?php get_template_part( 'template-parts/parts/part', 'figureList' ); ?>

    <div class="container_center">
        <div class="practical__content">
            <div class="practical__left">
                <div class="practical__hand bg"></div>
                <div class="practical__flach animate-js img" data-aos="zoom-in-up" data-aos-delay="300">
                    <img src="<?php echo $img_url; ?>" alt="alt" />
                </div>
            </div>
            <div class="practical__right">

                <?php if (get_field('practical_title')) { ?>
                    <h2 class="section__title animate-js" data-aos="fade-left"><span><?php the_field('practical_title'); ?></span></h2>
                <?php } ?>

                <?php if (get_field('practical_desc')) { ?>
                    <div class="section__content"><?php the_field('practical_desc'); ?></div>
                <?php } ?>
                
                <div class="section__button section__button_buttons">
                    <?php if (get_field('practical_btn_white')) { ?>
                        <?php 
                            $link = get_field('practical_btn_white');
                            $title = $link['title'];
                            $url = $link['url'];
                            $target = $link['target'];
                        ?>
                        <a class="btn btn_transparent" <?php if ($target) { echo 'target="_blank"'; } ?> href="<?php echo $url; ?>">
                            <span><?php echo $title; ?></span><i class="icon_arrow_right"></i>
                        </a>
                    <?php } ?>

                    <?php if (get_field('practical_btn_blue')) { ?>
                        <?php 
                            $link = get_field('practical_btn_blue');
                            $title = $link['title'];
                            $url = $link['url'];
                            $target = $link['target'];
                        ?>
                        <a class="btn" <?php if ($target) { echo 'target="_blank"'; } ?> href="<?php echo $url; ?>">
                            <span><?php echo $title; ?></span><i class="icon_arrow_right"></i>
                        </a>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>

    <?php get_template_part( 'template-parts/parts/part', 'following' ); ?>
</section>
<!-- end practical-->