<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title('|', 1, 'right'); bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="theme-color" content="#000">

	<link href="<?php bloginfo('stylesheet_url')?>" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_url')?>/css/reset.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_url')?>/css/normalize.min.css" rel="stylesheet" type="text/css">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<?php wp_head(); ?>
</head>
<?php if(is_front_page('home')) : ?>
<body id="topbody" <?php body_class("loading "); ?> >
<?php else : ?>
<body id="topbody" <?php body_class("loading intern "); ?> >
<? endif; ?>
<div id="page-loader">
	<div id="container-preloader">
		<img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Logo preload" class="logo-preloader">
	</div>
</div>
<div id="offcanvas">
	<a href="javascript:void();" id="nav-responsive-close"><img src="<?=get_template_directory_uri(); ?>/images/close1.png" alt="Menú" class="container-left-close"></a>
	<?php if(is_active_sidebar('nav-offcanvas')) : ?>
		<div id="offcanvas-nav"><?php dynamic_sidebar('nav-offcanvas'); ?></div>
	<?php endif; ?>
	<?php if(is_active_sidebar('social-media')) : ?>
		<div id="widget-social-offcanvas"><?php dynamic_sidebar('social-media'); ?></div>
	<?php endif; ?>
</div>
<div id="social-media-container">
	<?php if(is_active_sidebar('social-media')) : ?>
		<div id="widget-social-media"><?php dynamic_sidebar('social-media'); ?></div>
	<?php endif; ?>
</div>
<header id="header">
	<div class="container-row">
		<a href="javascript:void();" id="nav-responsive-icon" class="movil"><img src="<?=get_template_directory_uri(); ?>/images/nav-responsive.svg" alt="Menú" class="nav-responsive-iconimg"></a>
		<div id="our-packages" class="movil">
			<?php if(is_active_sidebar('our-packages')) : ?>
				<div id="widget-our-packagesa"><?php dynamic_sidebar('our-packages'); ?></div>
			<?php endif; ?>
		</div>
		<div id="menu-mainbar" class="fullpc">
			<?php 
				$args = array(
					'theme_location' => 'nav-main',
					'container' => 'nav-main',
					'container_id' => 'container-nav-main',
					'menu' => '',
					'container_class' => '',
					'menu_class' => 'menu',
					'menu_id' => '',
					'echo' => true,
					'fallback_cb' => 'wp_page_menu',
					'before' => '',
					'after' => '',
					'link_before' => '',
					'link_after' => '',
					'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth' => 0,
					'walker' => '',
				);
				wp_nav_menu($args);
			?>
		</div>
		<div id="container-logo">
			<a href="<?php echo get_home_url(); ?>/#home" id="logo-link"><img src="<?=get_template_directory_uri(); ?>/images/logo-blank.png" alt="Logo" class="logo" /></a>
		</div>
		<div class="contact">
			<?php if(is_active_sidebar('contact')) : ?>
				<div id="contact"><?php dynamic_sidebar('contact'); ?></div>
			<?php endif; ?>
		</div>
	</div>
</header>
