<!DOCTYPE html>
   <html <?php language_attributes(); ?>>
   <head>
   <meta charset="<?php bloginfo( 'charset' ); ?>" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
   <meta http-equiv="x-ua-compatible" content="ie=edge" />
   <!--FavIcon-->
   <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon-96x96.png" sizes="96x96" />
   <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon.svg" />
   <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon.ico" />
   <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon.png" />
   <meta name="apple-mobile-web-app-title" content="MyWebSite" />
   <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/site.webmanifest" />
   <!--SEO-->
   <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
   <meta name="keywords" content="<?php the_field('klyuchovi_frazy_ceo', 'option'); ?>" />
   <meta name="google" content="notranslate" />
   <meta name="author" content="Roman Vintonyak" />
   <meta name="robots" content="index, follow" />
   <!--disable format detection (iPhone / IPod / IPad) -->
   <meta name="format-detection" content="telephone=no" />
   <!--BlackBerry-->
   <meta http-equiv="x-rim-auto-match" content="none" />
   <title>
   <?php
      if(is_404()){
         echo bloginfo('name') . ' &mdash; ' . 'Такої сторінки не існує';
      }else{
         echo bloginfo('name');
         echo ' &mdash; ';
         echo bloginfo('description');
      }
   ?>
   </title>
   <?php wp_head(); ?>
   </head>
   <body style="overflow-y: hidden;">
   <!--preloader animation-->
   <section id="loader" class="loader">
      <div class="loader__wraper">
         <div class="loader__wraper--circle">
         <div class="circle__1"></div>
         <div class="circle__2"></div>
         </div><!--/.circle-->
      </div><!--/.loader__wraper-->
      <div class="loader__text">
         <p><?php the_field('preloader', 'option'); ?></p>
      </div><!--/.loader__text-->
   </section><!--/.loader-->
   <!--progress bar block-->
   <section id="progressBlock" class="progress__block">
      <div class="load__line"></div>
   </section>
   <!--header-->
   <header id="header" class="header">
      <div class="container">
         <div class="header__row">
         <div class="header__brand">
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
         </div><!--/.header__band-->
         <div class="header__form">
            <div class="header__form--search">
               <form>
               <input type="text" name="header_search" placeholder="<?php the_field('pole_poshuku', 'option'); ?>">
               <button type="button" id="searchButton">
                  <i class="fas fa-search"></i>
               </button>
               </form>
            </div><!--/.search-->
            <div class="header__form--chart">
               <a href="pages/chart.html">
               <i class="fas fa-shopping-cart"></i>
               </a>
               <div class="chart__price">
               <p>
                  <?php the_field('zagolovok_koshyka', 'option'); ?>
               </p>
               <p id="priceValue">
                  00.00
               </p>
               </div>
            </div><!--/.chart-->
         </div><!--/.header__form-->
         </div><!--/.header__row-->
      </div><!--/.container-->
   </header><!--/.header-->
      <!--nav panel-->
      <nav class="nav" id="navPanel">
      <div class="container">
         <div class="nav__content">
         <div class="nav__content--cat">
            <div class="burger__btn">
               <span></span>
               <span></span>
               <span></span>
               <span></span>
            </div><!--/.burger__btn-->
            <p id="catBtn">
               <?php the_field('zagolovok_kategorij', 'option'); ?>  
            </p>
         </div><!--/.cat-->
         <?php 
            wp_nav_menu(array(
            'theme_location'  => 'primary',
            'menu'            => 'Menu Header', 
            'container'       => 'ul',
            'menu_class'      => 'nav__content--menu', 
            'echo'            => true,
            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
            'depth'           => 0,
            ));
         ?><!--/.menu-->
         </div><!--/.nav__content-->
      </div><!--/.container-->
   </nav><!--/.nav-->