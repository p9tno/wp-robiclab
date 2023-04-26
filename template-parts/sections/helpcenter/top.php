<?php
    $no_img_url = get_template_directory_uri() . '/assets/img/helpcenter_img.webp' ;
    $image_id = get_field('helpcenter_top_img_id');
    $size = 'full'; // (thumbnail, medium, full, vertical, horizon)

    if( $image_id ) {
        $img_url = wp_get_attachment_image_url($image_id, $size);
    } else {
        $img_url = $no_img_url;
    }

?>

<div class="helpcenter__top bg figure">
    <?php get_template_part( 'template-parts/parts/part', 'figureList' ); ?>

    <div class="container_center">
        <h1 class="section__title"><span><?php the_title(); ?></span></h1>

        <!-- <div class="helpcenter__nav">
            <?php 
                // wp_nav_menu(array(
                // 'theme_location' => 'help_center',
                // 'container'=>'ul',
                // )); 
            ?>
        </div> -->

        <div class="helpcenter__img img"><img src="<?php echo $img_url; ?>" alt="alt" /></div>
        <div class="helpcenter__content">
            <?php if (get_field('helpcenter_top_title')) { ?>
                <h2 class="helpcenter__title"><span><?php the_field('helpcenter_top_title'); ?></span></h2>
            <?php } ?>
            <?php if (get_field('helpcenter_top_desc')) { ?>
                <div class="section__content"> <?php the_field('helpcenter_top_desc'); ?></div>
            <?php } ?>
        </div>

        <div class="helpcenter__button">

            <?php if (get_field('helpcenter_top_btn_blue')) { ?>
                <?php 
                    $link = get_field('helpcenter_top_btn_blue');
                    $title = $link['title'];
                    $url = $link['url'];
                    $target = $link['target'];
                ?>
                <a class="btn btn_circle btn_transform" <?php if ($target) { echo 'target="_blank"'; } ?> href="<?php echo $url; ?>">
                    <span><?php echo $title; ?></span><i class="icon_arrow_circle"></i>
                </a>
            <?php } ?>
        </div>
    </div>
</div>

<?php
// unset($no_img_url);
// unset($image_id);
// unset($img_url);