<?php
/**
 * Block Filters
 *
 * @package fse_fashion_store
 * @since 1.0
 */

function fse_fashion_store_block_wrapper( $fse_fashion_store_block_content, $fse_fashion_store_block ) {

	if ( 'core/button' === $fse_fashion_store_block['blockName'] ) {
		
		if( isset( $fse_fashion_store_block['attrs']['className'] ) && strpos( $fse_fashion_store_block['attrs']['className'], 'has-arrow' ) ) {
			$fse_fashion_store_block_content = str_replace( '</a>', fse_fashion_store_get_svg( array( 'icon' => esc_attr( 'caret-circle-right' ) ) ) . '</a>', $fse_fashion_store_block_content );
			return $fse_fashion_store_block_content;
		}
	}

	if( ! is_single() ) {
	
		if ( 'core/post-terms'  === $fse_fashion_store_block['blockName'] ) {
			if( 'post_tag' === $fse_fashion_store_block['attrs']['term'] ) {
				$fse_fashion_store_block_content = str_replace( '<div class="taxonomy-post_tag wp-block-post-terms">', '<div class="taxonomy-post_tag wp-block-post-terms flex">' . fse_fashion_store_get_svg( array( 'icon' => esc_attr( 'tags' ) ) ), $fse_fashion_store_block_content );
			}

			if( 'category' ===  $fse_fashion_store_block['attrs']['term'] ) {
				$fse_fashion_store_block_content = str_replace( '<div class="taxonomy-category wp-block-post-terms">', '<div class="taxonomy-category wp-block-post-terms flex">' . fse_fashion_store_get_svg( array( 'icon' => esc_attr( 'category' ) ) ), $fse_fashion_store_block_content );
			}
			return $fse_fashion_store_block_content;
		}
		if ( 'core/post-date' === $fse_fashion_store_block['blockName'] ) {
			$fse_fashion_store_block_content = str_replace( '<div class="wp-block-post-date">', '<div class="wp-block-post-date flex">' . fse_fashion_store_get_svg( array( 'icon' => esc_attr( 'calendar' ) ) ), $fse_fashion_store_block_content );
			return $fse_fashion_store_block_content;
		}
		if ( 'core/post-author' === $fse_fashion_store_block['blockName'] ) {
			$fse_fashion_store_block_content = str_replace( '<div class="wp-block-post-author">', '<div class="wp-block-post-author flex">' . fse_fashion_store_get_svg( array( 'icon' => esc_attr( 'user' ) ) ), $fse_fashion_store_block_content );
			return $fse_fashion_store_block_content;
		}
	}
	if( is_single() ){

		// Add chevron icon to the navigations
		if ( 'core/post-navigation-link' === $fse_fashion_store_block['blockName'] ) {
			if( isset( $fse_fashion_store_block['attrs']['type'] ) && 'previous' === $fse_fashion_store_block['attrs']['type'] ) {
				$fse_fashion_store_block_content = str_replace( '<span class="post-navigation-link__label">', '<span class="post-navigation-link__label">' . fse_fashion_store_get_svg( array( 'icon' => esc_attr( 'prev' ) ) ), $fse_fashion_store_block_content );
			}
			else {
				$fse_fashion_store_block_content = str_replace( '<span class="post-navigation-link__label">Next Post', '<span class="post-navigation-link__label">Next Post' . fse_fashion_store_get_svg( array( 'icon' => esc_attr( 'next' ) ) ), $fse_fashion_store_block_content );
			}
			return $fse_fashion_store_block_content;
		}
		if ( 'core/post-date' === $fse_fashion_store_block['blockName'] ) {
            $fse_fashion_store_block_content = str_replace( '<div class="wp-block-post-date">', '<div class="wp-block-post-date flex">' . fse_fashion_store_get_svg( array( 'icon' => 'calendar' ) ), $fse_fashion_store_block_content );
            return $fse_fashion_store_block_content;
        }
		if ( 'core/post-author' === $fse_fashion_store_block['blockName'] ) {
            $fse_fashion_store_block_content = str_replace( '<div class="wp-block-post-author">', '<div class="wp-block-post-author flex">' . fse_fashion_store_get_svg( array( 'icon' => 'user' ) ), $fse_fashion_store_block_content );
            return $fse_fashion_store_block_content;
        }

	}
    return $fse_fashion_store_block_content;
}
	
add_filter( 'render_block', 'fse_fashion_store_block_wrapper', 10, 2 );
