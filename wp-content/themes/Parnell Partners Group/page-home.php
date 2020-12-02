<?php get_header()?>

<div data-index="0" class='wrapper home-page'>
  <main>

    <!-------------------------------------------------->
    <!----------------- Video Section ------------------>
    <!-------------------------------------------------->

    <div class="video-section">
      <video class="ppg-video" preload="auto" loop autoplay>
        <source src="<?php echo get_template_directory_uri()?>/assets/video/PPG.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>

    <!-------------------------------------------------->
    <!----------------- Quote Section ------------------>
    <!-------------------------------------------------->

    <div class="quote-section">
      <h1><span>PPG Events</span> <br>are<br>Local Spacialist<br>With Global Experience</h1>
      <div class="box"></div>
      <img src="<?php echo get_template_directory_uri()?>/assets/img/backgrounds/deep-blue-texture-background-sm.jpg" alt="">
    </div>

    <!----------------------------------------------------------->
    <!----------------- Whatwe do top Section ------------------->
    <!----------------------------------------------------------->

    <?php get_template_part('whatwedotop')?>


    <!-------------------------------------------------->
    <!----------------- Main Section ------------------->
    <!-------------------------------------------------->

    <div class="main-section">
      <img class="main-section-bkg" src="<?php echo get_template_directory_uri()?>/assets/img/backgrounds/deep-blue-texture-background-sm.jpg" alt="">
      <img class="main-section-am-cup-bkg" src="<?php echo get_template_directory_uri()?>/assets/img/amaricas-cup/team-nz-bkg.webp" alt="Team Newzealand">
      <img class="main-section-am-cup-boat" src="<?php echo get_template_directory_uri()?>/assets/img/amaricas-cup/team-nz-boat.webp" alt="Team Newzealand">
      <div class="main-section-txt">
        <h1><?php the_field('header1')?></h1>
      </div>
    </div>

    <!-------------------------------------------------------->
    <!----------------- what we do Section ------------------->
    <!-------------------------------------------------------->

    <?php get_template_part('whatwedo')?>

  </main>
</div>

<?php get_footer()?>