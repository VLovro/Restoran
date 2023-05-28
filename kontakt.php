<?php
  include 'header.php';
  include 'bootstrap.php';
?>

<body>
<div class="container" style="padding-top: 50px; padding-bottom: 50px;">

    <div class="row">
      <div class="col-md-12 col-sm-12 text-center">
        <p> Imate li pitanje?</p> 
        <h1> Kontaktirajte nas! </h1>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 col-sm-12 text-center">
        <h3> Kontakt podatci </h3>
        <ul class="no-bullets">
          <li>E-mail: restoranvisic@gmail.com</li>
          <li>Telefon: 098-1988286</li>
        
        </ul>
      </div>
    </div>

	<div class="row ">
  <div class="col-lg-6 col-md-8 col-sm-10 mx-auto">
    <form>
      <div class="form-group">
        <label for="message" class="text-left font-weight-bold">Poruka</label>
        <textarea class="form-control" id="message" rows="5" style="height: 200px;"></textarea>
      </div>
      <button type="submit" class="btn btn-dark float-right">Pošalji</button>
    </form>
  </div>
</div>



</div>
</body>
<?php
    include 'footer.php';
  ?>