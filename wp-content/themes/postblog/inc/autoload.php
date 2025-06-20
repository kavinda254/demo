<?php
/**
 * Autoload function
 *
 * @author Anantsites
 * @package postblog
 * @since 0.0.1
 */

spl_autoload_register(
	function( $className ) {
		$prefix   = 'Postblog';
		$base_dir = POSTBLOG_DIR . 'inc/class/';
		$length      = strlen( $prefix );

		if ( strncmp( $prefix, $className, $length ) !== 0 ) {
			return;
		}

		$array_path     = explode( '\\', substr( $className, $length ) );
		$relative_class = array_pop( $array_path );
		$class_path     = strtolower( implode( '/', $array_path ) );
		$class_name     = str_replace( '_', '-', 'class-' . $relative_class . '.php' );

		$file = rtrim( $base_dir, '/' ) . '/' . $class_path . '/' . strtolower( $class_name );

		if ( is_link( $file ) ) {
			$file = readlink( $file );
		}

		if ( is_file( $file ) ) {
			require $file;
		}
	}
);