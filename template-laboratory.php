<?php
/**
 * Template name: Шаблон страницы ЛАБОРАТОРИИ
 */
?>

<?php get_header(); ?>

<?php 
get_template_part( 'template-parts/sections/section', 'heading' );
get_template_part( 'template-parts/sections/section', 'equipment' );
?>

<?php get_footer();