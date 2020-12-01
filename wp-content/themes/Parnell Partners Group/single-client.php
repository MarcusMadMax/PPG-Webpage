<?php get_header() ?>
 
    <!-- Container -->
    <div class="container client">
    <?php
      	while (have_posts()) :
      		the_post();
         	get_template_part('partials/content','single-client');
   		endwhile;
    ?>
    </div>

<?php get_footer()?>