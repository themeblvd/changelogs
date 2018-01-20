<?php
/**
 * Extends parsedown.
 *
 * The main purpose of this currently is just
 * to add automated IDs to headings.
 */
class ParsedownExtend extends Parsedown {

	protected function element( array $element ) {

		$markup = parent::element( $element );

		$tags = array( 'h1', 'h2', 'h3', 'h4', 'h5', 'h6' );

		if ( in_array( $element['name'], $tags ) ) {

			foreach ( $tags as $tag ) {

				if ( $tag == $element['name'] ) {

					$id = explode( ' - ', $element['text'] );

					$id = $id[0];

					$id = strtolower( $id );

					$id = str_replace( ' ', '-', $id );

					$find = '<' . $tag . '>';

					$replace = '<' . $tag . ' id="' . $id . '">';

					$markup = str_replace( $find, $replace, $markup );

				}

			}

		}

		return $markup;

	}

}
