<?php
/**
 * Template Name: Slider template
 */
?>

<?php 
  $args = array(
    'post_type' => 'slide',
    'publish' => true,
    'paged' => get_query_var('paged'),
	);

  query_posts($args);
?>
<div class="swiper-container">
  <div class="swiper-wrapper">
    <?php while (have_posts()) : the_post(); ?>
      <div class="swiper-slide">
        <?php get_template_part('templates/content', 'slide'); ?>
      </div>
    <?php endwhile; ?>
  </div>
</div>
<div class="splash-prev"></div>
<div class="splash-next"></div>
<div class="splash-pagination"></div>