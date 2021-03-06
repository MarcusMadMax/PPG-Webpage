<?php get_header()?>

<div data-index="0" class='wrapper home-page'>
  <main>

    <!-------------------------------------------------->
    <!----------------- Video Section ------------------>
    <!-------------------------------------------------->

    <div class="video-section">
      <video class="ppg-video" preload="auto" controls loop autoplay>
        <source src="<?php echo get_template_directory_uri()?>/assets/video/PPG-animation-americas-cup_2.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>

    <!-------------------------------------------------->
    <!----------------- Quote Section ------------------>
    <!-------------------------------------------------->

    <div class="quote-section">
      <h1><span>PPG Events</span> <br>are<br>Local Specialist<br>With Global Experience</h1>
      <div class="box"></div>
      <img src="<?php echo get_template_directory_uri()?>/assets/img/backgrounds/deep-blue-texture-background-sm.jpg" alt="">
    </div>

    <!----------------------------------------------------------->
    <!----------------- Events Section ------------------->
    <!----------------------------------------------------------->

    <div class="link-section">
        <ul class="link-backgrounds">

          <li>
            <div class="list-items">
              <a href="/PPG/client-events"><img src="<?php echo get_template_directory_uri()?>/assets/img/toyota-icy-sm.jpg" alt=""></a>
              <div class="list-comments">
                <a href="/PPG/client-events">Client Events</a>
                <button><a href="/PPG/client-events">Do it</a></button>
              </div>
            </div>
          </li>

          <li>
            <div class="list-items">
              <a href="/PPG/incentive-experiences"><img src="<?php echo get_template_directory_uri()?>/assets/img/nz-bethells-beach-sm.jpg" alt=""></a>
              <div class="list-comments">
                <a href="/PPG/incentive-experiences">Incentive Experience</a>
                <button><a href="/PPG/incentive-experiences">Feel it</a></button>
              </div>
            </div>
          </li>

          <li>
            <div class="list-items">
              <a href="/PPG/destination-mgnt-services"><img src="<?php echo get_template_directory_uri()?>/assets/img/dolphins-sm.jpg" alt=""></a>
              <div class="list-comments">
                <a href="/PPG/destination-mgnt-services">Destination<br>Management<br>Service</a>
                <!--- Photo from NZ--->
                <button><a href="/PPG/destination-mgnt-services">See it</a></button>
              </div>
            </div>
          </li>

          <li>
            <div class="list-items">
              <a href="/PPG/sporting-events"><img src="<?php echo get_template_directory_uri()?>/assets/img/our-work/rugby/all-blacks-haka-1.jpg" alt=""></a>
              <div class="list-comments">
                <a href="/PPG/sporting-events">Sporting<br>Events</a>
                <!--- Photo from Rugby--->
                <button><a href="/PPG/sporting-events">Adore it</a></button>
              </div>
            </div>
          </li>

        </ul>
      </div>


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
    <!----------------- What we do Section ------------------->
    <!-------------------------------------------------------->

    <div class="what-we-do-section">
        <!-- <div class="what-we-do-section-bg-img">
          <img class="cover-bottom" src="<?php echo get_template_directory_uri()?>/assets/img/queens-warft/1904-queens-wharf-queens-street.jpg"
            alt="Queens warft at 1904">
        </div> -->
        <div class="what-we-do-section-content">
          <div class="what-we-do-section-content-header">
            <h1>What We Do</h1>
            <img class="brush-stroke" src="<?php echo get_template_directory_uri()?>/assets/img/brush-stroke/brush-stroke.png" alt="">
          </div>
          <ul class="what-we-do-backgrounds">

            <li>
              <div class="list-items">
                <a href="/PPG/what_we_do"><img src="<?php echo get_template_directory_uri()?>/assets/img/portfolio/olympic-games.jpg" alt=""></a>
                <div class="list-comments">
                  <a href="/PPG/what_we_do">Olympics</a>
                  <button><a href="/PPG/what_we_do">Go for it</a></button>
                </div>
              </div>
            </li>

            <li>
              <div class="list-items">
                <a href="/PPG/what_we_do"><img src="<?php echo get_template_directory_uri()?>/assets/img/our-work/rugby/rugby.jpg" alt=""></a>
                <div class="list-comments">
                  <a href="/PPG/what_we_do">Rugby</a>
                  <button><a href="/PPG/what_we_do">Try it</a></button>
                </div>
              </div>
            </li>

            <li>
              <div class="list-items">
                <a href="/PPG/what_we_do"><img src="<?php echo get_template_directory_uri()?>/assets/img/amaricas-cup/team-nz2.jpg" alt=""></a>
                <div class="list-comments">
                  <a href="/PPG/what_we_do">Sailing</a>
                  <button><a href="/PPG/what_we_do">Sail it</a></button>
                </div>
              </div>
            </li>

          </ul>
          <button class="view-more"><a href="/PPG/what_we_do">View more</a></button>
        </div>
      </div>

  </main>
</div>

<?php get_footer()?>