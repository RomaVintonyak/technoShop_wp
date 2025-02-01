<?php
   /**
    * Template part for displaying page content
    *
    */
   ?>
   <?php get_header();?>
   <!--main content-->
   <main class="main" id="main">
      <div class="container">
         <div class="main__row">
               <?php get_sidebar(); ?>
            <section class="main__content" id="mainContent">
               <?php get_template_part('templates/intro'); ?>
               <!--main product block-->
               <div class="proposition mt-6">
                  <div class="proposition__title">
                     <h3>
                        <?php the_field('zagolovok_slajdera_tovary'); ?>
                     </h3>
                     <div class="proposition__title--button">
                        <button type="button" class="proposition__button--prev">
                           <i class="fas fa-caret-left"></i>
                        </button>
                        <button type="button" class="proposition__button--next">
                           <i class="fas fa-caret-right"></i>
                        </button>
                     </div><!--/.button-->
                  </div><!--/.proposition__title-->
                  <div class="proposition__slider" id="propositionSlider">
                     <div class="product__card" data-cat="dytyachi_tovary" data-order="2900">
                        <div class="product__card--img">
                           <a href="tovar.html">
                              <picture>
                                 <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/proposition/fotoaparat.webp" type="image/webp">
                                 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/proposition/fotoaparat.jpg" alt="tovar" class="img">
                              </picture>
                           </a>
                        </div><!--/.img-->
                        <div class="product__card--title">
                           <p>
                           Дитячий фотоапарат з печаткою Фламінго
                           </p>
                        </div><!--/.title-->
                        <div class="product__card--price">
                           <span data-price="2990">2990</span>
                           <span>грн</span>
                        </div><!--/.price-->
                        <div class="product__card--btn">
                           <button type="button" class="_buyBtn">Купити</button>
                        </div>
                     </div><!--/.product__card-->
                     <div class="product__card" data-cat="krasa_ta_zdorovya" data-order="3330">
                        <div class="product__card--img">
                           <a href="tovar.html">
                           <picture>
                                 <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/proposition/stailer.webp" type="image/webp">
                                 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/proposition/stailer.jpg" alt="tovar" class="img">
                              </picture>
                           </a>
                        </div><!--/.img-->
                        <div class="product__card--title">
                           <p>
                           Фен для волосся X-13 професійний 4 насадки
                           </p>
                        </div><!--/.title-->
                        <div class="product__card--price">
                           <span data-price="3330">3330</span>
                           <span>грн</span>
                        </div><!--/.price-->
                        <div class="product__card--btn">
                           <button type="button" class="_buyBtn">Купити</button>
                        </div>
                     </div><!--/.product__card-->
                     <div class="product__card" data-cat="tehnika_dlya_domy" data-order="1530">
                        <div class="product__card--img">
                           <a href="tovar.html">
                              <picture>
                                 <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/proposition/teploventylator.webp" type="image/webp">
                                 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/proposition/teploventylator.jpg" alt="tovar" class="img">
                              </picture>
                           </a>
                        </div><!--/.img-->
                        <div class="product__card--title">
                           <p>
                              Тепловентилятор Sokany SK-1653 2000 Вт
                           </p>
                        </div><!--/.title-->
                        <div class="product__card--price">
                           <span data-price="1530">1530</span>
                           <span>грн</span>
                        </div><!--/.price-->
                        <div class="product__card--btn">
                           <button type="button" class="_buyBtn">Купити</button>
                        </div>
                     </div><!--/.product__card-->
                     <div class="product__card" data-cat="tehnika_dlya_kuhni" data-order="1570">
                        <div class="product__card--img">
                           <a href="tovar.html">
                              <picture>
                                 <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/popular/sk1729.webp" type="image/webp">
                                 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/popular/sk1729.jpg" alt="tovar" class="img">
                              </picture>
                           </a>
                        </div><!--/.img-->
                        <div class="product__card--title">
                           <p>
                           Блендер занурювальний ручний Sokany SK-1729
                           </p>
                        </div><!--/.title-->
                        <div class="product__card--price">
                           <span data-price="1570">1570</span>
                           <span>грн</span>
                        </div><!--/.price-->
                        <div class="product__card--btn">
                           <button type="button" class="_buyBtn">Купити</button>
                        </div>
                     </div><!--/.product__card-->
                  </div><!--/.proposition__slider-->
               </div><!--/.proposition-->
               <!--action baner-->
               <div class="action mt-6" id="action">
                  <div class="action__row">
                  <div class="action__row--baner">
                     <?php if( have_rows('akczijnyj_baner') ):
                        while( have_rows('akczijnyj_baner') ) : the_row();
                           $banerWebP = get_sub_field('zobrazhennya_banera_webp');
                           $banerJpj = get_sub_field('zobrazhennya_banera_jpg');
                     ?>
                        <picture>
                           <source srcset="<?php echo $banerWebP ?>" type="image/webp">
                           <img src="<?php echo $banerJpj ?>" alt="baner" class="img">
                        </picture>
                     <?php
                           endwhile;
                        endif;
                     ?>
                  </div><!--/.baner-->
                  <div class="action__row--title">
                     <h3><?php the_field('zagolovok_bloku_akcziyi'); ?></h3>
                     <p><?php the_field('tekst_bloku_akcziyi'); ?></p>
                     <?php $tovar_url = get_site_url( 95, 'tovary') ?>
                     <a href="<?php echo $tovar_url; ?>"><?php the_field('tekst_knopky_bloku_akcziyi'); ?></a>
                  </div><!--/.title-->
                  </div><!--/.action__row-->
               </div><!--/.action-->
               <!--popular product-->
               <div class="popular mt-6">
                  <div class="popular__title">
                  <h3>
                     <?php the_field('zagolovok_bloku_novynky'); ?>
                  </h3>
                  <div class="popular__title--button">
                     <button type="button" class="popular__button--prev">
                        <i class="fas fa-caret-left"></i>
                     </button>
                     <button type="button" class="popular__button--next">
                        <i class="fas fa-caret-right"></i>
                     </button>
                  </div><!--/.button-->
                  </div><!--/.popular__title-->
                  <div class="popular__slider" id="popularSlider">
                     <div class="product__card" data-cat="decor_ta_interier" data-order="790">
                        <div class="product__card--img">
                           <a href="tovar.html">
                              <picture>
                                 <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/proposition/mashynka.webp" type="image/webp">
                                 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/proposition/mashynka.jpg" alt="tovar" class="img">
                              </picture>
                           </a>
                        </div><!--/.img-->
                        <div class="product__card--title">
                           <p>
                           Машинка для стрижки професійна VGR V-029
                           </p>
                        </div><!--/.title-->
                        <div class="product__card--price">
                           <span data-price="790">790</span>
                           <span>грн</span>
                        </div><!--/.price-->
                        <div class="product__card--btn">
                           <button type="button" class="_buyBtn">Купити</button>
                        </div>
                     </div><!--/.product__card-->
                     <div class="product__card" data-cat="turyzm" data-order="1120">
                        <div class="product__card--img">
                           <a href="tovar.html">
                              <picture>
                                 <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/proposition/navushnyky.webp" type="image/webp">
                                 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/proposition/navushnyky.jpg" alt="tovar" class="img">
                              </picture>
                           </a>
                        </div><!--/.img-->
                        <div class="product__card--title">
                           <p>
                           Бездротові Bluetooth-навушники SmartX Pro 2
                           </p>
                        </div><!--/.title-->
                        <div class="product__card--price">
                           <span data-price="1120">1120</span>
                           <span>грн</span>
                        </div><!--/.price-->
                        <div class="product__card--btn">
                           <button type="button" class="_buyBtn">Купити</button>
                        </div>
                     </div><!--/.product__card-->
                     <div class="product__card" data-cat="stolovyi_posud" data-order="1490">
                        <div class="product__card--img">
                           <a href="tovar.html">
                              <picture>
                                 <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/proposition/kolonka.webp" type="image/webp">
                                 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/proposition/kolonka.jpg" alt="tovar" class="img">
                              </picture>
                           </a>
                        </div><!--/.img-->
                        <div class="product__card--title">
                           <p>
                           Портативна колонка BOOMSBOX 360
                           </p>
                        </div><!--/.title-->
                        <div class="product__card--price">
                           <span data-price="1490">1490</span>
                           <span>грн</span>
                        </div><!--/.price-->
                        <div class="product__card--btn">
                           <button type="button" class="_buyBtn">Купити</button>
                        </div>
                     </div><!--/.product__card-->
                     <div class="product__card" data-cat="chashky" data-order="1300">
                        <div class="product__card--img">
                           <a href="tovar.html">
                              <picture>
                                 <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/proposition/reestrator.webp" type="image/webp">
                                 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/proposition/reestrator.jpg" alt="tovar" class="img">
                              </picture>
                           </a>
                        </div><!--/.img-->
                        <div class="product__card--title">
                           <p>
                           Відеореєстратор автомобільний APPIX С1
                           </p>
                        </div><!--/.title-->
                        <div class="product__card--price">
                           <span data-price="1300">1300</span>
                           <span>грн</span>
                        </div><!--/.price-->
                        <div class="product__card--btn">
                           <button type="button" class="_buyBtn">Купити</button>
                        </div>
                     </div><!--/.product__card-->
                  </div><!--/.popular__slider-->
               </div><!--/.popular-->
            </section><!--/.main__content-->
         </div><!--/.main__row-->
      </div><!--/.container-->
      <?php get_template_part('templates/baner'); ?>
   </main><!--/.main-->
   <?php get_footer(); ?>