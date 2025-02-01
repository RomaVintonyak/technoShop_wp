            <!--intro-->
            <div class="intro">
               <div class="intro__slider">
                  <div class="slider__content" id="introSlider">
                     <?php
                        $args = array(
                           'post_type'      => 'seting',
                           'post_status'    => 'publish',
                           'posts_per_page' =>  1,
                           'tax_query' => array(
                              array(
                                 'taxonomy' => 'seting',
                                 'field'    => 'id',
                                 'terms'    => '31'
                              )
                           )
                        );
                        $setingPost = new WP_Query( $args );
                     ?>
                     <?php if ($setingPost->have_posts()) : while ($setingPost->have_posts()) : $setingPost->the_post(); ?>	
                           <?php
                              if( have_rows('golovnyj_slajder') ):
                                 while( have_rows('golovnyj_slajder') ) : the_row();   
                                       if( have_rows('zobrazhennya_slajdera') ):
                                          while( have_rows('zobrazhennya_slajdera') ) : the_row();
                                          $banerWebP = get_sub_field('zobrazhennyawebp');
                                          $banerJpj = get_sub_field('zobrazhennyajpg');
                           ?>
                                          <picture>
                                             <source srcset="<?php echo $banerWebP ?>" type="image/webp">
                                             <img src="<?php echo $banerJpj ?>" alt="slide" class="img">
                                          </picture>         
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
                  </div><!--/.slider__content-->
               </div><!--/.intro__slider-->
               <div class="intro__content">
               <?php
                        $args = array(
                           'post_type'      => 'seting',
                           'post_status'    => 'publish',
                           'posts_per_page' =>  1,
                           'tax_query' => array(
                              array(
                                 'taxonomy' => 'seting',
                                 'field'    => 'id',
                                 'terms'    => '32'
                              )
                           )
                        );
                        $textPosts = new WP_Query($args);
                     ?>
                     <?php if ($textPosts->have_posts()) : while ($textPosts->have_posts()) : $textPosts->the_post(); ?>	
                           <h1><? the_title(); ?></h1>
                           <h2><?php the_content(); ?></h2>
                           <?php $site_url = get_site_url( 95, 'tovary'); ?>
                           <a href="<?php echo $site_url; ?>"><?php the_field('tekst_knopky_slajdera'); ?></a>
                           <div class="intro__content--baner">
                              <?php
                                 if( have_rows('osnovnyj_tekst') ):
                                    while( have_rows('osnovnyj_tekst') ) : the_row();   
                                          if( have_rows('kolonky_slajdera') ):
                                             while( have_rows('kolonky_slajdera') ) : the_row();
                                             $titleCol = get_sub_field('zagolovok_kolonky');
                                             $textCol = get_sub_field('tekst_kolonky');
                              ?>
                                             <div class="baner__coll">
                                                <h3><?php echo $titleCol; ?></h3>
                                                <p><?php echo $textCol; ?></p>
                                             </div><!--baner__coll-->      
                                          <?php
                                                endwhile;
                                             endif;
                                          ?>
                                    <?php
                                          endwhile;
                                       endif;
                                    ?>
                           </div><!--/.baner-->
                           <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                     <?php endif; ?> 
               </div><!--/.intro__content-->
            </div><!--/.intro-->