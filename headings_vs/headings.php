<?php
/**
 * Replace Headings Plugin
 *
 * @copyright (C) 2018 Open Source Matters, Inc. <https://www.joomla.org>
 * @license GNU General Public License version 2 or later; see LICENSE.txt
 * @since  4.0
 */

defined('_JEXEC') or die;
use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\WebAsset\WebAssetManager;
/**
 * Replacing headings to show a greeting message alert box
 *
 * @since  4.0
 */
class PlgSystemHeadings extends CMSPlugin
{
	/**
	 * Application object
	 *
	 * @var    \Joomla\CMS\Application\CMSApplication
	 * @since  3.2
	 */
	protected $app;

	/**
	 * Listener for the `onBeforeRender` event
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function onBeforeRender()
	{

		if ($this->app->isClient('administrator'))
		{
			return;
		}

		// Load JavaScript
		$this->app->getDocument()->getWebAssetManager()
			->registerAndUseScript('plg_system_headings', 'media/plg_system_headings/js/script.js', [], ['defer' => true]);

		/*
		Inline JavaScript Approach (Not Recommended unless necessary)
		$this->app->getDocument()->getWebAssetManager()
			->addInlineScript("
				window.onload = (event) => {
				// Display the alert
				alert(" . $this->params->get('text_input') . ");
			");
		*/

		/*
		Load CSS
		$this->app->getDocument()->getWebAssetManager()
			->registerAndUseStyle('plg_system_yvcookies_css', 'media/plg_system_yvcookies/css/style.css', [], ['defer' => true]);
		*/
	}
}
