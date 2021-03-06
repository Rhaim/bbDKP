<?php
/**
 * abstract class aGameInstall
 * 
 * @package bbDKP\Game\library
 * @link http://www.bbdkp.com
 * @author Sajaki@gmail.com
 * @copyright 2013 bbdkp
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version 1.3.0
 */
namespace bbdkp;

/**
 * @ignore
 */
if (! defined('IN_PHPBB'))
{
	exit();
}
/**
 * Game interface
 *
 * @package 	bbDKP\Game\library
 * 
 */
abstract class aGameinstall 
{
	/**
	 * Install a game
	 */
	public function install()
	{
		$this->Installfactions();
		$this->InstallClasses();
		$this->InstallRaces();
		$this->InstallEventGroup();
	}
	
	/**
	 * Installs factions
	 */
	abstract function Installfactions();
	
	/**
	 * Installs game classes
	*/
	abstract function InstallClasses();
	
	/**
	 * Installs races
	*/
	abstract function InstallRaces();
	
	/**
	 * Install sample Event Groups
	 * an Event answers the 'what' question
	 */
	public function InstallEventGroup()
	{
		
	}

	/**
	 * install events
	 * leave implementation to daughter class
	 */
	private function InstallEvents()
	{
		
	}
	
	/**
	 * install worldprogress (bossprogress successor) 
	 * installs Lands, Dungeons, bosses 
	 */
	public function InstallWorld()
	{
		// @todo 
	}
}

?>