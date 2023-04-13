<!-- begin products-->
<section class="products section bg" id="products">

    <div class="container_center">

        <?php 
        $rows = get_field('products_list');
        if( $rows ) { ?>
            <div class="products__top">
                <h1 class="section__title"><span><?php the_title(); ?></span></h1>
    
                <div class="products__list">
                    <?php foreach( $rows as $row ) { ?>
                        <a class="products__item <?php echo $row['products_select']; ?>" href="<?php echo $row['products_link']; ?>">
                            <div class="products__icon"><i class="<?php echo $row['products_icon']; ?>"></i></div>
                            <div class="products__label"><span><?php echo $row['products_label']; ?></span></div>
                        </a>
                    <?php } ?>
                </div>

                <div class="products__hand bg"></div>
    
            </div>
        <?php } ?>


        <div class="products__bottom">
            <div class="products__box bg"></div>
            <div class="products__content">
                <?php if (get_field('products_title')) { ?>
                    <h2 class="section__title" data-aos="fade-up"><span><?php the_field('products_title'); ?></span></h2>
                <?php } ?>

                <?php if (get_field('products_desc')) { ?>
                    <div class="section__content"><?php the_field('products_desc'); ?></div>
                <?php } ?>

                <div class="section__button section__button_buttons">
                    <?php if (get_field('products_btn_white')) { ?>
                        <?php 
                            $link = get_field('products_btn_white');
                            $title = $link['title'];
                            $url = $link['url'];
                            $target = $link['target'];
                        ?>
                        <a class="btn btn_transparent" <?php if ($target) { echo 'target="_blank"'; } ?> href="<?php echo $url; ?>">
                            <span><?php echo $title; ?></span><i class="icon_arrow_right"></i>
                        </a>
                    <?php } ?>

                    <?php if (get_field('products_btn_blue')) { ?>
                        <?php 
                            $link = get_field('products_btn_blue');
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
</section>
<!-- end products-->