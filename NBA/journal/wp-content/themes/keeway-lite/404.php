<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Keeway_Lite
 */

get_header();
keeway_lite_404_banner();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 center-block">
					<section class="error-404 not-found text-center page_404_error">
						<header class="page-header">
							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'keeway-lite' ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content">
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'keeway-lite' ); ?></p>
						<div class="col-sm-6 center-block">
							<?php
								get_search_form();
							?>
						</div>
						</div><!-- .page-content -->
					</section><!-- .error-404 -->
				</div>
			</div>
		</div>					
	</main><!-- #main -->
</div><!-- #primary -->


<?php
get_footer();
