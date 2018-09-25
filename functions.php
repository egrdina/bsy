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
        'default'        => '',
        'type'           => 'theme_mod',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('audience_label', array(
        'label'      => __('Audience label', 'bsy'),
        'section'    => 'bsy_home',
        'type'       => 'text',
    ));

    $wp_customize->add_setting('audience_description', array(
        'default'        => '',
        'type'           => 'theme_mod',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('audience_description', array(
        'label'      => __('Audience description', 'bsy'),
        'section'    => 'bsy_home',
        'type'       => 'textarea',
    ));

    $wp_customize->add_setting('how_label', array(
        'default'        => '',
        'type'           => 'theme_mod',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('how_label', array(
        'label'      => __('How label', 'bsy'),
        'section'    => 'bsy_home',
        'type'       => 'text',
    ));

    $wp_customize->add_setting('item1_label', array(
        'default'        => '',
        'type'           => 'theme_mod',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('item1_label', array(
        'label'      => __('Item 1 label', 'bsy'),
        'section'    => 'bsy_home',
        'type'       => 'text',
    ));

    $wp_customize->add_setting('item1_description', array(
        'default'        => '',
        'type'           => 'theme_mod',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('item1_description', array(
        'label'      => __('Item 1 description', 'bsy'),
        'section'    => 'bsy_home',
        'type'       => 'textarea',
    ));

    $wp_customize->add_setting('item2_label', array(
        'default'        => '',
        'type'           => 'theme_mod',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('item2_label', array(
        'label'      => __('Item 2 label', 'bsy'),
        'section'    => 'bsy_home',
        'type'       => 'text',
    ));

    $wp_customize->add_setting('item2_description', array(
        'default'        => '',
        'type'           => 'theme_mod',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('item2_description', array(
        'label'      => __('Item 2 description', 'bsy'),
        'section'    => 'bsy_home',
        'type'       => 'textarea',
    ));

    $wp_customize->add_setting('item3_label', array(
        'default'        => '',
        'type'           => 'theme_mod',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('item3_label', array(
        'label'      => __('Item 3 label', 'bsy'),
        'section'    => 'bsy_home',
        'type'       => 'text',
    ));

    $wp_customize->add_setting('item3_description', array(
        'default'        => '',
        'type'           => 'theme_mod',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('item3_description', array(
        'label'      => __('Item 3 description', 'bsy'),
        'section'    => 'bsy_home',
        'type'       => 'textarea',
    ));

    $wp_customize->add_setting('goal_label', array(
        'default'        => '',
        'type'           => 'theme_mod',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('goal_label', array(
        'label'      => __('Goal label', 'bsy'),
        'section'    => 'bsy_home',
        'type'       => 'text',
    ));

    $wp_customize->add_setting('goal_description', array(
        'default'        => '',
        'type'           => 'theme_mod',
        'capability'     => 'edit_theme_options',
    ));
    $wp_customize->add_control('goal_description', array(
        'label'      => __('Goal description', 'bsy'),
        'section'    => 'bsy_home',
        'type'       => 'textarea',
    ));


    $wp_customize->add_setting('join_label', array(
        'default'        => '',
        'type'           => 'theme_mod',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('join_label', array(
        'label'      => __('Join label', 'bsy'),
        'section'    => 'bsy_home',
        'type'       => 'text',
    ));

    $wp_customize->add_setting('join_description', array(
        'default'        => '',
        'type'           => 'theme_mod',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('join_description', array(
        'label'      => __('Join description', 'bsy'),
        'section'    => 'bsy_home',
        'type'       => 'textarea',
    ));


}

    add_action('customize_register', 'bsy_customize_register');

    function my_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    ' . __( "To answer our survey, enter the password below:" ) . '
    <label for="' . $label . '">' . __( "Password:" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" /><input type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '" />
    </form>
    ';
    return $o;
}

    add_filter( 'the_password_form', 'my_password_form' );

