<?php get_header(); ?>

<div id = "content">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php the_content();?>
	<?php endwhile; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
