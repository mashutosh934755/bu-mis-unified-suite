<?php
if (!defined('ABSPATH')) {
    exit;
}

class BU_MIS_Loader {
    private static $instance = null;

    public static function instance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct() {
        add_action('admin_menu', array($this, 'register_admin_menu'));
        add_shortcode('bu_mis_public_dashboard', array($this, 'render_public_dashboard'));
    }

    public function register_admin_menu() {
        add_menu_page(
            __('BU MIS Dashboard', 'bu-mis-unified-suite'),
            __('BU MIS', 'bu-mis-unified-suite'),
            'manage_options',
            'bu-mis-dashboard',
            array($this, 'render_admin_dashboard'),
            'dashicons-chart-area',
            26
        );
    }

    public function render_admin_dashboard() {
        include BU_MIS_PLUGIN_DIR . 'templates/admin-dashboard.php';
    }

    public function render_public_dashboard() {
        ob_start();
        include BU_MIS_PLUGIN_DIR . 'templates/public-dashboard.php';
        return ob_get_clean();
    }
}
