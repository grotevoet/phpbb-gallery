<?php
/**
*
* info_ucp_gallery [Nederlands]
*
* @package phpBB Gallery
* @version $Id: info_ucp_gallery.php 93 2009-02-12 19:13:56Z GroteVoet $
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

$lang = array_merge($lang, array(
	'UCP_GALLERY'						=> 'Galerij',
	'UCP_GALLERY_FAVORITES'				=> 'Beheer favorieten',
	'UCP_GALLERY_PERSONAL_ALBUMS'		=> 'Beheer persoonlijke albums',
	'UCP_GALLERY_SETTINGS'				=> 'Persoonlijke instellingen',
	'UCP_GALLERY_WATCH'					=> 'Beheer abonnementen',
));

?>