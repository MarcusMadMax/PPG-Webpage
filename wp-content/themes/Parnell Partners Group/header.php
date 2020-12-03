<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,700;1,500&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/style.css">
  <title>PPG</title>

  <?php wp_head()?>

</head>

<body>

  <div data-index="0" class='wrapper home-page'>

    <header>

      <nav>
        <div class="nav-top">
          <div class="logo">
            <a href="/PPG/home"><img src="<?php echo get_template_directory_uri()?>/assets/img/logos/PPG_Logo_NEW.svg" alt=""></a>
          </div>
        
            <?php 
                wp_nav_menu(
                  array( 
                    'theme_location' => 'main-menu',
                    'container' => 'ul',
                    'menu_class' => 'nav-links'
                  )
                );
              ?>

        </div>
        <div class="bars">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </div>
      </nav>

    </header>