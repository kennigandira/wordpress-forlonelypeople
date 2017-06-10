<?php
/**
 * Displays the post tags
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

// Return if disabled
if ( ! wpex_get_theme_mod( 'post_tags' ) ) {
	return;
}

the_tags( '<div class="wpex-post-tags wpex-clr"><span class="fa fa-tags"></span>', ', ', '</div>' ); ?>