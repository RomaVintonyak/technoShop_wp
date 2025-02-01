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
         </aside><!--/.aside-->
