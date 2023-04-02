<?php
/**
 * Template name: Шаблон страницы ПРАКТИКУМА
 */
?>

<?php get_header(); ?>

<?php 
get_template_part( 'template-parts/sections/section', 'headingPractical' );
get_template_part( 'template-parts/sections/section', 'composition' );
get_template_part( 'template-parts/sections/section', 'example' );
?>

<?php get_footer();