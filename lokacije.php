<?php
  include 'header.php';
  include 'bootstrap.php';
?>
<header>
<link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\restoran\css\style.css">
</header>
<body>
<div class="container" style="padding-top: 50px; padding-bottom: 100px;">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="text-center">LOKACIJE</h1>
		<p> Trenutno u gradu zadru imamo otvorena 3 restorana. Restorani se nalaze na Boriku, Poluotoku, te na Bokanjcu.
      </div>
    </div>

	<div class="row align-items-center">
	<div class = "col-md-6 col-sm-12">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="slike/interijer1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="slike/interijer2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="slike/interijer3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>



	<!-- Ovdje je kraj proslog cola i ispod je kraj row-a -->
<div class="col-md-6 col-sm-12">
  <div class="bordered-text">
    <h2>Zadar lokacije</h2>
    <div class="bordered-text2">
      <p>Borik - Cvijete Zuzorić 11</p>
      <p>Poluotok - Mihovila Pavlovića 23</p>
      <p>Bokanjac - Put Bokanjca 32</p>
    </div>
  </div>
</div>
</div>

<div class="row">
  <div class="col-md-12 col-sm-12 text-center custom-padding">
    <h4>Google Maps</h4>
  </div>
</div>
<div class="row">
  <div class="col-md-12 col-sm-12 text-center">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2863.6189725362196!2d15.20965678344306!3d44.13248079652401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4761f0af494c54d5%3A0xfe744d25143174f9!2sUl.%20Cvijete%20Zuzori%C4%87%2011%2C%2023000%2C%20Zadar!5e0!3m2!1shr!2shr!4v1682423756618!5m2!1shr!2shr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>
  </div>


</body>
<?php
  include 'footer.php';
?>