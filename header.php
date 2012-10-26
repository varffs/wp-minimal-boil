<!doctype html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
  
<title><?php wp_title('|',true,'right'); bloginfo('name'); ?></title>

<!-- meta -->

  	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame  -->
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="keywords" content="">
	<meta name="description" content="<?php bloginfo('description'); ?>">
  	<meta name="author" content="">
  	
<!-- fb meta -->

	<?php if (have_posts()):while(have_posts()):the_post(); endwhile; endif;?>
	<meta property="fb:admins" content="" />

<?php if (is_home()) { ?>
	<meta property="og:title" content="<?php bloginfo('name'); ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.png" /> 
<?php } if (is_single()) { ?>
	<meta property="og:url" content="<?php the_permalink() ?>"/>
	<meta property="og:title" content="<?php single_post_title(''); ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<?php	if(has_post_thumbnail()) { $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'mid-sq' ); ?>
	<meta property="og:image" content="<?php echo $thumb['0'] ?>" />
	<?php } else { ?>
	<meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.png" />
	<?php } 
} else { ?>
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.png" /> 
<?php } ?>


<!-- links -->

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />	
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.png">
	<link rel="shortcut" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon-touch.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.png">
	
	 <!-- Modernizr enables HTML5 elements & feature detects. Generate your own minimal version on release at the website. -->
	 <!-- all other scripts are enqueued in functions.php -->
  	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/modernizr.js"></script>
	
	<!-- wordpress header -->
	 <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>

<!-- start page -->
<body <?php body_class(); ?>>
<section id="container">

<!-- sub 7.0 internet explorer warning-->

<!--[if lt IE 7 ]>The website will not work properly on Internet Explorer versions older than 7 as they are outdated, instable and insecure. Free (and improved) browsers can be downloaded for free: <a href="www.google.com/chrome">Google Chrome</a>, <a href="www.getfirefox.net/">Mozilla Firefox</a>, or <a href="www.apple.com/safari/">Apple Safari</a> <![endif]-->

<!-- start content -->
<header>

</header>