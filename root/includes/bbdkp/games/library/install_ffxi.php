<?php
/**
 * bbdkp FFXI install data
 * 
 * @package 	bbDKP\Game\library
 * @link http://www.bbdkp.com
 * @author Sajaki@gmail.com
 * @copyright 2013 bbdkp
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version 1.3.0
 *
 */
namespace bbdkp;
/**
 * @ignore
 */
if (! defined ( 'IN_PHPBB' ))
{
	exit ();
}

$phpEx = substr(strrchr(__FILE__, '.'), 1);
global $phpbb_root_path;

if (!class_exists('\bbdkp\aGameinstall'))
{
	require("{$phpbb_root_path}includes/bbdkp/games/library/aGameinstall.$phpEx");
}

/**
 * FFXI Installer Class
 * @package bbDKP\Game\library
 *
 */
class install_ffxi extends \bbdkp\aGameinstall
{
	
	/**
	 * Installs factions
	 */
	public function Installfactions()
	{
		global  $db, $table_prefix, $umil, $user;
		
		// factions
		$db->sql_query('DELETE FROM ' . $table_prefix . "bbdkp_factions where game_id = 'FFXI'" );
		$sql_ary = array();
		$sql_ary[] = array('game_id' => 'FFXI','faction_id' => 1, 'faction_name' => 'Bastok' );
		$sql_ary[] = array('game_id' => 'FFXI','faction_id' => 2, 'faction_name' => 'San d\'Oria' );
		$sql_ary[] = array('game_id' => 'FFXI','faction_id' => 3, 'faction_name' => 'Windurst' );
		$sql_ary[] = array('game_id' => 'FFXI','faction_id' => 4, 'faction_name' => 'Jueno' );
		$db->sql_multi_insert( $table_prefix . 'bbdkp_factions', $sql_ary);
		unset ($sql_ary);
		
	}
		
	
	/**
	 * Installs game classes
	*/
	public function InstallClasses()
	{
		global  $db, $table_prefix, $umil, $user;


		// class :
		$db->sql_query('DELETE FROM ' . $table_prefix . "bbdkp_classes where game_id = 'FFXI'" );
		$sql_ary = array();
		$sql_ary[] = array('game_id' => 'FFXI','class_id' => 0, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 1 , 'class_max_level'  => 75, 'imagename' => 'ffxi_unknown' );
		$sql_ary[] = array('game_id' => 'FFXI','class_id' => 1, 'class_armor_type' => 'PLATE' , 'class_min_level' => 1 , 'class_max_level'  => 75, 'imagename' => 'ffxi_warrior' );
		$sql_ary[] = array('game_id' => 'FFXI','class_id' => 2, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 1 , 'class_max_level'  => 75, 'imagename' => 'ffxi_monk' );
		$sql_ary[] = array('game_id' => 'FFXI','class_id' => 3, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 1 , 'class_max_level'  => 75, 'imagename' => 'ffxi_thief' );
		$sql_ary[] = array('game_id' => 'FFXI','class_id' => 4, 'class_armor_type' => 'CLOTH' , 'class_min_level' => 1 , 'class_max_level'  => 75, 'imagename' => 'ffxi_white_mage' );
		$sql_ary[] = array('game_id' => 'FFXI','class_id' => 5, 'class_armor_type' => 'CLOTH' , 'class_min_level' => 1 , 'class_max_level'  => 75, 'imagename' => 'ffxi_black_mage' );
		$sql_ary[] = array('game_id' => 'FFXI','class_id' => 6, 'class_armor_type' => 'CLOTH' , 'class_min_level' => 1 , 'class_max_level'  => 75, 'imagename' => 'ffxi_blue_mage' );
		$sql_ary[] = array('game_id' => 'FFXI','class_id' => 7, 'class_armor_type' => 'CLOTH' , 'class_min_level' => 1 , 'class_max_level'  => 75, 'imagename' => 'ffxi_red_mage' );
		$sql_ary[] = array('game_id' => 'FFXI','class_id' => 8, 'class_armor_type' => 'PLATE' , 'class_min_level' => 1 , 'class_max_level'  => 75 , 'imagename' => 'ffxi_paladin' );
		$sql_ary[] = array('game_id' => 'FFXI','class_id' => 9, 'class_armor_type' => 'PLATE' , 'class_min_level' => 1 , 'class_max_level'  => 75 , 'imagename' => 'ffxi_dark_knight' );
		$sql_ary[] = array('game_id' => 'FFXI','class_id' => 10, 'class_armor_type' => 'MAIL' , 'class_min_level' => 1 , 'class_max_level'  => 75 , 'imagename' => 'ffxi_dragoon' );
		$sql_ary[] = array('game_id' => 'FFXI','class_id' => 11, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 1 , 'class_max_level'  => 75 , 'imagename' => 'ffxi_ninja' );
		$sql_ary[] = array('game_id' => 'FFXI','class_id' => 12, 'class_armor_type' => 'MAIL' , 'class_min_level' => 1 , 'class_max_level'  => 75 , 'imagename' => 'ffxi_samurai' );
		$sql_ary[] = array('game_id' => 'FFXI','class_id' => 13, 'class_armor_type' => 'CLOTH' , 'class_min_level' => 1 , 'class_max_level'  => 75 , 'imagename' => 'ffxi_summoner' );
		$sql_ary[] = array('game_id' => 'FFXI','class_id' => 14, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 1 , 'class_max_level'  => 75 , 'imagename' => 'ffxi_ranger' );
		$sql_ary[] = array('game_id' => 'FFXI','class_id' => 15, 'class_armor_type' => 'CLOTH' , 'class_min_level' => 1 , 'class_max_level'  => 75 , 'imagename' => 'ffxi_dancer' );
		$sql_ary[] = array('game_id' => 'FFXI','class_id' => 16, 'class_armor_type' => 'CLOTH' , 'class_min_level' => 1 , 'class_max_level'  => 75 , 'imagename' => 'ffxi_scholar' );
		$sql_ary[] = array('game_id' => 'FFXI','class_id' => 17, 'class_armor_type' => 'MAIL' , 'class_min_level' => 1 , 'class_max_level'  => 75 , 'imagename' => 'ffxi_corsair' );
		$sql_ary[] = array('game_id' => 'FFXI','class_id' => 18, 'class_armor_type' => 'MAIL' , 'class_min_level' => 1 , 'class_max_level'  => 75 , 'imagename' => 'ffxi_bard' );
		$sql_ary[] = array('game_id' => 'FFXI','class_id' => 19, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 1 , 'class_max_level'  => 75 , 'imagename' => 'ffxi_beastmaster' );
		$sql_ary[] = array('game_id' => 'FFXI','class_id' => 20, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 1 , 'class_max_level'  => 75 , 'imagename' => 'ffxi_puppetmaster' );
		$db->sql_multi_insert( $table_prefix . 'bbdkp_classes', $sql_ary);
		unset ($sql_ary);

		// Language table
		$db->sql_query('DELETE FROM ' . $table_prefix . "bbdkp_language  where game_id = 'FFXI' and attribute='class' ");
		
		$sql_ary = array();
		$sql_ary[] = array('game_id' => 'FFXI','attribute_id' => 0, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Unknown' ,  'name_short' =>  'Unknown' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 1, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Warrior' ,  'name_short' =>  'Warrior' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 2, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Monk' ,  'name_short' =>  'Monk' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 3, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Thief' ,  'name_short' =>  'Thief' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 4, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'White Mage' ,  'name_short' =>  'White Mage' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 5, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Black Mage' ,  'name_short' =>  'Black Mage' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 6, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Blue Mage' ,  'name_short' =>  'Blue Mage' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 7, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Red Mage' ,  'name_short' =>  'Red Mage' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 8, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Paladin' ,  'name_short' =>  'Paladin' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 9, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Dark Knight' ,  'name_short' =>  'Dark Knight' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 10, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Dragoon' ,  'name_short' =>  'Dragoon' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 11, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Ninja' ,  'name_short' =>  'Ninja' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 12, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Samurai' ,  'name_short' =>  'Samurai' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 13, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Summoner' ,  'name_short' =>  'Summoner' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 14, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Ranger' ,  'name_short' =>  'Ranger' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 15, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Dancer' ,  'name_short' =>  'Dancer' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 16, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Scholar' ,  'name_short' =>  'Scholar' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 17, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Corsair' ,  'name_short' =>  'Corsair' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 18, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Bard' ,  'name_short' =>  'Bard' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 19, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Beastmaster' ,  'name_short' =>  'Beastmaster' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 20, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Puppetmaster' ,  'name_short' =>  'Puppetmaster' );
		
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 0, 'language' =>  'fr' , 'attribute' =>  'class' , 'name' =>  'Unknown' ,  'name_short' =>  'Unknown' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 1, 'language' =>  'fr' , 'attribute' =>  'class' , 'name' =>  'Warrior' ,  'name_short' =>  'Warrior' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 2, 'language' =>  'fr' , 'attribute' =>  'class' , 'name' =>  'Monk' ,  'name_short' =>  'Monk' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 3, 'language' =>  'fr' , 'attribute' =>  'class' , 'name' =>  'Thief' ,  'name_short' =>  'Thief' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 4, 'language' =>  'fr' , 'attribute' =>  'class' , 'name' =>  'White Mage' ,  'name_short' =>  'White Mage' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 5, 'language' =>  'fr' , 'attribute' =>  'class' , 'name' =>  'Black Mage' ,  'name_short' =>  'Black Mage' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 6, 'language' =>  'fr' , 'attribute' =>  'class' , 'name' =>  'Blue Mage' ,  'name_short' =>  'Blue Mage' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 7, 'language' =>  'fr' , 'attribute' =>  'class' , 'name' =>  'Red Mage' ,  'name_short' =>  'Red Mage' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 8, 'language' =>  'fr' , 'attribute' =>  'class' , 'name' =>  'Paladin' ,  'name_short' =>  'Paladin' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 9, 'language' =>  'fr' , 'attribute' =>  'class' , 'name' =>  'Dark Knight' ,  'name_short' =>  'Dark Knight' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 10, 'language' =>  'fr' , 'attribute' =>  'class' , 'name' =>  'Dragoon' ,  'name_short' =>  'Dragoon' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 11, 'language' =>  'fr' , 'attribute' =>  'class' , 'name' =>  'Ninja' ,  'name_short' =>  'Ninja' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 12, 'language' =>  'fr' , 'attribute' =>  'class' , 'name' =>  'Samurai' ,  'name_short' =>  'Samurai' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 13, 'language' =>  'fr' , 'attribute' =>  'class' , 'name' =>  'Summoner' ,  'name_short' =>  'Summoner' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 14, 'language' =>  'fr' , 'attribute' =>  'class' , 'name' =>  'Ranger' ,  'name_short' =>  'Ranger' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 15, 'language' =>  'fr' , 'attribute' =>  'class' , 'name' =>  'Dancer' ,  'name_short' =>  'Dancer' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 16, 'language' =>  'fr' , 'attribute' =>  'class' , 'name' =>  'Scholar' ,  'name_short' =>  'Scholar' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 17, 'language' =>  'fr' , 'attribute' =>  'class' , 'name' =>  'Corsair' ,  'name_short' =>  'Corsair' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 18, 'language' =>  'fr' , 'attribute' =>  'class' , 'name' =>  'Bard' ,  'name_short' =>  'Bard' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 19, 'language' =>  'fr' , 'attribute' =>  'class' , 'name' =>  'Beastmaster' ,  'name_short' =>  'Beastmaster' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 20, 'language' =>  'fr' , 'attribute' =>  'class' , 'name' =>  'Puppetmaster' ,  'name_short' =>  'Puppetmaster' );
		
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 0, 'language' =>  'de' , 'attribute' =>  'class' , 'name' =>  'Unknown' ,  'name_short' =>  'Unknown' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 1, 'language' =>  'de' , 'attribute' =>  'class' , 'name' =>  'Warrior' ,  'name_short' =>  'Warrior' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 2, 'language' =>  'de' , 'attribute' =>  'class' , 'name' =>  'Monk' ,  'name_short' =>  'Monk' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 3, 'language' =>  'de' , 'attribute' =>  'class' , 'name' =>  'Thief' ,  'name_short' =>  'Thief' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 4, 'language' =>  'de' , 'attribute' =>  'class' , 'name' =>  'White Mage' ,  'name_short' =>  'White Mage' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 5, 'language' =>  'de' , 'attribute' =>  'class' , 'name' =>  'Black Mage' ,  'name_short' =>  'Black Mage' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 6, 'language' =>  'de' , 'attribute' =>  'class' , 'name' =>  'Blue Mage' ,  'name_short' =>  'Blue Mage' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 7, 'language' =>  'de' , 'attribute' =>  'class' , 'name' =>  'Red Mage' ,  'name_short' =>  'Red Mage' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 8, 'language' =>  'de' , 'attribute' =>  'class' , 'name' =>  'Paladin' ,  'name_short' =>  'Paladin' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 9, 'language' =>  'de' , 'attribute' =>  'class' , 'name' =>  'Dark Knight' ,  'name_short' =>  'Dark Knight' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 10, 'language' =>  'de' , 'attribute' =>  'class' , 'name' =>  'Dragoon' ,  'name_short' =>  'Dragoon' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 11, 'language' =>  'de' , 'attribute' =>  'class' , 'name' =>  'Ninja' ,  'name_short' =>  'Ninja' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 12, 'language' =>  'de' , 'attribute' =>  'class' , 'name' =>  'Samurai' ,  'name_short' =>  'Samurai' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 13, 'language' =>  'de' , 'attribute' =>  'class' , 'name' =>  'Summoner' ,  'name_short' =>  'Summoner' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 14, 'language' =>  'de' , 'attribute' =>  'class' , 'name' =>  'Ranger' ,  'name_short' =>  'Ranger' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 15, 'language' =>  'de' , 'attribute' =>  'class' , 'name' =>  'Dancer' ,  'name_short' =>  'Dancer' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 16, 'language' =>  'de' , 'attribute' =>  'class' , 'name' =>  'Scholar' ,  'name_short' =>  'Scholar' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 17, 'language' =>  'de' , 'attribute' =>  'class' , 'name' =>  'Corsair' ,  'name_short' =>  'Corsair' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 18, 'language' =>  'de' , 'attribute' =>  'class' , 'name' =>  'Bard' ,  'name_short' =>  'Bard' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 19, 'language' =>  'de' , 'attribute' =>  'class' , 'name' =>  'Beastmaster' ,  'name_short' =>  'Beastmaster' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 20, 'language' =>  'de' , 'attribute' =>  'class' , 'name' =>  'Puppetmaster' ,  'name_short' =>  'Puppetmaster' );
		
		$db->sql_multi_insert ( $table_prefix . 'bbdkp_language', $sql_ary );
		unset ( $sql_ary );
		
	}
	
	/**
	 * Installs races
	*/
	public function InstallRaces()
	{
		global  $db, $table_prefix, $umil, $user;
		
		$db->sql_query('DELETE FROM ' . $table_prefix . "bbdkp_races  where game_id = 'FFXI'");
		$sql_ary = array();
		$sql_ary[] = array('game_id' => 'FFXI','race_id' => 1, 'race_faction_id' => 3 ); //Unknown
		$sql_ary[] = array('game_id' => 'FFXI','race_id' => 2, 'race_faction_id' => 1 ); //Galka
		$sql_ary[] = array('game_id' => 'FFXI','race_id' => 3, 'race_faction_id' => 1 ); //Hume
		$sql_ary[] = array('game_id' => 'FFXI','race_id' => 4, 'race_faction_id' => 2 ); ///Elvaan
		$sql_ary[] = array('game_id' => 'FFXI','race_id' => 5, 'race_faction_id' => 3 ); //Tarutaru
		$sql_ary[] = array('game_id' => 'FFXI','race_id' => 6, 'race_faction_id' => 3 ); //Mithra
		$db->sql_multi_insert( $table_prefix . 'bbdkp_races', $sql_ary);
		

		// Language table
		$db->sql_query('DELETE FROM ' . $table_prefix . "bbdkp_language  where game_id = 'FFXI' and attribute='race' ");
		$sql_ary = array();
		
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 1, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'Unknown' ,  'name_short' =>  'Unknown' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 2, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'Galka' ,  'name_short' =>  'Galka' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 3, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'Hume' ,  'name_short' =>  'Hume' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 4, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'Elvaan' ,  'name_short' =>  'Elvaan' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 5, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'Tarutaru' ,  'name_short' =>  'Tarutaru' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 6, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'Mithra' ,  'name_short' =>  'Mithra' );
		
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 1, 'language' =>  'fr' , 'attribute' =>  'race' , 'name' =>  'Unknown' ,  'name_short' =>  'Unknown' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 2, 'language' =>  'fr' , 'attribute' =>  'race' , 'name' =>  'Galka' ,  'name_short' =>  'Galka' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 3, 'language' =>  'fr' , 'attribute' =>  'race' , 'name' =>  'Hume' ,  'name_short' =>  'Hume' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 4, 'language' =>  'fr' , 'attribute' =>  'race' , 'name' =>  'Elvaan' ,  'name_short' =>  'Elvaan' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 5, 'language' =>  'fr' , 'attribute' =>  'race' , 'name' =>  'Tarutaru' ,  'name_short' =>  'Tarutaru' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 6, 'language' =>  'fr' , 'attribute' =>  'race' , 'name' =>  'Mithra' ,  'name_short' =>  'Mithra' );
		
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 1, 'language' =>  'de' , 'attribute' =>  'race' , 'name' =>  'Unknown' ,  'name_short' =>  'Unknown' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 2, 'language' =>  'de' , 'attribute' =>  'race' , 'name' =>  'Galka' ,  'name_short' =>  'Galka' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 3, 'language' =>  'de' , 'attribute' =>  'race' , 'name' =>  'Hume' ,  'name_short' =>  'Hume' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 4, 'language' =>  'de' , 'attribute' =>  'race' , 'name' =>  'Elvaan' ,  'name_short' =>  'Elvaan' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 5, 'language' =>  'de' , 'attribute' =>  'race' , 'name' =>  'Tarutaru' ,  'name_short' =>  'Tarutaru' );
		$sql_ary[] = array('game_id' => 'FFXI', 'attribute_id' => 6, 'language' =>  'de' , 'attribute' =>  'race' , 'name' =>  'Mithra' ,  'name_short' =>  'Mithra' );
		$db->sql_multi_insert ( $table_prefix . 'bbdkp_language', $sql_ary );
		unset ( $sql_ary );
		
	}
	

}



?>