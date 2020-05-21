<?php get_header();

	while(have_posts()) {
		the_post();

		if(get_field('banner_image')){
			get_template_part('content', 'page-banner');
		}
	?>
	<div class="page-content">
		<h1><?php the_title(); ?></h1>
		<p class="page-content-info">
			<?php the_content(); ?>
		</p>
	</div>

	<?php }?>

<? get_footer();?>