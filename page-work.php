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
    
    <?php 
    
    get_footer(); ?>