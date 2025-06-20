<?php
/**
 * Block Pattern Class
 *
 * @author Anantsites
 * @package postblog
 * @since 0.0.1
 */

namespace Postblog;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WP_Block_Pattern_Categories_Registry;

/**
 * Block Pattern Class
 *
 * @package postblog
 */
class Block_Patterns {


	/**
	 * Class constructor.
	 */
	public function __construct() {
		$this->register_block_patterns();
	}

	/**
	 * Register Block Patterns
	 */
	private function register_block_patterns() {
		$block_pattern_categories = array(
			'postblog-basic' => array( 'label' => __( 'Postblog Basic Patterns', 'postblog' ) ),
			'postblog-page' => array( 'label' => __( 'Postblog Pages', 'postblog' ) ),
		);

		$block_pattern_categories = apply_filters( 'fse_block_pattern_categories', $block_pattern_categories );

		foreach ( $block_pattern_categories as $name => $properties ) {
			if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
				register_block_pattern_category( $name, $properties );
			}
		}

		$block_patterns = array(
			'archive-template',
			'template-404',
			'featured-section',
			'you-missed',
			'list-layout-with-sidebar',
			'ticker',
			'recent-post',
			'header',
			'footer',
			'sidebar',
			'page-breadcrumb',
			'archive-breadcrumb',
			'single-template',
			'search',	
			'search-title',	
		);


		$block_patterns = apply_filters( 'fse_block_patterns', $block_patterns );

		if ( function_exists( 'register_block_pattern' ) ) {
			foreach ( $block_patterns as $block_pattern ) {
				$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

				register_block_pattern(
					'postblog/' . $block_pattern,
					require $pattern_file
				);
			}
		}
	}
}