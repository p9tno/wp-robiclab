<?php
$no_img_url = get_template_directory_uri() . '/assets/img/no_img2.png' ;
$size = 'full'; // (thumbnail, medium, full, vertical, horizon)
?>
<!-- begin composition-->
<section class="composition section section_changeTheme" id="composition">
    <div class="container_center">
        <div class="composition__wrap">

                <?php 
                $rows = get_field('composition_imgs_list'); 
                if( $rows ) { ?>
        
                        <div class="composition__slider">
                        
                                <div class="swiper composition_slider_js">
                                <div class="swiper-wrapper">
                                <?php foreach( $rows as $row ) {
                                        $image_id = $row['composition_img_id'];
                                        if( $image_id ) {
                                        $img_url = wp_get_attachment_image_url($image_id, $size);
                                        } else {
                                        $img_url = $no_img_url;
                                } ?>
                                
                                        <div class="swiper-slide">
                                                <div class="composition__img img"><img src="<?php echo $img_url; ?>" alt="alt" loading="lazy" /></div>
                                        </div>
                                <?php } ?>
        
        
                                </div>
        
                                <div class="composition__control">
                                        <div class="swiper-scrollbar"></div>
        
                                        <div class="swiper__nav">
        
                                                <div class="swiper__arrows">
                                                        <i class="icon_slider_left"></i>
                                                        <i class="icon_slider_right"></i>
                                                </div>
                                                <div class="swiper-pagination"></div>
        
                                        </div>
                                
                                </div>
                                </div>
                        </div>
               
                <?php } ?>

            <div class="composition__content">
                <?php if (get_field('composition_title')) { ?>
                        <h2 class="section__title section__title_black" data-aos="fade-up"><span><?php the_field('composition_title'); ?></span></h2>
                <?php } ?>
                <?php if (get_field('composition_desc')) { ?>
                        <div class="section__content section__content_black"><p><?php the_field('composition_desc'); ?></p></div>
                <?php } ?>


                <div class="tabs-wrapper">

                    <div class="tabs">
                        <?php if (get_field('composition_equipment_boolean')) { ?>
                                <div class="tab"><span>Комплектация</span></div>
                        <?php } ?>
                        <?php if (get_field('composition_more_boolean')) { ?>
                                <div class="tab"><span>Дополнительное оборудование</span></div>
                        <?php } ?>
                        <?php if (get_field('composition_documentation_boolean')) { ?>
                                <div class="tab"><span>Документация</span></div>
                        <?php } ?>
                    </div>

                    <div class="tabs__content">
                        <?php if (get_field('composition_equipment_boolean')) { ?>
                                <div class="tab-item">
                                        <?php 
                                        $equipments = get_field('composition_equipment_list');
                                        if( $equipments ) { ?>
                                                <ul class="composition__list counter-wrap">
                                                <?php foreach( $equipments as $equipment ) { ?>
                                                        <li class="composition__item counter-item"><span class="counter-el"><?php echo $equipment['list_item']; ?></span></li>
                                                <?php } ?>
                                                </ul>
                                        <?php } ?>
                                </div>
                        <?php } ?>

                        <?php if (get_field('composition_more_boolean')) { ?>
                                <div class="tab-item">
                                        <?php 
                                        $mores = get_field('composition_more_list');
                                        if( $mores ) { ?>
                                                <ul class="composition__list counter-wrap">
                                                        <?php foreach( $mores as $more ) { ?>
                                                                <li class="composition__item counter-item"><span class="counter-el"><?php echo $more['list_item']; ?></span></li>
                                                        <?php } ?>
                                                </ul>
                                
                                        <?php } ?>
                                </div>
                        <?php } ?>

                        <?php if (get_field('composition_documentation_boolean')) { ?>
                                <div class="tab-item">
                                        <?php 
                                        $documentation = get_field('composition_documentation_list');
                                        if( $documentation ) { ?>
                                                <div class="composition__doc">
                                                        <ul class="row__list">
                                                                <?php foreach( $documentation as $doc ) { 
                                                                        $link = $doc['composition_documentation_link'];
                                                                        $title = $link['title'];
                                                                        $url = $link['url'];
                                                                        $target = $link['target'];
                                                                ?>
                                                                        <li><i class="icon_list"></i><a href="<?php echo $url; ?>" target="_blank"><?php echo $title; ?></a></li>
                                                                <?php } ?>
                                                        </ul>
                                                </div>
                                        <?php } ?>
                                </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end composition -->