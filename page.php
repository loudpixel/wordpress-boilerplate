<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<h2><?php the_title(); ?></h2>
	<div class="entry-content">
		<h3 class="excerpt"><?php echo get_post_meta($post->ID, 'excerpt', true); ?></h3>
		<?php the_content(); ?>
	</div>
</div>
<?php endwhile; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>