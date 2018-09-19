
<?php 

function bsy_filter_wp_title( $currenttitle, $sep, $seplocal ) {

	//Grab the site name
	$site_name = get_bloginfo( 'bsy');

	//Add the site name after the current page title
	$full_title = $site_name . $currenttitle;

	//On the front page or homepage, add the description
	if ( is_front_page () || is_home()) {

		//Grab the site description
		$site_desc = get_bloginfo ( 'description' );

		//Add the site description to the title
		$full_title .= ''. $site_desc;
	}

	//Return modified title 
	return $full_title;
}

//Hook into 'wp_title'
add_filter('bsy', 'bsy_filter_wp_title', 10, 3 ); ?>

<?php register_nav_menus(); ?>