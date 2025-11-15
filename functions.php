<?php
/**
 * Functions and definitions
 * @since 1.0.0
 */

/**
 * Enqueue the style.css file.
 * 
 * @since 1.0.0
 */
function style_css() {
    wp_enqueue_style( 'my_theme_style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'style_css' );

/**
 * Highlight blocks outline inside the block editor
 * 
 * @since 1.0.0
 */
function block_highlight( $editor_settings, $editor_context ) {
    $editor_settings["styles"][] = array(
        "css" => '.wp-block.is-hovered, .wp-block.is-selected { outline: 2px solid var(--wp-admin-theme-color); transition: 0ms;}'
    );
	return $editor_settings;
}
add_filter( 'block_editor_settings_all', 'block_highlight', 10,2 );

/**
 * Theme color selector
 * 
 * @since 1.0.0
 */
/*function theme_color_selector() {
	?> 
	<script>
	</script>
	<?php
}
add_action( 'wp_footer', 'theme_color_selector', 1 );*/