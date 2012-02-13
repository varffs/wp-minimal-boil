<!doctype html>
<html lang="en" class="no-js" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
<meta charset="utf-8">
  
<title><?php wp_title('|',true,'right'); bloginfo('name'); ?></title>

<!-- www.phpied.com/conditional-comments-block-downloads/ -->
<!--[if IE]><![endif]-->

<!-- meta -->

  	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame  -->
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	
  	<meta name="viewport" content="">

	<meta name="keywords" content="">
	<meta name="description" content="">
  	<meta name="author" content="">
  	
  	<!-- & FB meta -->

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
<?php } else { ?>
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.png" /> 
<?php } ?>


<!-- links -->

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />	
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon-touch.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.png">
	
	 <!-- Modernizr which enables HTML5 elements & feature detects. Generate your own minimal version on release at the website. -->
	 <!-- all other scripts are enqueued in functions.php -->
  	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/modernizr.js"></script>
	
	<!-- wordpress header -->
	 <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>

<!-- no support for sub 7.0 internet explorer -->

<!--[if lt IE 7 ]> <body class="ie6">The website will not work on Internet Explorer versions older than 7 as they are outdated and insecure. Free (and improved) browsers can be downloaded by googling for Google Chrome, Mozilla Firefox, or Apple Safari</body></html> <![endif]-->

<!-- start page -->
<body <?php body_class($class); ?>>
<section id="container">

<!-- start content -->
<header>

</header>