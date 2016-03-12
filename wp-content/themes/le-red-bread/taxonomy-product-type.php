<?php
/**
* The template for displaying the categorized products by type.
*
* @package RED_Starter_Theme
*/
?>
<?php get_header(); ?>
<div id="primary" class="content-area-page">
   <main id="main" class="site-main" role="main">
      <?php if(have_posts()): ?>

         <div class="archive-header">
            <?php the_archive_title('<h1 class="page-title">', '</h1>');
            the_archive_description('<div class="archive-description">', '</div>' ); ?>
         </div>
         <?php while(have_posts()): the_post(); ?>
            <?php get_template_part('template-parts/content'); ?>
         <?php endwhile; ?>

      <?php else: ?>
         <?php get_template_part('template-parts/content', 'none'); ?>
      <?php endif; ?>

   </main>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
