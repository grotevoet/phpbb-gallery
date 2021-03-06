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

class phpbb_gallery_image
{
	const STATUS_UNAPPROVED	= 0;
	const STATUS_APPROVED	= 1;
	const STATUS_LOCKED		= 2;

	const NO_CONTEST = 0;
	const IN_CONTEST = 1;

	/**
	* Get image information
	*/
	static public function get_info($image_id, $extended_info = true)
	{
		global $db, $user;

		$sql_array = array(
			'SELECT'		=> '*',
			'FROM'			=> array(GALLERY_IMAGES_TABLE => 'i'),
			'WHERE'			=> 'i.image_id = ' . (int) $image_id,
		);

		if ($extended_info)
		{
			$sql_array['LEFT_JOIN'] = array(
				array(
					'FROM'		=> array(GALLERY_WATCH_TABLE => 'w'),
					'ON'		=> 'i.image_id = w.image_id AND w.user_id = ' . $user->data['user_id'],
				),
				array(
					'FROM'		=> array(GALLERY_FAVORITES_TABLE => 'f'),
					'ON'		=> 'i.image_id = f.image_id AND f.user_id = ' . $user->data['user_id'],
				),
			);
		}
		$sql = $db->sql_build_query('SELECT', $sql_array);

		$result = $db->sql_query($sql);
		$row = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);

		if (!$row)
		{
			meta_refresh(3, phpbb_gallery_url::append_sid('index'));
			trigger_error('IMAGE_NOT_EXIST');
		}

		return $row;
	}

	/**
	* Assigns an image with all data to the defined template-block
	*
	* @param string	$template_block	Name of the template-block
	* @param array	$image_data		Array with the image-data, all columns of GALLERY_IMAGES_TABLE are needed. album_name may be additionally assigned
	*/
	static public function assign_block($template_block, &$image_data, $album_status, $display = 126, $album_user_id = -1)
	{
		global $auth, $template, $user;

		$st	= request_var('st', 0);
		$sk	= request_var('sk', phpbb_gallery_config::get('default_sort_key'));
		$sd	= request_var('sd', phpbb_gallery_config::get('default_sort_dir'));

		$image_data['rating'] = $user->lang['NOT_RATED'];
		if ($image_data['image_rates'])
		{
			$image_data['rating'] = sprintf((($image_data['image_rates'] == 1) ? $user->lang['RATE_STRING'] : $user->lang['RATES_STRING']), $image_data['image_rate_avg'] / 100, $image_data['image_rates']);
		}
		// Hide the result, while still rating on contests
		if ($image_data['image_contest'])
		{
			$image_data['rating'] = $user->lang['CONTEST_RATING_HIDDEN'];
		}

		$perm_user_id = ($user->data['user_perm_from'] == 0) ? $user->data['user_id'] : $user->data['user_perm_from'];
		$allow_edit = ((phpbb_gallery::$auth->acl_check('i_edit', $image_data['image_album_id'], $album_user_id) && ($image_data['image_user_id'] == $perm_user_id) && ($album_status != phpbb_gallery_album::STATUS_LOCKED)) || phpbb_gallery::$auth->acl_check('m_edit', $image_data['image_album_id'], $album_user_id)) ? true : false;
		$allow_delete = ((phpbb_gallery::$auth->acl_check('i_delete', $image_data['image_album_id'], $album_user_id) && ($image_data['image_user_id'] == $perm_user_id) && ($album_status != phpbb_gallery_album::STATUS_LOCKED)) || phpbb_gallery::$auth->acl_check('m_delete', $image_data['image_album_id'], $album_user_id)) ? true : false;

		$template->assign_block_vars($template_block, array(
			'IMAGE_ID'		=> $image_data['image_id'],
			'UC_IMAGE_NAME'	=> ($display & phpbb_gallery_constants::RRC_DISPLAY_IMAGENAME) ? self::generate_link('image_name', phpbb_gallery_config::get('link_image_name'), $image_data['image_id'], $image_data['image_name'], $image_data['image_album_id'], false, true, "&amp;sk={$sk}&amp;sd={$sd}&amp;st={$st}") : '',
			'UC_THUMBNAIL'	=> self::generate_link('thumbnail', phpbb_gallery_config::get('link_thumbnail'), $image_data['image_id'], $image_data['image_name'], $image_data['image_album_id']),
			'U_ALBUM'		=> ($display & phpbb_gallery_constants::RRC_DISPLAY_ALBUMNAME) ? phpbb_gallery_url::append_sid('album', 'album_id=' . $image_data['image_album_id']) : '',
			'S_UNAPPROVED'	=> (phpbb_gallery::$auth->acl_check('m_status', $image_data['image_album_id'], $album_user_id) && ($image_data['image_status'] == self::STATUS_UNAPPROVED)) ? true : false,
			'S_LOCKED'		=> ($image_data['image_status'] == self::STATUS_LOCKED) ? true : false,
			'S_REPORTED'	=> (phpbb_gallery::$auth->acl_check('m_report', $image_data['image_album_id'], $album_user_id) && $image_data['image_reported']) ? true : false,

			'ALBUM_NAME'		=> ($display & phpbb_gallery_constants::RRC_DISPLAY_ALBUMNAME) ? ((isset($image_data['album_name'])) ? ((utf8_strlen(htmlspecialchars_decode($image_data['album_name'])) > phpbb_gallery_config::get('shortnames') + 3) ? htmlspecialchars(utf8_substr(htmlspecialchars_decode($image_data['album_name']), 0, phpbb_gallery_config::get('shortnames')) . '...') : ($image_data['album_name'])) : '') : '',
			'ALBUM_NAME_FULL'	=> ($display & phpbb_gallery_constants::RRC_DISPLAY_ALBUMNAME) ? ((isset($image_data['album_name'])) ? $image_data['album_name'] : '') : '',
			'POSTER'		=> ($display & phpbb_gallery_constants::RRC_DISPLAY_USERNAME) ? (($image_data['image_contest'] && !phpbb_gallery::$auth->acl_check('m_status', $image_data['image_album_id'], $album_user_id)) ? $user->lang['CONTEST_USERNAME'] : get_username_string('full', $image_data['image_user_id'], $image_data['image_username'], $image_data['image_user_colour'])) : '',
			'TIME'			=> ($display & phpbb_gallery_constants::RRC_DISPLAY_IMAGETIME) ? $user->format_date($image_data['image_time']) : '',
			'VIEW'			=> ($display & phpbb_gallery_constants::RRC_DISPLAY_IMAGEVIEWS) ? $image_data['image_view_count'] : -1,
			'CONTEST_RANK'		=> ($image_data['image_contest_rank']) ? $user->lang['CONTEST_RESULT_' . $image_data['image_contest_rank']] : '',
			'CONTEST_RANK_ID'	=> $image_data['image_contest_rank'],

			'S_RATINGS'		=> (($display & phpbb_gallery_constants::RRC_DISPLAY_RATINGS) ? ((phpbb_gallery_config::get('allow_rates') && phpbb_gallery::$auth->acl_check('i_rate', $image_data['image_album_id'], $album_user_id)) ? $image_data['rating'] : '') : ''),
			'U_RATINGS'		=> phpbb_gallery_url::append_sid('image_page', 'album_id=' . $image_data['image_album_id'] . "&amp;image_id=" . $image_data['image_id']) . '#rating',
			'L_COMMENTS'	=> ($image_data['image_comments'] == 1) ? $user->lang['COMMENT'] : $user->lang['COMMENTS'],
			'S_COMMENTS'	=> (($display & phpbb_gallery_constants::RRC_DISPLAY_COMMENTS) ? ((phpbb_gallery_config::get('allow_comments') && phpbb_gallery::$auth->acl_check('c_read', $image_data['image_album_id'], $album_user_id)) ? (($image_data['image_comments']) ? $image_data['image_comments'] : $user->lang['NO_COMMENTS']) : '') : ''),
			'U_COMMENTS'	=> phpbb_gallery_url::append_sid('image_page', 'album_id=' . $image_data['image_album_id'] . "&amp;image_id=" . $image_data['image_id']) . '#comments',

			'S_IP'		=> (($display & phpbb_gallery_constants::RRC_DISPLAY_IP) && $auth->acl_get('a_')) ? $image_data['image_user_ip'] : '',
			'U_WHOIS'	=> phpbb_gallery_url::append_sid('mcp', 'mode=whois&amp;ip=' . $image_data['image_user_ip']),
			'U_REPORT'	=> (phpbb_gallery::$auth->acl_check('m_report', $image_data['image_album_id'], $album_user_id) && $image_data['image_reported']) ? phpbb_gallery_url::append_sid('mcp', "mode=report_details&amp;album_id={$image_data['image_album_id']}&amp;option_id=" . $image_data['image_reported']) : '',
			'U_STATUS'	=> (phpbb_gallery::$auth->acl_check('m_status', $image_data['image_album_id'], $album_user_id)) ? phpbb_gallery_url::append_sid('mcp', "mode=queue_details&amp;album_id={$image_data['image_album_id']}&amp;option_id=" . $image_data['image_id']) : '',
			'L_STATUS'	=> ($image_data['image_status'] == self::STATUS_UNAPPROVED) ? $user->lang['APPROVE_IMAGE'] : (($image_data['image_status'] == self::STATUS_APPROVED) ? $user->lang['CHANGE_IMAGE_STATUS'] : $user->lang['UNLOCK_IMAGE']),
			'U_MOVE'	=> (phpbb_gallery::$auth->acl_check('m_move', $image_data['image_album_id'], $album_user_id)) ? phpbb_gallery_url::append_sid('mcp', "action=images_move&amp;album_id={$image_data['image_album_id']}&amp;image_id=" . $image_data['image_id'] . "&amp;redirect=redirect") : '',
			'U_EDIT'	=> $allow_edit ? phpbb_gallery_url::append_sid('posting', "mode=image&amp;submode=edit&amp;album_id={$image_data['image_album_id']}&amp;image_id=" . $image_data['image_id']) : '',
			'U_DELETE'	=> $allow_delete ? phpbb_gallery_url::append_sid('posting', "mode=image&amp;submode=delete&amp;album_id={$image_data['image_album_id']}&amp;image_id=" . $image_data['image_id']) : '',
		));
	}

	/**
	* Generate link to image
	*
	* @param	string	$content	what's in the link: image_name, thumbnail, fake_thumbnail, medium or lastimage_icon
	* @param	string	$mode		where does the link leed to: highslide, lytebox, lytebox_slide_show, image_page, image, none
	* @param	int		$image_id
	* @param	string	$image_name
	* @param	int		$album_id
	* @param	bool	$is_gif		we need to know whether we display a gif, so we can use a better medium-image
	* @param	bool	$count		shall the image-link be counted as view? (Set to false from image_page.php to deny double increment)
	* @param	string	$additional_parameters		additional parameters for the url, (starting with &amp;)
	*/
	static public function generate_link($content, $mode, $image_id, $image_name, $album_id, $is_gif = false, $count = true, $additional_parameters = '')
	{
		global $phpEx, $user;

		$image_page_url = phpbb_gallery_url::append_sid('image_page', "album_id=$album_id&amp;image_id=$image_id{$additional_parameters}");
		$image_url = phpbb_gallery_url::append_sid('image', "album_id=$album_id&amp;image_id=$image_id{$additional_parameters}" . ((!$count) ? '&amp;view=no_count' : ''));
		$thumb_url = phpbb_gallery_url::append_sid('image', "mode=thumbnail&amp;album_id=$album_id&amp;image_id=$image_id{$additional_parameters}");
		$medium_url = phpbb_gallery_url::append_sid('image', "mode=medium&amp;album_id=$album_id&amp;image_id=$image_id{$additional_parameters}");
		switch ($content)
		{
			case 'image_name':
				$shorten_image_name = (utf8_strlen(htmlspecialchars_decode($image_name)) > phpbb_gallery_config::get('shortnames') + 3) ? (utf8_substr(htmlspecialchars_decode($image_name), 0, phpbb_gallery_config::get('shortnames')) . '...') : ($image_name);
				$content = '<span style="font-weight: bold;">' . $shorten_image_name . '</span>';
			break;
			case 'image_name_unbold':
				$shorten_image_name = (utf8_strlen(htmlspecialchars_decode($image_name)) > phpbb_gallery_config::get('shortnames') + 3) ? (utf8_substr(htmlspecialchars_decode($image_name), 0, phpbb_gallery_config::get('shortnames')) . '...') : ($image_name);
				$content = $shorten_image_name;
			break;
			case 'thumbnail':
				$content = '<img src="{U_THUMBNAIL}" alt="{IMAGE_NAME}" title="{IMAGE_NAME}" />';
				$content = str_replace(array('{U_THUMBNAIL}', '{IMAGE_NAME}'), array($thumb_url, $image_name), $content);
			break;
			case 'fake_thumbnail':
				$content = '<img src="{U_THUMBNAIL}" alt="{IMAGE_NAME}" title="{IMAGE_NAME}" style="max-width: {FAKE_THUMB_SIZE}px; max-height: {FAKE_THUMB_SIZE}px;" />';
				$content = str_replace(array('{U_THUMBNAIL}', '{IMAGE_NAME}', '{FAKE_THUMB_SIZE}'), array($thumb_url, $image_name, phpbb_gallery_config::get('mini_thumbnail_size')), $content);
			break;
			case 'medium':
				$content = '<img src="{U_MEDIUM}" alt="{IMAGE_NAME}" title="{IMAGE_NAME}" />';
				$content = str_replace(array('{U_MEDIUM}', '{IMAGE_NAME}'), array($medium_url, $image_name), $content);
				//cheat for animated/transparent gifs
				if ($is_gif)
				{
					$content = '<img src="{U_MEDIUM}" alt="{IMAGE_NAME}" title="{IMAGE_NAME}" style="max-width: {MEDIUM_WIDTH_SIZE}px; max-height: {MEDIUM_HEIGHT_SIZE}px;" />';
					$content = str_replace(array('{U_MEDIUM}', '{IMAGE_NAME}', '{MEDIUM_HEIGHT_SIZE}', '{MEDIUM_WIDTH_SIZE}'), array($image_url, $image_name, phpbb_gallery_config::get('medium_height'), phpbb_gallery_config::get('medium_width')), $content);
				}
			break;
			case 'lastimage_icon':
				$content = $user->img('icon_topic_latest', 'VIEW_LATEST_IMAGE');
			break;
		}
		switch ($mode)
		{
			case 'image_page':
				$url = $image_page_url;
				$tpl = '<a href="{IMAGE_URL}" title="{IMAGE_NAME}">{CONTENT}</a>';
			break;
			case 'image_page_next':
				$url = $image_page_url;
				$tpl = '<a href="{IMAGE_URL}" title="{IMAGE_NAME}" class="right-box right">{CONTENT}</a>';
			break;
			case 'image_page_prev':
				$url = $image_page_url;
				$tpl = '<a href="{IMAGE_URL}" title="{IMAGE_NAME}" class="left-box left">{CONTENT}</a>';
			break;
			case 'image':
				$url = $image_url;
				$tpl = '<a href="{IMAGE_URL}" title="{IMAGE_NAME}">{CONTENT}</a>';
			break;
			case 'none':
				$url = $image_page_url;
				$tpl = '{CONTENT}';
			break;
			default:
				$url = $image_url;
				$tpl = phpbb_gallery_plugins::generate_image_link($mode);
			break;
		}

		return str_replace(array('{IMAGE_URL}', '{IMAGE_NAME}', '{CONTENT}'), array($url, $image_name, $content), $tpl);
	}

	/**
	* Handle user- & total image_counter
	*
	* @param	array	$image_id_ary	array with the image_ids which changed their status
	* @param	bool	$add			are we adding or removing the images
	* @param	bool	$readd			is it possible that there are images which aren't really changed
	*/
	static public function handle_counter($image_id_ary, $add, $readd = false)
	{
		global $db;

		$num_images = $num_comments = 0;
		$sql = 'SELECT SUM(image_comments) comments
			FROM ' . GALLERY_IMAGES_TABLE . '
			WHERE image_status ' . (($readd) ? '=' : '<>') . ' ' . self::STATUS_UNAPPROVED . '
				AND ' . $db->sql_in_set('image_id', $image_id_ary) . '
			GROUP BY image_user_id';
		$result = $db->sql_query($sql);
		$num_comments = $db->sql_fetchfield('comments');
		$db->sql_freeresult($result);

		$sql = 'SELECT COUNT(image_id) images, image_user_id
			FROM ' . GALLERY_IMAGES_TABLE . '
			WHERE image_status ' . (($readd) ? '=' : '<>') . ' ' . self::STATUS_UNAPPROVED . '
				AND ' . $db->sql_in_set('image_id', $image_id_ary) . '
			GROUP BY image_user_id';
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			$sql_ary = array(
				'user_id'				=> $row['image_user_id'],
				'user_images'			=> $row['images'],
			);
			phpbb_gallery_hookup::add_image($row['image_user_id'], (($add) ? $row['images'] : 0 - $row['images']));

			$num_images = $num_images + $row['images'];
			$sql = 'UPDATE ' . GALLERY_USERS_TABLE . '
				SET user_images = user_images ' . (($add) ? '+ ' : '- ') . $row['images'] . '
				WHERE ' . $db->sql_in_set('user_id', $row['image_user_id']);
			$db->sql_query($sql);
			if ($db->sql_affectedrows() != 1)
			{
				$sql = 'INSERT INTO ' . GALLERY_USERS_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary);
				$db->sql_query($sql);
			}
		}
		$db->sql_freeresult($result);

		if ($add)
		{
			phpbb_gallery_config::inc('num_images', $num_images);
			phpbb_gallery_config::inc('num_comments', $num_comments);
		}
		else
		{
			phpbb_gallery_config::dec('num_images', $num_images);
			phpbb_gallery_config::dec('num_comments', $num_comments);
		}
	}
}
