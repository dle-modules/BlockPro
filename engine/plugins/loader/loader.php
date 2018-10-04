<?php
if (file_exists(ENGINE_DIR . '/classes/plugins.class.php')) {
	include_once ENGINE_DIR . '/classes/plugins.class.php';
} else {
	@ini_set('pcre.recursion_limit', 10000000);
	@ini_set('pcre.backtrack_limit', 10000000);
	@ini_set('pcre.jit', false);
	@include_once(ENGINE_DIR . '/data/config.php');
	require_once(ENGINE_DIR . '/classes/mysql.php');
	require_once(ENGINE_DIR . '/data/dbconfig.php');

	abstract class DLEPlugins {
		public static function Check($source = '') {
			return $source;
		}
	}
}