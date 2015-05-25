<?php get_header(); ?>

<div class = "wrapper group" style = "margin-top: 4em;">
	<div class = "homepage transbg">
		<?php while (have_posts()) : the_post(); ?>
			<div class = "title"><h2><?php the_title()?></h2></div>
			<div class = "homepage_posts">
				<?php the_content() ?>
			</div>
		<?php endwhile;?>
	</div>

	<div class = "homepage_archives transbg">
		<ul>
			<?php query_posts('category_name=updates&posts_per_page=5'); ?>
			<?php while (have_posts()) : the_post(); ?>
					<a class="greenhover" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
						<li>
							<h5><?php the_title(); ?></h5>
							<h6><?php the_date()?></h6>
						</li>
					</a>
			<?php endwhile;?>
		</ul>
	</div>
</div>

<?php get_footer();?>
