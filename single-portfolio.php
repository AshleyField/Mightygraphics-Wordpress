<?php 
get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
			?>

			<div class="single-work">
				<div class="view-all-work-btn">
					<div class="icon">
						<svg id="svg-arrow" transform="rotate(180)" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
							<g>
								<path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
									c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z
									"/>
							</g>
						</svg>
					</div>
					<a href="/work" id="view-all-port">Back to all projects</a>
				</div>
				<div class="title">
					<h1><?php the_title(); ?></h1>
				</div>
				<div class="blurb-1">
					<p><?php the_content(); ?></p>
				</div>
				<div class="single-work-inner">
					<div class="left">
						<div class="image">
							<img src="<?php the_field('single_image'); ?>" alt="">
						</div>
					</div>
					<div class="right">
						<?php if(get_field('website_link')){ ?>
							<div class="url">
								<p><strong>URL:</strong> <a href="<?php the_field('website_link'); ?>"><?php the_field('website_link'); ?></a></p>
							</div>
						<?php }; ?>
						<div class="platform">
							<p><strong>Platform:</strong> <?php the_field('platform'); ?></p>
						</div>
						<div class="scope">
							<p><strong>Project Scope:</strong> <?php the_field('project_scope'); ?></p>
						</div>
						<div class="blurb-2">
						<p><?php the_field('blurb'); ?></p>
						</div>
					</div>
					

				</div>
			</div>
	<?php }
} 

get_footer();

 ?>

 