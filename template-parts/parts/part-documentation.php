<?php if (get_field('documentation_boolean')) { ?>
    <div class="documentation">
        <div class="container_center">
            
            <?php if (get_field('documentation_title')) { ?>
                <div class="row__title"><span><?php the_field('documentation_title'); ?></span></div>
            <?php } ?>

            <?php 
            $rows = get_field('documentation_list');
            if( $rows ) { ?>
                <div class="documentation__list">
                    <?php foreach( $rows as $row ) { ?>
                        <div class="documentation__item">
                            <div class="section__content section__content_black">
                                <p><?php echo $row['documentation_item']; ?></p>
                            </div>
                            <div class="documentation__button"><a class="btn btn_transparent" target="_blank" href="<?php echo $row['documentation_button']; ?>">Скачать</a></div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
                
        </div>
    </div>
<?php } ?>