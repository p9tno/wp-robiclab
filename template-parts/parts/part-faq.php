<?php if (get_field('faq_boolean')) { ?>
    <div class="faq">
        <div class="container_center">
            <?php if (get_field('faq_title')) { ?>
                <div class="row__title"><span><?php the_field('faq_title'); ?></span></div>
            <?php } ?>

            <div class="faq__content">
    
                <?php 
                $rows = get_field('faq_list_left');
                if( $rows ) { ?>
                    <div class="faq__col">
                        <?php foreach( $rows as $row ) { ?>
                            <div class="collapse" data-collapse-wrapper="">
                                <div class="collapse__title" data-collapse=""><span><?php echo $row['faq_question']; ?></span>
                                    <div class="collapse__button"></div>
                                </div>
                                <div class="collapse__body" data-collapse-body="">
                                    <div class="section__content section__content_black"><?php echo $row['faq_answer']; ?></div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
    
                <?php 
                $rows = get_field('faq_list_right');
                if( $rows ) { ?>
                    <div class="faq__col">
                        <?php foreach( $rows as $row ) { ?>
                            <div class="collapse" data-collapse-wrapper="">
                                <div class="collapse__title" data-collapse=""><span><?php echo $row['faq_question']; ?></span>
                                    <div class="collapse__button"></div>
                                </div>
                                <div class="collapse__body" data-collapse-body="">
                                    <div class="section__content section__content_black"><?php echo $row['faq_answer']; ?></div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
    
            </div>

        </div>
    </div>
<?php } ?>