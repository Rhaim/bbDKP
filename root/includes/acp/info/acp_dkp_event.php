<?php
/**
* This class manages Events 
* 
* Powered by bbdkp © 2009 The bbDkp Project Team
* If you use this software and find it to be useful, we ask that you
* retain the copyright notice below.  While not required for free use,
* it will help build interest in the bbDkp project.
*
* @package bbDkp.acp
* @version $Id$
* @copyright (c) 2009 bbdkp http://code.google.com/p/bbdkp/
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* 
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* @package module_install
*/


class acp_dkp_event_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_dkp_event',
			'title'		=> 'ACP_DKP_EVENT',
			'version'	=> '1.1.0',
			'modes'		=> array(
				'addevent'			=> array('title' => 'ACP_DKP_EVENT_ADD', 'auth' => 'acl_a_dkp', 'cat' => array('ACP_DKP_EVENT') , 'display' => false),
				'listevents'		=> array('title' => 'ACP_DKP_EVENT_LIST', 'auth' => 'acl_a_dkp', 'cat' => array('ACP_DKP_EVENT')),
				),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}

?>
