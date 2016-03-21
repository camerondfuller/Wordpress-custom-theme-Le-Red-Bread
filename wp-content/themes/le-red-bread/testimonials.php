<?php
/**
* The template for displaying the individual products.
*@package RED_Starter_Theme
*/
?>

<div id="primary" class="single-product">
   <main id="main" class="site-main" role="main">

      <?php while(have_posts()) : the_post();?>
         <?php   get_template_part('template-parts/content', 'single');?>
      <?php endwhile; ?>
      
   </main>
</div>
