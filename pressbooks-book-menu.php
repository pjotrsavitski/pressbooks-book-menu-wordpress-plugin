<?php
/**
 * Plugin Name:     Pressbooks book menu
 * Plugin URI:      https://github.com/pjotrsavitski/pressbooks-book-menu-wordpress-plugin
 * Description:     Automatically opens book menu.
 * Author:          Pjotr Savitski
 * Author URI:      https://github.com/pjotrsavitski
 * Text Domain:     pressbooks-book-menu
 * Domain Path:     /languages
 * Version:         1.0.0
 *
 * @package         Pressbooks_Book_Menu
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Registers a script that will automatically the menu of a book.
 *
 * @return void
 */
function pressbooks_book_menu_enqueue_scripts() {
	wp_enqueue_script('pressbooks-book-menu/book-menu', plugin_dir_url(__FILE__) . 'public/js/book-menu.js', [], '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'pressbooks_book_menu_enqueue_scripts');
