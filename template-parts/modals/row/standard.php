<!-- standard -->
<div class="table__row">
    <div class="table__col table__col_title">
        <span class="desktop">Стандартная</span>
        <span class="mobile">Стандартная комплектация</span>
    </div>

    <?php if (get_field('base_sensors_list') || get_field('standard_sensors_list') || get_field('profile_sensors_list')) { ?>
        <div class="table__col">
            <div class="table__label mobile"><span>Одиночные датчики</span></div>
            <?php 
            $sensors = get_field('standard_sensors_list');
            if( $sensors ) { ?>
                <div class="table__list table__list_sensors">
                    <?php foreach( $sensors as $sensor ) { ?>
                        <span><?php echo $sensor['item']; ?></span>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    <?php } ?>

    <?php if (get_field('base_multisensor_list') || get_field('standard_multisensor_list') || get_field('profile_multisensor_list')) { ?>
        <!-- start equipment__row_multisenso -->
        <div class="table__col">
            <div class="table__label mobile"><span>Мультидатчики</span></div>
            <?php 
            $multisensor = get_field('standard_multisensor_list');
            if( $multisensor ) { ?>
                <div class="table__list table__list_multisensor drop__wrapper">
                    <?php foreach( $multisensor as $sensor ) { ?>
                        <div class="drop">
                            <div class="drop__toggle"><span><?php echo $sensor['item']; ?></span></div>
                            <?php 
                            $drop_list = $sensor['drop_list'];
                            if( $drop_list ) { ?>
                                <div class="drop__list">
                                    <?php foreach( $drop_list as $drop_item ) { ?>
                                        <div class="drop__item"><span><?php echo $drop_item['drop_item']; ?></span></div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
        <!-- end equipment__row_multisensor -->
    <?php } ?>

    <?php if (get_field('base_included_list') || get_field('standard_included_list') || get_field('profile_included_list')) { ?>
        <div class="table__col">
            <div class="table__label mobile"><span>В комплекте</span></div>
            <?php 
            $items = get_field('standard_included_list');
            
            if( $items ) { ?>
                <div class="table__list">
                    <span>
                        <?php
                            $count = count($items);
                            $i = 1; foreach( $items as $item ) {
                                if ($i == $count) { echo $item['item']; }
                                else { echo $item['item'] . ', '; }
                                $i++;
                            } 
                            unset($i);
                        ?>
                    </span>
                </div>
            <?php } unset($count); ?>
        </div>
    <?php } ?>

    <?php if (get_field('base_list') || get_field('standard_list') || get_field('profile_list')) { ?>
        <div class="table__col">
            <div class="table__label mobile"><span>Дополнительная комплектация</span></div>
            <?php 
            $rows = get_field('standard_list');
            
            if( $rows ) { ?>
                <div class="table__list">
                    <span>
                        <?php
                            $count = count($rows);
                            $i = 1; foreach( $rows as $row ) {
                                if ($i == $count) { echo $row['item']; }
                                else { echo $row['item'] . ', '; }
                                $i++;
                            } 
                            unset($i);
                        ?>
                    </span>
                </div>
            <?php } unset($count); ?>
        </div>
    <?php } ?>

</div>
<!-- end standard -->