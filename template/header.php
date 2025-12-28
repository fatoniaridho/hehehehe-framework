<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'hehe-framework' ); ?></a>

	<header id="masthead" class="site-header">
        <div class="container header-container">
            <div class="site-branding">
                <?php
                if ( has_custom_logo() ) :
                    the_custom_logo();
                else :
                    ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php
                    $hehe_framework_description = get_bloginfo( 'description', 'display' );
                    if ( $hehe_framework_description || is_customize_preview() ) :
                        ?>
                        <p class="site-description"><?php echo $hehe_framework_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
                    <?php endif;
                endif;
                ?>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation">
                <button id="menu-toggle" class="menu-toggle lg:hidden block text-gray-700 p-2 focus:outline-none" aria-controls="primary-menu" aria-expanded="false">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
                <div id="primary-menu-container" class="hidden lg:block">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                            'container'      => false,
                            'menu_class'     => 'flex flex-col lg:flex-row lg:space-x-8 mt-4 lg:mt-0',
                        )
                    );
                    ?>
                </div>
            </nav><!-- #site-navigation -->
        </div>
	</header><!-- #masthead -->

    <script>
    // Simple Mobile Menu Toggle
    document.getElementById('menu-toggle').addEventListener('click', function() {
        var menu = document.getElementById('primary-menu-container');
        menu.classList.toggle('hidden');
    });
    </script>
