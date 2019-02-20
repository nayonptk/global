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
							<img src="<?php echo get_template_directory_uri();?>/img/global_logo.png" alt="">
						</div>
						<div class="header-logo-name"> 
							<h4>Global Media</h4>
						</div>
					</div>
				</div>
				
					<!--header-menu-->			
				<div class="col-xl-6">
					<div class="header-menu"> 
						<ul>
							<li>Adventures</li>
							<li>Publishers</li>
							<li>Agenciens</li>
							<li>Company</li>
							<li>Our Parthners</li>
							<li>Contact</li>
						</ul>
					</div>
				</div>
				<!--header-menu/-->
				<!--header-menu-->			
				<div class="col-xl-3">
					<div class="header-lang-sing"> 
						<div class="header-lang"> 
							<select name="" id="">
								<option value="">EN</option>
							</select>
						</div>
						<div class="header-signup"> 
							<h5>Sign Up</h5>
						</div>
					</div>
				</div>
				<!--header-menu/-->
			</div>
		</div>
		<!--header-menu-area /-->
		<!--online marketing -->

		<div class="container">
			<div class="row">
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

<section class="service-area"> 
	<div class="service"> 
		<div class="container"> 
			<div class="row">
				<!--single service-->
				<div class="col-xl-4"> 
					<div class="Advertisers-service">
						<div class="Advertisers-title"> 
							<h3>Advertisers</h3>
						</div>
						<div class="Advertisers-content"> 
							<p>That can be definitely said about the contemporary travel websites. </p>
						</div>
						<div class="Advertisers-Join"> 
							<a href="">Join Now</a>
						</div>
						<div class="Advertisers-more"> 
							<a href="">Read More</a>
						</div>
					</div>	
				</div>
				<!--single service /-->
				<!--single service-->
				<div class="col-xl-4"> 
					<div class="Advertisers-service">
						<div class="Advertisers-title"> 
							<h3>Publishers</h3>
						</div>
						<div class="Advertisers-content"> 
							<p>That can be definitely said about the contemporary travel websites. </p>
						</div>
						<div class="Advertisers-Join"> 
							<a href="">Join Now</a>
						</div>
						<div class="Advertisers-more"> 
							<a href="">Read More</a>
						</div>
					</div>	
				</div>
				<!--single service /-->
				<!--single service-->
				<div class="col-xl-4"> 
					<div class="Advertisers-service">
						<div class="Advertisers-title"> 
							<h3>Agencies</h3>
						</div>
						<div class="Advertisers-content"> 
							<p>That can be definitely said about the contemporary travel websites. </p>
						</div>
						<div class="Advertisers-Join"> 
							<a href="">Join Now</a>
						</div>
						<div class="Advertisers-more"> 
							<a href="">Read More</a>
						</div>
					</div>	
				</div>
				<!--single service /-->
			</div>
		</div>
	</div>
</section>
<section class="Why-we-area"> 
	<div class="Why-we">
		<div class="container"> 
			<div class="Why-we-title"> 
				<h1>Why we?</h1>
				<p>That can be definitely said about the contemporary travel websites. </p>
			</div> 		
			<div class="row"> 
				<!--single-why-we-->
				<div class="col-xl-3"> 
					<div class="single-why-we">
						<div class="single-we-icon"> 
							<img src="<?php echo get_template_directory_uri();?>/img/global_logo.png" alt="">
						</div>
						<div class="single-we-content">
							<p>As the holidays approach, everything tends to get a little hectic. Stress levels increase, there seems to be more unfinished business to take care of than usual. And deadlines, which should always be met anyway,</p>
						</div>
					</div>
				</div>
				<!--single-why-we /-->
				<!--single-why-we-->
				<div class="col-xl-3"> 
					<div class="single-why-we">
						<div class="single-we-icon"> 
							<img src="<?php echo get_template_directory_uri();?>/img/global_logo.png" alt="">
						</div>
						<div class="single-we-content">
							<p>As the holidays approach, everything tends to get a little hectic. Stress levels increase, there seems to be more unfinished business to take care of than usual. And deadlines, which should always be met anyway,</p>
						</div>
					</div>
				</div>
				<!--single-why-we /-->
				<!--single-why-we-->
				<div class="col-xl-3"> 
					<div class="single-why-we">
						<div class="single-we-icon"> 
							<img src="<?php echo get_template_directory_uri();?>/img/global_logo.png" alt="">
						</div>
						<div class="single-we-content">
							<p>As the holidays approach, everything tends to get a little hectic. Stress levels increase, there seems to be more unfinished business to take care of than usual. And deadlines, which should always be met anyway,</p>
						</div>
					</div>
				</div>
				<!--single-why-we /-->
				<!--single-why-we-->
				<div class="col-xl-3"> 
					<div class="single-why-we">
						<div class="single-we-icon"> 
							<img src="<?php echo get_template_directory_uri();?>/img/global_logo.png" alt="">
						</div>
						<div class="single-we-content">
							<p>As the holidays approach, everything tends to get a little hectic. Stress levels increase, there seems to be more unfinished business to take care of than usual. And deadlines, which should always be met anyway,</p>
						</div>
					</div>
				</div>
				<!--single-why-we /-->
			</div>
		</div>

	</div>
</section>
<section class="working-area"> 
	<div class="working"> 
		<div class="container"> 
			<div class="working-title"> 
				<h3>How we are working?</h3>
				<p>That can be definitely said about the contemporary travel websites. </p>
			</div>
			<div class="row"> 
				<!--single-working-->
				<div class="col-xl-2"> 
					<div class="single-working"> 
						<h5>CPI</h5>
					</div>
				</div>
				<!--single-working-->
				<!--single-working-->
				<div class="col-xl-2"> 
					<div class="single-working"> 
						<h5>CPA</h5>
					</div>
				</div>
				<!--single-working-->
				<!--single-working-->
				<div class="col-xl-2"> 
					<div class="single-working"> 
						<h5>CPR</h5>
					</div>
				</div>
				<!--single-working-->
				<!--single-working-->
				<div class="col-xl-2"> 
					<div class="single-working"> 
						<h5>CPC</h5>
					</div>
				</div>
				<!--single-working-->
				<!--single-working-->
				<div class="col-xl-2"> 
					<div class="single-working"> 
						<h5>CPM</h5>
					</div>
				</div>
				<!--single-working-->
				<!--single-working-->
				<div class="col-xl-2"> 
					<div class="single-working"> 
						<h5>RSM</h5>
					</div>
				</div>
				<!--single-working-->
			</div>
		</div>
	</div>
</section>
<section class="Advertisers-area"> 
	<div class="Advertisers"> 
		<div class="container"> 
			<div class="row"> 
				<div class="col-xl-6"> 
					<div class="Advertisers-left">
						<div class="Advertisers-title-content"> 
							<h3>Advertisers</h3>
							<p>hat can be definitely said about the contemporary travel websites. Whether it is an page for a local hotel or a feature-heavy portal that belongs to big holiday company, it fantastic interfaces are user magnets.</p>
							<h5>Read more</h5>
						</div>
						<div class="Advertisers-app"> 
							<div class="single-Advertisers-app"> 
								<div class="Advertisers-img"> 
									<img src="<?php echo get_template_directory_uri();?>/img/global_mediastpr.png" alt="">
									<img src="<?php echo get_template_directory_uri();?>/img/global_media_play.png" alt="">
								</div>	
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6"> 
					<div class="mobile-phone"> 
						<div class="mobile"> 
							<img src="<?php echo get_template_directory_uri();?>/img/global_media_mobile.png" alt="">
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<section class="Agencies-area"> 
	<div class="Agencies">
		<div class="container"> 
			<div class="Agencies-title"> 
				<div class="Agencie-title"> 
					<h4>Agencies</h4>
					<p>Typography is an art combining perspective, technique and ingenuity. A great design comes with great typography. </p>
				</div>
			</div>
			<div class="row">
				<!--single-row-->
				<div class="col-xl-6">
					<div class="single-Agencies"> 
						<div class="single-Agencies-icon"> 
							<i class="fas fa-check"></i>
						</div>
						<div class="single-Agencies-content"> 
							<p>As the holidays approach, everything tends to get a little hectic. Stress levels increase, there seems to be more unfinished business to take care of than usual. And deadlines, which should always be met anyway,</p>
						</div>
					</div> 
				</div>
				<div class="col-xl-6">
					<div class="single-Agencies"> 
						<div class="single-Agencies-icon"> 
							<i class="fas fa-check"></i>
						</div>
						<div class="single-Agencies-content"> 
							<p>I won’t surprise if we tell you that European e-commerce market is hot and that a mobile-friendly website is a key to success in that field. Last year, approximately 296 million online shoppers spent over 455 billion euros.</p>
						</div>
					</div> 
				</div>
					<!--single-row /-->
			</div>
			<div class="row">
				<!--single-row-->
				<div class="col-xl-6">
					<div class="single-Agencies"> 
						<div class="single-Agencies-icon"> 
							<i class="fas fa-check"></i>
						</div>
						<div class="single-Agencies-content"> 
							<p>As the holidays approach, everything tends to get a little hectic. Stress levels increase, there seems to be more unfinished business to take care of than usual. And deadlines, which should always be met anyway,</p>
						</div>
					</div> 
				</div>
				<div class="col-xl-6">
					<div class="single-Agencies"> 
						<div class="single-Agencies-icon"> 
							<i class="fas fa-check"></i>
						</div>
						<div class="single-Agencies-content"> 
							<p>I won’t surprise if we tell you that European e-commerce market is hot and that a mobile-friendly website is a key to success in that field. Last year, approximately 296 million online shoppers spent over 455 billion euros.</p>
						</div>
					</div> 
				</div>
					<!--single-row /-->
			</div>
			<div class="row">
				<!--single-row-->
				<div class="col-xl-6">
					<div class="single-Agencies"> 
						<div class="single-Agencies-icon"> 
							<i class="fas fa-check"></i>
						</div>
						<div class="single-Agencies-content"> 
							<p>As the holidays approach, everything tends to get a little hectic. Stress levels increase, there seems to be more unfinished business to take care of than usual. And deadlines, which should always be met anyway,</p>
						</div>
					</div> 
				</div>
				<div class="col-xl-6">
					<div class="single-Agencies"> 
						<div class="single-Agencies-icon"> 
							<i class="fas fa-check"></i>
						</div>
						<div class="single-Agencies-content"> 
							<p>I won’t surprise if we tell you that European e-commerce market is hot and that a mobile-friendly website is a key to success in that field. Last year, approximately 296 million online shoppers spent over 455 billion euros.</p>
						</div>
					</div> 
				</div>
					<!--single-row /-->
			</div>			


		</div>
	</div>
</section>
<section class="publishers-area"> 
	<div class="publishers"> 
		<div class="container"> 
			<div class="row"> 
				<div class="publishers-title"> 
					<h1>publishers</h1>
					<p>hat can be definitely said about the contemporary travel websites. Whether it is an page for a local hotel or a feature-heavy portal that belongs to big holiday company, it fantastic interfaces are user magnets.</p>
				</div>
				<div class="publishers-popup"> 
					<div class="popup"> 
						<a href=""><i class="far fa-play-circle"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="about-area"> 
	<div class="about"> 
		<div class="container"> 
			<div class="fact-about"> 
				<div class="about-title"> 
					<h1>Fact about us</h1>
				</div>
				<div class="about-content"> 
					<p>Whether you are creating for web or print, designing brochures or user interfaces, developing a brand identity or creating a logo, one of the key elements of a successful project is the typeface you are using. </p>
				</div>
			</div>
			<div class="row"> 
				<!--single about post-->
				<div class="col-xl-2"> 
					<div class="single-fact"> 
						<div class="single-fact-img"> 
							<img src="<?php echo get_template_directory_uri();?>/img/global_media_icon1.png" alt="">
						</div>
						<div class="single-fact-content"> 
							<p>Tips for Creating a Great Personal </p>
						</div>
					</div>
				</div>
				<!--single about post-->
				<!--single about post-->
				<div class="col-xl-2"> 
					<div class="single-fact"> 
						<div class="single-fact-img"> 
							<img src="<?php echo get_template_directory_uri();?>/img/global_media_icon2.png" alt="">
						</div>
						<div class="single-fact-content"> 
							<p>How to Create Checkout Form Using HTML </p>
						</div>
					</div>
				</div>
				<!--single about post-->
				<!--single about post-->
				<div class="col-xl-2"> 
					<div class="single-fact"> 
						<div class="single-fact-img"> 
							<img src="<?php echo get_template_directory_uri();?>/img/global_media_icon3.png" alt="">
						</div>
						<div class="single-fact-content"> 
							<p>WebAssembly Now in Browser Preview Mode</p>
						</div>
					</div>
				</div>
				<!--single about post-->
				<!--single about post-->
				<div class="col-xl-2"> 
					<div class="single-fact"> 
						<div class="single-fact-img"> 
							<img src="<?php echo get_template_directory_uri();?>/img/global_media_icon4.png" alt="">
						</div>
						<div class="single-fact-content"> 
							<p>Adobe Introduces Project Felix, Sensei</p>
						</div>
					</div>
				</div>
				<!--single about post-->
				<!--single about post-->
				<div class="col-xl-2"> 
					<div class="single-fact"> 
						<div class="single-fact-img"> 
							<img src="<?php echo get_template_directory_uri();?>/img/global_media_icon5.png" alt="">
						</div>
						<div class="single-fact-content"> 
							<p>A Design Workflow Comparison</p>
						</div>
					</div>
				</div>
				<!--single about post-->
				<!--single about post-->
				<div class="col-xl-2"> 
					<div class="single-fact"> 
						<div class="single-fact-img"> 
							<img src="<?php echo get_template_directory_uri();?>/img/global_media_icon6.png" alt="">
						</div>
						<div class="single-fact-content"> 
							<p>Top 5 Underutilized Web Performance </p>
						</div>
					</div>
				</div>
				<!--single about post-->								
			</div>
		</div>
	</div>
</section>
<section class="social-area"> 
	<div class="solial"> 
		<div class="container"> 
				<div class="social-info">
					<div class="social-name"> 
						<p>Phone:</p>
					</div>
					<div class="social-account"> 
						<h1> +38 (098) 483 61 77 </h1>
					</div>
				</div>	
				<div class="social-info">
					<div class="social-name"> 
						<p>Email:</p>
					</div>
					<div class="social-account"> 
						<h1>info@globalmedia.com</h1>
					</div>
				</div>
				<div class="social-info">
					<div class="social-name"> 
						<p>Skype:</p>
					</div>
					<div class="social-account"> 
						<h1>globalmedia</h1>
					</div>
				</div>				
		</div>
	</div>
</section>
<footer class="footer-area"> 
	<div class="footer"> 
		<div class="footer-top"> 
			<div class="footer-copyright"> 
				<p>Copyright © 2016 Globalmedia. All Rights Reserved. Designmodo is a popular web design blog and shop.</p>
			</div>
		</div>
		<div class="footer-buttom"> 
			<div class="footer_buttom-icon">
				<i class="fab fa-facebook-f"></i>
				<i class="fab fa-twitter"></i>
				<i class="fab fa-linkedin-in"></i>
			</div>
		</div>
	</div>
</footer>