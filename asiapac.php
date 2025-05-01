<?php
/**
 * Plugin Name: AsiaPac Buttons
 * Plugin URI: https://github.com/mobarakali/asiapac
 * Description: Adds a 'Enquire Now' rotating button on the Right side with a custom URL.
 * Version: 1.0
 * Author: Mobarak Ali
 * Author URI: https://github.com/mobarakali
 * License: GPL2
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: asiapac
 *  */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

add_action( 'wp_footer', 'asiapac_add_side_button' );
function asiapac_add_side_button() {
    $button_url = '/contact/'; // <-- REPLACE with your URL
    ?>
    <a href="<?php echo esc_url( $button_url ); ?>" target="_blank" class="asiapac-side-button">Enquire Now</a>
    <style>
        .asiapac-side-button {
            border-radius: 3px 3px 0 0;
            background:rgb(103, 194, 124);
            color: #fff;
            cursor: pointer;
            padding: 15px 30px;
            font-family: inherit;
            font-weight: 500;
            font-size: 16px;
            letter-spacing: 1px;
            outline: none;
            position: fixed;
            bottom: 50%;
            right: 0;
            text-decoration: none;
            text-transform: uppercase;
            transform: translateY(-50%) rotate(-90deg);
            transform-origin: right bottom;
            transition: background  .5s ease;
            z-index: 9999;
        }

        .asiapac-side-button:hover {
            background: rgba(103, 194, 124, 0.90);
            color: #fff;
        }
    </style>
    <?php
}
