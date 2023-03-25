<?php
/**
 * Template name: Шаблон главной страницы
 */
?>

<?php get_header(); ?>

<?php // include 'sections.php'; ?>

<?php // echo get_template_directory_uri() . '/assets.' ?>

<?php // $number=preg_replace('/\s+/', '', get_field('test', 'option')); ?>
<!-- <a href="tel:<?php // echo $number; ?>"><?php // the_field('test', 'option'); ?></a> -->

<?php if (get_field('test')) { ?>
    <?php the_field('test'); ?>
<?php } ?>

<?php if (get_field('test', 'option')) { ?>
    <?php the_field('test', 'option'); ?>
<?php } ?>

<?php 
$rows = get_field('repeater_field_name');
if( $rows ) { ?>
    <?php foreach( $rows as $row ) { ?>
        <?php echo $row['caption']; ?>
    <?php } ?>
<?php } ?>

<?php if (get_field('test_button', 'option')) { ?>
    <?php 
        $link = get_field('test_button', 'option');
        $title = $link['title'];
        $url = $link['url'];
        $target = $link['target'];
    ?>
    <?php echo $url; ?>
    <?php if ($target) { echo 'target="_blank"'; } ?>
    <?php echo $title; ?>

<?php } ?>

<?php
    $no_img_url = get_template_directory_uri() . '/assets/img/no_img.webp' ;
    $image_id = get_field('test_img');
    $size = 'full'; // (thumbnail, medium, full, vertical, horizon)

    if( $image_id ) {
        $img_url = wp_get_attachment_image_url($image_id, $size);
    } else {
        $img_url = $no_img_url;
    }

?>


<?php if ( is_page_template(['template-homepage.php']) ) {} ?>
       

<?php

get_template_part( 'template-parts/homepage/section', 'firstscreen' );
get_template_part( 'template-parts/homepage/section', 'digitalLab' );
get_template_part( 'template-parts/homepage/section', 'neuro' );
get_template_part( 'template-parts/homepage/section', 'practical' );
get_template_part( 'template-parts/homepage/section', 'robotics' );
get_template_part( 'template-parts/homepage/section', 'footerScroll' );

?>

<?php get_footer(); ?>