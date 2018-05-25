<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Keeway_Lite
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- START NAVBAR -->
	<div class="navbar navbar-default navbar-fixed menu-top">
		<div class="container">
			<div class="navbar-header">   
				
			<?php if(get_custom_logo()){
					
					keeway_lite_the_custom_logo();
					}else { ?>
				 <h3 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html(get_bloginfo('name'));?></a></h3>
			
			<?php } ?>	
		

			</div>
			
			<div class="menu_wrap">
				<nav id="nav">
					<?php keeway_lite_main_menu();?>
				</nav>		
				
				<div id="mobile_menu">
					<nav>
						<?php keeway_lite_mobile_menu();?>
					</nav>			
				</div>			
			</div>			
		   
			
		</div><!--- END CONTAINER -->
	</div> 
	<!-- END NAVBAR -->	