<?php
defined( 'ABSPATH' ) || die( 'No direct script access allowed!' );
class OpenSID_Frontend_Controller extends OpenSID_Controller {
	public function __construct() {
		parent::__construct();
		
		
		
		add_action( 'init', array( $this, 'init_shortcodes' ), 20 ); // run on priority 20 as WP-Table Reloaded Shortcodes are registered at priority 10
	}
	
	public function init_shortcodes() {
		self::opensid_shortcode($this, 'data_wilayah');
		
		self::opensid_shortcode($this, 'data_pendidikan');
		self::opensid_shortcode($this, 'data_pendidikan_tabel');
		self::opensid_shortcode($this, 'data_pendidikan_grafik');
		self::opensid_shortcode($this, 'data_pendidikan_pie');
		
		self::opensid_shortcode($this, 'data_pekerjaan');
		self::opensid_shortcode($this, 'data_pekerjaan_tabel');
		self::opensid_shortcode($this, 'data_pekerjaan_grafik');
		self::opensid_shortcode($this, 'data_pekerjaan_pie');
		
		self::opensid_shortcode($this, 'data_perkawinan');
		self::opensid_shortcode($this, 'data_perkawinan_tabel');
		self::opensid_shortcode($this, 'data_perkawinan_grafik');
		self::opensid_shortcode($this, 'data_perkawinan_pie');
		
		self::opensid_shortcode($this, 'data_agama');
		self::opensid_shortcode($this, 'data_agama_tabel');
		self::opensid_shortcode($this, 'data_agama_grafik');
		self::opensid_shortcode($this, 'data_agama_pie');
		
		self::opensid_shortcode($this, 'data_jenis_kelamin');
		self::opensid_shortcode($this, 'data_jenis_kelamin_tabel');
		self::opensid_shortcode($this, 'data_jenis_kelamin_grafik');
		self::opensid_shortcode($this, 'data_jenis_kelamin_pie');
		
		self::opensid_shortcode($this, 'data_warga_negara');
		self::opensid_shortcode($this, 'data_warga_negara_tabel');
		self::opensid_shortcode($this, 'data_warga_negara_grafik');
		self::opensid_shortcode($this, 'data_warga_negara_pie');
		
		self::opensid_shortcode($this, 'data_status_penduduk');
		self::opensid_shortcode($this, 'data_status_penduduk_tabel');
		self::opensid_shortcode($this, 'data_status_penduduk_grafik');
		self::opensid_shortcode($this, 'data_status_penduduk_pie');
		
		self::opensid_shortcode($this, 'data_golongan_darah');
		self::opensid_shortcode($this, 'data_golongan_darah_tabel');
		self::opensid_shortcode($this, 'data_golongan_darah_grafik');
		self::opensid_shortcode($this, 'data_golongan_darah_pie');
		
		self::opensid_shortcode($this, 'data_cacat');
		self::opensid_shortcode($this, 'data_cacat_tabel');
		self::opensid_shortcode($this, 'data_cacat_grafik');
		self::opensid_shortcode($this, 'data_cacat_pie');
		
		self::opensid_shortcode($this, 'data_menahun');
		self::opensid_shortcode($this, 'data_menahun_tabel');
		self::opensid_shortcode($this, 'data_menahun_grafik');
		self::opensid_shortcode($this, 'data_menahun_pie');
		
		self::opensid_shortcode($this, 'data_umur');
		self::opensid_shortcode($this, 'data_umur_tabel');
		self::opensid_shortcode($this, 'data_umur_grafik');
		self::opensid_shortcode($this, 'data_umur_pie');
		
		self::opensid_shortcode($this, 'data_pendidikan_sedang_ditempuh');
		self::opensid_shortcode($this, 'data_pendidikan_sedang_ditempuh_tabel');
		self::opensid_shortcode($this, 'data_pendidikan_sedang_ditempuh_grafik');
		self::opensid_shortcode($this, 'data_pendidikan_sedang_ditempuh_pie');
		
		self::opensid_shortcode($this, 'data_cara_kb');
		self::opensid_shortcode($this, 'data_cara_kb_tabel');
		self::opensid_shortcode($this, 'data_cara_kb_grafik');
		self::opensid_shortcode($this, 'data_cara_kb_pie');
		
		self::opensid_shortcode($this, 'data_akta_kelahiran');
		self::opensid_shortcode($this, 'data_akta_kelahiran_tabel');
		self::opensid_shortcode($this, 'data_akta_kelahiran_grafik');
		self::opensid_shortcode($this, 'data_akta_kelahiran_pie');
		
	}
	
	public function data_wilayah() {return OpenSID::load_shortcode( 'data_wilayah');}
	
	public function data_pendidikan() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>0, 'type'=>''));}
	public function data_pendidikan_tabel() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>0, 'type'=>'tabel'));}
	public function data_pendidikan_grafik() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>0, 'type'=>'grafik'));}
	public function data_pendidikan_pie() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>0, 'type'=>'pie'));}
	public function data_pekerjaan() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>1, 'type'=>''));}
	public function data_pekerjaan_tabel() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>1, 'type'=>'tabel'));}
	public function data_pekerjaan_grafik() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>1, 'type'=>'grafik'));}
	public function data_pekerjaan_pie() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>1, 'type'=>'pie'));}
	
	public function data_perkawinan() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>2, 'type'=>''));}
	public function data_perkawinan_tabel() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>2, 'type'=>'tabel'));}
	public function data_perkawinan_grafik() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>2, 'type'=>'grafik'));}
	public function data_perkawinan_pie() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>2, 'type'=>'pie'));}
	
	public function data_agama() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>3, 'type'=>''));}
	public function data_agama_tabel() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>3, 'type'=>'tabel'));}
	public function data_agama_grafik() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>3, 'type'=>'grafik'));}
	public function data_agama_pie() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>3, 'type'=>'pie'));}
	
	public function data_jenis_kelamin() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>4, 'type'=>''));}
	public function data_jenis_kelamin_tabel() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>4, 'type'=>'tabel'));}
	public function data_jenis_kelamin_grafik() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>4, 'type'=>'grafik'));}
	public function data_jenis_kelamin_pie() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>4, 'type'=>'pie'));}
	
	public function data_warga_negara() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>5, 'type'=>''));}
	public function data_warga_negara_tabel() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>5, 'type'=>'tabel'));}
	public function data_warga_negara_grafik() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>5, 'type'=>'grafik'));}
	public function data_warga_negara_pie() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>5, 'type'=>'pie'));}
	
	public function data_status_penduduk() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>6, 'type'=>''));}
	public function data_status_penduduk_tabel() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>6, 'type'=>'tabel'));}
	public function data_status_penduduk_grafik() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>6, 'type'=>'grafik'));}
	public function data_status_penduduk_pie() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>6, 'type'=>'pie'));}
	
	public function data_golongan_darah() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>7, 'type'=>''));}
	public function data_golongan_darah_tabel() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>7, 'type'=>'tabel'));}
	public function data_golongan_darah_grafik() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>7, 'type'=>'grafik'));}
	public function data_golongan_darah_pie() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>7, 'type'=>'pie'));}
	public function data_cacat() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>9, 'type'=>''));}
	public function data_cacat_tabel() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>9, 'type'=>'tabel'));}
	public function data_cacat_grafik() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>9, 'type'=>'grafik'));}
	public function data_cacat_pie() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>9, 'type'=>'pie'));}
	
	public function data_menahun() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>10, 'type'=>''));}
	public function data_menahun_tabel() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>10, 'type'=>'tabel'));}
	public function data_menahun_grafik() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>10, 'type'=>'grafik'));}
	public function data_menahun_pie() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>10, 'type'=>'pie'));}
	
	public function data_umur() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>13, 'type'=>''));}
	public function data_umur_tabel() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>13, 'type'=>'tabel'));}
	public function data_umur_grafik() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>13, 'type'=>'grafik'));}
	public function data_umur_pie() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>13, 'type'=>'pie'));}
	
	public function data_pendidikan_sedang_ditempuh() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>14, 'type'=>''));}
	public function data_pendidikan_sedang_ditempuh_tabel() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>14, 'type'=>'tabel'));}
	public function data_pendidikan_sedang_ditempuh_grafik() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>14, 'type'=>'grafik'));}
	public function data_pendidikan_sedang_ditempuh_pie() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>14, 'type'=>'pie'));}
	
	public function data_cara_kb() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>16, 'type'=>''));}
	public function data_cara_kb_tabel() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>16, 'type'=>'tabel'));}
	public function data_cara_kb_grafik() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>16, 'type'=>'grafik'));}
	public function data_cara_kb_pie() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>16, 'type'=>'pie'));}
	
	public function data_akta_kelahiran() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>17, 'type'=>''));}
	public function data_akta_kelahiran_tabel() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>17, 'type'=>'tabel'));}
	public function data_akta_kelahiran_grafik() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>17, 'type'=>'grafik'));}
	public function data_akta_kelahiran_pie() { return OpenSID::load_shortcode( 'data_statistik', array('statistik'=>17, 'type'=>'pie'));}
	
	
	private static function opensid_shortcode($this, $shortcode, $function='', $remove_old=false) {
		
		if(empty($function))
			$function = $shortcode;
		
		$shortcode = 'opensid_' . $shortcode;
		
		if($remove_old) 
			remove_shortcode( $shortcode );
		
		add_shortcode( $shortcode, array( $this, $function ) );
	}
} // class OpenSID_Frontend_Controller
