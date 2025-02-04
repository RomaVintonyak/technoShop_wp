<?php
/**
 * Template Name: Contact
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
         <!--contact block-->
         <section class="contact__page">
               <!--contact title-->
               <section class="contact__title mt-4">
                  <div class="contact__title--title">
                     <h1>
                        <?php the_content(); ?>
                     </h1>
                  </div>
                  <!--/.title-->
               </section>
               <!--/.contact__title-->
               <!--contact block-->
               <section class="contact__block">
                  <div class="contact__block--row">
                     <div class="contact__form">
                        <form data-action="<?php echo site_url(); ?>/wp-admin/admin-ajax.php" class="contact__form--form">
                           <div class="contact__form--block">
                              <i class="fas fa-user"></i>
                              <input type="text" id="name" name="name">
                              <label id="lebelName" for="name">
                                 <?php the_field('pole_imya'); ?>
                              </label>
                              <p class="error__name" id="errorName" style="display: none;">
                                 <?php the_field('pomylka_polya_imya'); ?>
                              </p>
                           </div>
                           <!--/.block-->
                           <div class="contact__form--block">
                              <i class="fas fa-envelope"></i>
                              <input type="email" id="email" name="email">
                              <label id="labelEmail" for="email">
                                 <?php the_field('pole_poshta'); ?>
                              </label>
                              <p class="error__email" id="errorEmail" style="display: none;">
                                 <?php the_field('pomylka_polya_poshta'); ?>
                              </p>
                           </div>
                           <!--/.block-->
                           <div class="contact__form--block">
                              <i class="fas fa-phone-volume"></i>
                              <input type="tel" id="phone" name="phone">
                              <label id="labelPhone" for="phone">
                                 <?php the_field('pole_telefon'); ?>
                              </label>
                              <p class="error__phone" id="errorPhone" style="display: none;">
                                 <?php the_field('pomylka_polya_telefon'); ?>
                              </p>
                           </div>
                           <!--/.block-->
                           <div class="contact__form--block">
                              <i class="fas fa-pencil-alt"></i>
                              <textarea name="message" id="message" rows="1"></textarea>
                              <label id="labelMessage" for="message">
                                 <?php the_field('pole_povidomlennya'); ?>
                              </label>
                              <p class="error__message" id="errorMessage" style="display: none;">
                                 <?php the_field('pomylka_polya_povidomlennya'); ?>
                              </p>
                           </div>
                           <!--/.block-->
                           <div class="contact__form--button text__center">
                              <button id="sendMail" type="button">
                                 <?php the_field('tekst_knopky_vidpravyty'); ?>
                                 <i class="fas fa-paper-plane"></i>
                              </button>
                           </div>
                           <!--/.button-->
                           <div class="error__text" id="errorText"></div>
                        </form>
                        <!--/.form-->
                     </div>
                     <!--/.contact__form-->
                     <div class="contact__address">
                        <div class="contact__address--line">
                           <i class="fas fa-building"></i>
                           <span><?php the_field('grafik_roboty'); ?></span>
                        </div>
                        <!--/.line-->
                        <div class="contact__address--line">
                           <i class="fab fa-usps"></i>
                           <span><?php the_field('vidpravka_zamovlen'); ?></span>
                        </div>
                        <!--/.line-->
                        <div class="contact__address--line">
                           <i class="fas fa-user-clock"></i>
                           <span><?php the_field('telefonujte'); ?></span>
                        </div>
                        <!--/.line-->
                        <div class="contact__address--line">
                           <i class="fas fa-phone-square-alt"></i>
                           <span><?php the_field('telefon_magazynu', 'option'); ?></span>
                        </div>
                        <!--/.line-->
                        <div class="contact__address--line">
                           <i class="fab fa-viber"></i>
                           <span><?php the_field('telefon_magazynu', 'option'); ?></span>
                        </div>
                        <!--/.line-->
                     </div>
                     <!--/.contact__address-->
                  </div>
                  <!--/.row-->
               </section>
               <!--/.cotact__block-->
               <!--contact line-->
               <section class="contact__line">
                  <div class="contact__line--line">
                     <hr>
                  </div>
               </section>
         </section>
      </div>
      <!--/.container-->
      <?php get_template_part('templates/baner'); ?>
   </main>
   <!--/.main-->
   <?php get_footer(); ?>