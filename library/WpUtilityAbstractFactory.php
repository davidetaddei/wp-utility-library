<?php

namespace WpUtilityLibrary;

use WpUtilityLibrary\Admin\AdminUi;

abstract class WpUtilityAbstractFactory
{
	/**
	 * @return AdminUi
	 */
	public static function getAdminUi(): AdminUi
	{
		return new AdminUi();
	}

	/**
	 * @return MetaService
	 */
	public static function getMetaService($objectType = 'post', $subtype = 'componenti'): MetaService
	{
		return new MetaService($objectType, $subtype);
	}
}
