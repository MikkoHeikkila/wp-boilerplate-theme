<?php 
/*
* Front page template
*/
get_header(); ?>

<section>

	<?php echo get_template_part('template-parts/loop', 'main'); ?>

</section>

<?php get_footer(); ?>