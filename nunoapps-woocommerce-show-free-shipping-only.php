<?php

/*
 * NunoApps - WooCommerce: Show Free Shipping Only
 *
 * Disable flat rate when free is avariable.
 *
 * @package    	NunoApps-WC-Show-Free-Shipping-Only
 * @since      	1.0.0
 * @author     	Pulido Pereira Nuno Ricardo <pereira@nunoapps.com>
 * @copyright  	Copyright (c) 2007 - 2013, Pulido Pereira Nuno Ricardo
 * @link       	http://nunoapps.com/plugins/woocommerce-show-free-shipping-only
 * @license   	http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Copyright 2007 - 2013  Pereira Pulido Nuno Ricardo  (email : pereira@nunoapps.com)
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU 
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume 
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without 
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * You should have received a copy of the GNU General Public License along with this program; if not,
 * write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @wordpress-plugin
 * Plugin Name:       	NunoApps - WooCommerce: Show Free Shipping Only
 * Plugin URI:        	http://nunoapps.com/
 * Description:       	Disable flat rate when free is avariable.
 * Version:           	1.0.0
 * Author:            	NunoApps
 * Author URI:        	http://namaless.com
 * Text Domain:       	nunoapps-woocommerce-show-free-shipping-only
 * License:      		GPL-2.0+
 * License URI:       	http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       	/languages
 * GitHub Plugin URI: 	https://github.com/nunoapps/nunoapps-woocommerce-show-free-shipping-only
 */
 
 // Hide standard shipping option when free shipping is available
add_filter( 'woocommerce_available_shipping_methods', 'nunoapps_hide_standard_shipping_when_free_is_available' , 10, 1 );

/**
 *  Hide Standard Shipping option when free shipping is available
 *
 * @param array $available_methods
 */
function nunoapps_hide_standard_shipping_when_free_is_available( $available_methods ) {

    if ( isset( $available_methods['free_shipping'] ) AND isset( $available_methods['flat_rate'] ) ) {

        // remove standard shipping option
        unset( $available_methods['flat_rate'] );
    }

    return $available_methods;
}