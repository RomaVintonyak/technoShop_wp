<?php
/**
 * Template Name: Dostavka&Oplata
 */
?>
   <?php get_header(); ?>
   <!--main content-->
   <main class="main" id="main">
      <div class="container">
         <div class="main__row">
            <?php get_sidebar('cat'); ?>
            <section class="main__content" id="mainContent">
               <!--intro-->
               <?php get_template_part('templates/intro'); ?>
               <!--/.intro-->
            </section><!--/.main__content-->
         </div>
         <!--/.main__row-->
         <!--dostavka block-->
         <section class="dostavka&oplata">
               <!--title-->
               <section class="dostavka__title">
                  <div class="dostavka__title--title">
                     <h1>
                        <?php the_title(); ?>
                     </h1>
                  </div>
                  <!--/.title-->
               </section>
               <!--/.dostavka__title-->
               <!--post-->
               <section class="dostavka__post">
                  <div class="dostavka__post--title">
                     <h3>
                        <?php the_content(); ?>
                     </h3>
                  </div>
                  <!--/.title-->
                  <div class="dostavka__post--img">
                     <?php
                        if(have_rows('logotyp_kompaniyi_dostavky')):
                           while(have_rows('logotyp_kompaniyi_dostavky')) : the_row();
                           $logoKompWEBP = get_sub_field('logotyp_webp');
                           $logoKomPNG = get_sub_field('logotyp_jpg');
                     ?>
                              <picture>
                                 <source srcset="<?php echo $logoKompWEBP; ?>" type="image/webp">
                                 <img src="<?php echo $logoKomPNG; ?>" alt="logo poshta" class="img">
                              </picture>
                     <?php
                           endwhile;
                        endif;   
                     ?>   
                  </div>
                  <!--/.img-->
               </section>
               <!--/.dostavka__post-->
               <!--title post-->
               <section class="title__post">
                  <div class="title__post--row">
                     <span>
                        <i class="fas fa-exclamation"></i>
                     </span>
                     <p>
                        <?php the_field('tekst_bloku_logo'); ?>
                     </p>
                  </div>
                  <!--/.row-->
               </section>
               <!--/.title__post-->
               <!--image post-->
               <section class="image__post">
                  <div class="image__post--row">
                     <div class="row__text">
                        <div class="row__text--title">
                           <h3>
                              <?php the_field('zagolovok_bloku_vartist'); ?>
                           </h3>
                        </div>
                        <!--/.title-->
                        <div class="row__text--text">
                           <p>
                              <?php the_field('tekst_bloku_vartist'); ?>
                           </p>
                        </div>
                        <!--/.text-->
                     </div>
                     <!--/.row__text-->
                     <div class="row__img">
                        <span>
                           <i class="fas fa-box-open"></i>
                        </span>
                     </div>
                     <!--/.row__img-->
                  </div>
                  <!--/.row-->
               </section>
               <!--/.image__post-->
               <!--title post-->
               <section class="title__post">
                  <div class="title__post--row">
                     <span>
                        <i class="fas fa-exclamation"></i>
                     </span>
                     <p>
                        <?php the_field('opys_bloku_oczinyuvannya'); ?>
                     </p>
                  </div>
                  <!--/.row-->
               </section>
               <!--/.title__post-->
               <!--image post-->
               <section class="image__post">
                  <div class="image__post--row">
                     <div class="row__text">
                        <div class="row__text--title">
                           <h3>
                              <?php the_field('zagolovok_bloku_oczinyuvannya'); ?>
                           </h3>
                        </div>
                        <!--/.title-->
                        <div class="row__text--text">
                           <p>
                              <?php the_field('tekst_bloku_oczinyuvannya'); ?>
                           </p>
                        </div>
                        <!--/.text-->
                     </div>
                     <!--/.row__text-->
                     <div class="row__img">
                        <span>
                           <i class="far fa-money-bill-alt"></i>
                        </span>
                     </div>
                     <!--/.row__img-->
                  </div>
                  <!--/.row-->
               </section>
               <!--/.image__post-->
               <!--title post-->
               <section class="title__post">
                  <div class="title__post--row">
                     <span>
                        <i class="fas fa-exclamation"></i>
                     </span>
                     <p>
                        <?php the_field('opys_bloku_oplaty'); ?>
                     </p>
                  </div>
                  <!--/.row-->
               </section>
               <!--/.title__post-->
               <!--pay post-->
               <section class="pay__post">
                  <div class="pay__post--row">
                     <div class="pay__post--title">
                        <h3>
                           <?php the_field('zagolovok_bloku_oplaty'); ?>
                        </h3>
                     </div>
                     <!--/.title-->
                     <div class="pay__post--block">
                        <?php
                           if(have_rows('sposoby_oplaty')):
                              while(have_rows('sposoby_oplaty')) : the_row();
                                 if(have_rows('elementy_sposobiv_oplaty')):
                                    while(have_rows('elementy_sposobiv_oplaty')) : the_row();
                                    $payIcon = get_sub_field('ikonka_sposobu_oplaty');
                                    $payTitle = get_sub_field('nazva_sposobu_oplaty');
                        ?>
                                    <div class="block__item">
                                       <span>
                                          <?php echo $payIcon; ?>
                                       </span>
                                       <p>
                                          <?php echo $payTitle; ?>
                                       </p>
                                    </div><!--/.block__item-->
                              <?php
                                    endwhile;
                                 endif;   
                              ?>
                        <?php
                              endwhile;
                           endif;   
                        ?>      
                     </div>
                     <!--/.block-->
                  </div>
                  <!--/.row-->
               </section>
               <!--/.pay__post-->
         </section><!--/.dostavka&oplata-->
      </div>
      <!--/.container-->
      <?php get_template_part('templates/baner'); ?>
   </main>
   <!--/.main-->
   <?php get_footer(); ?>