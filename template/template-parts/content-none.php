<section class="no-results not-found py-12">
	<header class="page-header mb-8">
		<h1 class="page-title text-2xl font-bold"><?php esc_html_e( 'Nothing Found', 'hehe-framework' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'hehe-framework' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p class="mb-4"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'hehe-framework' ); ?></p>
			<?php
			get_search_form();

		else :
			?>

			<p class="mb-4"><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'hehe-framework' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
