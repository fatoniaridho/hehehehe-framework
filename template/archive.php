<?php
/**
 * The template for displaying archive pages
 */

get_header();
?>

	<main id="primary" class="site-main container py-12">

		<?php if ( have_posts() ) : ?>

			<header class="page-header mb-12 border-b pb-4">
				<?php
				the_archive_title( '<h1 class="page-title text-3xl font-bold">', '</h1>' );
				the_archive_description( '<div class="archive-description text-gray-600 mt-2">', '</div>' );
				?>
			</header><!-- .page-header -->

			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );
			endwhile;
            ?>
            </div>
            <?php

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
