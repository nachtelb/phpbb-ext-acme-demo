<?php
/**
*
* @package phpBB Extension - nachtelb/imprint
* @copyright (c) 2013 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace nachtelb\imprint\acp;

class main_module
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache, $request;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

		$user->add_lang('acp/common');
		$this->tpl_name = 'imprint_body';
		$this->page_title = $user->lang('ACP_IMPRINT_TITLE');
		add_form_key('nachtelb/imprint');

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('nachtelb/imprint'))
			{
				trigger_error('FORM_INVALID');
			}

			$config->set('nachtelb_imprint_code', $request->variable('nachtelb_imprint_code', 0));

			trigger_error($user->lang('ACP_IMPRINT_SETTING_SAVED') . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'U_ACTION'				=> $this->u_action,
			'NACHTELB_IMPRINT_CODE'		=> $config['nachtelb_imprint_code'],
		));
	}
}
