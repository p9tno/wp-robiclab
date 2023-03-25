<?php
    $no_img_url = get_template_directory_uri() . '/assets/img/no_img2.png' ;
    $image_id = get_field('video_img_id');
    $size = 'full'; // (thumbnail, medium, full, vertical, horizon)

    if( $image_id ) {
        $img_url = wp_get_attachment_image_url($image_id, $size);
    } else {
        $img_url = $no_img_url;
    }

?>

<?php 
$modal_js = '';
if (get_field('video_src')) {
    $modal_js = 'videoModal_js';
} 
?>

<div class="video <?php echo $modal_js; ?>" data-src="<?php the_field('video_src'); ?>">

    <div class="video__top">
        <div class="video__img img"><img src="<?php echo $img_url; ?>" alt="alt" /></div>
        <?php if (get_field('video_src')) { ?>
            <div class="video__play"><i class="icon_play"></i></div>
        <?php } ?>
    </div>

    <div class="video__bottom"><span><?php the_title(); ?></span></div>

</div>

