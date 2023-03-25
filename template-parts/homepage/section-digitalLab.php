<!-- begin digitalLab-->
<section class="digitalLab section bg section_scrool figure" id="digitalLab">
    <?php get_template_part( 'template-parts/parts/part', 'figureList' ); ?>
    
    <div class="container_center">
        <div class="digitalLab__content">

            <div class="digitalLab__left">
                <div class="digitalLab__row">
                    <div class="digitalLab__macbook bg">
                        <div class="chart chart-light" id="chartDesctop"></div>
                        <div class="chart chart-dark" id="chartDesctopDark"></div>
                    </div>
                    <div class="digitalLab__col">
                        <div class="digitalLab__pwa bg"></div>
                        <div class="digitalLab__iphone bg">
                            <div class="chart chart-light" id="chartMobile"></div>
                            <div class="chart chart-dark" id="chartMobileDark"></div>
                        </div>
                    </div>
                </div>
                <?php if (get_field('digitalLab_label')) { ?>
                    <div class="digitalLab__label"><span><?php the_field('digitalLab_label'); ?></span></div>
                <?php } ?>
            </div>
            
            <div class="digitalLab__right">

                <?php if (get_field('digitalLab_title')) { ?>
                    <h2 class="section__title animate-js" data-aos="fade-right"><span><?php the_field('digitalLab_title'); ?></span></h2>
                <?php } ?>

                <?php if (get_field('digitalLab_desc')) { ?>
                    <div class="section__content"><?php the_field('digitalLab_desc'); ?></div>
                <?php } ?>

                <div class="section__download">
                    <?php get_template_part( 'template-parts/parts/part', 'download' ); ?>
                </div>

                <div class="section__button section__button_buttons">
                    <?php if (get_field('digitalLab_btn_white')) { ?>
                        <?php 
                            $link = get_field('digitalLab_btn_white');
                            $title = $link['title'];
                            $url = $link['url'];
                            $target = $link['target'];
                        ?>
                        <a class="btn btn_transparent" <?php if ($target) { echo 'target="_blank"'; } ?> href="<?php echo $url; ?>">
                            <span><?php echo $title; ?></span><i class="icon_arrow_right"></i>
                        </a>
                    <?php } ?>

                    <?php if (get_field('digitalLab_btn_blue')) { ?>
                        <?php 
                            $link = get_field('digitalLab_btn_blue');
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
<!-- end digitalLab-->