<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Keeway_Lite
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function keeway_lite_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'keeway_lite_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function keeway_lite_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'keeway_lite_pingback_header' );

function keeway_lite_blog_banner(){ 

?>

<div class="main_banner_area <?php if(get_header_image() ){ echo esc_attr('banner_image');}else{ echo esc_attr('banner_bg_color');}?>" <?php if(get_header_image() ){ ?> style="background: url(<?php header_image(); ?>)no-repeat;background-size:cover;  background-position: top top; background-attachment:scroll;" <?php } ?> >
	<div class="container">
		<div class="bannar_padding text-center" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
			<h2 class="title_blog"><?php echo esc_html( get_bloginfo( 'name', 'display' ) ); ?></h2>
			<p><?php echo esc_html(get_bloginfo( 'description', 'display' ));?></p>
		</div>
	</div>
</div>

<?php }


function keeway_lite_archive_banner(){ 

?>

<div class="main_banner_area <?php if(get_header_image() ){ echo esc_attr('banner_image');}else{ echo esc_attr('banner_bg_color');}?>" <?php if(get_header_image() ){ ?> style="background: url(<?php header_image(); ?>)no-repeat;background-size:cover;  background-position: top top; background-attachment:scroll;" <?php } ?> >
	<div class="container">
		<div class="bannar_padding text-center" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
			<h2 class="title_blog"><?php the_archive_title(); ?></h2>
			<p><?php echo esc_html(get_bloginfo( 'description', 'display' ));?></p>
		</div>
	</div>
</div>

<?php }


function keeway_lite_single_banner(){ 

?>

<div class="main_banner_area <?php if(get_header_image() ){ echo esc_attr('banner_image');}else{ echo esc_attr('banner_bg_color');}?>" <?php if(get_header_image() ){ ?> style="background: url(<?php header_image(); ?>)no-repeat;background-size:cover;  background-position: top top; background-attachment:scroll;" <?php } ?> >
	<div class="container">
		<div class="bannar_padding text-center" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
			<h2 class="title_blog"><?php the_title(); ?></h2>
			<p><?php echo esc_html(get_bloginfo( 'description', 'display' ));?></p>
		</div>
	</div>
</div>

<?php }


function keeway_lite_404_banner(){ 


?>

<div class="main_banner_area <?php if(get_header_image() ){ echo esc_attr('banner_image');}else{ echo esc_attr('banner_bg_color');}?>" <?php if(get_header_image() ){ ?> style="background: url(<?php header_image(); ?>)no-repeat;background-size:cover;  background-position: top top; background-attachment:scroll;" <?php } ?> >
	<div class="container">
		<div class="bannar_padding text-center" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
			<h2 class="title_blog"><?php esc_html_e('404' , 'keeway-lite');?></h2>
			<p><?php echo esc_html(get_bloginfo( 'description', 'display' ));?></p>
		</div>
	</div>
</div>

<?php }


function keeway_lite_search_banner(){ 

?>

<div class="main_banner_area <?php if(get_header_image() ){ echo esc_attr('banner_image');}else{ echo esc_attr('banner_bg_color');}?>" <?php if(get_header_image() ){ ?> style="background: url(<?php header_image(); ?>)no-repeat;background-size:cover;  background-position: top top; background-attachment:scroll;" <?php } ?> >
	<div class="container">
		<div class="bannar_padding text-center" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
			<h2 class="title_blog"><?php
				/* translators: %s: search query. */
				printf( esc_html__( 'Search Results for: %s', 'keeway-lite' ), '<span>' . get_search_query() . '</span>' );
				?>
				</h2>
			<p><?php echo esc_html(get_bloginfo( 'description', 'display' ));?></p>
		</div>
	</div>
</div>

<?php }

function keeway_lite_social_share_button(){

	$permalink = get_permalink(get_the_ID());
	$title = the_title_attribute( 'echo=0' );			
	?>
	
	<div class="social_share_button">
		<span class="pull-left"><?php esc_html_e('Share This Post' , 'keeway-lite');?></span>
		<ul class="list-inline">
			<li><a class="facebook" onClick="window.open('http://www.facebook.com/sharer.php?u=<?php echo esc_url($permalink) ;?>','Facebook','width=600,height=300,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-150)+''); return false;" href="http://www.facebook.com/sharer.php?u=<?php echo esc_url($permalink) ;?>"><i class="fa fa-facebook"></i></a></li>
			<li><a class="twitter" onClick="window.open('http://twitter.com/share?url=<?php echo esc_url($permalink) ;?>&amp;text=<?php echo $title ;?>','Twitter share','width=600,height=300,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-150)+''); return false;" href="http://twitter.com/share?url=<?php echo esc_url($permalink) ;?>&amp;text=<?php echo str_replace(" ", "%20", $title); ?>"><i class="fa fa-twitter"></i></a></li>
			<li><a class="google-plus" onClick="window.open('https://plus.google.com/share?url=<?php echo esc_url($permalink) ;?>','Google plus','width=585,height=666,left='+(screen.availWidth/2-292)+',top='+(screen.availHeight/2-333)+''); return false;" href="https://plus.google.com/share?url=<?php echo esc_url($permalink) ;?>"><i class="fa fa-google-plus"></i></a></li>
			<li><a class="pinterest" href='javascript:void((function()%7Bvar%20e=document.createElement(&apos;script&apos;);e.setAttribute(&apos;type&apos;,&apos;text/javascript&apos;);e.setAttribute(&apos;charset&apos;,&apos;UTF-8&apos;);e.setAttribute(&apos;src&apos;,&apos;http://assets.pinterest.com/js/pinmarklet.js?r=&apos;+Math.random()*99999999);document.body.appendChild(e)%7D)());'><i class="fa fa-pinterest"></i></a></li>
		</ul>
	</div>		
	
<?php			
}