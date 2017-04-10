<?php
/**
 * @package WPSID
 */
/**
 * Plugin Name: WPSID Shortcode
 * Plugin URI: http://www.siini.com/wordpress/plugins/wpsid-shortcode/
 * Description: Integrate OpenSID and SID to Wrodpress.
 * Author: Simasta
 * Author URI: http://simasta.siini.com
 * Version: 1.0.5
 * Text Domain: wpsid-shortcode
 * Domain Path: /locale/
 * Network: false
 * License: GPLv2
 * License URI: http://www.gnu.org/licenses/gpl-2.0
 */

/**
 *	Copyright (C) 2017 Simasta (email: simasta@siini.com)
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
 
// Prohibit direct script loading.
defined( 'ABSPATH' ) || die( 'No direct script access allowed!' );

// Define certain plugin variables as constants.
define( 'OPENSID_ABSPATH', plugin_dir_path( __FILE__ ) );
define( 'OPENSID_DIR_URL', plugin_dir_url( __FILE__ ) );
define( 'OPENSID__FILE__', __FILE__ );
define( 'OPENSID_BASENAME', plugin_basename( OPENSID__FILE__ ) );

//error_reporting(E_ALL);

/**
 * Add support for Codeigniter.
 *
 * @since 1.0.0
 * @part Codeigniter app
 */
 
// Define path and uri of codeigniter opensid.
// Check codeigniter opensid at ABSPATH . 'opensid' dir 
if( is_dir( ABSPATH . 'opensid/donjo-sys') ) {
	define( 'OPENSID_APPPATH', ABSPATH . 'opensid' );
	define( 'OPENSID_HOMEURL', esc_url(site_url()) . '/opensid' );
} else die( 'ERROR:<br>Can\'t find opensid. This plugin require  to opensid installed in `' . ABSPATH . 'opensid/`. <br>Please read `' . OPENSID_ABSPATH . '/readme.txt` file for installation detail.');

// Load codeigniter initial.
require_once OPENSID_ABSPATH . 'ci-bootstrap.php';
// require_once OPENSID_ABSPATH . 'config/opensid.php';

/**
 * Load OpenSID class, which holds common functions and variables.
 */
require_once OPENSID_ABSPATH . 'classes/class-opensid.php';

// Start up OpenSID on WordPress's "init" action hook.
add_action( 'init', array( 'OpenSID', 'run' ) );
