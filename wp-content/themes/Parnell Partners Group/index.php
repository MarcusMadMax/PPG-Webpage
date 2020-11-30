<?php get_header()?>
    
            <!-- content-index.php -->
        <?php 
            while ( have_posts() ) {
                the_post(); 
                get_template_part('partials/content', 'index');
                } // end while
        ?>

<?php get_footer()?>