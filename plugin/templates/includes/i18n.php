<?php
class i18n {
	public function load_plugin_textdomain() {
		load_plugin_textdomain(
			'custom-plugin',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);
	}
}
