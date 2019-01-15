<?php 
/*
* Latest blog posts
*/
get_header(); ?>

<section>

	<?php echo get_template_part('template-parts/loop', 'posts'); ?>

</section>

<?php get_footer(); ?>