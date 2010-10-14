<?php
/**
*
* permissions_gallery [Nederlands]
*
* @package phpBB Gallery
* @version $Id: permissions_gallery.php 109 2009-03-18 19:41:37Z GroteVoet $
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
**/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}
 
$lang['permission_cat']['gallery'] = 'phpBB Galerij';

// Adding the permissions
$lang = array_merge($lang, array(
	'acl_a_gallery_manage'		=> array('lang' => 'Kan de phpBB Galerij aanpassingen beheren', 'cat' => 'gallery'),
	'acl_a_gallery_albums'		=> array('lang' => 'Kan albums en permissies toevoegen/bewerken', 'cat' => 'gallery'),
	'acl_a_gallery_import'		=> array('lang' => 'Kan de importeerfunctie gebruiken', 'cat' => 'gallery'),
	'acl_a_gallery_cleanup'		=> array('lang' => 'Kan de phpBB Galerij opruimen', 'cat' => 'gallery'),
));
?>