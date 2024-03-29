<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package brutus
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Δεν υπάρχει.', 'brutus' ); ?></h1>
			</header><!-- .page-header -->
			<div class="page-content">
				<a id="ok-button" href="<?php echo esc_url( get_home_url() ) ?>">
					<?php esc_html_e( 'Εντάξει', 'brutus' ) ?>
				</a>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
