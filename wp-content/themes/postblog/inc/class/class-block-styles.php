<?php
/**
 * Block Style Class
 *
 * @author Anantsites
 * @package postblog
 * @since 0.0.1
 */

namespace Postblog;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Init Class
 *
 * @package postblog
 */
class Block_Styles {
	/**
	 * Class constructor.
	 */
	public function __construct() {
		$this->register_block_styles();
	}

	/**
	 * Register Block Patterns
	 */
	private function register_block_styles() {

		register_block_style(
			'core/group',
			array(
				'name'  => 'fseboxshadow',
				'label' => __( 'Box Shadow', 'postblog' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'fseboxshadowhover',
				'label' => __( 'Box Shadow on Hover', 'postblog' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'fseborderbottomhover',
				'label' => __( 'Border Bottom on Hover', 'postblog' ),
			)
		);

		register_block_style(
			'core/social-links',
			array(
				'name'  => 'fseresponsiveicons',
				'label' => __( 'Postblog Design', 'postblog' ),
			)
		);
	}
}
