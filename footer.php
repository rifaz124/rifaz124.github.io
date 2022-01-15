<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Acme Themes
 * @subpackage Portfolio Web
 */

/**
 * portfolio_web_action_after_content hook
 * @since Portfolio Web 1.0.0
 *
 * @hooked null
 */
do_action( 'portfolio_web_action_after_content' );

/**
 * portfolio_web_action_before_footer hook
 * @since Portfolio Web 1.0.0
 *
 * @hooked null
 */
do_action( 'portfolio_web_action_before_footer' );

/**
 * portfolio_web_action_footer hook
 * @since Portfolio Web 1.0.0
 *
 * @hooked portfolio_web_footer - 10
 */
do_action( 'portfolio_web_action_footer' );

/**
 * portfolio_web_action_after_footer hook
 * @since Portfolio Web 1.0.0
 *
 * @hooked null
 */
do_action( 'portfolio_web_action_after_footer' );

/**
 * portfolio_web_action_after hook
 * @since Portfolio Web 1.0.0
 *
 * @hooked portfolio_web_page_end - 10
 */
do_action( 'portfolio_web_action_after' );

wp_footer();
?>
</body>
</html>