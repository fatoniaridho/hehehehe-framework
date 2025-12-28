<?php
/**
 * The template for displaying all pages
 */

get_header();
?>

	<main id="primary" class="site-main container py-12">

		<?php
		while ( have_posts() ) :
			the_post();

            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header mb-8">
                    <?php the_title( '<h1 class="entry-title text-4xl font-extrabold text-gray-900">', '</h1>' ); ?>
                </header>

                <div class="entry-content prose max-w-none">
                    <?php
                    the_content();

                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hehe-framework' ),
                            'after'  => '</div>',
                        )
                    );
                    ?>
                </div>
            </article>
            <?php

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
