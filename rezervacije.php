<?php
  include 'header.php';
  include 'bootstrap.php';

 


?>


<body>

<div class="container" style="padding-top: 50px; padding-bottom: 50px;">
<div class="row">
      <div class="col-md-12 col-sm-12 text-center">
        
        <h3> U samo nekoliko koraka rezervirajte svoj stol u našem restoranu </h1>
		<p> Kako bi dobili najbolji stol kod nas, molimo vas unesite potrebne informacije. Vidimo se uskoro!</p> 
      </div>
    </div>
	<?php
   
    if (!empty($error)) {
        echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
    }
    ?>
  <form class="mx-auto" action="connect.php" method="post">
    <div class="row" style="padding-top: 20px;">
      <div class="col-sm-12">
        <div class="form-group1">
          <label for="name">Ime i Prezime</label>
          <input type="text" class="form-control" id="name" placeholder="Unesite ime" name="firstName">
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group1">
          <label for="brojosoba">Broj osoba</label>
          <input type="number" class="form-control" id="brojOsoba" placeholder="Unesite broj osoba" name="brojOsoba">

        </div>
      </div>
	  <div class="col-sm-12">
  <div class="form-group1">
    <label for="datetime">Datum i vrijeme</label>
    <input type="datetime-local" class="form-control" id="datetime" name="datetime">
  </div>
</div>
	  
      <div class="col-sm-12">
        <div class="form-group1">
          <label for="phone">Broj telefona</label>
          <input type="text" class="form-control" id="phone" placeholder="Enter phone number" name="phone">
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group1">
          <label for="email">Email adresa</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
      </div>
    </div>
 
	<div class="text-center">
	<input type="submit" name="submit" class="btn btn-dark" value="Pošalji rezervaciju">

</div>
  </form>
</div>

</div>


</body>

<?php
  include 'footer.php';
?>