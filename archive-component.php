<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row">

			<main id="main" class="main" role="main">

				<header>
					<h1 class="page-title"><span class="smaller">Viewing all</span>Components</h1>
				</header>

				<?php if ( have_posts() ) :
					while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'parts/loop', 'archive-table' ); ?>
				<?php endwhile; ?>
					<?php start_page_navi(); ?>
				<?php else : ?>

					<?php get_template_part( 'parts/content', 'missing' ); ?>

				<?php endif; ?>

			</main> <!-- end #main -->
			

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>