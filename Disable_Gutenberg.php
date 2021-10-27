<?php
// Disables the Gutenberg block editor.
add_filter( 'use_block_editor_for_post', '__return_false' );
// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );
?>