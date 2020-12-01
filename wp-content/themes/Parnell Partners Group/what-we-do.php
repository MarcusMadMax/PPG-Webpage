<div class="what-we-do-section">
    <div class="what-we-do-section-bg-img">
        <img class="cover-bottom" src="<?php echo get_template_directory_uri()?>/assets/img/queens-warft/1904-queens-wharf-queens-street.jpg"
            alt="Queens warft at 1904">
    </div>
    <div class="what-we-do-section-content">
        <div class="what-we-do-section-content-header">
            <h1>What We Do</h1>
            <img class="brush-stroke" src="<?php echo get_template_directory_uri()?>/assets/img/brush-stroke/brush-stroke.png" alt="">
        </div>
        <ul class="what-we-do-backgrounds">


        <?php
            // The Query
            $args = array('post_type'=>'what we do');
            $the_query = new WP_Query( $args );
                
            // The Loop
            while ( $the_query->have_posts() ) {
                $the_query->the_post();

                get_template_part('partials/content','what-we-do');
            }
            
            /* Restore original Post Data */
            wp_reset_postdata();
        ?>


        </ul>
        <button class="view-more"><a href="what-we-do.html">View more</a></button>
    </div>
</div>