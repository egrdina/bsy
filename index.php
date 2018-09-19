<!DOCTYPE html> 
<html lang="en">

	<head>
		<title><?php bloginfo ( 'name' ); ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
			<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" >
			<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Karla|Lora">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"'>

	</head>

<body> 
	<header> 
		<nav>
			<div class='logo'><img src="<?php echo get_bloginfo('template_url') ?>/images/logo.png"/>
			</div>
			<div class='menu-items'><ul><?php wp_nav_menu( array(' menu' => 'Main nav')); ?></ul>
			</div>
		</nav>
	</header>

<div class='sections'>
	<div class='section welcome'>
		<h1>welcome to bsy</h1>
		<p class="blurb">bsy is a platform to help women become mentors and find mentors in like-minded, or not so like-minded, women.</p> 
	</div>

	<div class='section audience'>
		<h2>who it's for</h2>
		<p class="blurb">bsy is for women looking for incredible mentors or those looking to find another. it’s also for those of us looking to pay it forward and become incredible mentors to other women.</p> 
	</div>

	<div class='section how'>
		<h2>how it works</h2>
		<ul id='one'><i class="fas fa-paper-plane"></i><h2>tell us a bit more about you</h2> 
			<p>our 15-min. survey about your goals and where you are in life will help us match you with a potential mentor/mentee.</p>
		</ul>
		<ul id='two'><i class="fas fa-link"></i><h2>we will match you with a mentor/mentee.</h2>
			<p>bsy will help you build a personal relationship through an individualized matching process.</p>
		</ul>
		<ul id='three'><i class="fas fa-star"></i><h2>the relationship is what you make it.</h2>
			<p> there’s no one size fits all when it comes to mentoring. while we do check in with partnerships, we trust mentors and mentees to build the relationship they want.</p>
		</ul>
	</div>

	<div class='section goal'>
		<h2>our goal</h2>
		<p class='blurb'>we hope it becomes a friendship where you discuss work, life, love, or all of the above. whatever you’re looking to get out of it, bsy will help you build a personal relationship through an individualized matching process.</p> 
	</div>

	<div class='instagram'>
	</div>

	<div class='section join'>
		<h2>join</h2>
		<p class='blurb'>after you spend about 15 minutes telling us more about yourself, we will reach out about potentially pairing you with a mentor or mentee.</p> 
		<div class='survey'>
			<a href='http://emmagrdina.com/'>Let's get started<i class="fas fa-arrow-right"></i>

</a>
		</div>
	</div> 

</div>

	<div class='footer'>
		<ul id='copyright'><p>bsy © 2018</p></ul>
		<ul><p>it's not business. it's bsy.</p></ul>
		<ul id='contact'><p>contact us</p></ul>
	</div>

</body>
</html> 