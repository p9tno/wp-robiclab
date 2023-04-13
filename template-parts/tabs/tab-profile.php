<div class="tab-item">

    <div class="equipment__content">

        <?php 
        $sensors = get_field('profile_sensors_list');
        if( $sensors ) { ?>
            <!-- start equipment__row_sensors -->
            <div class="equipment__row equipment__row_sensors">
                <div class="equipment__label"><span>Набор цифровых датчиков</span></div>
                <ul class="equipment__list equipment__list_sensors">
                    <?php foreach( $sensors as $sensor ) { ?>
                        <li class="equipment__item"><span><?php echo $sensor['item']; ?></span></li>
                    <?php } ?>
                </ul>
            </div>
            <!-- end equipment__row_sensors -->
        <?php } ?>

        <?php 
        $multisensor = get_field('profile_multisensor_list');
        if( $multisensor ) { ?>
            <!-- start equipment__row_multisenso r-->
            <div class="equipment__row equipment__row_multisensor">
                <div class="equipment__label"><span>Мультидатчики</span></div>
                <ul class="equipment__list equipment__list_multisensor drop__wrapper">
                    <?php foreach( $multisensor as $sensor ) { ?>
                        <li class="equipment__item drop">
                            <div class="drop__toggle"> <span><?php echo $sensor['item']; ?></span></div>
                            <?php 
                            $drop_list = $sensor['drop_list'];
                            if( $drop_list ) { ?>
                                <div class="drop__list">
                                    <?php foreach( $drop_list as $drop_item ) { ?>
                                        <div class="drop__item"><span><?php echo $drop_item['drop_item']; ?></span></div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- end equipment__row_multisensor -->
        <?php } ?>

        <?php 
        $items = get_field('profile_included_list');
        if( $items ) { ?>
            <!-- start equipment__list_included-->
            <div class="equipment__row">
                <div class="equipment__label"><span>В комплекте</span></div>
                <ul class="equipment__list equipment__list_included">
                    <?php foreach( $items as $item ) { ?>
                        <li class="equipment__item">
                            <div class="equipment__icon"><i class="<?php echo $item['icon']; ?>"></i></div>
                            <span><?php echo $item['item']; ?></span>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- end equipment__list_included-->
        <?php } ?>

        <?php 
        $rows = get_field('profile_list');
        if( $rows ) { ?>
            <!-- start equipment__list-->
            <div class="equipment__row">
                <div class="equipment__label"><span>Дополнительная комплектация</span></div>
                <ul class="equipment__list equipment__list_list">
                    <?php foreach( $rows as $row ) { ?>
                        <li class="equipment__item"><span><?php echo $row['item']; ?></span></li>
                    <?php } ?>
                </ul>
            </div>
            <!-- end equipment__list-->
        <?php } ?>


        <div class="equipment__action">
            <a class="btn show_js" href="#bargain">Оформить покупку</a>
            <a class="equipment__link show_js" href="#compare">Сравнить наборы</a>
        </div>

    </div>
</div>