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
          <a class="nav-link" href="us">Us</a>
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
<!--Seccion 2-->
  <div class="imgprin">
    <img src="Images/oro.jpg" class="img-fluid imagen" alt="Responsive image">
  </div>
<!--Seccion 3-->
  <div class="container-fluid sec3">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <p class="texthome text-center martex">En <b>+58mining</b> nos apasiona la tecnología block chain, su innovación en la integridad de la información no tiene fronteras, generando mayor alcance global que logra cambios en el mundo</p>
      </div>
      <div class="col-md-4"></div>  
    </div>     
  </div>
<!--Seccion 4-->
  <div class="container-fluid sec4 parallax">
    <div class="row">
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-12">
            <p class="textchain text-center"><b>¿Qué es Blockchain?</b></p>
          </div>          
        </div>
        <div class="row">
          <div class="col-md-2"></div>   
          <div class="col-md-8">
            <p class="hometex text-center">El <b>Blockchain</b> o cadenas de bloques por su nombre en español, nació en 2008 con la creación del Bitcoin, es el sistema de codifición de la información que sustenta la estructura de la moneda virtual y fue destacada poco después de su surgimiento por la cantidad de aplicaciones que tiene en otras áreas más allá de las transacciones financieras, como la administración pública.
            <br>
            <br>
            Blockchain es una tecnología que permite la transferencia de datos digitales codificados de una manera completamente segura. Es vista como el libro de asientos de contabilidad de una empresa en donde se registran todas las entradas y todas las salidas de dinero. La gran innovación es que esta transferencia no requiere de un intermediario centralizado que identifique y certifique la información, sino que la validación de las transacciones está distribuida en múltiples nodos independientes, conocidos popularmente como mineros. Los mineros validan la información a través del protocolo de datos y luego la registran en el “libro de asientos”. Por ejemplo, en una transacción financiera, el minero valida la tenencia de los fondos, la autorización del uso de ellos y la acreditación de los fondos, para luego registrar esa transacción. 
            <br>
            <br>
            El Financial Times, realizó un esquema ilustrativo donde se puede apreciar el funcionamiento del blockchain con el envío de dinero entre A y B.</p>
          </div>    
          <div class="col-md-2"></div>  
        </div>
      </div>
      <div class="col-md-6">
        <img src="Images/cadena.png" class="img-fluid" alt="Responsive image">
      </div>  
    </div>     
  </div>

  <!--Footer seccion 5-->
  <section class="container-fluid sec5">
    <div class="row">
      <div class="col-md-9">
        <ul class="list-inline">
          <li class="list-inline-item"><a class="nav-link fotex" href="<?php echo BASE_URL?>">Home<span class="sr-only">(current)</span></a></li>
          <li class="list-inline-item"><a class="nav-link fotex" href="us">Us</a></li>
          <li class="list-inline-item"><a class="nav-link fotex" href="#">Statics</a></li>
          <li class="list-inline-item"><a class="nav-link fotex" href="calculator">Calculator</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <img src="Images/copy.png" class="img-fluid copy" alt="Responsive image">
      </div>
  </section>

  
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script type="text/javascript" src="JS/bootstrap.bundle.js"></script>
   <script type="text/javascript" src="JS/bootstrap.min.js"></script>

  <script>
    $(document).ready(function(){
        $("transgold").hover(function(){
            $(this).css("background-color", "yellow");
            }, function(){
            $(this).css("background-color", "pink");
        });
    });
  </script>

  </body>
</html>