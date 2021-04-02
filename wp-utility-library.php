<?php
/**
 * Plugin Name:     Wp Utility Library
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     wp-utility-library
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Wp_Utility_Library
 */

use WpUtilityLibrary\Admin\Fields\Text;

require_once __DIR__ . "/vendor/autoload.php";

add_action('create_text_field', function ($fieldId, $title, $page, $sectionId, $field, $optionsGroup){
	$callback = [new Text($fieldId, 'https://', HELLO_WORLD_DOMAIN), 'render'];
	add_settings_field(
		$fieldId,
		$title,
		$callback,
		$page,
		$sectionId,
		$field
	);
	register_setting($optionsGroup, $fieldId);
}, 10, 6);
