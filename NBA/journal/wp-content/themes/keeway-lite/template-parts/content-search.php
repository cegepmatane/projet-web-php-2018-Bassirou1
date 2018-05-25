<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Keeway_Lite
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
	<div class="home_single_blog">

		<div class="home_blog_text">
			<div class="post_meta">
				<span><i class="ti-timer"></i> <?php echo esc_html(get_the_time( get_option('date_format')));?></span>
				<span><i class="ti-user"></i> <?php esc_html_e('by' , 'keeway-lite');?> <?php keeway_lite_author(); ?></span>

			</div>	
			<?php 
			
			the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' ); 
			
			?>

			<div class="entry-content">				
				<?php the_excerpt();?>
				<?php 
					
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'keeway-lite' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
					
			<a class="blog_btn" href="<?php the_permalink();?>"><?php esc_html_e('Read More' , 'keeway-lite');?></a>	
			
		</div>
	</div>
</article>