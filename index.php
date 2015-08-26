<?php
/*
Plugin Name: CallBackHunter for WordPress
Version: 20150825
Plugin URI: https://github.com/systemo-biz/callbackhunter-com-wp
Description: Integrate CallBackHunter in WordPress
Author: Systemo
Author URI: http://systemo.biz/
*/

add_action( 'wp_footer', $function_to_add = 'wp_footer_add_callbackhunter', $priority = 10);

function wp_footer_add_callbackhunter(){
  $cbh = get_option( 'cbh_script_field' );
  if($cbh) echo $cbh;
}

add_action( 'admin_init', function(){
	add_settings_section(
		'cbh_script_section',
		'Вставьте тут скрипт от CallBackHunter',
		'',
		'discussion'
	);

  register_setting( 'discussion', 'cbh_script_field');

	add_settings_field(
		'cbh_script_field',
		'Введите скрипт от CallBackHunter',
		'cbh_script_field_callback',
		'discussion',
		'cbh_script_section'
	);

});
function cbh_script_field_callback() {
  ?>
	 <input name="cbh_script_field" type="text" value="<?php echo get_option( 'cbh_script_field' ) ?>">
  <?php
}
