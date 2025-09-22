<?php
/**
 * Block Patterns
 *
 * @package fse_fashion_store
 * @since 1.0
 */

function fse_fashion_store_register_block_patterns() {
	$fse_fashion_store_block_pattern_categories = array(
		'fse-fashion-store' => array( 'label' => esc_html__( 'FSE Fashion Store', 'fse-fashion-store' ) ),
		'pages' => array( 'label' => esc_html__( 'Pages', 'fse-fashion-store' ) ),
	);

	$fse_fashion_store_block_pattern_categories = apply_filters( 'fse_fashion_store_fse_fashion_store_block_pattern_categories', $fse_fashion_store_block_pattern_categories );

	foreach ( $fse_fashion_store_block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'fse_fashion_store_register_block_patterns', 9 );