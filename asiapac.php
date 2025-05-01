<?php
/**
 * Plugin Name: AsiaPac Custom Side Button
 * Plugin URI: https://yourwebsite.com
 * Description: Adds a rotating button on the left side with a custom URL.
 * Version: 1.0
 * Author: Mobarak Ali
 * Author URI: https://github.com/mobarakali
 * License: GPL2
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: asiapac
 * Domain Path: /languages
 *  */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

add_action( 'wp_footer', 'csb_add_side_button' );
function csb_add_side_button() {
    $button_url = 'https://yourcustomurl.com'; // <-- REPLACE with your URL
    ?>
    <a href="<?php echo esc_url( $button_url ); ?>" target="_blank" class="csb-side-button">Click Me</a>
    <style>
        .csb-side-button {
            position: fixed;
            top: 50%;
            left: 0;
            transform: translateY(-50%) rotate(-90deg);
            transform-origin: left top;
            background: #0073aa;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            font-family: sans-serif;
            font-size: 14px;
            border-radius: 0 0 5px 5px;
            transition: background 0.3s;
            z-index: 9999;
        }

        .csb-side-button:hover {
            background: #005177;
        }
    </style>
    <?php
}
