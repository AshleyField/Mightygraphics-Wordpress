<?php 
get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>

        <p><?php the_title(); ?></p>
	<?php }
} 

get_footer();

 ?>