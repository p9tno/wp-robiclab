<?php 
$rows = get_field('repeater_field_name');
if( $rows ) { ?>
    <?php foreach( $rows as $row ) { ?>
        <?php echo $row['caption']; ?>
    <?php } ?>
<?php } ?>


<!-- begin equipment-->
<section class="equipment section section_changeTheme changeHeader_js" id="equipment">
    <div class="container_center">
        <div class="equipment__wrap">
            <div class="equipment__box bg"></div>
            <div class="equipment__tabs">

                <?php if (get_field('equipment_title')) { ?>
                    <h2 class="section__title section__title_black" data-aos="fade-up"><span><?php the_field('equipment_title'); ?></span></h2>
                <?php } ?>

                <div class="tabs-wrapper">

                    <div class="tabs">
                        <span class="tab">Базовая</span>
                        <span class="tab">Стандартная</span>
                        <span class="tab">Профильная</span>
                        <span class="tab tab_danger">Точка роста</span>
                    </div>

                    <div class="tabs-content">
                        <?php get_template_part( 'template-parts/tabs/tab', 'base' ); ?>
                        <?php get_template_part( 'template-parts/tabs/tab', 'standard' ); ?>
                        <?php get_template_part( 'template-parts/tabs/tab', 'profile' ); ?>
                        <?php get_template_part( 'template-parts/tabs/tab', 'dot' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end equipment-->