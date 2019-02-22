<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package global
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); global $redux_demo; ?>
</head>

<body <?php body_class(); ?>>

<header class="header-area <?php if(is_front_page() || is_home()) { echo "header_fix";} ?>"> 
	<div class="header">
		<!--header-menu-area -->
		<div class="container">
			<div class="row"> 
							
				<div class="col-xl-3">
					<div class="header-logo-name"> 
						<div class="header-logo"> 
							<a href="<?php echo esc_url(site_url());?>"><img src="<?php echo $redux_demo['main_logo']['url'];?>" alt=""></a>
						</div>
						<div class="header-logo-name"> 
							<h4><?php echo $redux_demo['logo-name']; ?></h4>
						</div>
					</div>
				</div>
				
					<!--header-menu-->			
				<div class="col-xl-6 p-0">
					<div class="header-menu"> 
						<?php wp_nav_menu(array( 
							'theme_location'	=> "Main-menu",

						)); ?>
					</div>
				</div>
				<!--header-menu/-->
				<!--header-menu-->			
				<div class="col-xl-3">
					<div class="header-lang-sing"> 
						<div class="header-lang"> 
							<select name="" id="global">
								<option value="">EN</option>
							</select>
						</div>
						<div class="header-signup"> 
							<h5><a href="<?php echo esc_url(site_url()); ?>/wp-login.php?action=register">Sign Up</a></h5>
						</div>
					</div>
				</div>
				<!--header-menu/-->
			</div>
		</div>
		<!--header-menu-area /-->
	</div>
</header>
