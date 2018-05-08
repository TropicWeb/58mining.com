<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Orbitron|Rubik" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="CSS/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/estilosA.css">
    <title>Home</title>
  </head>


  <body>

<!--Sección 1-->
  <nav class="navbar navbar-expand-lg navbar-light barra">
    <a class="navbar-brand" href="#">
      <img src="Images/logo.png" width="45" height="45" class="d-inline-block align-top" alt="">
    </a>

    <div class="collapse navbar-collapse a" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL?>">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="#">Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Statics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="calculator">Calculator</a>
        </li>
      </ul>
    </div>
  </nav>

  <!--TESTTTTTTT-->
  <?php foreach ($infoCrypto as $crypto): ?>
    <p>
      <?php echo "CRYPTOCURRENCY: " . $crypto->data->symbol . " - " . $crypto->data->name;?>
    </p>
    <p>
      <?php echo $crypto->data->symbol . " - USD: " . $crypto->data->quotes->USD->price;?>
    </p>
    <p>
      <?php echo "Percent change 1 hour: " . $crypto->data->quotes->USD->percent_change_1h;?><br>
      <?php echo "Percent change 24 hours: " . $crypto->data->quotes->USD->percent_change_24h;?><br>
      <?php echo "Percent change 7 days: " . $crypto->data->quotes->USD->percent_change_7d;?><br>
    </p>

  <?php endforeach?>
  <!--TESTTTTTTT-->
  
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script type="text/javascript" src="JS/bootstrap.bundle.js"></script>
   <script type="text/javascript" src="JS/bootstrap.min.js"></script>
  </body>
</html>