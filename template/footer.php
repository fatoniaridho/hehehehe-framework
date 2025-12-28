	<footer id="colophon" class="site-footer bg-gray-900 text-white py-8 mt-12">
		<div class="site-info container text-center">
            
            <?php if ( get_theme_mod( 'hehe_show_social', true ) ) : ?>
                <!-- Social Placeholder: Bisa diganti dengan ikon asli nanti -->
                <div class="social-links mb-4">
                    <span class="inline-block mx-2">Instagram</span>
                    <span class="inline-block mx-2">Twitter</span>
                </div>
            <?php endif; ?>

			<div class="copyright">
                <?php 
                echo esc_html( get_theme_mod( 'hehe_copyright_text', '© 2024 Hehe Framework. All rights reserved.' ) ); 
                ?>
            </div>

			<div class="designer-credit text-xs text-gray-500 mt-2">
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'hehe-framework' ), 'Hehe Framework', '<a href="#" class="hover:text-white">Antigravity</a>' );
				?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php 
// Output Custom CSS Variable based on Customizer
$hehe_primary_color = get_theme_mod( 'hehe_primary_color', '#000000' );
?>
<style>
    :root {
        --primary-color: <?php echo esc_attr( $hehe_primary_color ); ?>;
    }
    a { color: var(--primary-color); }
</style>

<?php wp_footer(); ?>

</body>
</html>
