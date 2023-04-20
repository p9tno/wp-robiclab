<!-- begin example-->
<section class="example section section_changeTheme" data-example="<?php the_field('example_radio'); ?>" id="example">
  <div class="container_center">

    <?php if (get_field('example_title')) { ?>
      <h2 class="section__title section__title_black" data-aos="fade-up"><span><?php the_field('example_title'); ?></span></h2>
    <?php } ?>

    <?php if (get_field('example_desc')) { ?>
      <div class="example__content">
        <div class="section__content section__content_black"><?php the_field('example_desc'); ?></div>
      </div>
    <?php } ?>

    <?php

      if (get_field('example_radio') == 'mechanics') { include 'laboratory/mechanics.php'; }
      elseif (get_field('example_radio') == 'thermodynamics') { include 'laboratory/thermodynamics.php'; } 
      elseif (get_field('example_radio') == 'electrodynamics') { include 'laboratory/electrodynamics.php'; } 
      elseif (get_field('example_radio') == 'optics') { include 'laboratory/optics.php'; } 
      elseif (get_field('example_radio') == 'quantum') { include 'laboratory/quantum.php'; } 

    ?>

    <div class="example__form">
      <!-- begin form-->
      <?php get_template_part( 'template-parts/forms/form', 'communications' ); ?>
      <!-- end form-->
    </div>

  </div>
</section>
<!-- end example-->