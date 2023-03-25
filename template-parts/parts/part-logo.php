<?php
$logo_id = get_field('logo_img_id', 'option');
$logo_id_w = get_field('logo_img_id_w', 'option');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

if( $logo_id || $logo_id_w) {
    $logo_url = wp_get_attachment_image_url($logo_id, $size);
    $logo_url_w = wp_get_attachment_image_url($logo_id_w, $size); ?>
    <div class="header__col">
        <?php if ( is_front_page() ) { ?>
            <span class="logo" href="/">
                <img class="close_nav_js active" src="<?php echo $logo_url; ?>" alt="logo" />
                <img class="open_nav_js" src="<?php echo $logo_url_w; ?>" alt="logo" />
            </span>
        <?php } else { ?> 
            <a class="logo" href="<?php echo esc_url(home_url("/")); ?>">
                <img class="close_nav_js active" src="<?php echo $logo_url; ?>" alt="logo" />
                <img class="open_nav_js" src="<?php echo $logo_url_w; ?>" alt="logo" />
            </a>
        <?php } ?>
    </div>
<?php } ?>
