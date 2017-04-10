<?php
defined( 'ABSPATH' ) || die( 'No direct script access allowed!' );
abstract class OpenSID_Model {
	protected $db;
	
	public function __construct() {
		
		$this->db =& opensid_ci_load_database('mysqli://' . DB_USER . ':' . DB_PASSWORD . '@' . DB_HOST . '/' . DB_NAME, true);
	}
} // class OpenSID_Model
