<?php
/**
 * Template for displaying search forms
 */
?>
<form role="search" method="get" class="search-form relative flex items-center" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="w-full">
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'hehe-framework' ); ?></span>
		<input type="search" class="search-field w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'hehe-framework' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<button type="submit" class="search-submit absolute right-2 text-gray-400 hover:text-blue-600 p-1">
		<span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'hehe-framework' ); ?></span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
	</button>
</form>
