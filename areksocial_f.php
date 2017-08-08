<?php
defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');

class plgSystemareksocial_f extends JPlugin{
	
	
	function onAfterRender()
	{
		
		$CSS_FOLDER = JURI::root() . 'plugins/system/areksocial_f/addons/';
		
		$areksocialcss = '<link type="text/css" rel="stylesheet" href= "' . $CSS_FOLDER . 'font-awesome.min.css" />'."\n";
	

		
		$app = JFactory::getApplication();
		$link_fb = $this->params->get('link_fb','');
		$link_youtube = $this->params->get('link_youtube','');
		$document = JFactory::getDocument();

		
		$strOutputHTML = "";
		$strOutputHTML .= '<a href="' . $link_fb . '"><i class="fa fa-facebook fa-4x" style="height: 42px; color:#fff; background: #3b5998; padding:5px;
    width: 42px; font-size:30px; border-radius: 5px 0 0 5px;
	position: fixed;
	right: 2px;
	top: 2px;"></i></div></a><a href="' . $link_youtube . '"><i class="fa fa-youtube fa-4x" style="height: 42px; color:#fff; background: #e62117; font-size:30px; padding:5px; border-radius: 5px 0 0 5px;
    width: 42px;
	position: fixed;
	right: 2px;
	top: 56px;"></i></div></a>';
		
		$body = $app->getBody();
		if ($app->isSite() == false)
		{
			return false;
		}
		$body = str_replace('</body>', $areksocialcss . 	$strOutputHTML . '</body>', $body);
		$app->setBody($body);
			
	}
}
?>