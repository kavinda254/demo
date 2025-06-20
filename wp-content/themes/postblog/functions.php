<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lesson-one
 * @since 0.0.1
 */

/**
 * Enqueue the style.css file.
 * 
 * @since 0.0.1
 */
defined( 'POSTBLOG_VERSION' ) || define( 'POSTBLOG_VERSION', '1.3' );
defined( 'POSTBLOG_DIR' ) || define( 'POSTBLOG_DIR', trailingslashit( get_template_directory() ) );
defined( 'POSTBLOG_URI' ) || define( 'POSTBLOG_URI', trailingslashit( get_template_directory_uri() ) );

require get_parent_theme_file_path( 'inc/autoload.php' );
require get_parent_theme_file_path( 'inc/wptt-webfont-loader.php' );
require get_parent_theme_file_path( 'inc/notice.php' );
require get_parent_theme_file_path( 'inc/admin/admin.php' );

Postblog\Init::instance();