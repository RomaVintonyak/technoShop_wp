<?php
/**
 * Template Name: Public oferta
 */
?>
   <?php get_header(); ?>
   <!--main content-->
   <main>
      <div class="container">
         <!--main row-->
         <div class="main__row">
            <?php get_sidebar('cat'); ?>
            <section class="main__content" id="mainContent">
               <?php get_template_part('templates/intro'); ?>
            </section><!--/.main__content-->
         </div><!--/.main__row-->
      </div><!--/.container-->
      <!--title-->
      <section class="main__oferta">
         <div class="container">
            <div class="main__oferta--title">
               <h1>
                  <?php the_title(); ?>
               </h1>
            </div><!--/.title-->
         </div><!--/.container-->
      </section><!--/.main__oferta-->
      <!--opys-->
      <section class="oferta">
         <div class="container">
            <div class="oferta__title">
               <?php the_content(); ?>
            </div><!--/.oferta__title-->
            <div class="oferta__text">
               <p>
                  <?php the_field('opys_pered_posylannyam'); ?> 
                  <a href="<?php echo home_url(); ?>" target="_blank"><?php echo home_url(); ?>.</a>  
                  <?php the_field('opys_pislya_posylannya'); ?>
               </p>
            </div><!--oferta text-->
         </div><!--/.container-->
      </section><!--/.oferta-->
      <?php
         if(have_rows('blok_dogovoru')):
            while(have_rows('blok_dogovoru')) : the_row();
            $blockNumber = get_sub_field('nomer_bloku');
            $blockTitle = get_sub_field('zagolovok_bloku');
      ?>
            <!--block-->
            <section class="oferta__block">
               <div class="container">
                  <div class="oferta__block--title">
                     <span>
                        <?php echo $blockNumber; ?>
                     </span>
                     <p>
                        <?php echo $blockTitle; ?>
                     </p>
                  </div><!--/.title-->
                  <ol class="oferta__block--list">
                     <?php
                        if(have_rows('rozdil_bloku')):
                           while(have_rows('rozdil_bloku')) : the_row();
                           $textUP = get_sub_field('tekst_z_verhu');
                           $linkPage = get_sub_field('posylannya_storinky');
                           $textDown = get_sub_field('tekst_z_nyzu');
                     ?>
                           <li>
                              <p>
                                 <?php echo $textUP; ?>
                                 <?php 
                                    if( $linkPage ): ?>
                                       <a href="<?php echo $linkPage['url']; ?>" target="<?php echo $linkPage['target']; ?>">
                                          <?php echo $linkPage['title']; ?>
                                       </a> 
                                 <?php endif; ?>
                                 <?php echo $textDown; ?>
                              </p>
                           </li>
                     <?php
                           endwhile;
                        endif;   
                     ?>      
                  </ol><!--/.list-->
               </div><!--container-->   
            </section><!--oferta__block-->
      <?php
            endwhile;
         endif;   
      ?>
      <?php get_template_part('templates/baner'); ?>
   </main>
<?php get_footer(); ?>