<?php
/*
Plugin Name: Notice Before Tables
Plugin URI:  https://example.org
Description: This plugin is used to display a notice before every tables in the frontend.
Version:     1.0.1
Author:      DM Steve Smith
Author URI:  https://www.flixnary.com
License:     GPL2
*/
if (!defined('ABSPATH')) {
    exit;
}

function nbt_add_notice_div_before_table( $content ) {
  $pattern = "/<table(.*?)>(.*?)<\/table>/i";
  $replacement = '<div class="scroll-notice" style="text-align: center;margin: 0 auto; color:red;">⇄ Scroll to see full table</div><table$1>$2</table>';

  return preg_replace( $pattern, $replacement, $content );
}

add_action( 'the_content', 'nbt_add_notice_div_before_table', 10, 1 );
?>