<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>

<head profile="http://www.w3.org/2005/10/profile">
<link rel="icon" 
      type="image/png" 
      href="<?php bloginfo('template_url'); ?>/images/favicon.png">

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/styles/style-1280.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/styles/style-640.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/styles/style-320.css" type="text/css" media="screen" />

<!--Fonts-->

<link href='http://fonts.googleapis.com/css?family=Tinos:400,700,400italic|Josefin+Sans:700' rel='stylesheet' type='text/css'>

<!--<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />-->


<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1688406-13']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body <?php body_class(); ?>>
	
	<div id="header">
		<div class="nav transbg">
			<?php wp_nav_menu( array('menu' => 'Main', 'container' => false, )); ?>
			<div class="nav_mobilemenu">&nbsp;</div>
		</div>
					
	</div>
	
	<div class = "wrapper social_container">
		<div class = "social">
			<ul>
				<li><a class = "greenhover social socialbg facebook" title = "Facebook" href = "https://www.facebook.com/professorkliq" target = "blank">&nbsp;</a></li>
				<li><a class = "greenhover social socialbg twitter"title = "Twitter" href = "https://twitter.com/ProfessorKliq" target = "blank">&nbsp;</a></li>
				<li><a class = "greenhover social socialbg soundcloud" title = "SoundCloud" href=  "https://www.soundcloud.com/professorkliq" target = "blank">&nbsp;</a></li>
			</ul>
		</div>
	</div>
	
	<div id = "postbanner">&nbsp;</div>
	
	<div class = "homepage_title wrapper">
			<h1>Professor Kliq</h1>
	</div>
		