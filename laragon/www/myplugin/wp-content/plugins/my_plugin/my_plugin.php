<?php 

/*
 * Plugin Name:       My Plugin
 * Plugin URI:        https://trongnhandev.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Trong Nhan
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-plugin
 * Domain Path:       /languages
 */

defined("ABSPATH") or die("You can not access directly");
define("PLUGIN_PATH", plugin_dir_path( __FILE__ ));
define("PLUGIN_URI", plugin_dir_url( __FILE__ ));
//admin_menu hook
// Design patterns -> SingleTon
if(!class_exists('MyPlugin')) {
  class MyPlugin {
  public function __construct() {
   add_action( 'admin_menu', array($this, 'custom_admin_menu') );
  }

  function custom_admin_menu() {
    add_menu_page( 'All Employees', 'All Employess', 'manage_options', 'all-employees', array($this, 'render_employee'), '', 10 );
    add_submenu_page( 'all-employees', 'Add Employees', 'Add Employees', 'manage_options', 'add-employee', array($this, 'render_add_employee'), 1 );
  }
  //List Employees
  function render_employee() {
    include_once(PLUGIN_PATH."/pages/list_employees.php");
  }
  //Add Employee 
  function render_add_employee() {
    include_once(PLUGIN_PATH."/pages/add_employee.php"); 
  }

  //Tạo table khi kích hoạt plugin 
  function create_table_ems() {
    global $wpdb; 
    $table_prefix = $wpdb->prefix; // wp_
    $sql = "CREATE TABLE {$table_prefix}ems_form_data (
      `id` int NOT NULL AUTO_INCREMENT,
      `email` varchar(180) NOT NULL,
      `name` varchar(225) NOT NULL,
      `age` int NOT NULL,
      `phone` varchar(20) NOT NULL,
      `address` varchar(255) NOT NULL,
      `gender` varchar(20) NOT NULL,
      PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci";
    
      include_once ABSPATH . '/wp-admin/includes/upgrade.php';
      dbDelta($sql); 
  }

  // Xóa table khi hủy kích hoạt plugin 
  function drop_table_ems() {
    global $wpdb;
    $table_prefix = $wpdb->prefix; // wp_
    $sql = "DROP TABLE IF EXISTS {$table_prefix}ems_form_data";
    $wpdb->query($sql);
  }
}
}

$plugins = new MyPlugin();

// Kích hoạt plugin + Tạo table wp_ems_form_data
register_activation_hook( __FILE__, array($plugins, 'create_table_ems'));

// Hủy kích hoạt plugin => Xóa table wp_ems_form_data
register_deactivation_hook( __FILE__, array($plugins, 'drop_table_ems'));