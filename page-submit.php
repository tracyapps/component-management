<?php if ( !is_user_logged_in() ) {
	$login_page = get_site_url() . '/log-in';
	header( "refresh:4;url=" . $login_page );
	get_header();
} else {
	get_header();
} ?>

<div id="content">
	<div id="inner-content" class="row">
		<main id="main" class="full" role="main">
		<?php if ( !is_user_logged_in() ) { ?>
			<h1>Log in</h1>
			<p>You must be logged in to submit a request. Redirecting you now</p>
		<?php } else { ?>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php get_template_part( 'parts/loop', 'page' ); ?>

			<?php endwhile; endif; ?>
		<?php } //else the user IS logged in ?>
		</main> <!-- end #main -->
	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>