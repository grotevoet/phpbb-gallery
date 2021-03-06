<?php
/**
*
* info_acp_gallery_logs [Nederlands]
*
* @package phpBB Gallery
* @version $Id$
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
	'LOG_ALBUM_ADD'							=> '<strong>Nieuw album aangemaakt</strong><br />» %s',
	'LOG_ALBUM_DEL_ALBUM'					=> '<strong>Album verwijderd</strong><br />» %s',
	'LOG_ALBUM_DEL_ALBUMS'					=> '<strong>Album met subalbums verwijderd</strong><br />» %s',
	'LOG_ALBUM_DEL_MOVE_ALBUMS'				=> '<strong>Album verwijderd en subalbums verplaatst</strong> naar %1$s<br />» %2$s',
	'LOG_ALBUM_DEL_MOVE_IMAGES'				=> '<strong>Album verwijderd en afbeeldingen verplaatst</strong> naar %1$s<br />» %2$s',
	'LOG_ALBUM_DEL_MOVE_IMAGES_ALBUMS'		=> '<strong>Album met subalbums verwijderd, afbeeldingen verplaatst</strong> naar %1$s<br />» %2$s',
	'LOG_ALBUM_DEL_MOVE_IMAGES_MOVE_ALBUMS'	=> '<strong>Album verwijderd, Afbeeldingen verplaatst</strong> naar %1$s <strong>en subalbums</strong> naar %2$s<br />» %3$s',
	'LOG_ALBUM_DEL_IMAGES'					=> '<strong>Album en afbeeldingen verwijderd</strong><br />» %s',
	'LOG_ALBUM_DEL_IMAGES_ALBUMS'			=> '<strong>Album, subalbums en afbeeldingen verwijderd</strong><br />» %s',
	'LOG_ALBUM_DEL_IMAGES_MOVE_ALBUMS'		=> '<strong>Album en afbeeldingen verwijderd, subalbums verplaatst</strong> naar %1$s<br />» %2$s',
	'LOG_ALBUM_EDIT'						=> '<strong>Album details bewerkt</strong><br />» %s',
	'LOG_ALBUM_MOVE_DOWN'					=> '<strong>Album</strong> %1$s verplaatst naar <strong>onder</strong> %2$s',
	'LOG_ALBUM_MOVE_UP'						=> '<strong>Album</strong> %1$s verplaatst naar <strong>boven</strong> %2$s',
	'LOG_ALBUM_SYNC'						=> '<strong>Hersynchronisatie album</strong><br />» %s',

	'LOG_CLEAR_GALLEY'					=> 'Galerij-log opgeschoond',

	'LOG_GALLERY_APPROVED'				=> '<strong>Afbeelding goedgekeurd</strong><br />» %s',
	'LOG_GALLERY_COMMENT_DELETED'		=> '<strong>Commentaar verwijderd</strong><br />» %s',
	'LOG_GALLERY_COMMENT_EDITED'		=> '<strong>Commentaar bewerkt</strong><br />» %s',
	'LOG_GALLERY_DELETED'				=> '<strong>Afbeelding verwijderd</strong><br />» %s',
	'LOG_GALLERY_EDITED'				=> '<strong>Afbeelding bewerkt</strong><br />» %s',
	'LOG_GALLERY_LOCKED'				=> '<strong>Afbeelding afgesloten</strong><br />» %s',
	'LOG_GALLERY_MOVED'					=> '<strong>Afbeelding verplaatst</strong><br />» van %1$s naar %2$s',
	'LOG_GALLERY_REPORT_CLOSED'			=> '<strong>Rapportage gesloten</strong><br />» %s',
	'LOG_GALLERY_REPORT_DELETED'		=> '<strong>Rapportage verwijderd</strong><br />» %s',
	'LOG_GALLERY_REPORT_OPENED'			=> '<strong>Rapportage heropend</strong><br />» %s',
	'LOG_GALLERY_UNAPPROVED'			=> '<strong>Afbeelding afgekeurd</strong><br />» %s',

	'LOGVIEW_VIEWALBUM'					=> 'Bekijk album',
	'LOGVIEW_VIEWIMAGE'					=> 'Bekijk afbeelding',
));

?>