<?php 

function bsy_filter_wp_title( $currenttitle, $sep, $seplocal ) {

	//Grab the site name
	$site_name = get_bloginfo( 'bsy');

	//Add the site name after the current page title
	$full_title = $site_name . $currenttitle;

	//On the front page or homepage, add the description
	if ( is_front_page () || is_home()) {

		//Grab the site description
		$site_desc = get_bloginfo ( 'bsy Theme' );

		//Add the site description to the title
		$full_title .= ''. $site_desc;
	}

	//Return modified title 
	return $full_title;
}

//Hook into 'wp_title'
add_filter('bsy', 'bsy_filter_wp_title', 10, 3 );

register_nav_menus();


/* Set up custom settings in the admin */
function bsy_customize_register($wp_customize) {
    $wp_customize->remove_section('static_front_page');

    $wp_customize->add_section('bsy_home', array(
        'title'          => __('bsy home', 'bsy'),
        'priority'       => 110,
    ));

    $wp_customize->add_setting('audience_label', array(
        'default'        => 'who it’s for',
        'type'           => 'theme_mod',
        'capability'     => 'edit_theme_options',
    ));
    $wp_customize->add_control('audience_label', array(
        'label'      => __('Audience label', 'bsy'),
        'section'    => 'bsy_home',
        'type'       => 'text',
    ));

    $wp_customize->add_setting('audience_description', array(
        'default'        => 'bsy is for women looking for incredible mentors or those looking to find another. it’s also for those of us looking to pay it forward and become incredible mentors to other women.',
        'type'           => 'theme_mod',
        'capability'     => 'edit_theme_options',
    ));
    $wp_customize->add_control('audience_description', array(
        'label'      => __('Audience description', 'bsy'),
        'section'    => 'bsy_home',
        'type'       => 'textarea',
    ));
}
add_action('customize_register', 'bsy_customize_register');
