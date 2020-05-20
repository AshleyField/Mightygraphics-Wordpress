<?php /* Template Name: Homepage */

get_header();

?>
		<div class="banner">
			<div class="banner-inner">
				<div class="callout">
					<h1>Bringing your vision to reality</h1>
				</div>
				<div class="button btn-large">
					<a href="/work">View Work</a>
				</div>
			</div>
		</div>

		<div class="text-area">
			<div class="text-area-inner">
				<div class="text-area-top">
					<h2>Who is Mightygraphics?</h2>
					<div class="horizontal-line"></div>
					<p>Mightygraphics is a small agency specialising in Website Design, Videography, and Graphic Design. While small we strive for excellence in all of our projects to ensure your vision is brought to reality the way it should.</p>
				</div>
				<div class="col-3 about-container">
					<div class="about-item">
						<h3>Website Design</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui dicta minus molestiae vel beatae natus eveniet ratione temporibus aperiam harum alias officiis assumenda</p>
					</div>
					<div class="about-item">
						<h3>Video & Photo</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui dicta minus molestiae vel beatae natus eveniet ratione temporibus aperiam harum alias officiis assumenda</p>
					</div>
					<div class="about-item">
						<h3>Graphic Design</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui dicta minus molestiae vel beatae natus eveniet ratione temporibus aperiam harum alias officiis assumenda</p>
					</div>
				</div>
			</div>
			<div class="horizontal-line"></div>
		</div>

		<div class="mobile-first">
			<div class="mobile-first-inner">
				<div class="left">
					<h2>Mobile First Design</h2>
					<!-- <div class="horizontal-line"></div> -->
					<p>All projects are designed with a ‘Mobile First’ design model to ensure compatibility with modern smartphones. In 2018 an average of 58% of users visited websites on their smart phone verses a desktop, laptop or tablet.</p>
					<div class="mobile-first-infographic">
						<div class="icon">
							<img src="<?php echo get_theme_file_uri('images/electronics.png')?>" alt="Optimised Image">
						</div>
						<p>Optimised for phone, tablet Laptop, and desktop devices</p>
					</div>
					<div class="mobile-first-infographic">
						<div class="icon">
							<img src="<?php echo get_theme_file_uri('images/speed.png')?>" alt="Optimised Image">
						</div>
						<p>Speed tested to ensure quick loading on all devices</p>
					</div>
				</div>
				<div class="right">
					<img src="<?php echo get_theme_file_uri('images/iphone_black_spoke.jpg')?>" alt="iPhone Mockup Black Spoke">
				</div>
			</div>
		</div>

		<!-- website deisgn grid -->
		<div class="display-grid">
			<div class="horizontal-line"></div>
			<div class="display-grid-inner">
				<h2>Website Design & Development</h2>
				<div class="images-container">
				<?php 

				// The Query

				$args = array('post_type'=>'portfolio');
				$the_query = new WP_Query( $args );

				// The Loop

				while ( $the_query->have_posts() ) {
					$the_query->the_post();

					$featured = get_field('featured', get_the_ID() );
					$type = get_field('item_type', get_the_ID() );

					if($featured == 'Yes' && $type == 'Website') {
						get_template_part('portfolio','loop-website');
					}
					
					
				}

				/* Restore original Post Data */
				wp_reset_postdata();
				?>

				</div>
				<div class="view-all-work-btn">
					<div class="icon">
						<svg id="svg-arrow" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
							<g>
								<path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
									c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z
									"/>
							</g>
						</svg>
					</div>
					<a href="/work" id="view-all-port">View All Website Design Projects</a>
				</div>
			</div>
		</div>

		<!-- video grid -->
		<div class="display-grid">
			<div class="horizontal-line"></div>
			<div class="display-grid-inner">
				<h2>Videography</h2>
				<div class="images-container">
					<?php 
					// The Query

					$args = array('post_type'=>'portfolio');
					$the_query = new WP_Query( $args );

					// The Loop

					while ( $the_query->have_posts() ) {
						$the_query->the_post();

						$featured = get_field('featured', get_the_ID() );
						$type = get_field('item_type', get_the_ID() );

						if($featured == 'Yes' && $type == 'Video') {
							get_template_part('portfolio','loop-video');
						}
						
						
					}

					/* Restore original Post Data */
					wp_reset_postdata();
					?>
				</div>
				<div class="view-all-work-btn">
					<div class="icon">
						<svg id="svg-arrow" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
							<g>
								<path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
									c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z
									"/>
							</g>
						</svg>
					</div>
					<a href="" id="view-all-port">View All Video Projects</a>
				</div>
			</div>
		</div>

<?php get_footer(); ?>