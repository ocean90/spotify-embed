<?php
/**
 * Plugin Name: Spotify Embed
 * Version: 0.1
 * Description: Just post a Spotify link into your posts and the plugin will add the embed code.
 * Author: Dominik Schilling
 * Author URI: http://wphelper.de/
 * Plugin URI: http://wpgrafie.de/wp-plugins/spotify-embed/en/
 *
 * License: GPLv2 or later
 *
 *	Copyright (C) 2011-2012 Dominik Schilling
 *
 *	This program is free software; you can redistribute it and/or
 *	modify it under the terms of the GNU General Public License
 *	as published by the Free Software Foundation; either version 2
 *	of the License, or (at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU General Public License for more details.
 *
 *	You should have received a copy of the GNU General Public License
 *	along with this program; if not, write to the Free Software
 *	Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */

/**
 * Don't call this file directly.
 */
if ( ! class_exists( 'WP' ) ) {
	die();
}

/**
 * The class.
 */
final class DS_Spotify_Embed {
	/**
	 * The Spotify API URL.
	 */
	private static $spotify_embed_url = 'https://embed.spotify.com/';

	/**
	 * Register the embed handler.
	 */
	public static function init() {
		wp_embed_register_handler(
			'spotify',
			'#https?:\/\/open\.spotify\.com\/(?:track|album)\/[a-zA-Z0-9]{22}\/?#i',
			array( __CLASS__, 'embed_handler_spotify' )
		);
		wp_embed_register_handler(
			'spotify2',
			'#https?:\/\/open\.spotify\.com\/user\/[^:]+\/playlist\/[a-zA-Z0-9]{22}\/?#i',
			array( __CLASS__, 'embed_handler_spotify' )
		);
	}

	/**
	 * Callback function for the spotify embeds. Prints the HTML embed code.
	 *
	 * @param  [type] $matches [description]
	 * @param  [type] $attr    [description]
	 * @param  [type] $url     [description]
	 * @param  [type] $rawattr [description]
	 * @return [type]          [description]
	 */
	public static function embed_handler_spotify( $matches, $attr, $url, $rawattr ) {
		$id = preg_replace( '/http:\/\/open\.spotify\.com\//', 'spotify:', $url );
		$id = str_replace( '/', ':', $id );

		if ( ! empty( $rawattr['width'] ) && ! empty( $rawattr['height'] ) ) {
			$width  = (int) $rawattr['width'];
			$height = (int) $rawattr['height'];
		} else {
			list( $width, $height ) = wp_expand_dimensions( 300, 380, $attr['width'], $attr['height'] );
		}

		$embed_src = sprintf(
			'%s?uri=%s',
			self::$spotify_embed_url,
			$id
		);

		if ( in_array( 'coverart', $attr) )
			$embed_src = add_query_arg( 'view', 'coverart', $embed_src );

		if ( in_array( 'light', $attr) )
			$embed_src = add_query_arg( 'theme', 'white', $embed_src );

		return sprintf(
			'<iframe src="%s" width="%s" height="%s" frameborder="0" allowTransparency="true"></iframe>',
			esc_url( $embed_src ),
			esc_attr( $width ),
			esc_attr( $height )
		);
	}
}

// Gogogo.
add_action( 'plugins_loaded', array( 'DS_Spotify_Embed', 'init' ) );
