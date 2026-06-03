<?php
/**
 * BU MIS Unified Suite Sample Configuration
 * Copy this file to config.local.php and update values.
 * Do not commit real credentials to GitHub.
 */

if (!defined('ABSPATH')) {
    exit;
}

define('BU_MIS_DSPACE_API_BASE', 'https://repository.example.edu/server/api');
define('BU_MIS_DSPACE_THESIS_SCOPE_UUID', 'replace-with-scope-uuid');
define('BU_MIS_OJS_API_BASE', 'https://journals.example.edu');
define('BU_MIS_PLAGIARISM_API_BASE', 'https://example.edu/wp-json/bu-plagiarism/v2');
define('BU_MIS_PUBLIC_DASHBOARD_SLUG', 'mis');
