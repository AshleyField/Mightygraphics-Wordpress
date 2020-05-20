<?php 

get_header();

?>

<?php 
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        
        get_template_part('content', 'page-banner');

       }
    }
    ?>
    <div class="display-grid">
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
                    
                    $type = get_field('item_type', get_the_ID() );
                    
                    if($type == 'Website') {
                        get_template_part('portfolio','loop-website');
                    }
                    
                    
                }
                
                /* Restore original Post Data */
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
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

                    $type = get_field('item_type', get_the_ID() );

                    if($type == 'Video') {
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
    
    <?php 
    
    get_footer(); ?>