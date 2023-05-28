<?php
  include 'header.php';
  include 'dropdown.php';
  include 'bootstrap.php';
?>
<body>
<div class="container dropdown-container">
  <div class="row" style= "padding-top: 50px";>
    <div class="col-md-12 mx-auto text-center">
	<h4> Istražite našu raznovrsnu ponudu! </h4>
</div>
</div>
<div class="row">
<div class="col-md-12 mx-auto"  style= "padding-top: 20px";>
	<?php
      $predjela = array("Dalmatinski pršut 100 g - 8,50 € / 64,04 Kn", "Paški sir 100 g - 8,50 € / 64,04 Kn", "Pizza kruh s češnjakom - 4,50 € / 33,91 Kn",
	"Pizza kruh sa sirom - 4,50 € / 33,91 Kn");
	$predjelaDropdown = generateDropdown($predjela, "Predjela", "dropdown-content");
      echo $predjelaDropdown;
      ?>

      <?php
      $Tjestenine = array("Lasagne - 9,00 € / 67,81 Kn", "Spaghetti Bolognese - 9,00 € / 67,81 Kn", "Spaghetti Carbonara - 9,00 € / 67,81 Kn", 
	  "Risotto frutti di mare - 13,00 € / 97,95 Kn", "Tortellini - 8,50 € / 64,04 Kn");
      $TjestenineDropdown = generateDropdown($Tjestenine,"Tjestenine");
      echo $TjestenineDropdown;
      ?>

      <?php
      $juhe = array("Goveđa juha - 3,50 € / 26,37 Kn", "Juha od rajčice - 3,50 € / 26,37 Kn", "Brokoli krem juha - 4,00 € / 30,14 Kn", "Krem juha od kozica - 4,50 € / 33,91 Kn");
      $juheDropdown = generateDropdown($juhe,"Juhe");
      echo $juheDropdown;
      ?>

      <?php
      $pizza= array("Margherita 8,00 € / 60,28 Kn 15,00 € / 113,02 Kn", "Prosciuto -pršut. gljive 8,00 € / 60,28 Kn 17,00 € / 128,09 Kn", "Vesuvio - sa šunkom 8,00 € / 60,28 Kn 15,00 € / 113,02 Kn",
	"Funghi - gljive 8,00 € / 60,28 Kn 15,00 € / 113,02 Kn", "Capriciosa - šunka, gljive 8,00 € / 60,28 Kn 15,00 € / 113,02 Kn", "Napolitana - srdele 8,00 € / 60,28 Kn 15,00 € / 113,02 Kn",
"Quattro formaggi 8,50 € / 64,04 Kn 15,50 € / 116,78 Kn");
      $pizzaDropdown = generateDropdown($pizza,"Pizza");
      echo $pizzaDropdown;
      ?>
	  <?php
      $grill = array("Ćevapi Veliki 5.97 € / 45Kn", "Ćevapi Mali 3.58 € / 27Kn", "Svinjski Kotleti 6.90 € / 52Kn");
      $grillDropdown = generateDropdown($grill,"Grill jela");
      echo $grillDropdown;
      ?>
	  <?php
      $riba = array("Brancin - orada, s blitvom - 21,00 € / 158,22 Kn", "Škampi sa žara - 23,00 € / 177,06 Kn", "Riblja plata s blitvom (za 2 osobe) - 52,00 € / 391,71 Kn",
	  "Lignje sa žara s blitvom - 20,00 € / 150,69 Kn","Tuna na žaru s blitvom - 14,50 € / 109,25 Kn", "Losos na žaru s blitvom - 14,50 € / 109,25 Kn");
      $ribaDropdown = generateDropdown($riba,"Riba");
      echo $ribaDropdown;
      ?>
	  <?php
      $prilozi = array("Pommes frites - 3,00 € / 22,60 Kn", "Đuveč riža - 3,00 € / 22,60 Kn", "Pekarski krumpir - 3,00 € / 22,60 Kn");
      $priloziDropdown = generateDropdown($prilozi,"Prilozi");
      echo $priloziDropdown;
      ?>
	  <?php
      $salate = array("Salat plata Nizza (šunka, sir, jaje) - 8,50 € / 64,04 Kn", "Salata s kozicama, više vrsta zelene salate, palenta, cherry rajčica - 12,50 € / 94,18 Kn",
	   "Grčka salata - 9,00 € / 67,81 Kn");
      $salateDropdown = generateDropdown($salate,"Salate");
      echo $salateDropdown;
      ?>
	  <?php
      $desserts = array("Palačinke sa čokoladom ili marmelaom 4,50 € / 33,91 Kn", "Palačinke s orasima i školadom 4,80 € / 36,17 Kn", "Sladoled (3kugl.) 4,00 € / 30,14 Kn",
	  "Banana Split 4,80 € / 36,14 Kn");
      $dessertsDropdown = generateDropdown($desserts,"Deserti");
      echo $dessertsDropdown;
      ?>


    </div>
  </div>

  
<div class="row" style="padding-top: 50px; padding-bottom: 50px;">
  <div class="col-md-6 col-sm-12 mx-auto">
    <div class="carousel-container text-center">
      <h2>Galerija</h2>
      <div id="carouselExampleIndicators" class="carousel slide custom-carousel" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="slike/hrana1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="slike/hrana2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="slike/hrana3.jpg" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="slike/hrana6.jpg" alt="Fourth slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="slike/hrana7.jpg" alt="Fifth slide">
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
  </div>
</div>

</div>

</body>

<?php
  include 'footer.php';
  
?>