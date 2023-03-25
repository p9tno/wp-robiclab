<!-- base -->
<div class="table__row">
    <div class="table__col table__col_title">
        <span class="desktop">Базовая</span>
        <span class="mobile">Базовая комплектация</span>
    </div>

    <div class="table__col">
        <div class="table__label mobile"><span>Набор цифровых датчиков</span></div>
        <?php 
        $sensors = get_field('base_sensors_list');
        if( $sensors ) { ?>
            <div class="table__list table__list_sensors">
                <?php foreach( $sensors as $sensor ) { ?>
                    <span><?php echo $sensor['item']; ?></span>
                <?php } ?>
            </div>
        <?php } ?>
    </div>

    <div class="table__col">
        <div class="table__label mobile"><span>В комплекте</span></div>
        <?php 
        $items = get_field('base_included_list');
        $count = count($items);
        if( $items ) { ?>
            <div class="table__list">
                <span>
                    <?php
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

    <div class="table__col">
        <div class="table__label mobile"><span>Дополнительная комплектация</span></div>
        <?php 
        $rows = get_field('base_list');
        $count = count($rows);
        if( $rows ) { ?>
            <div class="table__list">
                <span>
                    <?php
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
</div>
<!-- end base -->