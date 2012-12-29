<?php
// no direct access
defined('_JEXEC') or die;

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

$articleId = $params->get('article_id');
$db =& JFactory::getDBO();
$sql = "SELECT introtext FROM #__content WHERE id = ".intval($articleId);
$db->setQuery($sql);
$fullArticle = $db->loadResult();
if(!strlen(trim($fullArticle))) 
	$fullArticle = "Article is empty ";

$tmpl_url = JURI::root().'/modules/mod_article_lightbox/tmpl/';
$border_color = $params->get('border_color');
$dim_color = $params->get('dim_color');

require JModuleHelper::getLayoutPath('mod_article_lightbox', $params->get('layout', 'default'));
