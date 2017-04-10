<?php
defined( 'ABSPATH' ) || die( 'No direct script access allowed!' );
class CI_Model {
	public $db;
	
	public $load;
		
	public function __construct(){
		$this->db =& opensid_ci_load_database('mysqli://' . DB_USER . ':' . DB_PASSWORD . '@' . DB_HOST . '/' . DB_NAME, true);
		
		$this->load = new OPENSID___FAKE_LOAD;
	}
	
	function model($var){
		return $var;
	}
}	