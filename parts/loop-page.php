<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

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

	<section class="entry-content" itemprop="articleBody">
		<?php the_content(); ?>
		<?php wp_link_pages(); ?>
	</section> <!-- end article section -->

	<footer class="article-footer">

	</footer> <!-- end article footer -->

	<?php comments_template(); ?>

</article> <!-- end article -->