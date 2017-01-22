<?php chdir("../.."); ?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Nick Amuso</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../css/main.css">
  <link rel="stylesheet" href="../../css/swiper.min.css">
  <link href="https://fonts.googleapis.com/css?family=Days+One|Proza+Libre" rel="stylesheet">
</head>

<body id="portfolio">

  <!-- Navbar -->
  <header>
    <?php include('../../html/navbar.php'); ?>
  </header>

  <!-- Project Title -->
  <div class="about-container" style="background-image: url('bg.png');">
    <div class="about-text">
      <h1>Musicians Wanted</h1>
      <h4>An iOS app for connecting musicians</h4>
      <div class="button-container">
        <a href="https://github.com/caneroj1/MusiciansWantedAPI"><button type="submit">Back-End GitHub</button></a>
        <a href="https://github.com/caneroj1/team-ios"><button type="submit">Front-End GitHub</button></a>
      </div>
    </div>
  </div>

  <!-- Project Details -->
  <section id="project-desc">
    <div class="project-container">
      <h2>Project Description</h2>
        <p>MusiciansWanted (MW) is an iOS application that was developed for a cloud computing course at TCNJ.</p> 
        <br><br><br>
      <h2>Project Details</h2>
        <p>The application is coded in Apple's Swift programming language with a back-end developed in Ruby on Rails.</p>   
        <br><br><br>
      <h2>Contributions</h2>
        <p>
          Team iOS (Front-End)<br>
          Team MW-API (Back-End)
        </p>   
    </div>
  </section>

  <!-- Project Image -->
  <section id="project-img">
    <div class="portfolio-container">
    <!-- Swiper -->
    <div class="swiper-container swiper-container-h">
        <div class="swiper-wrapper">
          <?php 
            $dir = getcwd()."/portfolio/MusiciansWanted/img/";
            $images = scandir($dir, 1);
            foreach ($images as $key => $value) { 
              if (is_file($dir.$value)){
                echo '<div class="swiper-slide" style="background-image: url(\'img/'.$value.'\');' 
                  . 'background-position: center; background-repeat: no-repeat;'
                  . 'background-size: contain;"></div>';
              }
            }
          ?>
        </div>
        <div class="swiper-pagination swiper-pagination-h swiper-pagination-white"></div>
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
    </div>
    </div>
  </section>

  <section id="project-contact">
    <div class="contact-container">
      <a href="mailto:nicholas.amuso@gmail.com"><i class="fa fa-tumblr-square" aria-hidden="true"></i></a>
      <a href="https://github.com/namuso"><i class="fa fa-github" aria-hidden="true"></i></a>
      <a href="https://www.linkedin.com/in/namuso"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
    </div>
  </section>

  <script src="https://use.fontawesome.com/2fbcd39ceb.js"></script>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="../../js/fixednavbar.js"></script>
  <script src="../../js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
  var swiperH = new Swiper('.swiper-container-h', {
      pagination: '.swiper-pagination-h',
      paginationClickable: true,
      nextButton: '.swiper-button-next',
      prevButton: '.swiper-button-prev',
      spaceBetween: 0,
      loop: true
  });
  </script>
</body>
</html>
