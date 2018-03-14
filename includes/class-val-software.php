<?php
if ( ! defined( 'ABSPATH' ) ) exit;
	class Val_Software{

		protected static $_instance = NULL, $_plugins_name;
		function __construct()
		{
			static::$_plugins_name = basename(VAL_SOFTWARE);
			$this->val_sft();
		}

		public function val_sft(){
			add_action( 'admin_menu', array($this,'val_menu' ));
			add_action('after_setup_theme', array($this,'remove_admin_bar'));
			add_shortcode('get_order_by', array($this,'order_by_ammon_formation'));
			add_shortcode('cherche_formation', array($this,'cherche_formation_data'));
		}

		public function val_menu(){
			add_menu_page(__( 'Val Software', 'val_software' ), 'Val Software', 'manage_options', 'val_software', array($this,'admin_val_soft'), plugins_url('val-software/icons/icon.png'),6);
		}
		public function admin_val_soft(){
			include (VAL_SOFTWARE ."/templates/api-template.php");
		}
		public function remove_admin_bar() {
			  show_admin_bar(false);
		}
		public function order_by_ammon_formation(){
			ob_start();
			include (VAL_SOFTWARE ."/templates/order-formation-template.php");
			return ob_get_clean();
		}
		public function cherche_formation_data(){
			ob_start();
			include (VAL_SOFTWARE ."/templates/cherche-option.php");
			return ob_get_clean();
		}

}