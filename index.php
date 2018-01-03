<?php get_header(); ?>

<div class="container">
	<div id="header" class="span-5 append-19 last">
		<h1>
		  <a href="<?php echo get_settings('home'); ?>" rel="me" title="<?php bloginfo('name'); ?>">
		  	<img src="<?php bloginfo('stylesheet_directory'); ?>/img/benjiblaze_logo.png" width="190" height="190" alt="<?php bloginfo('name'); ?>" />
		  </a>
		</h1>
	</div>
	<!-- ——————————————————————————————————————————————————————————————————— Sidebar -->
	<?php include (TEMPLATEPATH . '/sidebar-top.php'); ?>
	<!-- ——————————————————————————————————————————————————————————————————— Content -->
	<div id="content" class="span-18 prepend-1 last">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h3 class="ui">Upcoming</h3>
			<!-- ——————————————————————————————————————————————————————————————————— Events -->
			<?php the_content(); ?>
			<!-- ——————————————————————————————————————————————————————————————————— Navigation -->
			<?php endwhile; ?>
			<div class="pagination">
				<div class="alignleft"><?php next_posts_link('&larr; Previous Events') ?></div>
				<div class="alignright"><?php previous_posts_link('Next Events &rarr;') ?></div>
			</div>
			<?php else: ?>
			<!-- ——————————————————————————————————————————————————————————————————— No Content -->
			<p><?php _e('Sorry, currently there are no planned events.'); ?></p>
			<?php endif; ?>
	</div><!-- #content -->
	<!-- ——————————————————————————————————————————————————————————————————— Sidebar -->
	<?php include (TEMPLATEPATH . '/sidebar-bottom.php'); ?>
</div><!-- .container -->

<?php get_footer(); ?>