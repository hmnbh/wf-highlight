<?php

/**
 * @package     Highlight
 * @subpackage  System.wf_highlight
 *
 * @copyright   Copyright (C) 2018 Ryan Demmer. All rights reserved.
 * @license     GNU General Public License version 2 or later
 */
defined('JPATH_BASE') or die;

/**
 * JCE
 *
 * @package     Wf_Highlight
 * @subpackage  System
 * @since       1.0.0
 */
class PlgSystemWf_Highlight extends JPlugin
{
	public function onAfterRoute()
	{
		$app = JFactory::getApplication();

		if ($app->isAdmin()) {
		    return;
		}
		
		$document = JFactory::getDocument();
		
    		$document->addScriptVersion(JURI::base(true) . '/plugins/system/wf_highlight/js/highlight.pack.js');
    		$document->addStylesheetVersion(JURI::base(true) . '/plugins/system/wf_highlight/css/default.css');
    
		$document->addScriptDeclaration('hljs.initHighlightingOnLoad();');
	}
}
