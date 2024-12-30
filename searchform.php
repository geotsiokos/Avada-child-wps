<?php
/**
 * The search-form template.
 *
 * @package Avada-child-wps
 * @subpackage Templates
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

$config = [
	'design'      => Avada()->settings->get( 'search_form_design' ),
	'live_search' => Avada()->settings->get( 'live_search' ),
];

if ( function_exists( 'woocommerce_product_search' ) ) {
	echo woocommerce_product_search();
} else {
	Fusion_Searchform::get_form( $config );
}
