<?php get_header();

	while(have_posts()) {
		the_post(); ?>
        
        <div class="page-content">
            <h1><?php the_title(); ?></h1>
            <div class="page-content-info">
                <div class="about-page-container">
                    <div class="image-blurb">
                        <div class="image">
                            <img src="<?php the_field('profile_image'); ?>" alt="">
                        </div>
                        <div class="blurb"> 
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                    <div class="skills-other">
                        <div class="skills">
                            <h2>Skills</h2>
                            <p><?php the_field('skills'); ?></p>
                        </div>
                        <div class="other">
                            <h2>Certificates</h2>
                            <p><?php the_field('certificates'); ?></p>
                            <h2>Accomplishments</h2>
                            <p><?php the_field('accomplishments'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

	<?php }?>

<?php get_footer();?>