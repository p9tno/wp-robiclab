
<?php
    // unset($no_img_url);
    // unset($image_id);
    // unset($img_url);

    $no_img_url = get_template_directory_uri() . '/assets/img/windows.png' ;
    $size = 'full'; // (thumbnail, medium, full, vertical, horizon)



?>
<!-- begin helpcenter-->
<section class="helpcenter section section_changeTheme" id="helpcenter">
    <?php include 'helpcenter/top.php'; ?>
    <?php include 'helpcenter/main.php'; ?>
    <?php include 'helpcenter/bottom.php'; ?>
</section>
<!-- end helpcenter-->