<!-- begin firstscreen-->
<section class="firstscreen bg section section_scrool" id="firstscreen">
    <div class="container_center">
        <div class="firstscreen__content">
            <?php if (get_field('firstscreen_title')) { ?>
                <h1 class="firstscreen__title"><span><?php the_field('firstscreen_title'); ?></span></h1>
            <?php } ?>

            <div class="hexagon">
                <?php 
                $rows = get_field('firstscreen_list');
                if( $rows ) { ?>
                    <?php foreach( $rows as $row ) { ?>
                        <button class="hexagon__button <?php if(!$row['hexagon_boolean']){echo 'disabled';} ?>" id="<?php echo $row['hexagon_id']; ?>">
                            <div class="hexagon__icon"><i class="<?php echo $row['hexagon_icon']; ?>"></i></div>
                            <div class="hexagon__label"><span><?php echo $row['hexagon_label']; ?></span></div>
                        </button>
                    <?php } ?>
                <?php } ?>

                <?php if (get_field('hexagon_link')) { ?>
                    <div class="hexagon__button">
                        <a class="hexagon__link" target="_blank" href="<?php the_field('hexagon_link'); ?>">
                            <div class="cor" id="cor"></div>
                        </a>
                    </div>
                <?php } ?>
                
            </div>

        </div>
    </div>

    <?php get_template_part( 'template-parts/parts/part', 'following' ); ?>
 
</section>
<!-- end firstscreen-->