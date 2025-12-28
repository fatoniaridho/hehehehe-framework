<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header();
?>

	<main id="primary" class="site-main container py-24 text-center">

		<section class="error-404 not-found">
			<header class="page-header mb-6">
				<h1 class="page-title text-6xl font-black text-gray-200"><?php esc_html_e( '404', 'hehe-framework' ); ?></h1>
                <h2 class="text-3xl font-bold mt-[-1em] relative z-10"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'hehe-framework' ); ?></h2>
			</header><!-- .page-header -->

			<div class="page-content max-w-md mx-auto mt-8">
				<p class="text-lg text-gray-600 mb-8"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'hehe-framework' ); ?></p>
				<?php get_search_form(); ?>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
