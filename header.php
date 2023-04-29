<!doctype html>
<!-- start html -->
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<?php if (get_field('header_scripts', 'option')) { ?>
		<?php the_field('header_scripts', 'option'); ?>
	<?php } ?>
</head>


<!-- start body -->
<body <?php body_class(); ?>>

<?php if (get_field('preloader_boolean', 'option')) { ?>
	<?php get_template_part( 'template-parts/parts/part', 'preloader' ); ?>
<?php } ?>


<?php wp_body_open(); ?>

<?php get_template_part( 'template-parts/content', 'header' ); ?>


<?php
$class_dark = '';
if ( is_page_template(['template-experiments.php']) 
    // || is_page_template(['template-delivery.php'])
    || is_page_template(['template-singlepage.php'])
    || is_page_template(['template-sitemap.php'])

) {
    $class_dark = 'breadcrumbs_dark';
}
?>

<?php if ( is_page_template(['template-homepage.php']) ) { ?>
        <!-- start main-->
        <main class="main_content main_scroll">
    <?php } else { ?>
        <!-- start main-->
        <main class="main_content">
            <!-- begin breadcrumbs-->
            <div class="breadcrumbs section <?php echo $class_dark; ?>">
                <div class="container_center">
					<?php if(!is_404()) { if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('');  }  ?>
                </div>
            </div>
            <!-- end breadcrumbs-->
    <?php } ?>

