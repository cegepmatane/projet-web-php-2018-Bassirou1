<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Keeway_Lite
 */

?>


<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="site-info text-center">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'keeway-lite' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'keeway-lite' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'keeway-lite' ), 'Keeway Lite', '<a href="http://themesvila.com">Masum Billah</a>' );
				?>
		</div><!-- .site-info -->
	</div>
</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
