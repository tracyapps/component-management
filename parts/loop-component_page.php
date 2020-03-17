<?php

/*echo '<h1>hi</h1>';
$the_post_id = $post->ID;
echo get_the_category_list( $the_post_id );
the_terms( $the_post_id, 'priority', '', '', '');
the_tags();
echo '<hr/>';
var_dump( $post );
echo '<h3>bye</h3>';*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'component_detail_page' ); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

	<header class="article-header">
		<h1 class="page-title">
			<?php the_title(); ?>
		</h1>
			<div class="meta">
				<span class="group">Priority: <?php the_terms( $the_post_id, 'priority', '', '', ''); ?></span>
				<span class="group">Category: <?php the_category(); ?></span>
				<span class="group"><?php the_tags(); ?> </span>
				<span class="group">Submitted by: <?php the_author(); ?> </span>
				<span class="group">Created: <?php the_date(); ?> </span>
				<span class="group">Modified: <?php the_modified_date(); ?></span>
			</div>

		</header> <!-- end article header -->

		<?php the_content(); ?>
		<?php wp_link_pages(); ?>

	<aside class="comments">
		<?php comments_template(); ?>
	</aside>

	<footer class="article-footer">

	</footer> <!-- end article footer -->
</article> <!-- end article -->