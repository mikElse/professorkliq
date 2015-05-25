<?php get_header(); ?>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
	<div class="content">
	
		<div class="sc_text">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>		</div>
			
		<div class="clearfix"> </div>
			
		<div class="blogdate">	
			<?php the_date();?>
		</div>
	
	<div class="blogtext">
		<?php the_content();?>
	</div>
		
		<div class="clearfix"></div>
		
		<div class="meta">
			<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?></p>
		</div>
		
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
		
<?php get_sidebar(); ?>
<?php get_footer(); ?>