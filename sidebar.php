<section class="sidebar">
<?php if (! is_page() ) :  ?>
<?php
	if ( ! dynamic_sidebar( 'primary-sidebar' ) ) : ?>
			<div class="blog-sidebar">
				<h3 class="widget-title">Archives</h3>
				<ul>
					<?php wp_get_archives( 'type=monthly' ); ?>
				</ul>
			</div>
		<?php endif; ?>
<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-sidebar' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-sidebar' ); ?>
			</ul>
		</div>
	<?php endif; ?>
<?php else : ?>
	<nav>
		<?php if($post->post_parent)  
		$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0"); else  
		$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");  

		if ($children && is_page()) { ?>  
		<ul id="subnav">
		<?php if($post->post_parent) { ?>
			<li><a title="Subnav" href="<?php echo get_permalink($post->post_parent); ?>"><?php echo get_the_title($post->post_parent); ?> Home</a></li>
		<?php } else { ?>
			<li class="current_page"><a title="Subnav" href="#"><?php echo get_the_title($post->post_parent); ?> Home</a></li>
		<?php } ?>
		<?php echo $children; ?>  
		</ul>  
		<?php } else { ?>  
		<?php } ?>
	</nav>
<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'page-sidebar' ) ) : ?>

		<div class="widget-area">
				<?php dynamic_sidebar( 'page-sidebar' ); ?>
		</div>
	<?php endif; ?>
<?php endif; ?>
</section>