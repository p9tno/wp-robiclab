<?php if ( is_page_template(['template-homepage.php']) ) { ?>
    <div class="following desktop following-js">
        <div class="following__btn"></div>
        <div class="following__label"><span>Scroll</span></div>
        <div class="following__mask"></div>
    </div>
<?php } else { 
    $id = '';
    if (is_page_template(['template-laboratory.php'])) {
        $id = '#equipment';
    } else {

    }
    
    ?>
    <a class="following desktop following-single-js" href="<?php echo $id; ?>">
        <div class="following__btn"></div>
        <div class="following__label"><span>Scroll</span></div>
        <div class="following__mask"></div>
    </a>

<?php } ?>





