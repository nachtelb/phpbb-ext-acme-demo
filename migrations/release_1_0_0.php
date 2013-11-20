<?php
/**
*
* @package phpBB Extension - nachtelb/imprint
* @copyright (c) 2013 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace nachtelb\imprint\migrations;

class release_1_0_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['nachtelb_imprint_code']);
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\alpha2');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('nachtelb_imprint_code', '')),

			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_IMPRINT_TITLE'
			)),
			array('module.add', array(
				'acp',
				'ACP_IMPRINT_TITLE',
				array(
					'module_basename'	=> '\nachtelb\imprint\acp\main_module',
					'modes'				=> array('settings'),
				),
			)),
		);
	}
}
