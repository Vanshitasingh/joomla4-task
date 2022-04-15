<?php
/**
 * Vanshita Singh Headings plugin
 *
 * @copyright    (C) 2022 Open Source Matters, Inc. <https://www.joomla.org>
 * @license      GNU General Public License version 2 or later; see LICENSE.txt
 * @since        4.0
 */

defined('_JEXEC') or die;
use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Factory;
/**
 * Concatenates text_input with all the headings
 *
 * @since 4.0
 */
class PlgSystemVSheadings extends CMSPlugin
{

	/**
	 * Constructor.
	 *
	 * @param   object $name      The object to observe.
	 * @param   array  $arguments An optional associative array of configuration settings.
	 *
	 * @since 1.0
	 */
	public function __construct($name, array $arguments = array())
	{
		// Calling the parent Constructor
		parent::__construct($name, $arguments);
	}
	/**
	 * Listener for the `onBeforeCompileHead` event
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function onBeforeCompileHead()
	{

		$app = Factory::getApplication();
		$document = Factory::getDocument();
		$heading_text = $this->params->get('text_input', 1);

			// Displaying only in the backend part
		if ($app->isClient('administrator'))
		{
			// Adding inline js
			$document->addScriptDeclaration(
				"jQuery.noConflict();  
                jQuery(document).ready(function(){
            
                var heading_text = '$heading_text';
                //concatenating all the headings with input text 
                jQuery('h1,h2,h3,h4,h5,h6').text((i, txt) => txt +' '+ heading_text);
                });"
			);

			return;
		}

	}

}

