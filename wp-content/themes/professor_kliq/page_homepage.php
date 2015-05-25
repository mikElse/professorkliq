<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<?php $recentMusic = $cfs->get('recent_music'); ?>

<?php while (have_posts()) : the_post(); ?>	

<div class = "wrapper group">

	<div class = "homepage_top">
		<div class = "update group">
			<div class = "update_kliq">
				<img src = "<?php bloginfo('template_url'); ?>/images/kliq.svg"></img>
			</div>
			<div class = "update_bubble">
				<div class = "update_text"><?php the_content();?></div>
			</div>
		</div>
	</div>

<?php endwhile;?>
	
	
	<div id = "homepage_container">	
		
		<?php query_posts('category_name=updates&posts_per_page=1'); ?>
		<?php while (have_posts()) : the_post(); ?>	
		
		<div class = "homepage transbg">
			<div class = "title"><h2><?php the_title();?></h2></div>
			<div class = "homepage_posts"><?php the_content();?></div>
		</div>
		
		<?php endwhile;?>

		<div class = "homepage_archives transbg">
			<ul>
				<?php query_posts('category_name=updates&posts_per_page=8');?>
				<?php while (have_posts()) : the_post();?>
						<a class="greenhover" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute();?>">
							<li>
								<h5><?php the_title();?></h5>
								<h6><?php the_date();?></h6>
							</li>
						</a>
				<?php endwhile;?>
			</ul>
		</div>
		
	</div>
	
	<div class = "homepage_soundcloud">	
		<h1 class = "section_label">Recent Music</h1>
		<div class = "recent_album_sc"><?php echo $recentMusic;?></div>
	</div>
	
	
	
</div>

<?php get_footer(); ?>

