<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Acme Themes
 * @subpackage Portfolio Web
 */

/**
 * portfolio_web_action_before_head hook
 * @since Portfolio Web 1.0.0
 *
 * @hooked portfolio_web_set_global -  0
 * @hooked portfolio_web_doctype -  10
 */
do_action( 'portfolio_web_action_before_head' );?>
	<head>

		<?php
		/**
		 * portfolio_web_action_before_wp_head hook
		 * @since Portfolio Web 1.0.0
		 *
		 * @hooked portfolio_web_before_wp_head -  10
		 */
		do_action( 'portfolio_web_action_before_wp_head' );

		wp_head();
		?>

	</head>
<body <?php body_class();?>>

<?php
/**
 * WordPress Default Hook
 * Triggered after the opening <body> tag.
 * wp_body_open hook
 *
 * @since WordPress 5.2
 *
 */
do_action( 'wp_body_open' );
/**
 * portfolio_web_action_before hook
 * @since Portfolio Web 1.0.0
 *
 * @hooked portfolio_web_site_start - 20
 */
do_action( 'portfolio_web_action_before' );

/**
 * portfolio_web_action_before_header hook
 * @since Portfolio Web 1.0.0
 *
 * @hooked portfolio_web_skip_to_content - 10
 */
do_action( 'portfolio_web_action_before_header' );

/**
 * portfolio_web_action_header hook
 * @since Portfolio Web 1.0.0
 *
 * @hooked portfolio_web_header - 10
 */
do_action( 'portfolio_web_action_header' );

/**
 * portfolio_web_action_after_header hook
 * @since Portfolio Web 1.0.0
 *
 * @hooked null
 */
do_action( 'portfolio_web_action_after_header' );

/**
 * portfolio_web_action_before_content hook
 * @since Portfolio Web 1.0.0
 *
 * @hooked null
 */
do_action( 'portfolio_web_action_before_content' );