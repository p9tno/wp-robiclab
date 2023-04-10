<div class="firstscreen__content firstscreen__content_desktop desktop">

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