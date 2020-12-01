<div class="clients-section">
    <div class="clients-section-content">
        <div class="clients-section-content-header">
            <h1>Our Clients</h1>
            <img class="brush-stroke" src="<?php echo get_template_directory_uri()?>/assets/img/brush-stroke/brush-stroke.png" alt="">
        </div>
        <div class="clients">

            <?php
                // The Query
                $args = array('post_type'=>'clients');
                $the_query = new WP_Query( $args );
                    
                // The Loop
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();

                    get_template_part('partials/content','client');
                }
                
                /* Restore original Post Data */
                wp_reset_postdata();
            ?>

        </div>
    </div>
</div>