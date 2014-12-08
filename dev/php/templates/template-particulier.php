<?php
/*
Template Name: Particulier
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<div class="u-gridRow">	
			<h2><?php the_title(); ?></h2>								
			<div class="u-gridCol8">
		

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article class="Content Content--home" id="post-<?php the_ID(); ?>">
							<div>
								<?php the_content(); ?>
								<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
							</div>
						</article>
					<?php endwhile; endif; ?>
			</div>

			<div class="u-gridCol4">
				<img class="thumb-fiets" src="<?php echo get_stylesheet_directory_uri();?>/img/particulier-thumb.jpg">
			</div>

		</div>
	</div>

<?php get_footer(); ?>
