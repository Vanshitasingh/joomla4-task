<?php
/**
 * Headings Plugin
 *
 * @copyright (C) 2018 Open Source Matters, Inc. <https://www.joomla.org>
 * @license GNU General Public License version 2 or later; see LICENSE.txt
 * @since  4.0
 */

defined('_JEXEC') or die;
use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\WebAsset\WebAssetManager;
/**
 * Concatenates text_input with headings
 *
 * @since  4.0
 */
class PlgSystemVSheadings extends CMSPlugin
{
   /**
    * Application object
    *
    * @var    \Joomla\CMS\Application\CMSApplication
    * @since  3.2
    */
   protected $app;

   /**
    * Listener for the ` onAfterDispatch()` event
    *
    * @return  void
    *
    * @since   1.0
    */
   public function onAfterDispatch()
   {

       if ($this->app->isClient('administrator'))
       {
           return;
       }
        //echo 'compile';
        //only going to run these in the backend for now


        $heading_text = $this->params->get('text_input');
        

            $this->app->getDocument()->getWebAssetManager()
			->addInlineScript("
            var page_title_container = document.querySelector('h1');
            page_title_container.innerHTML= page_title_container.innerHTML+' '+'$heading_text'
            ");
            return;
        

    }

}