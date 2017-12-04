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
<div class="slider">
  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', 'slide'); ?>
  <?php endwhile; ?>
</div>
