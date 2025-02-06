<?php
/**
 * Template Name: Obmin
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
            </section>
            <!--/.main__content-->
         </div>
         <!--/.main__row-->
      </div>
      <!--/.container-->
      <!--title-->
      <section class="obmin__title">
         <div class="container">
            <div class="obmin__title--title">
               <h1>
                  <?php the_content(); ?>
               </h1>
            </div>
            <!--/.title-->
         </div>
         <!--/.container-->
      </section>
      <!--/.obmin__title-->
      <?php
         if(have_rows('umovy_obminu')):
            while(have_rows('umovy_obminu')) : the_row();
               if(have_rows('grupa_poliv_obminu')):
                  while(have_rows('grupa_poliv_obminu')) : the_row();
                  $titleIcon = get_sub_field('ikonka_zagolovku_umovy');
                  $title = get_sub_field('zagolovok_umovy');
                  $mainText = get_sub_field('osnovnyj_tekst_bloku');
                  $iconBlock = get_sub_field('ikonka_bloku');
                  $classCSS = get_sub_field('korotkyj_klas_css');
      ?>
                  <!--obmin blok-->
                  <section class="obmin__block <?php echo $classCSS; ?>">
                     <div class="container">
                        <div class="obmin__block--row">
                           <div class="block__text">
                              <div class="block__text--title">
                                 <span>
                                    <?php echo $titleIcon; ?>
                                 </span>
                                 <p>
                                    <?php echo $title; ?>
                                 </p>
                              </div>
                              <!--/.title-->
                              <div class="block__text--text">
                                 <p>
                                    <?php echo $mainText; ?>
                                 </p>
                              </div>
                              <!--/.text-->
                           </div>
                           <!--/.block__text-->
                           <div class="block__icon">
                              <span>
                                 <?php echo $iconBlock; ?>
                              </span>
                           </div>
                           <!--/.block__icon-->
                        </div>
                        <!--/.row-->
                     </div>
                     <!--/.container-->
                  </section>
                  <!--/.obmin__block-->
            <?php
                  endwhile;
               endif;   
            ?>
      <?php
            endwhile;
         endif;   
      ?>
      <!--obmin line-->
      <section class="obmin__line">
         <div class="container">
            <div class="obmin__line--row">
               <p>
                  <?php the_field('ramka_tekstu_1'); ?>
               </p>
            </div>
            <!--/.row-->
         </div>
         <!--/.container-->
      </section>
      <!--/.obmin__line-->
      <?php
         if(have_rows('brak_tovaru')):
            while(have_rows('brak_tovaru')) : the_row();
               if(have_rows('grupa_poliv_braku')):
                  while(have_rows('grupa_poliv_braku')) : the_row();
                  $titleIcon = get_sub_field('ikonka_zagolovku_umovy');
                  $title = get_sub_field('zagolovok_umovy');
                  $mainText = get_sub_field('osnovnyj_tekst_bloku');
                  $iconBlock = get_sub_field('ikonka_bloku');
                  $classCSS = get_sub_field('korotkyj_klas_css');
      ?>
                  <!--obmin blok-->
                  <section class="obmin__block <?php echo $classCSS; ?>">
                     <div class="container">
                        <div class="obmin__block--row">
                           <div class="block__text">
                              <div class="block__text--title">
                                 <span>
                                    <?php echo $titleIcon; ?>
                                 </span>
                                 <p>
                                    <?php echo $title; ?>
                                 </p>
                              </div>
                              <!--/.title-->
                              <div class="block__text--text">
                                 <p>
                                    <?php echo $mainText; ?>
                                 </p>
                              </div>
                              <!--/.text-->
                           </div>
                           <!--/.block__text-->
                           <div class="block__icon">
                              <span>
                                 <?php echo $iconBlock; ?>
                              </span>
                           </div>
                           <!--/.block__icon-->
                        </div>
                        <!--/.row-->
                     </div>
                     <!--/.container-->
                  </section>
                  <!--/.obmin__block-->
            <?php
                  endwhile;
               endif;   
            ?>
      <?php
            endwhile;
         endif;   
      ?>
      <!--obmin blok-->
      <section class="obmin__block">
         <div class="container">
            <div class="block__tex">
               <?php
                  if(have_rows('bloky_tekstu')):
                     while(have_rows('bloky_tekstu')) : the_row();
                     $textBlock = get_sub_field('bloky_tekstu_brak_tovaru');
               ?>
                     <p>
                        <?php echo $textBlock; ?>
                     </p>
               <?php
                     endwhile;
                  endif;   
               ?>
            </div>
            <!--/.block__text-->
         </div>
         <!--/.container-->
      </section>
      <!--/.obmin__block-->
      <!--obmin line-->
      <section class="obmin__line">
         <div class="container">
            <div class="obmin__line--row">
               <p>
                  <?php the_field('ramka_tekstu_2'); ?>
               </p>
            </div>
            <!--/.row-->
         </div>
         <!--/.container-->
      </section>
      <!--/.obmin__line-->
      <?php get_template_part('templates/baner'); ?>
   </main>
   <!--/.main-->
<?php get_footer(); ?>