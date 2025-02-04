<?php
/**
 * Template Name: About Us
 */
?>
   <?php get_header(); ?>
   <!--main content-->
   <main class="main" id="main">
      <div class="container">
         <div class="main__row">
            <?php get_sidebar('cat'); ?>
            <section class="main__content" id="mainContent">
               <?php get_template_part('templates/intro'); ?>
            </section><!--/.main__content-->
         </div>
         <!--/.main__row-->
         <!--about section-->
         <section class="about">
            <div class="about__row">
               <div class="about__row--title">
                  <h3>
                     <?php the_field('zagolovok_bloku_pro_nas'); ?>
                  </h3>
               </div>
               <!--/.title-->
               <div class="about__row--text">
                  <?php
                     if(have_rows('teksty_bloku_pro_nas')):
                        while(have_rows('teksty_bloku_pro_nas')) : the_row();
                        $proNas = get_sub_field('oblast_tekstu_bloku_pro_nas');
                  ?>
                     <p>
                        <?php echo $proNas; ?>
                     </p>
                  <?php
                        endwhile;
                     endif;   
                  ?>
               </div>
               <!--/.text-->
               <div class="about__row--title">
                  <h3>
                     <?php the_field('zagolovok_bloku_nashi_postachalnyky'); ?>
                  </h3>
               </div>
               <!--/.title-->
               <div class="about__row--text">
                  <?php
                     if(have_rows('tekst_bloku_nashi_postachalnyky')):
                        while(have_rows('tekst_bloku_nashi_postachalnyky')) : the_row();
                        $ourSuppliers = get_sub_field('oblast_tekstu_bloku_nashi_postachalnyky');
                  ?>
                     <p>
                        <?php echo $ourSuppliers; ?>
                     </p>
                  <?php
                        endwhile;
                     endif;   
                  ?>
               </div>
               <!--/.text-->
               <div class="about__row--title">
                  <h3>
                     <?php the_field('zagolovok_bloku_nashi_perevagy'); ?>
                  </h3>
               </div>
               <!--/.title-->
               <div class="about__row--content">
                  <div class="content__slider">
                     <div class="content__slider--about" id="aboutSlider">
                        <?php
                           if(have_rows('zobrazhennya_bloku_nashi_perevagy')):
                              while(have_rows('zobrazhennya_bloku_nashi_perevagy')) : the_row();
                                 if(have_rows('grupa_zobrazhen_bloku')):
                                    while(have_rows('grupa_zobrazhen_bloku')) : the_row();
                                       $aboutSliderWEBP = get_sub_field('zobrazhennya_bloku_webp');
                                       $aboutSliderJPG = get_sub_field('zobrazhennya_bloku_jpg');

                        ?>
                              <picture>
                                 <source srcset="<?php echo $aboutSliderWEBP; ?>" type="image/webp">
                                 <img src="<?php echo $aboutSliderJPG; ?>" alt="image" class="img">
                              </picture>
                              <?php
                                    endwhile;
                                 endif;   
                              ?>
                        <?php
                              endwhile;
                           endif;   
                        ?>
                     </div>
                     <!--/.about-->
                  </div>
                  <!--/.content__slider-->
                  <div class="content__list">
                     <h3>
                        <?php the_field('zagolovok_bloku_chomu_my'); ?>
                     </h3>
                     <ul class="content__list--block">
                        <?php
                           if(have_rows('povtoryuvane_pole_bloku_chomu_my')):
                              while(have_rows('povtoryuvane_pole_bloku_chomu_my')) : the_row();
                              $whyMe = get_sub_field('oblast_tekstu_bloku_chomu_my');
                        ?>
                           <li>
                              <p>
                                 <?php echo $whyMe; ?>
                              </p>
                           </li>
                        <?php
                              endwhile;
                           endif;   
                        ?>
                     </ul>
                     <!--/.block-->
                  </div>
                  <!--/.content__list-->
               </div>
               <!--/.content-->
               <div class="about__row--line">
                  <hr>
               </div>
               <!--/.line-->
            </div>
            <!--/.about__row-->
         </section>
         <!--/.about-->
      </div>
      <!--/.container-->
      <?php get_template_part('templates/baner'); ?>
   </main><!--/.main-->
   <?php get_footer(); ?>
   