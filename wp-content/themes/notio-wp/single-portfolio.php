<?php get_header(); ?>
  <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
	<div <?php post_class('post'); ?> id="post-<?php the_ID(); ?>">

		<div class="post-content single-text">
			<?php the_content(); ?>
			<?php if ( is_single()) { wp_link_pages(); } ?>
		</div>
	</div>
	<?php if ( comments_open() || get_comments_number() ) { ?>
	<section id="comments">
	<?php comments_template('', true); ?>
	</section>
	<?php } ?>
	<?php do_action( 'thb_post_navigation' ); ?>
<?php endwhile; else : endif; ?>
<?php get_footer(); ?>
