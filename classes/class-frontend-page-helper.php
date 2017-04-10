<?php
defined( 'ABSPATH' ) || die( 'No direct script access allowed!' );
class OpenSID_Frontend_Page {
	public function enqueue_style( $name, array $dependencies = array() ) {
		$suffix = SCRIPT_DEBUG ? '' : '.min';
		$css_file = "assets/css/{$name}{$suffix}.css";
		$css_url = plugins_url( $css_file, OPENSID__FILE__ );
		wp_enqueue_style( "opendsid-{$name}", $css_url, $dependencies, OpenSID::version );
	}
	public function enqueue_script( $name, array $dependencies = array(), array $localize_script = array(), $force_minified = false ) {
		$suffix = ( ! $force_minified && SCRIPT_DEBUG ) ? '' : '.min';
		$js_file = "assets/js/{$name}{$suffix}.js";
		$js_url = plugins_url( $js_file, OPENSID__FILE__ );
		wp_enqueue_script( "opendsid-{$name}", $js_url, $dependencies, OpenSID::version, true );
		if ( ! empty( $localize_script ) ) {
			foreach ( $localize_script as $var_name => $var_data ) {
				wp_localize_script( "opendsid-{$name}", "opendsid_{$var_name}", $var_data );
			}
		}
	}
	
	public function enqueue_style_opensid( $name, array $dependencies = array() ) {
		$suffix = '';
		$css_file = "assets/{$name}{$suffix}.css";
		$css_url = OPENSID_HOMEURL . '/' . $css_file;
		wp_enqueue_style( "opendsid-{$name}", $css_url, $dependencies, OpenSID::version );
	}
	
	public function enqueue_script_opensid( $name, array $dependencies = array(), array $localize_script = array(), $force_minified = false ) {
		$suffix = '';
		$js_file = "assets/{$name}{$suffix}.js";
		$js_url = OPENSID_HOMEURL . '/' . $js_file;
		wp_enqueue_script( "opendsid-{$name}", $js_url, $dependencies, OpenSID::version, true );
		if ( ! empty( $localize_script ) ) {
			foreach ( $localize_script as $var_name => $var_data ) {
				wp_localize_script( "opendsid-{$name}", "opendsid_{$var_name}", $var_data );
			}
		}
	}
	
	public function add_admin_footer_text() {
		add_filter( 'admin_footer_text', array( $this, '_admin_footer_text' ) );
	}
	public function _admin_footer_text( $content ) {
		return $content;
	}
	public function print_wp_pointer_js( $pointer_id, $selector, array $args ) {
		if ( empty( $pointer_id ) || empty( $selector ) || empty( $args ) || empty( $args['content'] ) ) {
			return;
		}
		?>
		<script type="text/javascript">
		( function( $ ) {
			var options = <?php echo wp_json_encode( $args ); ?>, setup;
			if ( ! options ) {
				return;
			}
			options = $.extend( options, {
				close: function() {
					$.post( ajaxurl, {
						pointer: '<?php echo $pointer_id; ?>',
						action: 'dismiss-wp-pointer'
					} );
				}
			} );
			setup = function() {
				$( '<?php echo $selector; ?>' ).pointer( options ).pointer( 'open' );
			};
			if ( options.position && options.position.defer_loading ) {
				$( window ).bind( 'load.wp-pointers', setup );
			} else {
				$( document ).ready( setup );
			}
		} )( jQuery );
		</script>
		<?php
	}
} // class OpenSID_Frontend_Page
