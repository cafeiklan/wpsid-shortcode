<?php
defined( 'ABSPATH' ) || die( 'No direct script access allowed!' );
abstract class OpenSID_Shortcode {
	public $db;
	
	public $model_opensid;
	
	public function __construct() {
		$this->db =& opensid_ci_load_database('mysqli://' . DB_USER . ':' . DB_PASSWORD . '@' . DB_HOST . '/' . DB_NAME, true);
	
		
	}
	public function setup( $action, array $data ) {
		
		$this->frontend_page = OpenSID::load_class( 'OpenSID_Frontend_Page', 'class-frontend-page-helper.php', 'classes' );
		
		$this->frontend_page->enqueue_style_opensid( 'front/css/first' );
		
		$this->frontend_page->enqueue_script_opensid( 'front/js/stscode' );
	}
} // class OpenSID_Shortcode
