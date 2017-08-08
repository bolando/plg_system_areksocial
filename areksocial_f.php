<?php
defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');

class plgSystemareksocial_f extends JPlugin{
	
	
	function onAfterRender()
	{
		
		$CSS_FOLDER = JURI::root() . 'plugins/system/areksocial_f/addons/';
		
		$areksocialcss = '<link type="text/css" rel="stylesheet" href= "' . $CSS_FOLDER . 'font-awesome.min.css" />'.'\n <link type="text/css" rel="stylesheet" href= "' . $CSS_FOLDER . 'style.css" />';
	

		
		$app = JFactory::getApplication();
		$link_fb = $this->params->get('link_fb','');
		$link_youtube = $this->params->get('link_youtube','');
		$document = JFactory::getDocument();

		
		$strOutputHTML = "";
		$strOutputHTML .= '<div class="aa-social"><a target="_blank" href="' . $link_fb . '"><i class="fa fa-facebook " ></i></div></a><a target="_blank" href="' . $link_youtube . '"><i class="fa fa-youtube" ></i></div></a></div>';
		
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