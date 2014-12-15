<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
	<div class="u-gridContainer">

			<div class="u-gridRow inhoud-home">

				<div class="u-gridCol6 slider-left">
					<div class="slideshowcontainer">
						<div id="slideshow">

							<a class="slideshow-link" href="over-ons">OVER ONS</a>
							<img src="<?php echo get_stylesheet_directory_uri();?>/img/slider-1.jpg">

							<img src="<?php echo get_stylesheet_directory_uri();?>/img/slider-2.jpg">

							 <img src="<?php echo get_stylesheet_directory_uri();?>/img/slider-3.jpg">
						</div>
						<div class="kleuren-balk wit"></div>	
					</div>
				</div>

				<div class="u-gridCol6 accordion-area">
					<div class="lg-accordion" style="visibility: hidden">
						<div id="card-1" class="card card-1">
							<div class="background">
								<div class="titel-thumb">
									<a href="/particulier">PARTICULIEREN</a>
								</div>
								<div class="overlay">
									<h3>bla bla</h3>
									<p>bla bla bla</p>
								</div>
							</div>
						</div>

						<div id="card-2" class="card card-2" >
							<div class="wrapp">
								<div class="background">
									<div class="titel-thumb">
										<a href="/bedrijven">BEDRIJVEN</a>
									</div>
									<div class="overlay">
										<h3>bla bla</h3>
										<p>bla bla bla</p>
									</div>
								</div>
							</div>
						</div>

						<div id="card-3" class="card card-3">
							<div class="background">
								<div class="titel-thumb">
									<a href="/verzekering">VERZEKERING</a>
								</div>
								<div class="overlay">
									<h3>bla bla</h3>
									<p>bla bla bla</p>
								</div>
							</div>
						</div>					
					</div>
				</div>
			</div>
	</div>
<div class="slider-stroke"></div>

<?php get_footer(); ?>




<!-- 


						<div id="card-1" class="card card-1">
							<div class="titel-thumb">
								<a href="/particulier">PARTICULIEREN</a>
							</div>
							<div class="overlay">
								<h3>bla bla</h3>
								<p>bla bla bla</p>
							</div>
							<div class="kleuren-balk-small-rood">
							</div>
						</div>

						<div id="card-2" class="card card-2">
							<div class="titel-thumb">
								<a href="/zakelijk">BEDRIJVEN</a>
							</div>							
							<div class="overlay">
								<h3>bla bla</h3>
								<p>bla bla bla</p>
							</div>
							<div class="kleuren-balk-small-blauw">
							</div>
						</div>

						<div id="card-3" class="card card-3">
							<div class="titel-thumb">
								<a href="#">VERZEKERING</a>
							</div>	
							<div class="overlay">
								<h3>bla bla</h3>
								<p>bla bla bla</p>
							</div>	
							<div class="kleuren-balk-small-geel">
							</div>				
						</div>					
-->
