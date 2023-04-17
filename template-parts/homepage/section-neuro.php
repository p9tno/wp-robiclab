<!-- begin neuro-->
<section class="neuro section bg section_scrool figure" id="neuro">
    <?php get_template_part( 'template-parts/parts/part', 'figureList' ); ?>

    <div class="container_center">
        <div class="neuro__content">
            <div class="neuro__left">
                <div class="neuro__macbook bg"></div>
            </div>
            <div class="neuro__right">
                <?php if (get_field('neuro_title')) { ?>
                    <h2 class="section__title animate-js" data-aos="fade-left"><span><?php the_field('neuro_title'); ?></span></h2>
                <?php } ?>

                <?php if (get_field('neuro_desc')) { ?>
                    <div class="section__content"><?php the_field('neuro_desc'); ?></div>
                <?php } ?>

                <div class="section__download">
                    <?php 
                    $rows = get_field('neuro_download_links');
                    if( $rows ) { ?>
                        <div class="download">
                            <?php foreach( $rows as $row ) { ?>
                                <div class="download__item">
                                    <div class="download__icon"><i class="<?php echo $row['download_icon']; ?>"></i></div>
                                    <div class="download__link">
                                        <a target="_blank" href="<?php echo $row['download_url']; ?>"><?php echo $row['download_text']; ?></a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="section__button section__button_buttons">
                    <?php if (get_field('neuro_btn_white')) { ?>
                        <?php 
                            $link = get_field('neuro_btn_white');
                            $title = $link['title'];
                            $url = $link['url'];
                            $target = $link['target'];
                        ?>
                        <a class="btn btn_transparent" <?php if ($target) { echo 'target="_blank"'; } ?> href="<?php echo $url; ?>">
                            <span><?php echo $title; ?></span><i class="icon_arrow_right"></i>
                        </a>
                    <?php } ?>

                    <?php if (get_field('neuro_btn_blue')) { ?>
                        <?php 
                            $link = get_field('neuro_btn_blue');
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
<!-- end neuro-->