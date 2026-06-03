<?php
/**
 * Plugin Name: BU MIS Unified Suite
 * Plugin URI: https://github.com/your-username/bu-mis-unified-suite
 * Description: WordPress-based integrated Library MIS dashboard for academic library analytics.
 * Version: 0.1.0
 * Author: Bennett University Learning Resource Centre
 * License: MIT
 * Text Domain: bu-mis-unified-suite
 */

if (!defined('ABSPATH')) {
    exit;
}

define('BU_MIS_VERSION', '0.1.0');
define('BU_MIS_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('BU_MIS_PLUGIN_URL', plugin_dir_url(__FILE__));

require_once BU_MIS_PLUGIN_DIR . 'includes/class-bu-mis-loader.php';

add_action('plugins_loaded', function () {
    if (class_exists('BU_MIS_Loader')) {
        BU_MIS_Loader::instance();
    }
});
