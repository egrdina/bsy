<!DOCTYPE html>
<html lang=en>
<head>
	<title><?php wp_title( '|' ); ?> </title>
	<meta http equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>;
	charset=<?php bloginfo( 'charset' ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class( 'container' ); ?>>

<div class='sections'>
<div class='welcome'>
	<div class="top-nav">
    	<nav>
			<div class='logo'><img src="<?php echo get_bloginfo('template_url') ?>/images/logo.png"/>
			</div>
			<div class='menu-items'><ul><?php wp_nav_menu( array(' menu' => 'Main nav')); ?></ul>
			</div>
		</nav>
</div>

    <div class='section intro-blurb'>
		<h1>welcome to bsy</h1>
		<p class="blurb">bsy is a platform to help women become mentors and find mentors in like-minded, or not so like-minded, women.</p> 
	</div>
</div>