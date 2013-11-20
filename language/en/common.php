<?php
/**
*
* @package phpBB Extension - nachtelb/imprint
* @copyright (c) 2013 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'IMPRINT_PAGE'			=> 'Imprint',

	'ACP_IMPRINT_TITLE'			=> 'Imprint',
	'ACP_IMPRINT'					=> 'Content',
	'ACP_IMPRINT_CODE'			=> 'Content of Imprint-Page',
	'ACP_IMPRINT_SETTING_SAVED'	=> 'Settings have been saved successfully!'  
  
  
  
));
