<?php
/**
*
* @package phpBB Extension - nachtelb/imprint
* @copyright (c) 2013 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace nachtelb\imprint\acp;

class main_info
{
	function module()
	{
		return array(
			'filename'	=> '\nachtelb\imprint\acp\main_module',
			'title'		=> 'ACP_IMPRINT_TITLE',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'settings'	=> array('title' => 'ACP_IMPRINT', 'auth' => 'acl_a_board', 'cat' => array('ACP_IMPRINT_TITLE')),
			),
		);
	}
}
