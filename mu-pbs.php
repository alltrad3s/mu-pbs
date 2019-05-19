<?php
/*
Plugin Name: Pro Sites Button Styler
Description: Plugin to style pro sites button
Version:     1
Author:      Jorge Díaz
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

function adm_bar_button_style() { ?>
	<style type="text/css">
		#wpadminbar #wp-admin-bar-top-secondary #wp-admin-bar-pro-site > a > span { 
			background: #efad42!important;
			border: none!important;
			color: #4f1d3c!important;
			font-size: 14px;
			height: 23px!important;
			padding-top: 3px!important;
			font-weight: bold;
			display: block;
		}
		
		#wpadminbar #wp-admin-bar-top-secondary #wp-admin-bar-pro-site > a > span:hover {
			color: #ffffff!important;
		}
		
		#wpadminbar #wp-admin-bar-pro-site > a > span:before {
			position: relative;
			content: "✘";
			padding-right: 10px!important;
			color: #ffffff!important;
			font-size: 15px;
		}
	</style>
<?php }
// on backend area
add_action( 'admin_head', 'adm_bar_button_style' );
// on frontend area
add_action( 'wp_head', 'adm_bar_button_style' );