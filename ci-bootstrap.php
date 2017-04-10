<?php
defined( 'ABSPATH' ) || die( 'No direct script access allowed!' );
$application_folder = OPENSID_APPPATH.'/donjo-app';
$system_path = OPENSID_APPPATH.'/donjo-sys/';
 
if( !defined('BASEPATH') )
	define('BASEPATH', str_replace("\\", "/", OPENSID_APPPATH.'/donjo-sys/'));
 
if( !defined('APPPATH') ){
	if (is_dir($application_folder)) {
		define('APPPATH', $application_folder.'/');
	} else {
		if ( ! is_dir(BASEPATH.$application_folder.'/')) {
			$errmsg = "Your application folder path $application_folder does not appear to be set correctly.";
		}
 
		define('APPPATH', BASEPATH.$application_folder.'/');
	}
}
include_once OPENSID_APPPATH . '/donjo-sys/core/Common.php';
include_once OPENSID_APPPATH . '/donjo-sys/database/DB.php';
 
function &opensid_ci_load_database($params = '', $active_record_override = false){
	$database =& DB($params, $active_record_override);
	return $database;
}
class OPENSID___FAKE_LOAD {
	function model(){ 
		return true;
	}
}