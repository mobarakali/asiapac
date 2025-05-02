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
// Add the Enquire Now button after the product title.
add_action( 'woocommerce_product_meta_end', 'asiapac_product_page_buttons', 6 );
function asiapac_product_page_buttons() {
    $enquiry_link = site_url( '/contact' ); // Change this to your actual enquiry page URL.
    $call_now = "tel:0451353676"; // Replace with your phone number
    echo '<br><a class="asiapac_product_page_button" href="' . esc_url( $call_now ) . '">Call Now</a> ';
    echo '<a class="asiapac_product_page_button" href="' . esc_url( $enquiry_link ) . '">Enquire Now</a>';
}


// Add a custom button to the right of the site
add_action( 'wp_footer', 'asiapac_add_side_button' );
function asiapac_add_side_button() {
    $enquire_now_url = '/contact/'; // Replace with your Enquire Now URL
    $call_now_number = "tel:0451353676"; // Replace with your phone number
    ?>
    <a href="<?php echo esc_url( $enquire_now_url ); ?>" target="_blank" class="asiapac-side-button">Enquire Now</a>

<!-- Mobile Buttons -->
<div class="asiapac-mobile-buttons">
        <a href="<?php echo esc_url( $call_now_number ); ?>" class="asiapac-mobile-button">
            <i class="fas fa-phone-alt"></i> Call Now
        </a>
        <a href="<?php echo esc_url( $enquire_now_url ); ?>" class="asiapac-mobile-button">
            <i class="fas fa-calendar-check"></i> Enquire Now
        </a>
    </div>

    <style>
        /* side button styles */
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
            transform: translateY(-100%) rotate(-90deg);
            transform-origin: right bottom;
            transition: background  .5s ease;
            z-index: 9999;
        }

        .asiapac-side-button:hover {
            background: rgba(103, 194, 124, 0.90);
            color: #fff;
        }
        .asiapac_product_page_button{
            background: rgb(103, 194, 124);
            color: #fff;
            cursor: pointer;
            padding: 10px 20px;
            margin-right: 10px;
            font-family: inherit;
            font-weight: 500;
            font-size: 16px;
            letter-spacing: 1px;
            outline: none;
            text-decoration: none;
            text-transform: uppercase;
            transition: background .5s ease;
        }
        .asiapac_product_page_button:hover {
            background: rgba(103, 194, 124, 0.90);
            color: #fff;
        }

        /* Mobile Buttons */
        
        /* Mobile Buttons (hidden on desktop) */
        .asiapac-mobile-buttons {
            display: none;
        }

        @media (max-width: 767px) {
            .asiapac-side-button {
                display: none;
            }
            .asiapac-mobile-buttons {
                display: flex;
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
                background: #fff;
                border-top: 1px solid #ccc;
                z-index: 9999;
            }
            .asiapac-mobile-button {
                flex: 1;
                text-align: center;
                padding: 10px 0;                
                background:rgb(103, 194, 124);
                color: #fff;
                text-decoration: none;
                font-size: 14px;
                font-family: sans-serif;
                border-right: 1px solid #ccc;
            }
            .asiapac-mobile-button:last-child {
                border-right: none;
            }
            .asiapac-mobile-button:hover {
            background: rgb(70, 133, 85);
            color: #fff;

            }
            .asiapac-mobile-button i {
                margin-right: 5px;
            }
        }
    </style>
    <?php
}
