<?php
/**
 * Returns correct entry icon
 *
 * @package   New York WordPress Theme
 * @author    Alexander Clarke
 * @copyright Copyright (c) 2015, WPExplorer.com
 * @link      http://www.wpexplorer.com
 * @since     1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Video
if ( ! $allows_embeds && wpex_has_post_video() ) {

	echo '<span class="fa fa-youtube-play"></span>';

}

// Audio
elseif ( ! $allows_embeds && wpex_has_post_audio() ) {

	echo '<span class="fa fa-music"></span>';

}