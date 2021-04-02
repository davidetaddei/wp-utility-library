<?php
namespace WpUtilityLibrary;

use WpUtilityLibrary\Admin\AdminUi;

abstract class WpUtilityAbstractFactory
{
	public static function getAdminUi(){
		return new AdminUi();
	}
}
