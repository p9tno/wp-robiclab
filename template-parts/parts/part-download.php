<?php 
$rows = get_field('download_links', 'option');
if( $rows ) { ?>
    <div class="download">
        <?php foreach( $rows as $row ) { ?>
            <div class="download__item">
                <div class="download__icon"><i class="<?php echo $row['download_icon']; ?>"></i></div>
                <div class="download__link">
                    <!-- <a class="mobile" target="_blank" href="<?php // echo $row['download_url']; ?>"><?php // echo $row['download_text_m']; ?></a> -->
                    <a target="_blank" href="<?php echo $row['download_url']; ?>"><?php echo $row['download_text']; ?></a>
                </div>
            </div>
        <?php } ?>
    </div>
<?php } ?>