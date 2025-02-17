<?php
/*
Plugin Name: Hello World Popup
Description: Displays a Hello World popup on the home page
Version: 1.0
Author: Alex Chuc
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

function hello_world_popup_enqueue_scripts() {
    // Only load on front page
    if (is_front_page()) {
        wp_enqueue_script(
            'hello-world-popup',
            plugins_url('hello-world-popup.js', __FILE__),
            array(),
            '1.0',
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'hello_world_popup_enqueue_scripts');

function hello_world_popup_markup() {
    // Only show on front page
    if (is_front_page()) {
        ?>
        <div id="hello-world-popup" style="display: none;">
            <div class="popup-content">
                <h2>Hello World!</h2>
                <p>Welcome to our website!</p>
                <button onclick="document.getElementById('hello-world-popup').style.display = 'none';">Close</button>
            </div>
        </div>
        <?php
    }
}
add_action('wp_footer', 'hello_world_popup_markup');