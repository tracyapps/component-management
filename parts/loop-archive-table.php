<?php
/**
 *  Displays archive entries with featured image, tag/category (etc) and short excerpt
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class( 'component_table_row' ); ?> role="article">

	<div class="priority <?php echo start_display_custom_taxonomy_raw( 'priority' ) ?>">
		<?php
			echo start_display_custom_taxonomy( 'priority' );
		?>
	</div>

	<div class="component_detail_columns">
		<a href="<?php the_permalink() ?>"><div class="component_name"><?php the_title(); ?></div></a>
		<div class="tags"><?php the_tags(); ?></div>
	</div>

	<div class="right-side-container">
		<div class="status <?php echo start_display_custom_taxonomy_raw( 'status' ) ?>">
			<?php
			echo start_display_custom_taxonomy( 'status' );
			?>

		</div>
		<?php echo start_display_last_updated(); ?>
	</div>

	<aside class="comments">
		<?php comments_template(); ?>
	</aside>

</article> <!-- end article -->

	