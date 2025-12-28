<?php
/**
 * Template part for displaying posts
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('mb-12'); ?>>
	<header class="entry-header mb-4">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title text-3xl font-bold mb-2">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title text-2xl font-bold mb-2"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="hover:text-blue-600 transition-colors">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta text-gray-500 text-sm">
				<?php
				echo get_the_date();
				echo ' | ' . get_the_author();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( has_post_thumbnail() && ! is_singular() ) : ?>
		<div class="post-thumbnail mb-4">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'large', ['class' => 'w-full h-auto rounded-lg shadow-sm hover:shadow-md transition-shadow'] ); ?>
			</a>
		</div>
	<?php endif; ?>


	<div class="entry-content prose lg:prose-xl max-w-none text-gray-700">
		<?php
		if ( is_singular() ) {
			the_content();
		} else {
			the_excerpt();
            echo '<a href="' . esc_url( get_permalink() ) . '" class="inline-block mt-4 text-blue-600 font-semibold hover:underline">' . __('Read More &rarr;', 'hehe-framework') . '</a>';
		}
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
