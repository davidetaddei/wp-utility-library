<?php
namespace WpUtilityLibrary;

use WpUtilityLibrary\Admin\Fields\Text;

class WpUtilityLibrary
{
	public static function createTextField($fieldId, $title, $placeholder = '', $page, $sectionId, $field, $optionsGroup)
	{
		$callback = [new Text($fieldId, $placeholder), 'render'];
		add_settings_field(
			$fieldId,
			$title,
			$callback,
			$page,
			$sectionId,
			$field
		);
		register_setting($optionsGroup, $fieldId);
	}
}
