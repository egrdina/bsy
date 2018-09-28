<?php get_header(); ?>

	<div id="audience" class='section audience'>
		<h2><?php echo get_theme_mod('audience_label', ''); ?></h2>
		<div class="blurb">
			<p><?php echo get_theme_mod('audience_description', ''); ?></p>
			<div class='bsy-teal'>
				<img src="<?php echo get_bloginfo('template_url') ?>/images/bsy-teal.png"/>
			</div> 
		</div>
	</div>

	<div id="how-it-works" class='section how' >
		<h2><?php echo get_theme_mod('how_label', 'how it works'); ?></h2>
		<ul id='one'><i class="fas fa-paper-plane"></i><h2><?php echo get_theme_mod('item1_label', 'tell us a bit more about you'); ?></h2> 
			<p><?php echo get_theme_mod('item1_description', 'our 15-min. survey about your goals and where you are in life will help us match you with a potential mentor/mentee.'); ?></p>
		</ul>
		<ul id='two'><i class="fas fa-link"></i><h2><?php echo get_theme_mod('item2_label', 'we will match you with a mentor/mentee.'); ?></h2>
			<p><?php echo get_theme_mod('item2_description', 'bsy will help you build a personal relationship through an individualized matching process.'); ?></p>
		</ul>
		<ul id='three'><i class="fas fa-star"></i><h2><?php echo get_theme_mod('item3_label', 'the relationship is what you make it.'); ?></h2>
			<p> <?php echo get_theme_mod('item3_description', 'there’s no one size fits all when it comes to mentoring. while we do check in with partnerships, we trust mentors and mentees to build the relationship they want.'); ?></p>
		</ul>
	</div>

	<div id="why-bsy" class='section why-bsy'>
		<h2><?php echo get_theme_mod('why_bsy_label', 'why bsy'); ?></h2>
		<div class="blurb">
			<p><?php echo get_theme_mod('why_bsy_description', 'we know it is not always easy to find your footing as a woman. we also know it is hard to find someone to talk about it with. we created bsy as a way to help you find your person.'); ?></p> 
		</div>
		<div class='bsy-blue'>
			<img src="<?php echo get_bloginfo('template_url') ?>/images/bsy-blue.png"/>
		</div>
		<div class='bsy-blue-mobile'>
			<img src="<?php echo get_bloginfo('template_url') ?>/images/bsy-blue-mobile.png"/>
		</div>
	</div>

	<div id="join" class='section join'>
		<h2><?php echo get_theme_mod('join_label', 'join'); ?></h2>
		<div class="blurb">
			<p><?php echo get_theme_mod('join_description', 'after you spend about 15 minutes telling us more about yourself, we will reach out about potentially pairing you with a mentor or mentee.'); ?></p> 
		</div>

		<div class='survey'>
			<a href='<?php echo get_home_url(''); ?>/form/'>Let's get started<i class="fas fa-arrow-right"></i></a>
		</div>
		<div class='bsy-orange'>
			<img src="<?php echo get_bloginfo('template_url') ?>/images/bsy-orange.png"/>
		</div>
		<div class='bsy-orange-mobile'>
			<img src="<?php echo get_bloginfo('template_url') ?>/images/bsy-orange-mobile.png"/>
		</div>
	</div> 

	<div class='instagram-feed'>
		<h2><a href="<?php echo get_theme_mod('follow_description', 'https://www.instagram.com/livkirby/'); ?>"><?php echo get_theme_mod('follow_label', 'follow us on instagram'); ?><i class="fas fa-arrow-right"></i></a></h2>
		<?php echo do_shortcode('[instagram-feed]'); ?>
	</div>

<?php get_footer(); ?>
</html> 