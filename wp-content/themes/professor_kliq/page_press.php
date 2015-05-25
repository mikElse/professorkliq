<?php
/*
Template Name: Press
MultiEdit:Sidebar
*/
?>

<style type='text/css'>
	#content.press:after {
		content: '.';
		visibility: hidden;
		display: block;
		clear: both;
	}
	#content.press aside.right {
		width: 300px;
		float: right;
	}
	#content.press .main {
		width: 600px;
		float: left;
	}
	#content.press aside.right ul#photos {
		list-style-type: none;
	}
	#content.press aside.right ul#photos li {
		width: 85px;
		height: 85px;
		margin: 0 15px 15px 0;
		display: inline-block;
	}
	#content.press aside.right ul#photos li:nth-child(3n+3) {
		margin-right: 0;
	}
	#content.press aside.right ul#photos li:last-child { margin-bottom: 0; }
	#content.press aside.right ul#photos li img {
		width: 100%;
		border: none;
	}
	#content.press aside.right ul#photos li a {
		/* Link Styles */
	}
	#content.press h3, #content.press aside.right h3 {
		margin-bottom: 1em;
		padding-bottom: .5em;
		font-size: 1.2em;
		color: white;
		border-bottom: 1px #999 solid;
		margin-top: .85em;
	}
	#content.press h2 {
		font-size: 2em;
		color: white;
		border-bottom: 1px #eee solid;
		padding-bottom: .3em;
		margin-bottom: .7em;
	}
	#content.press .main #videos {
		margin-top: 2em;
		display: block;
	}
	#content.press .main #videos .video {
		margin-bottom: 1em;
		padding-bottom: 1em;
		border-bottom: 1px #999 solid;
	}
	#content.press .main #videos .video .caption {
		display: block;
		margin-top: .8em;
		font-size: .9em;
	}
	#content.press .main .videos:after {
	}
	#content.press aside.right ul#performances, ul#requirements {
		list-style-type: none;
		padding: 0;
		margin-bottom: 1em;
	}
	aside.right small { font-size: .80em; }
	#content.press aside.right ul#performances li, ul#requirements li {
		display: block;
		margin-bottom: .2em;
	}
	#content.press p {
		margin-bottom: 1em;
		line-height: 1.2em;
	}
</style>

<?php get_header(); ?>

<div id='content' class='press'>
	<div class='main'>
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<?php the_content();?>
		<?php endwhile; ?>
		<div id='videos'>
			<h3>Music Licensing and Film Scoring Examples</h3>
			<div class='video'>
				<iframe src="http://player.vimeo.com/video/43708825" width="100%" height="340" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				<span class='caption'>
					The 2012 <a href='http://vimeo.com'>Vimeo</a> Awards Ceremony and Theme Material
				</span>
			</div>
			<div class='video'>
				<iframe width="100%" height="340" src="http://www.youtube.com/embed/77r-ghIOQso" frameborder="0" allowfullscreen></iframe>
				<span class='caption'>
					Ubisoft TrackMania 2 Canyon European Launch Trailer
				</span>
			</div>
			<div class='video'>
				<iframe width="100%" height="340" src="http://www.youtube.com/embed/CvT5hjnR9js" frameborder="0" allowfullscreen></iframe>
				<span class='caption'>
					All the 2011 Super Bowl Ads in 2 Minutes (Adweek)
				</span>
			</div>
		</div>
		<div class='video'>
			<iframe width="100%" height="340" src="http://www.youtube.com/embed/dbh5l0b2-0o" frameborder="0" allowfullscreen></iframe>
			<span class='caption'>
				Athene's Theory of Everything (Original Soundtrack)
			</span>
		</div>
	</div>
	<aside class='right'>
		<h3>Music Samples</h3>
		<iframe width="100%" height="450" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=https%3A%2F%2Fapi.soundcloud.com%2Fplaylists%2F2119158&show_artwork=true"></iframe>
		<h3>Photos</h3>
		<ul id='photos'>
			<li>
				<a href='http://cdn.originalmachine.com/professorkliq/photos/lg/1.jpg'>
					<img src='http://cdn.originalmachine.com/professorkliq/photos/thumb/1.jpg' alt='Professor Kliq' />
				</a>
			</li>
			<li>
				<a href='http://cdn.originalmachine.com/professorkliq/photos/lg/2.jpg'>
					<img src='http://cdn.originalmachine.com/professorkliq/photos/thumb/2.jpg' alt='Professor Kliq' />
				</a>
			</li>
			<li>
				<a href='http://cdn.originalmachine.com/professorkliq/photos/lg/3.jpg'>
					<img src='http://cdn.originalmachine.com/professorkliq/photos/thumb/3.jpg' alt='Professor Kliq' />
				</a>
			</li>
			<li>
				<a href='http://cdn.originalmachine.com/professorkliq/photos/lg/4.jpg'>
					<img src='http://cdn.originalmachine.com/professorkliq/photos/thumb/4.jpg' alt='Professor Kliq' />
				</a>
			</li>
			<li>
				<a href='http://cdn.originalmachine.com/professorkliq/photos/lg/5.jpg'>
					<img src='http://cdn.originalmachine.com/professorkliq/photos/thumb/5.jpg' alt='Professor Kliq' />
				</a>
			</li>
			<li>
				<a href='http://cdn.originalmachine.com/professorkliq/photos/lg/6.jpg'>
					<img src='http://cdn.originalmachine.com/professorkliq/photos/thumb/6.jpg' alt='Professor Kliq' />
				</a>
			</li>
		</ul>
		<h3>Past Performances</h3>
		<ul id='performances'>
			<li>Elbo Room Chicago (Residency, Chicago)</li>
			<li>Cobra Lounge (Chicago)</li>
			<li>Reggie's Rock Club (Chicago)</li>
			<li>Bottom Lounge (Chicago)</li>
		</ul>
		<h3>Technical Requirements</h3>
		<ul id='requirements'>
			<li>Table (2 ft. x 4 ft., 4-5 ft. tall) *</li>
			<li>Direct Input</li>
			<li>Microphone (SM58, or other with stand)</li>
			<li>Two Wedge Monitors *</li>
			<li><small>* Reach out if your specifications don't match up, and we'll try to work it out.</small></li>
		</ul>
		<h3>Management &amp; Booking</h3>
		<p class='close'>
			Nicholas Young / Original Machine
		</p>
		<p class='close'>
			(312) 685-2109
		</p>
		<p class='close'>
			<a href='mailto:<?php echo antispambot('kliq@originalmachine.com'); ?>'><?php echo antispambot('kliq@originalmachine.com'); ?></a>
		</p>
	</aside>
</div>

<?php get_footer(); ?>
