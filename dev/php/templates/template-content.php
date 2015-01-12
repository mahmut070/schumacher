<?php
/*
Template Name: Content
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<h2><?php the_title(); ?></h2>								

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="Content Content--home" id="post-<?php the_ID(); ?>">
				<div>
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
			</article>
		<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>
