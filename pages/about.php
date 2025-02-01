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
                           
                        ?>
                        
                        
                        
                        
                        
                        <li>
                           <p>
                              Контроль якості - весь товар проходить через нас , ми обираємо
                              тільки реально якісні продукти , перевіряємо все до деталей
                           </p>
                        </li>
                        <li>
                           <p>
                              Швидка доставка - відправка в день замовлення або на наступний день
                           </p>
                        </li>
                        <li>
                           <p>
                              Накладний платіж без предоплат - ви можете замовити товар і
                              якщо він не відповідає опису то не заберете з пошти
                           </p>
                        </li>
                        <li>
                           <p>
                              Завжди на зв'язку - наші менеджери відповідають
                              на повідомлення без вихідних , нададуть вам всю
                              інформацію по товару
                           </p>
                        </li>
                        <li>
                           <p>
                              Ми цінуємо постійних клієнтів, тому маємо систему знижок
                              для вас , купивши один раз ви не зможете втриматись і точно
                              станете одним з них
                           </p>
                        </li>
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
      <!--/.baner-->
   </main><!--/.main-->
   <?php get_footer(); ?>
   