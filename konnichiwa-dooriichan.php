<?php
/**
 * 
 * @package konnichiwa-dooriichan
 * @version 0.1
 *
 * Plugin Name: 今日はドーリーちゃん
 * Plugin URI: https://tilcode.blog/
 * Description: This is an experimental plugin to experiment with VVV, PHPUnit, NPM, Composer, JSHint, PHP_CodeSniffer, and more.
 * Author:      Gabriel Maldonado
 * Author URI:  https://tilcode.blog/
 * Version:     0.1
 * Text Domain: 
 * Domain Path: /languages
 *
 * License: GPLv2 or later
 */


function hello_doorii() {
	$string = "今日はドーリーちゃん";
	echo "<p id='doori'>$string</p>";
}
add_action( 'admin_notices', 'hello_doorii' );

function doorii_css() {

	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#dolly {
		float: $x;
		padding-$x: 15px;
		padding-top: 5px;		
		margin: 0;
		font-size: 11px;
	}
	</style>
	";
}

add_action( 'admin_head', 'doorii_css' );

?>