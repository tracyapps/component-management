<?php
/**
 * Theme shortcodes
 */

/**
 * shortcode to make a pull quote from some text/content.
 *
 * @param      $atts
 * @param null $content
 * @return string
 */

function start_pullquote_shortcode( $atts, $content=null ) {
	extract(
		shortcode_atts(
			array(
				"align" => 'right'
			), $atts)
	);

	if ( $align == 'left' ) {
		$position = 'left';
	} elseif ( $align == 'right' ) {
		$position = 'right';
	} else {
		$position = 'right';
	}

	return '<span class="pullquote ' . $position . '">' . $content . '</span>';

}
add_shortcode( 'pullquote', 'start_pullquote_shortcode' );

/**
 * shortcode to place a container around a group of images so they can be styled nicely together instead of having weird floating issues
 *
 * @param      $atts
 * @param null $content
 * @return string
 */
function start_group_photos_shortcode( $atts, $content = null ) {

	return '<div class="group-photos"><div class="inner-group">' . do_shortcode( $content ) . '</div></div>';

}
add_shortcode( 'group-photos', 'start_group_photos_shortcode' );


/**
 * shortcode for repeater display, formidable pro
 *
 * @param $atts
 * @return string
 */

function frm_repeat_post( $atts ) {
	$content = '';
	$field_ids = explode( ',', $atts['field_ids'] );
	if ( ! isset( $_POST['item_meta'][ $atts['section_id'] ] ) ) {
		return $content;
	}

	foreach ( (array) $_POST['item_meta'][ $atts['section_id'] ] as $row ) {
		if ( $key === 'form' || $key === 'row_ids' ) {
			continue;
		}
		foreach ( (array) $field_ids as $field_id ) {
			if ( is_array( $row[ $field_id ] ) ) {
				$content .= ' ' . sanitize_text_field( implode( ', ', $row[ $field_id ] ) ) . '
';
			} else {
				$content .= $row[ $field_id ];
			}
		}
		$content .= '<br/>';
	}
	return $content;
}
add_shortcode('frm-repeat-post', 'frm_repeat_post');