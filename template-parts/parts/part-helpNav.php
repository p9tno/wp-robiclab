
<?php 
$rows = get_field('help_center_links_list', 'option');

if( $rows && get_field('help_center_page_link', 'option')) { ?>
    <div class="navbar__label"><span>Справочный центр</span></div>

    <ul class="menu">
        <?php foreach( $rows as $row ) { ?>
            <li class="menu-item scroll_js">
                <a href="<?php echo $row['list_id']; ?>" data-url-page="<?php the_field('help_center_page_link', 'option'); ?>" data-tab="<?php echo $row['list_radio']; ?>"><?php echo $row['list_text']; ?></a>
            </li>
        <?php } ?>
    </ul>
<?php } ?>

 


