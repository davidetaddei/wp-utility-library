<?php
namespace WpUtilityLibrary\Admin;

use WpUtilityLibrary\Admin\Fields\Text;

class AdminUi
{
	public function createAdminField($fieldId, $title, $placeholder = '', $page, $sectionId, $field, $optionsGroup)
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
