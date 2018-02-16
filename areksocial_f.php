<?php
defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');

class plgSystemareksocial_f extends JPlugin{
	
	
	function onAfterRender()
	{
		
		$CSS_FOLDER = JURI::root() . 'plugins/system/areksocial_f/addons/';
		$areksocialcss ='<link type="text/css" rel="stylesheet" href= "' . $CSS_FOLDER . 'style.css" />';
		if ($this->params->get('awesome','') == '1')
			{$areksocialcss .= '<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">';}
	

		
		$app = JFactory::getApplication();
		$link_fb = $this->params->get('link_fb','');
		$link_youtube = $this->params->get('link_youtube','');
		$link_insta = $this->params->get('link_insta','');
		$document = JFactory::getDocument();

		
		$strOutputHTML = "";
		$strOutputHTML .= '<div class="aa-social">';
		if ($link_fb != '') {$strOutputHTML .= '<a target="_blank" href="' . $link_fb . '"><i class="fa fa-facebook " ></i></a>';};
		if ($link_youtube != '') {$strOutputHTML .= '<a target="_blank" href="' . $link_youtube . '"><i class="fa fa-youtube" ></i></a>';};
		if ($link_insta != '') {$strOutputHTML .= '<a target="_blank" href="' . $link_insta . '"><i class="fa fa-instagram" ></i></a>';};
		$strOutputHTML .= '</div>';
		
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