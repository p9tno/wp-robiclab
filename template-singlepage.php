<?php
/**
 * Template name: Шаблон страницы
 */
?>

<?php get_header(); ?>



<!-- begin pageContent-->
<section class="section section_changeTheme pt animate_bg">
    <div class="container_center">
        <h1 class="section__title section__title_black">
            <span><?php the_title(); ?></span>
        </h1>
		<div class="section__content section__content_black"><?php the_content(); ?></div>
        
    </div>
</section>
<!-- end pageContent-->

<?php get_footer();