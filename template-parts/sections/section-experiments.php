<!-- begin experiments-->
<section class="experiments section section_changeTheme pt" id="experiments">
    <div class="container_center">
        <h1 class="section__title section__title_black"><span><?php the_title(); ?></span></h1>

        <ul class="cat-list filter_list_js">

            <li class="cat-item filter-video-lab-js">
                <input type="radio" id="term_all" name="video-lab" value="all" checked  />
                <label for="term_all"><span>Все эксперименты</span></label>
            </li>

            <?php
            $categories = get_terms(
                'video-lab',
                array(
                    'meta_key'                 => 'video_lab_number',
                    'orderby'                  => 'meta_value_num',
                    'order'                    => 'ASC',

                    'hierarchical' => true,
                    'hide_empty' => 0,
                    'parent' => 0
                ) 
            );
            foreach($categories as $cat) { ?>   
                <li class="cat-item filter-video-lab-js">
                    <input type="radio" id="term_<?php echo $cat->term_id; ?>" name="video-lab" value="<?php echo $cat->term_id; ?>"  />
                    <label for="term_<?php echo $cat->term_id; ?>"><span><?php echo $cat->name; ?></span></label>
                </li>
            <?php } ?>

        </ul>

        <div class="preloaderFilter__inner">
            <div class="preloaderFilter__wrap preloaderFilter-js">
                <div class="preloaderFilter"></div>
            </div>

            <div class="experiments__grid">
                <?php
                    $args = array(
                        'post_type' => 'video',
                        'posts_per_page' => 20,
                    );

                    $video = new WP_Query($args);
                ?>
            
                <?php if ($video->have_posts()) : while ($video->have_posts()) : $video->the_post(); ?>
                    <?php get_template_part( 'template-parts/parts/preview', 'video' ); ?>
                <?php endwhile; ?>
                
                <?php else : ?>
                    no post
                <?php endif; ?>

                <?php wp_reset_postdata(); ?>

                <nav class="pagination">
                    <?php
                        $big = 999999999; // need an unlikely integer
                        echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format' => '?paged=%#%',
                            'current' => max( 1, $paged ),
                            'prev_text' => '<i class="icon_arrow_left"></i>',
                            'next_text' => '<i class="icon_arrow_right"></i>',
                            'total' => $video->max_num_pages,
                            'end_size' => 1,
                            'mid_size' => 1,
                            'type' => 'list'
                        ) );
                    ?>
                    
                </nav>

            </div>

        </div>



    </div>
</section>
<!-- end experiments -->