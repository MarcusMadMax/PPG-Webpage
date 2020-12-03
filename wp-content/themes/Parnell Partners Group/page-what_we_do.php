<?php get_header()?>

<div data-index="2" class='wrapper what-we-do-page'>
        <main>

                <!------------------------------------------------------------>
                <!----------------- Taxonomy Header Section ------------------>
                <!------------------------------------------------------------>
                <div class="taxonomy">
                        <div class="taxonomy-control-container">
                                <div class="taxonomy-control-container-bkg">
                                </div>
                                <div class="taxonomy-control-container-buttons">
                                        <button class="animate__animated animate__backInLeft animate__delay-1s" type="button" data-filter="all">All</button>

                                        <?php
                                                $terms = get_terms( 'event', array('hide_empty' => false));
                                                foreach($terms as $term){
                                        
                                                        echo '<button class="animate__animated animate__backInLeft animate__delay-1s type="button" data-filter=".'.$term->slug.'">'.$term->name.'</button>';
                                                }
                                        ?>

                                </div>
                                <div class="color"></div>

                                <div class="mix container">

                                        <?php

                                                $args = array('post_type' => 'photo');
                                                // The Query
                                                $the_query = new WP_Query( $args );

                                                // The Loop
                                                while ( $the_query->have_posts() ) {
                                                        $the_query->the_post();
                                                        get_template_part('partials/content', 'photo');
                                                }

                                                /* Restore original Post Data */
                                                wp_reset_postdata();

                                        ?>

                                </div>
                        </div>
                </div>

                        <!-------------------------------------------------->
                        <!----------------- Quote Section ------------------->
                        <!-------------------------------------------------->

                <div class="quote-section">
                        <h3 class="animate__animated animate__bounce">Our focus is delivering optimal investment solutions, networking opportunities and an unforgettable client
                                experience.</h3>
                        <img class="brush-stroke" src="<?php echo get_template_directory_uri()?>/assets/img/brush-stroke/brush-stroke.png" alt="">
                </div>
        </main>
</div>

<?php get_footer()?>