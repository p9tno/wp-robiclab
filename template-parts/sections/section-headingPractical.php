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
<!-- begin heading-->
<section class="heading heading_practical section figure bg" id="heading">

    <ul class="figure__list">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li class="desktop"></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li class="desktop"></li>
    </ul>

    <div class="container_center">
        <div class="heading__content">

            <div class="heading__right">
                <div class="heading__img img"><img src="<?php echo $img_url; ?>" alt="alt" /></div>
            </div>

            <div class="heading__left">

                <h1 class="section__title"><span><?php the_title(); ?></span></h1>

                <?php if (get_field('heading_practical_desc')) { ?>
                    <div class="section__content"><?php the_field('heading_practical_desc'); ?></div>
                <?php } ?>

                <div class="section__button section__button_buttons">
                    <?php if (get_field('heading_practical_btn_blue')) { ?>
                        <?php 
                            $link = get_field('heading_practical_btn_blue');
                            $title = $link['title'];
                            $url = $link['url'];
                            $target = $link['target'];
                        ?>
                        <a class="btn" <?php if ($target) { echo 'target="_blank"'; } ?> href="<?php echo $url; ?>">
                            <span><?php echo $title; ?></span><i class="icon_arrow_right"></i>
                        </a>
                    <?php } ?>
                    <?php if (get_field('heading_practical_btn_white')) { ?>
                        <?php 
                            $link = get_field('heading_practical_btn_white');
                            $title = $link['title'];
                            $url = $link['url'];
                            $target = $link['target'];
                        ?>
                        <a class="btn btn_transparent" <?php if ($target) { echo 'target="_blank"'; } ?> href="<?php echo $url; ?>">
                            <span><?php echo $title; ?></span><i class="icon_arrow_right"></i>
                        </a>
                    <?php } ?>
                </div>

                <?php 
                $rows = get_field('heading_practical_list');
                if( $rows ) { ?>
                    <div class="heading__others"><span>Смотреть другие практикумы</span></div>
                    <div class="heading__list">
                        <?php foreach( $rows as $row ) { ?>
                            <a class="heading__item" href="<?php echo $row['heading_practical_link']; ?>"><i class="<?php echo $row['heading_practical_icon']; ?>"></i><span><?php echo $row['heading_practical_label']; ?></span></a>
                        <?php } ?>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>

    <div class="heading__hand bg"></div>

    <a class="following desktop following-single-js" href="#composition">
        <div class="following__btn"></div>
        <div class="following__label"><span>Scroll</span></div>
        <div class="following__mask"></div>
    </a>

</section>
<!-- end heading-->