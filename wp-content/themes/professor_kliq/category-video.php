<?php get_header(); ?>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
		<div id="content" class="transbg">
		
			<div class="title">
				<h2><?php the_title(); ?></h2>
			</div>
			
			<div class="video_left">
				<div class="video_desc"><?php the_content();?></div>
				<div class="sc_single"><?php echo $cfs->get('sc_single'); ?></div>
			</div>
			
			<div class="video_right">
				<div class="video_embed"><?php echo $cfs->get('video'); ?></div>
			</div>
			
			<div class="clearfix"></div>
		
		</div>

<?php endwhile; ?>
		
<div class="navigation_bottom">

	<div id="paginate">
		<?php
		global $wp_query;
		
		$big = 999999999; // need an unlikely integer
		
		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages
		) );
		?>
	</div>

</div>

<?php get_footer(); ?>