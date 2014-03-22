<?php get_header(); ?>

  <section class="row" id="mainContent">
  	<div class="small-12 large-8 columns">
	    <?php if ( have_posts() ) :
	    	while ( have_posts() ) : the_post(); ?>
				<article <?php post_class() ?> id="post-<?php the_ID(); ?>" role="main">
					<div class="entry-content">
						<h1><?php the_title(); ?></h1>
						<?php get_template_part( 'content', get_post_format() ); ?>
					</div>
				</article>
			<?php endwhile; ?>
			
		<?php else : ?>
		
			<?php get_template_part( 'content', 'none' ); ?>
			
		<?php endif; // end have_posts() check ?>
		<?php if ( function_exists('reverie_pagination') ) { reverie_pagination(); } else if ( is_paged() ) { ?>
			
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
			
			</nav>
		<?php } ?>
	</div>
	<aside class="small-12 large-4 columns">
		<?php get_sidebar(); ?>
	</aside>
  </section><?php // end section ?>

<?php get_footer(); ?>