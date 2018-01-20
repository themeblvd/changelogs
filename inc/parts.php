<?php
/**
 * Output the site title.
 *
 * @param array $theme Current theme data.
 */
function title( $theme ) {

	if ( $theme ) {
		echo $theme['name'] . ' Changelog';
	} else {
		echo 'Theme Blvd Changelogs';
	}

}

/**
 * Output the body class.
 *
 * @param array $theme Current theme data.
 */
function body_class( $theme ) {

	$class = array();

	if ( $theme ) {
		if ( ! $theme['update'] && ! $theme['docs'] && ! $theme['support'] && ! $theme['buy'] ) {
			$class[] = 'no-menu';
		}
	}

	echo implode( ' ', $class );

}
