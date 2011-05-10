<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<h2><?php the_title(); ?></h2>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
</div>
<?php endwhile; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>