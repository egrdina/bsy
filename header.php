<!DOCTYPE html>
<html lang=en>
<head>
	<title><?php wp_title( '|' ); ?> </title>
	<meta http equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>;
	charset=<?php bloginfo( 'charset' ); ?>">
    <?php wp_head(); ?>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Karla|Lora">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"'>
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

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	    <div class='section intro-blurb'>
			<h1><?php echo the_title() ?></h1>
			<div class="blurb">
				<?php echo the_content() ?>
			</div>
		</div>
	<?php endwhile; endif; ?>
</div>