<?php
// Filter
function my_custom_filter(){

	$query_data = $_GET;
  // get_pr($query_data);
  $paged = (isset($query_data['paged']) ) ? intval($query_data['paged']) : 1;
  $posts_per_page = 20;
  //filter by category id
	$lab = ($query_data['lab']) ? explode(',',$query_data['lab']) : false;

  $tax_query_lab = ($lab) ? array( array(
      'taxonomy' => 'video-lab',
      'field' => 'id',
      'terms' => $lab
  ) ) : false;

  if ($lab[0] === 'all') {
    $args = array(
      'post_type' => 'video',
      'paged' => $paged,
      'posts_per_page' => $posts_per_page,
    );
  } else {
    $args = array(
      'post_type' => 'video',
      'paged' => $paged,
      'posts_per_page' => $posts_per_page,
  
      'tax_query' => array(
        'relation' => 'AND',
        $tax_query_lab,
      ),
    );
  }

  // get_pr($args);

  $loop = new WP_Query( $args );

  if($loop->have_posts()) {
    while($loop->have_posts()) : $loop->the_post();
      get_template_part( 'template-parts/parts/preview', 'video' );
    endwhile; } 
    else {
    echo 'не найден';
  }
  wp_reset_postdata(); ?>

  <?php if($loop->max_num_pages > 1){ ?>
  <nav class="pagination">
    <?php
        //Вывод стандартной пагинации
        $big = 999999999; // need an unlikely integer

        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, $paged ),
            'prev_text' => '<i class="icon_arrow_left"></i>',
            'next_text' => '<i class="icon_arrow_right"></i>',
            'total' => $loop->max_num_pages,
            'end_size' => 1,
            'mid_size' => 1,
            'type' => 'list'
        ) );
      ?>
    </nav>
  <?php } ?>

<?php die();
}

add_action('wp_ajax_my_custom_filter', 'my_custom_filter');
add_action('wp_ajax_nopriv_my_custom_filter', 'my_custom_filter');