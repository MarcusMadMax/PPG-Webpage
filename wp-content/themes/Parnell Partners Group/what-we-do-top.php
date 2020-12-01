<div class="link-section">
    <ul class="link-backgrounds">

    <?php
        // The Query
        $args = array('post_type'=>'what we do top');
        $the_query = new WP_Query( $args );
            
        // The Loop
        while ( $the_query->have_posts() ) {
            $the_query->the_post();

            get_template_part('partials/content','what-we-do-top');
        }
        
        /* Restore original Post Data */
        wp_reset_postdata();
    ?>

    </ul>
</div>