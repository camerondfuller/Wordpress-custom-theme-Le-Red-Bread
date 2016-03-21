<?php get_header() ?>


<div class="front-page-header">
   <div class="front-page-headline">
      baked to perfection.
   </div>
</div>

<div class="front-page-content">

   <section class="product-type-cont container">
      <?php $terms= get_terms('product-type'); ?>
      <?php if (!empty($terms)):?>
      <?php foreach($terms as $term):?>

      <div class="individual-tax-items">
         <div><a href="<?php echo get_term_link($term);?>"><img src="<?php echo get_template_directory_uri()."/images\/".$term->slug ?>.png" alt="picture relating to product type" /></a></div>
         <h3><?php echo $term->name;?></h3>
         <p><?php echo $term->description; ?><a href="<?php echo get_term_link($term); ?>">See More...</a></p>
      </div>

      <?php endforeach; endif; ?>
   </section>

   <section class="our-products-form container">
      <span>All our products are made fresh daily from locally-sourced ingredients. Our menu is updated frequently.</span>
      <a href="/products/" class="btn">See Our Products</a>
   </section>

   <section class="news-section">
      <div class="news-wrapper container">
         <h2>Our Latest News</h2>
         <hr class="decorative">
      </div>
      <div class="front-page-news-bar container">
         <?php
         $args = array('post_type'=>'post', 'posts_per_page'=> 4 );
         $latest_posts = get_posts($args);
         ?>
         <?php foreach ($latest_posts as $post):(setup_postdata($post));?>

         <div class="ind-news-items">
            <div class="thumbnail-wrapper">
               <?php if ( has_post_thumbnail() ) : ?>
                  <?php the_post_thumbnail(); ?>
               <?php endif; ?>
            </div>
            <div class="info-wrapper">
               <h3> <a href="<?php the_permalink() ?>"> <?php the_title(); ?> </a> </h3>
               <div class="entry-meta">
                  <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
               </div><!-- .entry-meta -->
            </div>
         </div>

         <?php endforeach; wp_reset_postdata(); ?>
      </div>
   </section>

   <div class="testimonials container">
      <h2>What Others Say About Us</h2>
      <hr class="decorative">
   </div>
   <section class="testimonial-wrapper container">
      <?php
      $args = array('post_type'=>'testimonial', 'posts_per_page'=> 4 );
      $all_testimonials = get_posts($args);
      ?>
      <?php foreach ($all_testimonials as $post):(setup_postdata($post));?>

      <div class="review-wrapper">
         <div class="headshot">
            <?php if ( has_post_thumbnail() ) : ?>
               <?php the_post_thumbnail(); ?>
            <?php endif; ?>
         </div>
         <div class="review-info">
            <p class="review"><?php echo CFS()->get('review') ?></p>
            <p class="reviewer-name"><span><?php echo CFS()->get('name') ?></span></p>
            <p class="reviewer-cred"><?php echo CFS()->get('job') ?> - <?php echo CFS()->get('company') ?></p>
         </div>
      </div>

      <?php endforeach; wp_reset_postdata(); ?>
   </section>
   </div>
   <?php get_footer() ?>
