<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Acme Themes
 * @subpackage Portfolio Web
 */
get_header();
global $portfolio_web_customizer_all_values;
?>
<div class="wrapper inner-main-title">
	<?php
	echo portfolio_web_get_header_normal_image();
	?>
	<div class="container">
		<header class="entry-header init-animate">
			<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'portfolio-web' ); ?></h1>
			<?php
			portfolio_web_breadcrumbs();
			?>
		</header>
	</div>
</div>
<div id="content" class="site-content container clearfix">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="error-404 not-found">
				<div class="page-content">
					<div class="row">
						<div class="col-md-12">
						
							<div class="error-content">
								<img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/404-image.png'); ?>" alt="404 image" />

								<h1><?php esc_html_e('404 Error','portfolio-web'); ?></h1>
								<h3>
									<?php esc_html_e('Sorry! We could not found that page','portfolio-web'); ?>
								</h3>
								<p>
								<?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'portfolio-web' ); ?>

								</p>
								<?php get_search_form(); ?>
							</div>
						</div>
					</div>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- #content -->
<?php get_footer();