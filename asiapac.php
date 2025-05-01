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

add_action( 'wp_footer', 'asiapac_add_side_button' );
function asiapac_add_side_button() {
    $button_url = 'https://yourcustomurl.com'; // <-- REPLACE with your URL
    ?>
    <a href="<?php echo esc_url( $button_url ); ?>" target="_blank" class="asiapac-side-button">Click Me</a>
    <style>
        .asiapac-side-button {
            border-radius: 0 0 5px 5px;
            background:rgb(103, 194, 124);
            color: #fff;
            padding: 15px 30px;
            font-family: sans-serif;
            font-size: 16px;
            position: fixed;
            top: 50%;
            left: 0;
            text-decoration: none;
            text-transform: uppercase;
            transform: translateY(-50%) rotate(-90deg);
            transform-origin: left top;
            transition: background 0.3s;
            z-index: 9999;
        }

        .asiapac-side-button:hover {
            background: rgba(103, 194, 124, 0.90);
            color: #fff;
        }
    </style>
    <?php
}
