<!-- begin robotics-->
<section class="robotics section bg section_scrool figure" id="robotics">
    <?php get_template_part( 'template-parts/parts/part', 'figureList' ); ?>

    <div class="container_center">
        <div class="robotics__content">
            <div class="robotics__left">
                <?php 
                $rows = get_field('robotics_list');
                if( $rows ) { ?>
                    <div class="robotics__list">
                        
                        <?php
                        $i = 0;
                        $delay = '';
                        $fade = '';
                        foreach( $rows as $row ) { 
                            switch ($i) {
                                case 0:
                                    $delay = '200';
                                    $fade = 'fade-down-right';
                                    break;
                                case 1:
                                    $delay = '400';
                                    $fade = 'fade-down-left';
                                    break;
                                case 2:
                                    $delay = '1200';
                                    $fade = 'fade-right';
                                    break;
                                case 3:
                                    $delay = '600';
                                    $fade = 'fade-left';
                                    break;
                                case 4:
                                    $delay = '1000';
                                    $fade = 'fade-up-right';
                                    break;
                                case 5:
                                    $delay = '800';
                                    $fade = 'fade-up-left';
                                    break;
                         
                                default:
                                    $delay = '0';
                                    $fade = 'fade-right';
                            }
                        ?>
                            <!-- START robotics__item-->
                            <div class="robotics__item animate-js" data-aos="<?php echo $fade; ?>" data-aos-delay="<?php echo $delay; ?>">
                                <a class="robotics__link" href="<?php echo $row['robotics_link']; ?>">
                                    <div class="robotics__icon"><i class="<?php echo $row['robotics_icon']; ?>"></i></div>
                                    <div class="robotics__label"><span><?php echo $row['robotics_label']; ?></span></div>
                                </a>
                            </div>
                            <!-- END robotics__item-->
                            
                        <?php $i++; } ?>

    
   
                    </div>
                <?php } ?>

                <div class="robotics__hand bg"></div>
            </div>
            <div class="robotics__right">

                <?php if (get_field('robotics_title')) { ?>
                    <h2 class="section__title animate-js" data-aos="fade-right"><span><?php the_field('robotics_title'); ?></span></h2>
                <?php } ?>

                <?php if (get_field('robotics_desc')) { ?>
                    <div class="section__content"><?php the_field('robotics_desc'); ?></div>
                <?php } ?>

                <div class="section__button section__button_buttons">
                    <?php if (get_field('robotics_btn_white')) { ?>
                        <?php 
                            $link = get_field('robotics_btn_white');
                            $title = $link['title'];
                            $url = $link['url'];
                            $target = $link['target'];
                        ?>
                        <a class="btn btn_transparent" <?php if ($target) { echo 'target="_blank"'; } ?> href="<?php echo $url; ?>">
                            <span><?php echo $title; ?></span><i class="icon_arrow_right"></i>
                        </a>
                    <?php } ?>

                    <?php if (get_field('robotics_btn_blue')) { ?>
                        <?php 
                            $link = get_field('robotics_btn_blue');
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
<!-- end robotics-->