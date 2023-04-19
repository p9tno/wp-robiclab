<div class="tab-item">
    <?php $rows = get_field('tablet_and_phone_row');



    if( $rows ) { ?>
        <?php foreach( $rows as $row ) { 
            $image_id = $row['row_img_id'];
            if( $image_id ) {
                $img_url = wp_get_attachment_image_url($image_id, $size);
            } else {
                $img_url = $no_img_url;
            }
        ?>
            <div class="helpcenter__row" <?php if ($row['tablet_and_phone_row_id']) { echo 'id='.$row['tablet_and_phone_row_id'].''; }?>>
                <div class="container_center">
                    <div class="row">

                        <div class="row__title">
                            <div class="row__title_img"><img src="<?php echo $img_url; ?>" alt="alt" /></div>
                            <span><?php echo $row['row_title']; ?></span>
                        </div>

                        <div class="row__wrap">

                            <div class="row__content">
                                <div class="section__content section__content_black"><p><?php echo $row['row_desc']; ?></p></div>

                                <?php $list = $row['row_list'];
                                if( $list ) { ?>
                                    <ul class="row__list">
                                        <?php foreach( $list as $item ) { 
                                            if ($item['row_list_link']) {
                                                $link = $item['row_list_link'];
                                                $title = $link['title'];
                                                $url = $link['url'];
                                                $target = $link['target'];
                                            }
                                        ?>
                                            <li>
                                                <i class="icon_list"></i>
                                                <a href="<?php echo $url; ?>" <?php if ($target) { echo 'target="_blank"'; } ?>><?php echo $title; ?></a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>

                            </div>

                            <?php if ($row['row_link']) { 
                                $link = $row['row_link'];
                                $title = $link['title'];
                                $url = $link['url'];
                                $target = $link['target'];
                                ?>
                                <div class="row__button">
                                    <a class="btn btn_circle btn_transform" <?php if ($target) { echo 'target="_blank"'; } ?> href="<?php echo $url; ?>">
                                        <span><?php echo $title; ?></span><i class="icon_arrow_circle"></i>
                                    </a>
                                </div>
                            <?php } ?>

                        </div>

            

                        <?php if ($row['row_relations']) { $count = count($row['row_relations']); ?>
                            <div class="row__slider">
                                <div class="swiper row_slider_js">

                                    <div class="swiper__label"><span>Видео-инструкции</span>
                                        <?php if ($count > 5) { ?>
                                            <div class="swiper__nav desktop">
                                                <div class="swiper__arrows">
                                                    <i class="icon_slider_left"></i>
                                                    <i class="icon_slider_right"></i>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>

                                    <div class="swiper-wrapper">
                                        <?php
                                            $post_id = $row['row_relations'];

                                            $args = array(
                                                'post_type' => 'video',
                                                'posts_per_page' => -1,
                                                'post__in' => $post_id,
                                                'orderby'   => 'post__in',
                                            );
                                            $quiz = new WP_Query($args);
                                        ?>
                                        
                                        <?php if ($quiz->have_posts()) : while ($quiz->have_posts()) : $quiz->the_post(); ?>
                                            <div class="swiper-slide">
                                                <?php get_template_part( 'template-parts/parts/preview', 'video' ); ?>
                                            </div>

                                        <?php endwhile; ?>
                                        
                                        <?php else : ?>
                                            no post
                                        <?php endif; ?>
                                        
                                        <?php wp_reset_postdata(); ?>
                                    </div>
                                    <div class="swiper-scrollbar"></div>

                                </div>
                            </div>
                        <?php } ?>
                        
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } ?>


</div>