<?php if(have_posts()) : ?>

   <?php while(have_posts()) : the_post(); ?>

		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php the_title('<h1>','</h1>'); ?>
	 		<?php the_content(); ?>

		</div>

	<?php endwhile; ?>

<?php endif; ?>