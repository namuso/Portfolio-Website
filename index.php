<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nick Amuso</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/swiper.min.css">
  <link href="https://fonts.googleapis.com/css?family=Days+One|Proza+Libre" rel="stylesheet">
</head>

<body>

  <!-- navbar -->
  <header>
    <?php include('html/navbar.php'); ?>
  </header>

  <!-- heading -->
  <div class="about-container" id="portrait" style="background-image: url('img/bg3bw.jpg'); background-attachment: fixed;">
    <div class="about-text">
        <h4>Hi, I'm</h4>
        <h1>NICK AMUSO</h1>
    </div>
  </div>

  <!-- about -->
  <section id="about">
    <?php include('html/about.html'); ?>
  </section>

  <!-- experience -->
  <section id="experience">
    <?php include('html/experience.html'); ?>
  </section>

  <!-- portfolio -->
  <section id="portfolio">
    <?php include('html/portfolio.html'); ?>
  </section>

  <!-- contact -->
  <section id="contact">
    <?php include('html/contact.php'); ?>
  </section>

  <script src="https://use.fontawesome.com/2fbcd39ceb.js"></script>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="js/main.js"></script>
  <script src="js/fixednavbar.js"></script>
  <script src="js/swiper.min.js"></script>


<script>
// Initialize Swiper
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
