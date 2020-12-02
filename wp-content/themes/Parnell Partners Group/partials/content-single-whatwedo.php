<?php get_header()?>

    <div data-index='5' class='wrapper generic-page'>

        <main>

            <!-------------------------------------------------->
            <!----------------- Top Section ------------------>
            <!-------------------------------------------------->
            <div class="top-section">
                <div class="main-img">
                    <img class="cover" src="<?php the_field('photo')?>" alt="">
                </div>
                <div class="main-text">
                    <h1><?php the_title()?></h1>
                </div>
            </div>

            <!-------------------------------------------------->
            <!----------------- Divider Section ------------------>
            <!-------------------------------------------------->

            <div class="divider-section">

                <div class="divider-text">
                    <img class="cover-top" src="<?php echo get_template_directory_uri()?>/assets/img/backgrounds/footer-background-light.svg" alt="">
                    <h3><?php the_content()?></h3>
                </div>
            </div>

            <!-------------------------------------------------->
            <!----------------- Image Section ------------------->
            <!-------------------------------------------------->
            <div class="images-section">
                <div class="top-images">

                    <div class="first-image image">
                        <img class="cover-center" src="<?php the_field('first_image')?>">
                    </div>
                    <div class="second-image image">
                        <img class="cover-center" src="<?php the_field('second_image')?>">
                    </div>
                    <div class="third-image image">
                        <img class="cover-center" src="<?php the_field('third_image')?>">
                    </div>
                    <div class="fourth-image image">
                        <img class="cover-center" src="<?php the_field('fourth_image')?>">
                    </div>

                </div>

                <div class="top-full-width-image">
                    <img class="cover-center" src="<?php the_field('full_width_center_image')?>">
                </div>

                <div class="bottom-images">
                    <div class="first-image image">
                        <img class="cover-center" src="<?php the_field('fifth_image')?>">
                    </div>
                    <div class="second-image image">
                        <img class="cover-center" src="<?php the_field('sixth_image')?>">
                    </div>
                </div>

                <div class="bottom-full-width-image">
                    <img class="cover-center" src="<?php the_field('bottom_image')?>">
                </div>

            </div>
        </main>
        
    </div>

<?php get_footer()?>