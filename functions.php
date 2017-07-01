<?php
/****************************************************************
 * DO NOT DELETE
 ****************************************************************/
if ( get_stylesheet_directory() == get_template_directory() ) {
	define('ALETHEME_PATH', get_template_directory() . '/aletheme');
	define('ALETHEME_URL', get_template_directory_uri() . '/aletheme');
}  else {
    define('ALETHEME_PATH', get_theme_root() . '/fuerza/aletheme');
    define('ALETHEME_URL', get_theme_root_uri() . '/fuerza/aletheme');
}

require_once ALETHEME_PATH . '/init.php';

load_theme_textdomain( 'aletheme', get_template_directory() . '/lang' );
$locale = get_locale();
$locale_file = get_template_directory() . "/lang/$locale.php";
if ( is_readable($locale_file) )
    require_once($locale_file);

/****************************************************************
 * You can add your functions here.
 * 
 * BE CAREFULL! Functions will dissapear after update.
 * If you want to add custom functions you should do manual
 * updates only.
 ****************************************************************/

function ale_customize_register($wp_customize) {
	$wp_customize->add_section('ads', array(
		'title' => __('Реклама', 'aletheme'),
		'priority' => 30		
	));
	$wp_customize->add_setting('ads_code', array(
		'default' => '',
		'transport' => 'postMessage' 
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ads_code', array(
		'label' => __('Ваш рекламный код', 'aletheme'),
		'section' => 'ads',
		'settings' => 'ads_code',
		'type' => 'textarea'
	)));
}

add_action('customize_register', 'ale_customize_register');

function ale_customize_live_preview() {
	wp_enqueue_script('ale_customize', get_template_directory_uri()."/js/customizer1.js", array("jquery", "customize-preview"), '', true);
}

add_action('customize_preview_init', 'ale_customize_live_preview');
