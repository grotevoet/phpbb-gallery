<?php
/**
*
* @package phpBB Gallery
* @version $Id$
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
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
if (!defined('IN_INSTALL'))
{
	exit;
}

$oudated_files = array(
	'adm/style/acp_gallery.html',
	'adm/style/gallery_config.html',
	'gallery/album_personal.php',
	'gallery/album_personal_index.php',
	'gallery/edit.php',
	'gallery/image_delete.php',
	'gallery/import/.htaccess',
	'gallery/import/index.htm',
	'gallery/includes/acp_functions.php',
	'gallery/includes/ucp_functions.php',
	'gallery/index.htm',
	'gallery/install.php',
	'gallery/mark.png',
	'gallery/thumbnail.php',
	'gallery/upload.php',
	'gallery/upload/.htaccess',
	'gallery/upload/Thumbs.db',
	'gallery/upload/cache/.htaccess',
	'gallery/upload/cache/Thumbs.db',
	'gallery/upload/cache/index.htm',
	'gallery/upload/cache/index.html',
	'gallery/upload/index.htm',
	'gallery/upload/index.html',
	'language/de/mods/gallery_install.php',
	'language/en/mods/gallery_install.php',
	'styles/prosilver/imageset/Thumbs.db',
	'styles/prosilver/imageset/de/g_reported.gif',
	'styles/prosilver/imageset/de/g_unapproved.gif',
	'styles/prosilver/imageset/en/Thumbs.db',
	'styles/prosilver/imageset/en/g_reported.gif',
	'styles/prosilver/imageset/en/g_unapproved.gif',
	'styles/prosilver/template/album_cat_body.html',
	'styles/prosilver/template/album_edit_body.html',
	'styles/prosilver/template/album_index_body.html',
	'styles/prosilver/template/album_modcp_body.html',
	'styles/prosilver/template/album_move_body.html',
	'styles/prosilver/template/album_page_body.html',
	'styles/prosilver/template/album_personal_body.html',
	'styles/prosilver/template/album_personal_index_body.html',
	'styles/prosilver/template/album_upload_body.html',
	'styles/prosilver/template/gallery_album_body.html',
	'styles/prosilver/template/gallery_albumlist_body.html',
	'styles/prosilver/template/gallery_edit_body.html',
	'styles/prosilver/template/gallery_index_body.html',
	'styles/prosilver/template/gallery_lytebox.js',
	'styles/prosilver/template/gallery_mcp_body.html',
	'styles/prosilver/template/gallery_modcp_body.html',
	'styles/prosilver/template/gallery_move_body.html',
	'styles/prosilver/template/gallery_page_body.html',
	'styles/prosilver/template/gallery_personal_body.html',
	'styles/prosilver/template/gallery_personal_index_body.html',
	'styles/prosilver/template/gallery_posting_body.html',
	'styles/prosilver/template/gallery_recent_body.html',
	'styles/prosilver/template/gallery_search_result_body.html',
	'styles/prosilver/template/gallery_upload_body.html',
	'styles/prosilver/template/ucp_gallery.html',
	'styles/prosilver/theme/gallery_lytebox.css',
	'styles/prosilver/theme/images/gallery_lytebox/blank.gif',
	'styles/prosilver/theme/images/gallery_lytebox/close_grey.png',
	'styles/prosilver/theme/images/gallery_lytebox/loading.gif',
	'styles/prosilver/theme/images/gallery_lytebox/next_grey.gif',
	'styles/prosilver/theme/images/gallery_lytebox/pause_grey.png',
	'styles/prosilver/theme/images/gallery_lytebox/play_grey.png',
	'styles/prosilver/theme/images/gallery_lytebox/prev_grey.gif',
	'styles/subsilver2/imageset/de/g_reported.gif',
	'styles/subsilver2/imageset/de/g_unapproved.gif',
	'styles/subsilver2/imageset/en/g_reported.gif',
	'styles/subsilver2/imageset/en/g_unapproved.gif',
	'styles/subsilver2/template/gallery_album_body.html',
	'styles/subsilver2/template/gallery_albumlist_body.html',
	'styles/subsilver2/template/gallery_edit_body.html',
	'styles/subsilver2/template/gallery_index_body.html',
	'styles/subsilver2/template/gallery_lytebox.js',
	'styles/subsilver2/template/gallery_mcp_body.html',
	'styles/subsilver2/template/gallery_modcp_body.html',
	'styles/subsilver2/template/gallery_move_body.html',
	'styles/subsilver2/template/gallery_page_body.html',
	'styles/subsilver2/template/gallery_personal_body.html',
	'styles/subsilver2/template/gallery_personal_index_body.html',
	'styles/subsilver2/template/gallery_posting_body.html',
	'styles/subsilver2/template/gallery_recent_body.html',
	'styles/subsilver2/template/gallery_search_result_body.html',
	'styles/subsilver2/template/gallery_upload_body.html',
	'styles/subsilver2/template/ucp_gallery.html',
	'styles/subsilver2/theme/gallery_lytebox.css',
	'styles/subsilver2/theme/images/gallery_lytebox/blank.gif',
	'styles/subsilver2/theme/images/gallery_lytebox/close_grey.png',
	'styles/subsilver2/theme/images/gallery_lytebox/loading.gif',
	'styles/subsilver2/theme/images/gallery_lytebox/next_grey.gif',
	'styles/subsilver2/theme/images/gallery_lytebox/pause_grey.png',
	'styles/subsilver2/theme/images/gallery_lytebox/play_grey.png',
	'styles/subsilver2/theme/images/gallery_lytebox/prev_grey.gif',
);

?>