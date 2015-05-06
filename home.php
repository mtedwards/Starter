<?php get_header(); ?>

  <section class="row" id="mainContent">
    <?php include_once('slider.php'); ?>
    <div class="small-12 large-8 columns" role="main">
      <?php while (have_posts()) : the_post(); ?>
  		<article <?php post_class('news-article') ?> id="post-<?php the_ID(); ?>" >
  			<div class="entry-content">
  				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
  				<?php entry_meta(); ?>
  				<?php
    				$post_id = get_the_ID();
  				  $format = get_post_format( $post_id );
            if ( has_post_thumbnail()  && $format != 'video' ) {
              $small_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'small-feature');
              $med_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium-feature');
              $large_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium');
          ?>
			 		<img class="news-feature" src="<?php echo $small_url[0]; ?>" data-interchange="[<?php echo $small_url[0]; ?>, (only screen and (min-width: 1px))], [<?php echo $med_url[0]; ?>, (only screen and (min-width: 400px))], [<?php echo $large_url[0]; ?>, (only screen and (min-width: 800px))]">
			 		<?php } // end if has_post_thumbnail ?>
  				<?php the_content(); ?>
  			</div>
  		</article>
  		<hr>
      <?php endwhile; // End the loop ?>
      <?php reverie_pagination(); ?>
    </div>
  	<aside class="small-12 large-4 columns">
  		<?php get_sidebar(); ?>
  	</aside>
  </section><?php // end section ?>

<?php get_footer(); ?>