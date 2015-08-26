<?php
/*
Plugin Name: CallBackHunter for WordPress
Version: 0.1
Plugin URI: ${TM_PLUGIN_BASE}
Description: Integrate CallBackHunter in WordPress
Author: Systemo
Author URI: http://systemo.biz/
*/

add_action( 'wp_footer', $function_to_add = 'wp_footer_add_callbackhunter', $priority = 10);

function wp_footer_add_callbackhunter(){
  echo '<div class="testc_cbg"></div>';
}
