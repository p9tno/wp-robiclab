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
$data_src = '';
if (get_field('select_video_src') == 'wp') {
    $modal_js = 'videoModal_js';
    $data_src = get_field('video_src');
} elseif (get_field('select_video_src') == 'google') {
    $modal_js = 'videoModal_google_js';
    $data_src = get_field('google_src');
} else {
    $modal_js = 'videoModal_yandex_js';
    $data_src = get_field('yandex_src');
}
?>

<div class="video <?php echo $modal_js; ?>" data-src="<?php echo $data_src; ?>">

    <div class="video__top">
        <div class="video__img img"><img src="<?php echo $img_url; ?>" alt="alt" /></div>
            <div class="video__play"><i class="icon_play"></i></div>
        </div>

    <div class="video__bottom"><span><?php the_title(); ?></span></div>

</div>

