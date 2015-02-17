<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
			<div class="Content-entry">
				<h2><?php the_title(); ?></h2>
				<div class="Content-text">

					<div class="u-gridRow">					
					
						<div class="adress-map u-gridCol12">
							<div id="map_canvas"></div>
						</div>

					</div> <!-- /gridRow -->

					<div class="hr-style super-margin">
						<hr>
					</div>
					<div class="u-gridRow">
						<div class="adress u-gridCol4">

							<img class="thumb-theoencees" src="<?php echo get_stylesheet_directory_uri();?>/img/theoencees.jpg">

							<div class="adress-info">
								<p>Theo Schumacher meesterschilder</p>
								<p>Molendijk 30a</p>
								<p>3632 EN  Loenen a/d Vecht</p>
								<p>Email: info@theoschumacher.nl</p>
								<p>Tel:  0294 - 230 961 </p>
							</div>
						</div>

						<div class="u-gridCol8">						
							<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
							<?php the_content(); ?>
					
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>
					</div>

				</div> <!-- content-text -->
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>

