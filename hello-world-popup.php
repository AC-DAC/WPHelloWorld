<?php
/*
Plugin Name: Hello World Popup
Description: Displays a Hello World popup message when activated
Version: 1.0
Author: Your Name
*/

// Prevent direct file access
if (!defined('ABSPATH')) {
    exit;
}

// Hook to add admin notice
function hwp_activation_notice() {
    add_action('admin_notices', 'hwp_display_admin_notice');
}
register_activation_hook(__FILE__, 'hwp_activation_notice');

// Display the admin notice
function hwp_display_admin_notice() {
    ?>
    <script type="text/javascript">
        window.addEventListener('load', function() {
            alert('Hello World');
        });
    </script>
    <?php
}