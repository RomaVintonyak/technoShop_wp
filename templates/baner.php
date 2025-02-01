      <!--baner logo row-->
      <section class="baner mt-6">
         <div class="container">
            <div class="baner__row">
                     <?php
                        $args = array(
                           'post_type'      => 'seting',
                           'post_status'    => 'publish',
                           'posts_per_page' =>  1,
                           'tax_query' => array(
                              array(
                                 'taxonomy' => 'seting',
                                 'field'    => 'id',
                                 'terms'    => '33'
                              )
                           )
                        );
                        $textPosts = new WP_Query($args);
                     ?>
                     <?php if ($textPosts->have_posts()) : while ($textPosts->have_posts()) : $textPosts->the_post(); ?>
                        <?php
                           if( have_rows('element_banera') ):
                              while( have_rows('element_banera') ) : the_row();   
                                    if( have_rows('zobrazhennya_banera') ):
                                       while( have_rows('zobrazhennya_banera') ) : the_row();
                                          $banerWebp = get_sub_field('zobrazhennya_banera_webp');
                                          $banerJpg = get_sub_field('zobrazhennya_banera_jpg');
                        ?>
                                          <div class="baner__row--item">
                                             <picture>
                                                <source srcset="<?php echo $banerWebp; ?>" type="image/webp">
                                                <img src="<?php echo $banerJpg; ?>" alt="logo" class="img">
                                             </picture>
                                          </div><!--/.item-->   
                                    <?php
                                       endwhile;
                                    endif;
                                    ?>
                           <?php
                                 endwhile;
                              endif;
                           ?>
                           <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                     <?php endif; ?> 
            </div><!--/.baner__row-->
         </div><!--/.container-->
      </section><!--/.baner-->