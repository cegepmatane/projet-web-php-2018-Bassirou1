<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Keeway_Lite
 */

$categories_list = get_the_category_list( esc_html__( ', ', 'keeway-lite' ) );
 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
	<div class="home_single_blog">
		<?php if(has_post_thumbnail()){?>
			<div class="post_img">				
				<?php the_post_thumbnail('keeway_lite_image_850_530', array('class' => 'img-responsive blog-photo', ));?>				
			</div>
		
		<?php } ?>
		<div class="home_blog_text">
			<div class="post_meta">
				<span><i class="ti-timer"></i> <?php echo esc_html(get_the_time( get_option('date_format')));?></span>
				<span><i class="ti-user"></i> <?php esc_html_e('by' , 'keeway-lite');?> <?php keeway_lite_author(); ?></span>
				<span><i class="ti-files"></i> <?php echo $categories_list; ?></span>
			</div>	
			<?php 
			
			the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' ); 
			
			?>
			<div class="entry-content">		
				<?php the_content();				
					
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'keeway-lite' ),
						'after'  => '</div>',
					) );
					
					keeway_lite_social_share_button();
				?>	
			</div>
		</div>
	</div>
</article>
