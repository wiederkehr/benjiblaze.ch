<?php
/*
Template Name: Message
*/
?>
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
			<h3 class="ui">Public Service Announcement</h3>
			<!-- ——————————————————————————————————————————————————————————————————— Message -->
			<div class="message">
				<?php the_content(); ?>
			</div>
			<!-- ——————————————————————————————————————————————————————————————————— Navigation -->
			<?php endwhile; ?>
		<?php else: ?>
			<!-- ——————————————————————————————————————————————————————————————————— No Content -->
			<p><?php _e("Sorry, what you were looking for isn't here."); ?></p>
			<?php endif; ?>
	</div><!-- #content -->
	<!-- ——————————————————————————————————————————————————————————————————— Sidebar -->
	<?php include (TEMPLATEPATH . '/sidebar-bottom.php'); ?>
</div><!-- .container -->

<?php get_footer(); ?>