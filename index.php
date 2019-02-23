<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package global
 */

get_header();
?>

	<!--online marketing -->

		<div class="full-marketing"> 
			<div class="container">
				<div class="market-title"> 

					<ul id="lightSlider" class="slidelink">
						<li><h1><?php echo $redux_demo['market-Title']; ?></h1>
						<a href="<?php echo $redux_demo['market-link']; ?>"><?php echo $redux_demo['market-link-text']; ?></a></li>

						<li><h1><?php echo $redux_demo['market-Title']; ?></h1>
						<a href="<?php echo $redux_demo['market-link']; ?>"><?php echo $redux_demo['market-link-text']; ?></a></li>

					</ul>
				</div>
				 
					
				
			</div>

		</div>
		<!--online marketing /-->

<section class="service-area"> 
	<div class="service"> 
		<div class="container"> 
			<div class="row">
				
	 <?php $service = new WP_Query(array( 
	          	'post_type' => 'service-post',
	            'posts_per_page' => 3,
	  ));?>  
	  <?php if($service->have_posts()) : while($service->have_posts()) : $service->the_post(); 
	        $service_link_text    = get_post_meta(get_the_id(),'service-link-text', true ); 
	        $service_link         = get_post_meta(get_the_id(),'service-link', true );
     ?>

				<!--single service-->
				<div class="col-xl-4"> 
					<div class="Advertisers-service">
						<div class="Advertisers-title"> 
							<h3><?php echo the_title(); ?></h3>
						</div>
						<div class="Advertisers-content"> 
							<p><?php echo wp_trim_words(get_the_content(),30,NULL); ?></p>
						</div>
						<div class="Advertisers-Join"> 
							<a href="">Join Now</a>
						</div>
						<div class="Advertisers-more"> 
							<a href="<?php echo the_permalink(); ?>">Read More</a>
						</div>
					</div>	
				</div>
				<!--single service /-->
   <?php  endwhile; endif; ?>  



			</div>
		</div>
	</div>
</section>
<section class="Why-we-area"> 
	<div class="Why-we">
		<div class="container"> 
			<div class="Why-we-title"> 
				<h1><?php echo $redux_demo['Why-we-Title']; ?></h1>
				<p><?php echo $redux_demo['Why-We-content']; ?></p>
			</div> 		
			<div class="row"> 
				<!--single-why-we-->
				<div class="col-xl-3"> 
					<div class="single-why-we">
						<div class="single-we-icon"> 
							<?php if(!empty($redux_demo['Why-one-icon']['url'])) : ?>
								<img src="<?php echo $redux_demo['Why-one-icon']['url'];?>" alt="">
							<?php else :?>
								<img src="<?php echo get_template_directory_uri();?>/img/global_logo.png" alt="">
							<?php endif; ?>
						</div>

						<div class="single-we-content">
							<p><?php echo $redux_demo['Why-We-one']; ?></p>
						</div>
					</div>
				</div>
				<!--single-why-we /-->
				<!--single-why-we-->
				<div class="col-xl-3"> 
					<div class="single-why-we">
						<div class="single-we-icon"> 
							<?php if(!empty($redux_demo['Why-two-icon']['url'])) : ?>
								<img src="<?php echo $redux_demo['Why-two-icon']['url'];?>" alt="">
							<?php else :?>
								<img src="<?php echo get_template_directory_uri();?>/img/global_logo.png" alt="">
							<?php endif; ?>
						</div>
						<div class="single-we-content">
							<p><?php echo $redux_demo['Why-We-two']; ?></p>
						</div>
					</div>
				</div>
				<!--single-why-we /-->
				<!--single-why-we-->
				<div class="col-xl-3"> 
					<div class="single-why-we">
						<div class="single-we-icon"> 
							<?php if(!empty($redux_demo['Why-three-icon']['url'])) : ?>
								<img src="<?php echo $redux_demo['Why-three-icon']['url'];?>" alt="">
							<?php else :?>
								<img src="<?php echo get_template_directory_uri();?>/img/global_logo.png" alt="">
							<?php endif; ?>
						</div>
						<div class="single-we-content">
							<p><?php echo $redux_demo['Why-We-three']; ?></p>
						</div>
					</div>
				</div>
				<!--single-why-we /-->
				<!--single-why-we-->
				<div class="col-xl-3"> 
					<div class="single-why-we">
						<div class="single-we-icon"> 
							<?php if(!empty($redux_demo['Why-four-icon']['url'])) : ?>
								<img src="<?php echo $redux_demo['Why-four-icon']['url'];?>" alt="">
							<?php else :?>
								<img src="<?php echo get_template_directory_uri();?>/img/global_logo.png" alt="">
							<?php endif; ?>
						</div>
						<div class="single-we-content">
							<p><?php echo $redux_demo['Why-We-four']; ?></p>
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
				<h1><?php echo $redux_demo['working-title']; ?></h1>
				<p><?php echo $redux_demo['working-subtitle']; ?></p>
			</div>
			<div class="row"> 
				<!--single-working-->
				<div class="col-xl-2"> 
					<div class="single-working"> 
						<h5><?php echo $redux_demo['working-one']; ?></h5>
					</div>
				</div>
				<!--single-working-->
				<!--single-working-->
				<div class="col-xl-2"> 
					<div class="single-working"> 
						<h5><?php echo $redux_demo['working-two']; ?></h5>
					</div>
				</div>
				<!--single-working-->
				<!--single-working-->
				<div class="col-xl-2"> 
					<div class="single-working"> 
						<h5><?php echo $redux_demo['working-three']; ?></h5>
					</div>
				</div>
				<!--single-working-->
				<!--single-working-->
				<div class="col-xl-2"> 
					<div class="single-working"> 
						<h5><?php echo $redux_demo['working-fore']; ?></h5>
					</div>
				</div>
				<!--single-working-->
				<!--single-working-->
				<div class="col-xl-2"> 
					<div class="single-working"> 
						<h5><?php echo $redux_demo['working-five']; ?></h5>
					</div>
				</div>
				<!--single-working-->
				<!--single-working-->
				<div class="col-xl-2"> 
					<div class="single-working"> 
						<h5><?php echo $redux_demo['working-six']; ?></h5>
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
							<h1><?php echo $redux_demo['Advertisers-Title']; ?></h1>
							<p><?php echo $redux_demo['Advertisers-content']; ?></p>
							<h5><a href="<?php echo $redux_demo['Advertisers-link']; ?>">Read more</a></h5>
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
					<h1>Agencies</h1>
					<p>Typography is an art combining perspective, technique and ingenuity. A great design comes with great typography. </p>
				</div>
			</div>


			<div class="row">
				<!--single-row-->

				<?php $Agencies = new WP_Query(array( 

					'post_type'	=> 'Agencies-post',
					'posts_per_page'	=> -1,


				));?>
				<?php while($Agencies->have_posts()) : $Agencies->the_post(); ?>

				<div class="col-xl-6">
					<div class="single-Agencies"> 
						<div class="single-Agencies-icon"> 
							<i class="fas fa-check"></i>
						</div>
						<div class="single-Agencies-content"> 
							<?php echo the_content(); ?>
						</div>
					</div> 
				</div>

				<?php endwhile; ?>

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
					<h1><?php echo $redux_demo['pub-title'];?></h1>
					<p><?php echo $redux_demo['pub-content'];?></p>
				</div>
				<div class="publishers-popup"> 
					<div class="popup"> 

						<a class="video-view" href="https://www.youtube.com/watch?v=oA03cLkNEsg"> <i class="far fa-play-circle"></i> </a>
						
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
					<h1><?php echo $redux_demo['about-title']; ?></h1>
				</div>
				<div class="about-content"> 
					<p><?php echo $redux_demo['about-content']; ?></p>
				</div>
			</div>
			<div class="row"> 
				<!--single about post-->
				<div class="col-xl-2"> 
					<div class="single-fact"> 
						<div class="single-fact-img"> 
							<img src="<?php echo $redux_demo['about-icon-one']['url'];?>" alt="">
						</div>
						<div class="single-fact-content"> 
							<p><?php echo $redux_demo['about-title-one'];?></p>
						</div>
						<div class="hover-border"></div>
					</div>
				</div>
				<!--single about post-->
				<!--single about post-->
				<div class="col-xl-2"> 
					<div class="single-fact"> 
						<div class="single-fact-img"> 
							<img src="<?php echo $redux_demo['about-icon-two']['url'];?>" alt="">
						</div>
						<div class="single-fact-content"> 
							<p><?php echo $redux_demo['about-title-two'];?></p>
						</div>
						<div class="hover-border"></div>
					</div>
				</div>
				<!--single about post-->
				<!--single about post-->
				<div class="col-xl-2"> 
					<div class="single-fact"> 
						<div class="single-fact-img"> 
							<img src="<?php echo $redux_demo['about-icon-three']['url'];?>" alt="">
						</div>
						<div class="single-fact-content"> 
							<p><?php echo $redux_demo['about-title-three'];?></p>
						</div>
						<div class="hover-border"></div>
					</div>
				</div>
				<!--single about post-->
				<!--single about post-->
				<div class="col-xl-2"> 
					<div class="single-fact"> 
						<div class="single-fact-img"> 
							<img src="<?php echo $redux_demo['about-icon-four']['url'];?>" alt="">
						</div>
						<div class="single-fact-content"> 
							<p><?php echo $redux_demo['about-title-four'];?></p>
						</div>
						<div class="hover-border"></div>
					</div>
				</div>
				<!--single about post-->
				<!--single about post-->
				<div class="col-xl-2"> 
					<div class="single-fact"> 
						<div class="single-fact-img"> 
							<img src="<?php echo $redux_demo['about-icon-five']['url'];?>" alt="">
						</div>
						<div class="single-fact-content"> 
							<p><?php echo $redux_demo['about-title-five'];?></p>
						</div>
						<div class="hover-border"></div>
					</div>
				</div>
				<!--single about post-->
				<!--single about post-->
				<div class="col-xl-2"> 
					<div class="single-fact"> 
						<div class="single-fact-img"> 
							<img src="<?php echo $redux_demo['about-icon-six']['url'];?>" alt="">
						</div>
						<div class="single-fact-content"> 
							<p><?php echo $redux_demo['about-title-six'];?></p>
						</div>
						<div class="hover-border"></div>
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
						<p><?php echo $redux_demo['social-phone']; ?></p>
					</div>
					<div class="social-account"> 
						<h1> <?php echo $redux_demo['social-number']; ?> </h1>
					</div>
				</div>	
				<div class="social-info">
					<div class="social-name"> 
						<p><?php echo $redux_demo['social-email']; ?></p>
					</div>
					<div class="social-account"> 
						<h1><?php echo $redux_demo['social-email-id']; ?></h1>
					</div>
				</div>
				<div class="social-info">
					<div class="social-name"> 
						<p><?php echo $redux_demo['social-skype']; ?></p>
					</div>
					<div class="social-account"> 
						<h1><?php echo $redux_demo['social-skype-id']; ?></h1>
					</div>
				</div>				
		</div>
	</div>
</section>


<?php
get_footer();
