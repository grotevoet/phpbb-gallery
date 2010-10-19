<?php
/**
*
* info_acp_gallery [Nederlands]
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
	'ACP_GALLERY_ALBUM_MANAGEMENT'		=> 'Albumbeheer',
	'ACP_GALLERY_ALBUM_PERMISSIONS'		=> 'Albumpermissies',
	'ACP_GALLERY_ALBUM_PERMISSIONS_COPY'=> 'Kopieer permissies',
	'ACP_GALLERY_CLEANUP'				=> 'Galerij opruimen',
	'ACP_GALLERY_CONFIGURE_GALLERY'		=> 'Configureer Galerij',
	'ACP_GALLERY_LOGS'					=> 'Galerij-log',
	'ACP_GALLERY_LOGS_EXPLAIN'			=> 'Deze toont alle moderator-acties in de galerij, zoals goed- of afkeuren, (ont)sluiten, rapportages sluiten en afbeeldingen verwijderen.',
	'ACP_GALLERY_MANAGE_ALBUMS'			=> 'Beheer Albums',
	'ACP_GALLERY_OVERVIEW'				=> 'Overzicht',
	'ACP_IMPORT_ALBUMS'					=> 'Importeer Afbeeldingen',

	'GALLERY'							=> 'Galerij',
	'GALLERY_EXPLAIN'					=> 'Afbeeldingen Galerij',
	'GALLERY_HELPLINE_ALBUM'			=> 'Galerij afbeelding: [album]afbeelding#[/album], met deze BBCode kun je een afbeelding uit de galerij in je posting opnemen.',

	// A little line where you can give yourself some credits on the translation.
	'GALLERY_TRANSLATION_INFO'			=> 'Nederlandse "phpBB Galerij"-vertaling door <a href="http://marc.nsu.nl/">GroteVoet</a>',
	//'GALLERY_TRANSLATION_INFO'			=> '',

	'IMAGES'							=> 'Afbeeldingen',
	'IMG_BUTTON_UPLOAD_IMAGE'			=> 'Upload afbeelding',

	'PERSONAL_ALBUM'					=> 'Persoonlijk album',
	'PHPBB_GALLERY'						=> 'phpBB Galerij',

	'TOTAL_IMAGES_SPRINTF'				=> array(
		0		=> 'Aantal afbeeldingen <strong>0</strong>',
		1		=> 'Aantal afbeeldingen <strong>%d</strong>',
	),
));

?>