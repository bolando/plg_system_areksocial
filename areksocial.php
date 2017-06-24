<?php
defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');

class plgSystemareksocial extends JPlugin{
	
	
	function onAfterRender()
	{
		
		$CSS_FOLDER = JURI::root() . 'plugins/system/areksocial/addons/';
		
		$areksocialcss = '<link type="text/css" rel="stylesheet" href= "' . $CSS_FOLDER . 'style.css" />'."\n";
	

		
		$app = JFactory::getApplication();
		$link_fb = $this->params->get('link_fb','');
		$link_youtube = $this->params->get('link_youtube','');
		$document = JFactory::getDocument();

		
		$strOutputHTML = "";
		$strOutputHTML .= '<a href="' . $link_fb . '"><div class="iconfb"></div></a><a href="' . $link_youtube . '"><div class="iconyoutube"></div>';
		
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