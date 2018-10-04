<!DOCTYPE html>
<html lang=en>
<head>
	<title><?php wp_title( '|' ); ?> </title>
	<meta http equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>;
	charset=<?php bloginfo( 'charset' ); ?>">
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="_7IXC7GRNi1iMWVqLBgeemZqptJEmmDK9rAjd4YEHM8" />

	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Karla:400,700|Lora:400,700">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"'>
</head>

<body <?php body_class( 'container' ); ?>>

<div class='sections'>
<div class='welcome'>
	<div class='pair'>
		<img src="<?php echo get_bloginfo('template_url') ?>/images/pair.png"/>
	</div>
	<div class="top-nav">
    	<nav>
			<div class='logo'><a href="<?php echo get_home_url(); ?>"><img alt="bsy" src="<?php echo get_bloginfo('template_url') ?>/images/logo.png"/></a>
			</div>
			<div class='menu-items'><ul><?php wp_nav_menu( array(' menu' => 'Main nav')); ?></ul>
			</div>
		</nav>
</div>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	    <div class='section intro-blurb'>
			<h1>
				<?php if (is_front_page()) { ?>
					welcome to <img class='title-logo' alt="bsy" src="<?php echo get_bloginfo('template_url') ?>/images/logo.png"/>
				<?php } else { ?>
					<?php echo the_title() ?>
				<?php } ?>
			</h1>
			<div class="blurb">
				<?php echo the_content() ?>
			</div>
			<div class='wave'>
				<img src="<?php echo get_bloginfo('template_url') ?>/images/wave.png"/>
			</div>
		</div>
	<?php endwhile; endif; ?>


</div>