<?php
/**
 * @package     Joomla.API
 * @subpackage  com_installer
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Component\Installer\Api\View\Manage;

defined('_JEXEC') or die;

use Joomla\CMS\MVC\View\JsonApiView as BaseApiView;

/**
 * The manage view
 *
 * @since  4.0.0
 */
class JsonapiView extends BaseApiView
{
	/**
	 * The fields to render item in the documents
	 *
	 * @var  array
	 * @since  4.0.0
	 */
	protected $fieldsToRenderList = [
		'id',
		'name',
		'type',
		'version',
		'folder',
		'status',
		'client_id',
	];

	/**
	 * Prepare item before render.
	 *
	 * @param   object  $item  The model item
	 *
	 * @return  object
	 *
	 * @since   4.0.0
	 */
	protected function prepareItem($item)
	{
		$item->id = $item->extension_id;
		unset($item->extension_id);

		return $item;
	}
}
