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
		
    		$document->addScriptVersion('//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.13.1/highlight.min.js');
    		$document->addStylesheet('//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.13.1/styles/default.min.css');
    
		$document->addScriptDeclaration('hljs.initHighlightingOnLoad();');
	}
}
