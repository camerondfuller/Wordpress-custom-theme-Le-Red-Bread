<?php
/**
* The template for displaying the individual products.
*@package RED_Starter_Theme
*/
?>

<?php get_header(); ?>

<div id="primary" class="content-area-page">
   <main id="main" class="site-main" role="main">

      <?php while(have_posts()) : the_post();?>
         <?php   get_template_part('template-parts/content', 'single');?>
      <?php endwhile; ?>

   </main>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
