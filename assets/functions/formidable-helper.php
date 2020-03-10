<?php
/**
 * functions for advanced formidable behavior
 */


add_action('frm_after_create_entry', 'start_break_post_content_connection', 60, 2);
function start_break_post_content_connection( $entry_id, $form_id ) {
	if ( $form_id == 2 ) {// ID of your form
		$entry = FrmEntry::getOne( $entry_id );

		if ( ! $entry->post_id ) {
			return;
		}

		delete_post_meta( $entry->post_id, 'frm_display_id' );
	}
}