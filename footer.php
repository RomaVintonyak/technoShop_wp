<!--footer-->
<footer class="footer" id="footer">
      <div class="container">
         <div class="footer__row">
         <div class="footer__description">
            <div class="footer__description--logo">
               <a href="<?php echo home_url(); ?>">
                  <?php if( have_rows('logotyp', 'option') ): ?>
                     <?php while( have_rows('logotyp', 'option') ): the_row(); 
                        $webpImg = get_sub_field('zobrazhennya_webp');
                        $pngImg = get_sub_field('zobrazhennya_png');
                        ?>
                        <picture>
                           <source srcset="<?php echo $webpImg; ?>" type="image/webp">
                           <img src="<?php echo $pngImg; ?>" alt="logo" class="img">
                        </picture>
                     <?php endwhile; ?>
                  <?php endif; ?>
               </a>
            </div><!--/.logo-->
            <p>
               <?php the_field('opys_magazynu', 'option'); ?>
            </p>
            <div class="footer__description--adress">
               <i class="fas fa-map-marker-alt"></i>
               <span>
                  <?php the_field('adresa_magazynu', 'option'); ?>
               </span>
            </div><!--/.adress-->
            <div class="footer__description--phone">
               <i class="fas fa-phone-alt"></i>
               <?php
                  $phoneNum = get_field('telefon_magazynu', 'option');
                  $phoneNumGap = str_replace(" ", '', $phoneNum);
               ?>
               <a href="tel:<?php echo $phoneNumGap; ?>"><?php echo $phoneNumGap; ?></a>
            </div><!--/.phone-->
            <div class="footer__description--mail">
               <i class="fas fa-envelope"></i>
               <a href="mailto:<?php the_field('elektronna_poshta', 'option'); ?>">
                  <?php the_field('elektronna_poshta', 'option'); ?>
               </a>
            </div><!--/.mail-->
         </div><!--/.footer__description-->
         <div class="footer__menu">
            <h3>
               <?php the_field('zagolovok_menyu_pidval', 'option'); ?>
            </h3>
            <?php 
                  wp_nav_menu(array(
                  'theme_location'  => 'secondary',
                  'menu'            => 'Menu Footer', 
                  'container'       => 'ul',
                  'menu_class'      => 'footer__menu--block', 
                  'echo'            => true,
                  'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                  'depth'           => 0,
                  ));
               ?>
         </div><!--/.footer__menu-->
         <div class="footer__social">
            <h3>
               <?php the_field('zagolovok_soczmerezhi_pidval', 'option'); ?>
            </h3>
            <ul>
               <?php if( have_rows('soczialni_merezhi', 'option') ):
                  while( have_rows('soczialni_merezhi', 'option') ) : the_row();
                     if( have_rows('kontakty_soczialnyh_merezh', 'option') ):
                        while( have_rows('kontakty_soczialnyh_merezh', 'option') ) : the_row();
                           $socialURL = get_sub_field('posylannya_merezhi');
                           $socialIcon = get_sub_field('ikonka_merezhi');
                           $socialTitle = get_sub_field('nazva_merezhi');
               ?>
                        <li>
                           <a href="<?php echo $socialURL; ?>" target="_blank">
                              <?php echo $socialIcon; ?>
                              <span><?php echo $socialTitle; ?></span>
                           </a>
                        </li>
                        <?php
                           endwhile;
                        endif;
                        ?>
                  <?php
                     endwhile;
                  endif;
                  ?>
            </ul>
         </div><!--/.footer__social-->
         <div class="footer__time">
            <h3>
               <?php the_field('zagolovok_grafik_roboty_pidval', 'option'); ?>
            </h3>
            <div class="footer__time--grafik">
               <i class="far fa-clock"></i>
               <div>
                  <?php
                     if( have_rows('godyny_roboty', 'option')):
                        while( have_rows('godyny_roboty', 'option')) : the_row();
                        $textTime = get_sub_field('pole_chasu');
                  ?>
                     <p><?php echo $textTime; ?></p>
                  <?php
                        endwhile;
                     endif;   
                  ?>
               </div>
            </div><!--/.grafik-->
            <div class="footer__time--payment">
               <?php
                  if(have_rows('ikonky_oplaty', 'option')):
                     while(have_rows('ikonky_oplaty', 'option')) : the_row();
                     $iconCard = get_sub_field('tehnologiya_platezhiv');
               ?>
                     <div>
                        <img src="<?php echo $iconCard; ?>" alt="logo" class="img">
                     </div>
               <?php
                  endwhile;
               endif;
               ?>
            </div><!--/.payment-->
         </div><!--/.footer__time-->
         </div><!--/.footer__row-->
      </div><!--/.container-->
   </footer><!--/.footer-->
   <!--footer copyright-->
   <footer class="footer__copyright">
      <div class="container">
         <div class="footer__copyright--row">
            <?php the_field('footer_copyright', 'option'); ?>
         </div><!--/.row-->
      </div><!--/.container-->
   </footer><!--/.footer__copyright-->
   <!--back top button-->
   <div class="back__top">
      <div class="back__top--content">
         <i class="fas fa-arrow-up"></i>
      </div><!--/.content-->
   </div><!--/.back__top-->
   <?php wp_footer(); ?>
   </body>
   </html>