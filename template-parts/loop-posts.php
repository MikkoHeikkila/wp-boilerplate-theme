<?php if(have_posts()) : ?>

   <?php while(have_posts()) : the_post(); ?>

		<div id="post-<?php the_ID(); ?>" class="single-post-preview">

			<div>
				<a href="<?php the_permalink(); ?>">
					<?php the_title('<h3>','</h3>'); ?>
				</a>
				<?php the_excerpt(); ?>
			</div>

		</div>

	<?php endwhile; ?>

<?php endif; ?>