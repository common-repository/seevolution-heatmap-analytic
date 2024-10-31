<?php
/*
Plugin Name: SeeVolution Script
Description: Allow user to turn the script on / off
Version: 1.0.1
Author: SeeVolution
Author URI: http://www.seevolution.com
*/


if (!class_exists('SeeVolutionScript'))
{
	class SeeVolutionScript
	{

		public function __construct()
		{
			register_activation_hook(__FILE__, array($this, 'activatePlugin'));
			register_deactivation_hook(__FILE__, array($this, 'deactivatePlugin'));
			register_uninstall_hook(__FILE__, array($this, 'uninstallPlugin'));	
			add_action('admin_menu', array($this,'admin_see_volution_script_page'));
			add_action('wp_footer', array($this,'see_volution_script_on_footer'));		

		}
		
		public function admin_see_volution_script_page() {
			//add_menu_page( 'Orders', 'All Orders', 'manage_options', 'jwp-order', array($this,'admin_order_func'), get_template_directory_uri()."/assets/images/admin/order16x16.png", 57 );		
			add_options_page('SeeVolution Script', 'SeeVolution Script', 'manage_options', 'see-volution-script', array($this,'admin_see_volution_script_func'));
		}
		public function admin_see_volution_script_func() {
			include_once dirname( __FILE__ ).'/admin/index.php';
		}

		function see_volution_script_on_footer() {
			$svs_color = get_option("osc_svs_color");       
			$svs_enable = get_option("osc_svs_enable");
			//echo $svs_enable;
			if(!empty($svs_enable) && ($svs_enable == "on")){
				echo "<script type='text/javascript'>
			        // SeeVolution Script 
			        svluStyle='color:#000000';
			        (function () {
			            var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
			            lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.seevolution.com/80bff1749a054fc19c849f332e8464e6/collector.js';
			            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
			        })();
			    </script>";
			}
		}
		function activatePlugin($networkwide) {
			global $wpdb;
			$this->activate();      
		}

		function deactivatePlugin($networkwide) {
			global $wpdb;
			$this->deactivate();      
		}	

		function uninstallPlugin($networkwide) {
			global $wpdb;
			$this->uninstall();      
		}	

		public function activate()
		{      

		}		

		public function deactivate()
		{      
			// do anything when deactive plugins
		}
		
		public function uninstall()
		{   
			// do anything when remove plugins		
		} 	
	}
}
$SeeVolutionScript = new SeeVolutionScript();


?>