<?php
$extra_article_class = '';
if( 'component' == get_post_type() ) {
	$extra_article_class = 'component_detail_page';
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( $extra_article_class ); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

	<header class="article-header">
		<h1 class="page-title">
			<?php if( is_page( 'create-account' ) ) { ?>
				<a href="/log-in">Log in</a> |
			<?php } ?>
			<?php the_title(); ?>
			<?php if( is_page( 'log-in' ) ) { ?>
				| <a href="/create-account">Create an account</a>
			<?php } ?>
		</h1>
	</header> <!-- end article header -->

	<!--section class="entry-content" itemprop="articleBody"-->
		<?php the_content(); ?>
		<?php wp_link_pages(); ?>
	<!--/section> <!-- end article section -->

	<aside class="comments">
		<?php comments_template(); ?>
	</aside>

	<footer class="article-footer">

	</footer> <!-- end article footer -->
</article> <!-- end article -->