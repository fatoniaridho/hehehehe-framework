<?php
/**
 * The template for displaying comments
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area mt-12 bg-gray-50 p-6 rounded-lg">

	<?php
	if ( have_comments() ) :
		?>
		<h2 class="comments-title text-2xl font-bold mb-6">
			<?php
			$hehe_framework_comment_count = get_comments_number();
			if ( '1' === $hehe_framework_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'hehe-framework' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( 
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $hehe_framework_comment_count, 'comments title', 'hehe-framework' ) ),
					number_format_i18n( $hehe_framework_comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->

		<ol class="comment-list space-y-6">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
                    'avatar_size'=> 48,
                    'callback'   => null, // Use default, can be customized
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments p-4 bg-yellow-50 text-yellow-800 rounded"><?php esc_html_e( 'Comments are closed.', 'hehe-framework' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	comment_form(array(
        'class_submit' => 'cursor-pointer mt-4 bg-blue-600 text-white py-2 px-6 rounded hover:bg-blue-700 transition',
        'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title text-xl font-bold mt-8 mb-4">',
        'title_reply_after'  => '</h2>',
    ));
	?>

</div><!-- #comments -->
