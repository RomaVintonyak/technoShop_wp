         <aside id="aside" class="aside">
            <!--product cut-->
            <?php
               $args = array(
                  'taxonomy' => 'product_cat',
                  'hide_empty' => false,
                  'order'      => 'DESC',
               );
               $product_categories = get_terms( $args );
               $count = count($product_categories);
            if ( $count > 0 ){
               echo '<ul class="aside__cat">';
                  foreach ( $product_categories as $product_category ) {
                     echo '<li class="aside__cat--item">';
                     echo '<i class="far fa-play-circle"></i>';
                     echo '<a href="' . get_term_link( $product_category ) . '"' . ' class="asside__cat--link" data-filter="'. $product_category->slug . '">' . $product_category->name . '</a>';
                     echo '</li>';
                  }
               echo '</ul>';
            }
            ?><!--/.aside__cat-->
            <!--new product slider-->
            <div class="product__slider mt-6">
               <div class="product__slider--title">
               <h3><?php the_field('nazva_bloku_slajdera', 'option') ;?></h3>
               <div class="product__slider--buttons">
                  <button type="button" class="slider__button--prev">
                     <i class="fas fa-caret-left"></i>
                  </button>
                  <button type="button" class="slider__button--next">
                     <i class="fas fa-caret-right"></i>
                  </button>
               </div><!--/.buttons-->
               </div><!--/.title-->
               <div class="product__slider--content" id="productSlider">
               <div class="product__card" data-cat="tehnika_dlya_kuhni" data-order="4769">
                  <div class="product__card--img">
                     <a href="tovar.html">
                        <picture>
                           <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/product/gryl.webp" type="image/webp">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/product/gryl.jpg" alt="tovar" class="img">
                        </picture>
                     </a>
                  </div><!--/.img-->
                  <div class="product__card--title">
                     <p>
                        Аерогриль-фритюрниця SOKANY SK-10004
                     </p>
                  </div><!--/.title-->
                  <div class="product__card--price">
                     <span data-price="4769">4769</span>
                     <span>грн</span>
                  </div><!--/.price-->
                  <div class="product__card--btn">
                     <button type="button" class="_buyBtn">Купити</button>
                  </div>
               </div><!--/.product__card-->
               <div class="product__card" data-cat="tehnika_dlya_domy" data-order="2560">
                  <div class="product__card--img">
                     <a href="pages/tovar.html">
                        <picture>
                           <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/product/praska.webp" type="image/webp">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/product/praska.jpg" alt="tovar" class="img">
                        </picture>
                     </a>
                  </div><!--/.img-->
                  <div class="product__card--title">
                     <p>
                        Праска SOKANY SK-11029 з титановою підошвою
                     </p>
                  </div><!--/.title-->
                  <div class="product__card--price">
                     <span data-price="2560">2560</span>
                     <span>грн</span>
                  </div><!--/.price-->
                  <div class="product__card--btn">
                     <button type="button" class="_buyBtn">Купити</button>
                  </div>
               </div><!--/.product__card-->
               </div><!--/.content-->
            </div><!--/.product__slider-->
            <!--subscribe form-->
            <div class="subscribe mt-6">
               <div class="subscribe__title">
               <h3>
                  <?php the_field('nazva_bloku_forma', 'option'); ?>
               </h3>
               </div><!--/.subscribe__title-->
               <div class="subscribe__form">
               <p>
                  <?php the_field('zagolok_formy', 'option'); ?>
               </p>
               <form class="subscribe__form--form" action="#" id="subscribeForm">
                  <input type="text" id="subscribeText" name="subscribeText" placeholder="<?php the_field('tekst_polya_vvodu', 'option'); ?>">
                  <button type="button" id="subscribeButton">
                     <?php the_field('tekst_knopky_vidpravyty', 'option'); ?>
                  </button>
               </form><!--/.form-->
               </div><!--/.subscribe__form-->
            </div><!--/.subscribe-->
            <!--baner loren-->
            <div class="reklama__baner mt-6">
               <a href="<?php the_field('posylannya_reklamodavczya', 'option'); ?>" target="_blank">
                  <?php if( have_rows('zobrazhennya_banera', 'option') ): ?>
                     <?php while( have_rows('zobrazhennya_banera', 'option') ): the_row(); 
                        $webpImg = get_sub_field('zobrazhennya_banera_webp');
                        $pngImg = get_sub_field('zobrazhennya_banera_png');
                        ?>
                        <picture>
                           <source srcset="<?php echo $webpImg; ?>" type="image/webp">
                           <img src="<?php echo $pngImg; ?>" alt="logo" class="img">
                        </picture>
                     <?php endwhile; ?>
                  <?php endif; ?>
               </a>
            </div><!--reklama__baner-->
         </aside><!--/.aside-->