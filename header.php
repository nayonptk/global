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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header-area"> 
	<div class="header">
		<!--header-menu-area -->
		<div class="container">
			<div class="row"> 
							
				<div class="col-xl-3">
					<div class="header-logo-name"> 
						<div class="header-logo"> 
							<a href=""><img src="<?php echo get_template_directory_uri();?>/img/global_logo.png" alt=""></a>
						</div>
						<div class="header-logo-name"> 
							<h4>Global Media</h4>
						</div>
					</div>
				</div>
				
					<!--header-menu-->			
				<div class="col-xl-6 p-0">
					<div class="header-menu"> 
						<ul>
							<li><a href="">Adventures</a></li>
							<li><a href="">Publishers</a></li>
							<li><a href="">Agenciens</a></li>
							<li><a href="">Company</a></li>
							<li><a href="">Our Parthners</a></li>
							<li><a href="">Contact</a></li>
						</ul>
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
							<h5><a href="">Sign Up</a></h5>
						</div>
					</div>
				</div>
				<!--header-menu/-->
			</div>
		</div>
		<!--header-menu-area /-->
		<!--online marketing -->

		<div class="full-marketing"> 
			<div class="container">
				<div class="market-title"> 
					<h1>Global agency online marketing</h1>
				</div>
				<div class="online-market-signup"> 
					<a href="">Sign Up right now</a>
				</div>
			</div>

		</div>


		<!--online marketing /-->
	</div>
</header>
