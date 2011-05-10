<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h3><a href="<?php the_permalink(); ?>" title="" rel="bookmark"><?php the_title(); ?></a></h3>
	<p class="post-meta"></p>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
</div>
<?php endwhile; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>