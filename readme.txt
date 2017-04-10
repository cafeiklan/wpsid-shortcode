=== WPSID Shortcode ===
Contributors: simasta
Donate link: http://www.siini.com/wordpress/plugins/wpsid-shortcode/
Tags: opensid, shortcode
Requires at least: 4.3
Tested up to: 4.7.3
Stable tag: 1.0.5
License: GPLv2 or later

Integrate OpenSID and SID to Wrodpress.

== Description ==

WPSID Shortcode integrate OpenSID and SID to Wrodpress with shortcodes. You can display statistics data from OpenSID and SID into wordpress. Visit [**demo site**](http://wpsid-shortcode.plugin.demo.siini.com/) for detail.

If you find this useful, [**please consider donating**](http://www.siini.com/wordpress/plugins/wpsid-shortcode/) whatever sum you choose, **even just 10 cents**. It's been downloaded thousands of times: just a few cents from every user would help me develop the plugin and improve support.

== Installation ==

= Requirements =
* WordPress 4.3+
* PHP 5.3+
* OpenSID Installed on './opensid'

= Steps =
1. Download latest version Opensid from https://codeload.github.com/eddieridwan/OpenSID/zip/master. 
   Extract into wordpress folder, then rename `OpenSID-master` into `opensid`.
	Resulted dirs will be:
   './opensid'
   './opensid/donjo-app/'
   './opensid/donjo-sys/'
   './opensid/....'
   './wp-admin'
   './wp-content'
   './wp-includes'
   ...
1. Unzip plugin files and upload them under your '/wp-content/plugins/' directory. 
   Resulted names will be:
  './wp-content/plugins/wpsid-shortcode/*'
1. Activate plugin at "Plugins" administration page.
1. Place shortcodes build in opensid plugin to your post, page, or widget.

= The Shortcodes =

* [opensid_data_wilayah]
* [opensid_data_pendidikan]
* [opensid_data_pendidikan_pie]
* [opensid_data_pendidikan_tabel]
* [opensid_data_pendidikan_grafik]
* [opensid_data_pekerjaan]
* [opensid_data_pekerjaan_pie]
* [opensid_data_pekerjaan_tabel]
* [opensid_data_pekerjaan_grafik]
* [opensid_data_perkawinan]
* [opensid_data_perkawinan_pie]
* [opensid_data_perkawinan_tabel]
* [opensid_data_perkawinan_grafik]
* [opensid_data_agama]
* [opensid_data_agama_pie]
* [opensid_data_agama_tabel]
* [opensid_data_agama_grafik]
* [opensid_data_jenis_kelamin]
* [opensid_data_jenis_kelamin_pie]
* [opensid_data_jenis_kelamin_tabel]
* [opensid_data_jenis_kelamin_grafik]
* [opensid_data_warga_negara]
* [opensid_data_warga_negara_pie]
* [opensid_data_warga_negara_tabel]
* [opensid_data_warga_negara_grafik]
* [opensid_data_status_penduduk]
* [opensid_data_status_penduduk_pie]
* [opensid_data_status_penduduk_tabel]
* [opensid_data_status_penduduk_grafik]
* [opensid_data_golongan_darah]
* [opensid_data_golongan_darah_pie]
* [opensid_data_golongan_darah_tabel]
* [opensid_data_golongan_darah_grafik]
* [opensid_data_cacat]
* [opensid_data_cacat_pie]
* [opensid_data_cacat_tabel]
* [opensid_data_cacat_grafik]
* [opensid_data_menahun]
* [opensid_data_menahun_pie]
* [opensid_data_menahun_tabel]
* [opensid_data_menahun_grafik]
* [opensid_data_umur]
* [opensid_data_umur_pie]
* [opensid_data_umur_tabel]
* [opensid_data_umur_grafik]
* [opensid_data_pendidikan_sedang_ditempuh]
* [opensid_data_pendidikan_sedang_ditempuh_pie]
* [opensid_data_pendidikan_sedang_ditempuh_tabel]
* [opensid_data_pendidikan_sedang_ditempuh_grafik]
* [opensid_data_cara_kb]
* [opensid_data_cara_kb_pie]
* [opensid_data_cara_kb_tabel]
* [opensid_data_cara_kb_grafik]
* [opensid_data_akta_kelahiran]
* [opensid_data_akta_kelahiran_pie]
* [opensid_data_akta_kelahiran_tabel]
* [opensid_data_akta_kelahiran_grafik]


== Frequently Asked Questions ==

= Its free? =

Yes.


== Screenshots ==
1. Example result page
2. How to usage shortcode
3. Example directory structure


== Changelog ==

= 1.0.5 =
*Release Date - 2017/04/11*

* Added **[opensid_data_jenis_kelamin]** shortcode tag
* Added **[opensid_data_jenis_kelamin_pie]** shortcode tag
* Added **[opensid_data_jenis_kelamin_tabel]** shortcode tag
* Added **[opensid_data_jenis_kelamin_grafik]** shortcode tag
* Added **[opensid_data_warga_negara]** shortcode tag
* Added **[opensid_data_warga_negara_pie]** shortcode tag
* Added **[opensid_data_warga_negara_tabel]** shortcode tag
* Added **[opensid_data_warga_negara_grafik]** shortcode tag
* Added **[opensid_data_status_penduduk]** shortcode tag
* Added **[opensid_data_status_penduduk_pie]** shortcode tag
* Added **[opensid_data_status_penduduk_tabel]** shortcode tag
* Added **[opensid_data_status_penduduk_grafik]** shortcode tag
* Added **[opensid_data_golongan_darah]** shortcode tag
* Added **[opensid_data_golongan_darah_pie]** shortcode tag
* Added **[opensid_data_golongan_darah_tabel]** shortcode tag
* Added **[opensid_data_golongan_darah_grafik]** shortcode tag
* Added **[opensid_data_cacat]** shortcode tag
* Added **[opensid_data_cacat_pie]** shortcode tag
* Added **[opensid_data_cacat_tabel]** shortcode tag
* Added **[opensid_data_cacat_grafik]** shortcode tag
* Added **[opensid_data_menahun]** shortcode tag
* Added **[opensid_data_menahun_pie]** shortcode tag
* Added **[opensid_data_menahun_tabel]** shortcode tag
* Added **[opensid_data_menahun_grafik]** shortcode tag
* Added **[opensid_data_umur]** shortcode tag
* Added **[opensid_data_umur_pie]** shortcode tag
* Added **[opensid_data_umur_tabel]** shortcode tag
* Added **[opensid_data_umur_grafik]** shortcode tag
* Added **[opensid_data_pendidikan_sedang_ditempuh]** shortcode tag
* Added **[opensid_data_pendidikan_sedang_ditempuh_pie]** shortcode tag
* Added **[opensid_data_pendidikan_sedang_ditempuh_tabel]** shortcode tag
* Added **[opensid_data_pendidikan_sedang_ditempuh_grafik]** shortcode tag
* Added **[opensid_data_cara_kb]** shortcode tag
* Added **[opensid_data_cara_kb_pie]** shortcode tag
* Added **[opensid_data_cara_kb_tabel]** shortcode tag
* Added **[opensid_data_cara_kb_grafik]** shortcode tag
* Added **[opensid_data_akta_kelahiran]** shortcode tag
* Added **[opensid_data_akta_kelahiran_pie]** shortcode tag
* Added **[opensid_data_akta_kelahiran_tabel]** shortcode tag
* Added **[opensid_data_akta_kelahiran_grafik]** shortcode tag


= 1.0.4 =
*Release Date - 2017/04/10*
* Add directory structure screenshort
* Remove generic function get_config()

= 1.0.3 =
*Release Date - 2017/04/09*
* Fix wordpress compatible

= 1.0.2 =
*Release Date - 2017/04/08*
* Remove assets form plugin
* Escape output

= 1.0.1 =
*Release Date - 2017/03/23*

* Added **[opensid_data_pendidikan]** shortcode tag
* Added **[opensid_data_pendidikan_pie]** shortcode tag
* Added **[opensid_data_pekerjaan]** shortcode tag
* Added **[opensid_data_pekerjaan_pie]** shortcode tag
* Added **[opensid_data_pekerjaan_tabel]** shortcode tag
* Added **[opensid_data_pekerjaan_grafik]** shortcode tag
* Added **[opensid_data_perkawinan]** shortcode tag
* Added **[opensid_data_perkawinan_pie]** shortcode tag
* Added **[opensid_data_perkawinan_tabel]** shortcode tag
* Added **[opensid_data_perkawinan_grafik]** shortcode tag
* Added **[opensid_data_agama]** shortcode tag
* Added **[opensid_data_agama_pie]** shortcode tag
* Added **[opensid_data_agama_tabel]** shortcode tag
* Added **[opensid_data_agama_grafik]** shortcode tag

= 1.0 =
*Release Date - 2017/03/21*

* Added **[opensid_data_pendidikan_grafik]** shortcode tag
* Added **[opensid_data_pendidikan_tabel]** shortcode tag
* Added **[opensid_datai_wilayah]** shortcode tag


== Upgrade Notice ==

Upgrade normally
