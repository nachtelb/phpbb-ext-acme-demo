<?php
/**
*
* @package phpBB Extension - nachtelb/imprint
* @copyright (c) 2013 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace nachtelb\imprint\controller;

/**
* @ignore
*/

class main
{
	/* @var \phpbb\config\config */
	protected $config;

	/* @var \phpbb\controller\helper */
	protected $helper;

	/* @var \phpbb\template\template */
	protected $template;

	/* @var \phpbb\user */
	protected $user;

	/**
	* Constructor
	*
	* @param \phpbb\config\config		$config
	* @param \phpbb\controller\helper	$helper
	* @param \phpbb\template\template	$template
	* @param \phpbb\user				$user
	* 		$this->template->assign_var('IMPRINT_CONTENT', $this->config->nachtelb_imprint_code($nachtelb_imprint_code));  
	*/
	public function __construct(\phpbb\config\config $config, \phpbb\controller\helper $helper, \phpbb\template\template $template, \phpbb\user $user)
	{
		$this->config = $config;
		$this->helper = $helper;
		$this->template = $template;
		$this->user = $user;
	}

	/**
	* controller for route /imprint/{name}
	*
	* @param string		$name
	* @return Symfony\Component\HttpFoundation\Response A Symfony Response object
	*/
	public function handle($name)
	{
		$this->template->assign_var('imprint', $name);
		$this->template->assign_var('IMPRINT_CONTENT', $this->config->nachtelb_imprint_code($nachtelb_imprint_code));
 
		return $this->helper->render('imprint.html', $name);
	}
}
