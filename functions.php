<?php
/**
 * Portfolio Web functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Acme Themes
 * @subpackage Portfolio Web
 */


/**
 * Default Theme layout options
 *
 * @since Portfolio Web 1.0.0
 *
 * @param null
 * @return array $portfolio_web_theme_layout
 *
 */
if ( !function_exists('portfolio_web_get_default_theme_options') ) :
    function portfolio_web_get_default_theme_options() {

        $default_theme_options = array(

            /*logo and site title*/
            'portfolio-web-display-site-logo'      => '',
            'portfolio-web-display-site-title'     => 1,
            'portfolio-web-display-site-tagline'   => 1,

            /*header height*/
            'portfolio-web-header-height'          => 300,
            'portfolio-web-header-image-display'   => 'normal-image',

            /*header top*/
            'portfolio-web-enable-header-top'       => '',
            'portfolio-web-header-top-menu-display-selection'      => 'right',
            'portfolio-web-header-top-info-display-selection'      => 'left',
            'portfolio-web-header-top-social-display-selection'    => 'right',

            /*menu options*/
            'portfolio-web-menu-display-options'      => 'menu-default',
            'portfolio-web-enable-sticky'                  => '',
            'portfolio-web-menu-right-button-options'      => 'disable',
            'portfolio-web-menu-right-button-title'        => esc_html__('Book Table','portfolio-web'),
            'portfolio-web-menu-right-button-link'         => '',
            'portfolio-web-enable-cart-icon'               => '',

            /*feature section options*/
            'portfolio-web-enable-feature'                         => '',
            'portfolio-web-slides-data'                            => '',
            'portfolio-web-feature-slider-enable-animation'        => 1,
            'portfolio-web-feature-slider-display-title'           => 1,
            'portfolio-web-feature-slider-display-excerpt'         => 1,
            'portfolio-web-fs-image-display-options'               => 'full-screen-bg',
            'portfolio-web-feature-slider-text-align'              => 'text-left',
            'portfolio-web-slider-scroll-text'              => '',
            'portfolio-web-slider-scroll-link'              => '',

            /*basic info*/
            'portfolio-web-feature-info-number'    => 4,
            'portfolio-web-first-info-icon'        => 'fa-calendar',
            'portfolio-web-first-info-title'       => esc_html__('Send Us a Mail', 'portfolio-web'),
            'portfolio-web-first-info-desc'        => esc_html__('domain@example.com ', 'portfolio-web'),
            'portfolio-web-second-info-icon'       => 'fa-map-marker',
            'portfolio-web-second-info-title'      => esc_html__('Our Location', 'portfolio-web'),
            'portfolio-web-second-info-desc'       => esc_html__('Elmonte California', 'portfolio-web'),
            'portfolio-web-third-info-icon'        => 'fa-phone',
            'portfolio-web-third-info-title'       => esc_html__('Call Us', 'portfolio-web'),
            'portfolio-web-third-info-desc'        => esc_html__('01-23456789-10', 'portfolio-web'),
            'portfolio-web-forth-info-icon'        => 'fa-envelope-o',
            'portfolio-web-forth-info-title'       => esc_html__('Office Hours', 'portfolio-web'),
            'portfolio-web-forth-info-desc'        => esc_html__('8 hours per day', 'portfolio-web'),

            /*footer options*/
            'portfolio-web-footer-copyright'                       => esc_html__( '&copy; All right reserved', 'portfolio-web' ),
            'portfolio-web-footer-copyright-beside-option'         => 'footer-menu',
            'portfolio-web-enable-footer-power-text'               => 1,
            'portfolio-web-footer-site-info'                       => '',
            'portfolio-web-footer-bg-img'                          => '',

            /*layout/design options*/
            'portfolio-web-pagination-option'      => 'numeric',

            'portfolio-web-enable-animation'       => '',

            'portfolio-web-single-sidebar-layout'                  => 'right-sidebar',
            'portfolio-web-front-page-sidebar-layout'              => 'right-sidebar',
            'portfolio-web-archive-sidebar-layout'                 => 'right-sidebar',

            'portfolio-web-blog-archive-img-size'                  => 'full',
            'portfolio-web-blog-archive-content-from'              => 'excerpt',
            'portfolio-web-blog-archive-excerpt-length'            => 42,
            'portfolio-web-blog-archive-more-text'                 => esc_html__( 'Read More', 'portfolio-web' ),


            'portfolio-web-primary-color'          => '#4f6df5',
            'portfolio-web-header-top-bg-color'    => '#4f6df5',
            'portfolio-web-footer-bg-color'        => '#1b1b1b',
            'portfolio-web-footer-bottom-bg-color' => '#2d2d2d',
            'portfolio-web-link-color'             => '#748BF7',
            'portfolio-web-link-hover-color'       => '#3f5dcf',

            'portfolio-web-hide-front-page-content' => '',
            'portfolio-web-hide-front-page-header'  => '',

            /*woocommerce*/
            'portfolio-web-wc-shop-archive-sidebar-layout'     => 'no-sidebar',
            'portfolio-web-wc-product-column-number'           => 4,
            'portfolio-web-wc-shop-archive-total-product'      => 16,
            'portfolio-web-wc-single-product-sidebar-layout'   => 'no-sidebar',

            /*single post*/
            'portfolio-web-single-header-title'            => esc_html__( 'Blog', 'portfolio-web' ),
            'portfolio-web-single-img-size'                => 'full',

            /*theme options*/
            'portfolio-web-popup-widget-title'     => esc_html__( 'Booking Table', 'portfolio-web' ),
            'portfolio-web-breadcrumb-options'        => 'hide',
            'portfolio-web-search-placeholder'     => esc_html__( 'Search', 'portfolio-web' ),
            'portfolio-web-social-data'            => ''

        );
        return apply_filters( 'portfolio_web_default_theme_options', $default_theme_options );
    }
endif;

/**
 * Get theme options
 *
 * @since Portfolio Web 1.0.0
 *
 * @param null
 * @return array portfolio_web_theme_options
 *
 */
if ( !function_exists('portfolio_web_get_theme_options') ) :
    function portfolio_web_get_theme_options() {

        $portfolio_web_default_theme_options = portfolio_web_get_default_theme_options();
        $portfolio_web_get_theme_options = get_theme_mod( 'portfolio_web_theme_options');
        if( is_array( $portfolio_web_get_theme_options )){
            return array_merge( $portfolio_web_default_theme_options ,$portfolio_web_get_theme_options );
        }
        else{
            return $portfolio_web_default_theme_options;
        }
    }
endif;

$portfolio_web_saved_theme_options = portfolio_web_get_theme_options();
$GLOBALS['portfolio_web_customizer_all_values'] = $portfolio_web_saved_theme_options;

/**
 * Require init.
 */
require trailingslashit( get_template_directory() ).'acmethemes/init.php';
