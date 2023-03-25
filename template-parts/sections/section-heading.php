<!-- begin heading-->
<section class="heading section figure bg" id="heading">
    <?php get_template_part( 'template-parts/parts/part', 'figureList' ); ?>

    <div class="container_center">
        <div class="heading__content">
            <div class="heading__left">
                <h1 class="section__title"><span><?php the_title(); ?></span></h1>

                <?php if (get_field('heading_desc')) { ?>
                    <div class="section__content"><?php the_field('heading_desc'); ?></div>
                <?php } ?>

                <div class="section__download">
                    <?php get_template_part( 'template-parts/parts/part', 'download' ); ?>
                </div>


                <div class="section__button section__button_buttons">
                    <?php if (get_field('heading_btn_white')) { ?>
                        <?php 
                            $link = get_field('heading_btn_white');
                            $title = $link['title'];
                            $url = $link['url'];
                            $target = $link['target'];
                        ?>
                        <a class="btn btn_transparent" <?php if ($target) { echo 'target="_blank"'; } ?> href="<?php echo $url; ?>">
                            <span><?php echo $title; ?></span><i class="icon_arrow_right"></i>
                        </a>
                    <?php } ?>

                    <?php if (get_field('heading_btn_blue')) { ?>
                        <?php 
                            $link = get_field('heading_btn_blue');
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

            <div class="heading__right">
                <div class="heading__row">
                    <div class="heading__macbook bg">
                        <div class="chart chart-light" id="chartDesctop"></div>
                        <div class="chart chart-dark" id="chartDesctopDark"></div>
                    </div>
                    <div class="heading__col">
                        <div class="heading__pwa bg"></div>
                        <div class="heading__iphone bg">
                            <div class="chart chart-light" id="chartMobile"></div>
                            <div class="chart chart-dark" id="chartMobileDark"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php if (get_field('heading_label')) { ?>
        <div class="heading__label">
            <span><?php the_field('heading_label'); ?></span>
        </div>
    <?php } ?>

    <?php get_template_part( 'template-parts/parts/part', 'following' ); ?>

</section>
<!-- end heading-->