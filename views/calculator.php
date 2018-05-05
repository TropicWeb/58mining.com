<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="CSS/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/estilosB.css">
    <link rel="stylesheet" type="text/css" href="CSS/animate.css">
    <title>Calculator</title>
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
<!--Sección 2-->
  <section class="container-fluid sep12">
    <div class="row">
      <div class="col-md-3 col-xs-2"></div>
      <div class="col-md-6 col-xs-8">
        <div class="d-flex flex-row bd-highlight justify-content-center">
          <div class="p-2 bd-highlight convert">
            <div class="d-flex flex-row bd-highlight justify-content-around">
              <div class="p-2 bd-highlight">
                <input id="input" type="number" class="p-2 bd-highlight form-control form-control-lg" placeholder="USD ($)">              
              </div>
              <div class="p-2 bd-highlight">
                <select id="selector" class="form-control form-control-lg">
                  <option value="BTC">BTC - Bitcoin</option>
                  <option value="BCH">BCH - Bitcoin Cash</option>
                  <option value="ETH">ETH - Ethereum</option>
                  <option value="ETC">ETC - Ethereum clasicc</option>
                  <option value="LTC">LTC - Litecoin</option>
                  <option value="SC">SC - Siacoin</option>
                  <option value="XVG">XVG - Verge</option>
                </select>           
              </div>
            </div>
            <div class="d-flex flex-row bd-highlight justify-content-center result">
              <div class="p-2 bd-highlight">
                <input id="resultOP" class="p-2 bd-highlight form-control form-control-lg" type="text" >              
              </div>
            </div>
          </div>
        </div>        
      </div>
      <div class="col-md-3 col-xs-2"></div>
    </div>

    <div class="row sep12">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="d-flex flex-row bd-highlight justify-content-center">
          <div class="p-2 bd-highlight convert">
            <div class="d-flex flex-row bd-highlight justify-content-around">
              <div class="p-2 bd-highlight">
                <select id="selector1" class="form-control form-control-lg">
                  <option value="BTC">BTC - Bitcoin</option>
                  <option value="BCH">BCH - Bitcoin Cash</option>
                  <option value="ETH">ETH - Ethereum</option>
                  <option value="ETC">ETC - Ethereum clasicc</option>
                  <option value="LTC">LTC - Litecoin</option>
                  <option value="SC">SC - Siacoin</option>
                  <option value="XVG">XVG - Verge</option>
                </select>           
              </div>
              <div class="p-2 bd-highlight">
                <p class="vs">VS</p>          
              </div>
              <div  class="p-2 bd-highlight">
                <select id="selector2" class="form-control form-control-lg">
                  <option value="BTC">BTC - Bitcoin</option>
                  <option value="BCH">BCH - Bitcoin Cash</option>
                  <option value="ETH">ETH - Ethereum</option>
                  <option value="ETC">ETC - Ethereum clasicc</option>
                  <option value="LTC">LTC - Litecoin</option>
                  <option value="SC">SC - Siacoin</option>
                  <option value="XVG">XVG - Verge</option>
                </select>           
              </div>
            </div>

             <div class="d-flex flex-row bd-highlight justify-content-around seplite">
              <div class="p-2 bd-highlight">
                <label id="lr1">BTC/BTC</label>
                <p id="r1" class="estacal animated"></p>        
              </div>
              <div class="p-2 bd-highlight">
                <label id="lr2">BTC/BTC</label>
                <p id="r2" class="estacal animated"></p>          
              </div>
              <div class="p-2 bd-highlight">
                <label id="lr3">Percent Change 24H - BTC</label>
                <p id="r3" class="estacal animated"></p>     
              </div>
              <div class="p-2 bd-highlight">
                <label id="lr4">Percent Change 24H - BTC</label>
                <p id="r4" class="estacal animated"></p>          
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-1"></div>            
    </div>
  </section>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="JS/jquery-3.3.1.min.js" type="text/javascript"></script>  
    <script type="text/javascript" src="JS/jquery.js"></script>
    <script type="text/javascript" src="JS/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="JS/bootstrap.min.js"></script>
   
   <script>
    var calculate = function (){
      if($("#input").val()!=""){
        var option = $("#selector").val();
        var price = {
          BTC:<?php echo $valuesCrypto["BTC"][0];?>,
          BCH:<?php echo $valuesCrypto["BCH"][0];?>,
          ETH:<?php echo $valuesCrypto["ETH"][0];?>,
          ETC:<?php echo $valuesCrypto["ETC"][0];?>,
          LTC:<?php echo $valuesCrypto["LTC"][0];?>,
          XVG:<?php echo $valuesCrypto["XVG"][0];?>,
          SC:<?php echo $valuesCrypto["SC"][0];?>
        };

        switch(option){
          case "BTC":
            $("#resultOP").val(($("#input").val())/price.BTC);  
          break;
          case "BCH":
            $("#resultOP").val(($("#input").val())/price.BCH);  
          break;
          case "ETH":
            $("#resultOP").val(($("#input").val())/price.ETH);  
          break;
          case "ETC":
            $("#resultOP").val(($("#input").val())/price.ETC);  
          break;
          case "LTC":
            $("#resultOP").val(($("#input").val())/price.LTC);  
          break;
          case "XVG":
            $("#resultOP").val(($("#input").val())/price.XVG);  
          break;
          case "SC":
            $("#resultOP").val(($("#input").val())/price.SC); 
          break;
        }
          
      }else{
        $("#input").focus();
      }
    }

    //CAMBIA EL SELECTOR DE CRYPTOS
    $("#selector").change(calculate);
    //CAMBIA EL CAMPO USD
    $("#input").change(calculate);
    
  </script>

  <script type="text/javascript">

    var calculate =function(){
      var option1 = $("#selector1").val();
      var option2 = $("#selector2").val();
      var price = {
        BTC:<?php echo $valuesCrypto["BTC"][0];?>,
        BCH:<?php echo $valuesCrypto["BCH"][0];?>,
        ETH:<?php echo $valuesCrypto["ETH"][0];?>,
        ETC:<?php echo $valuesCrypto["ETC"][0];?>,
        LTC:<?php echo $valuesCrypto["LTC"][0];?>,
        XVG:<?php echo $valuesCrypto["XVG"][0];?>,
        SC:<?php echo $valuesCrypto["SC"][0];?>
      }
      var percent = {
        BTC:<?php echo $valuesCrypto["BTC"][1];?>,
        BCH:<?php echo $valuesCrypto["BCH"][1];?>,
        ETH:<?php echo $valuesCrypto["ETH"][1];?>,
        ETC:<?php echo $valuesCrypto["ETC"][1];?>,
        LTC:<?php echo $valuesCrypto["LTC"][1];?>,
        XVG:<?php echo $valuesCrypto["XVG"][1];?>,
        SC:<?php echo $valuesCrypto["SC"][1];?>
      }      

      var price1;
      var price2;
      var percent1;
      var percent2;

      switch(option1){
       case "BTC":
          price1 = price.BTC;  
          percent1 = percent.BTC;
        break;
        case "BCH":
          price1 = price.BCH;
          percent1 = percent.BCH;
        break;
        case "ETH":
          price1 = price.ETH;
          percent1 = percent.ETH;
        break;
        case "ETC":
          price1 = price.ETC;
          percent1 = percent.ETC;
        break;
        case "LTC":
          price1 = price.LTC; 
          percent1 = percent.LTC;
        break;
        case "XVG":
          price1 = price.XVG;
          percent1 = percent.XVG;
        break;
        case "SC":
          price1 = price.SC;
          percent1 = percent.SC;
        break; 
      }

      switch(option2){
       case "BTC":
          price2 = price.BTC;
          percent2 = percent.BTC;  
        break;
        case "BCH":
          price2 = price.BCH;
          percent2 = percent.BHC;
        break;
        case "ETH":
          price2 = price.ETH;
          percent2 = percent.ETH;
        break;
        case "ETC":
          price2 = price.ETC;
          percent2 = percent.ETC;
        break;
        case "LTC":
          price2 = price.LTC;
          percent2 = percent.LTC; 
        break;
        case "XVG":
          price2 = price.XVG;
          percent2 = percent.XVG;
        break;
        case "SC":
          price2 = price.SC;
          percent2 = percent.SC;
        break; 
      }

      //EFECTOS
    if ($(".estacal").hasClass("key")){
      $(".estacal").removeClass("fadeInUp");
      $(".estacal").addClass("fadeOutDown");
      var delayInMilliseconds = 250; //0.5 seconds
      setTimeout(function() {
          $(".estacal").removeClass("key");
            //CAMBIAR VALORES
          $("#lr1").text(option1+'/'+option2);
          $("#r1").text(price1/price2);
          $("#lr2").text(option2+'/'+option1);
          $("#r2").text(price2/price1); 
          $("#lr3").text('Percent Change last 24H -'+ option1);
          $("#r3").text(percent1);
          $("#lr4").text('Percent Change last 24H -'+ option2);
          $("#r4").text(percent2);
      }, delayInMilliseconds);

    }else{
        //CAMBIAR VALORES
        $("#lr1").text(option1+'/'+option2);
        $("#r1").text(price1/price2);
        $("#lr2").text(option2+'/'+option1);
        $("#r2").text(price2/price1); 
        $("#lr3").text('Percent Change last 24H -'+ option1);
        $("#r3").text(percent1);
        $("#lr4").text('Percent Change last 24H -'+ option2);
        $("#r4").text(percent2);      
    }
      var delayInMilliseconds = 750; //0.75 second
      setTimeout(function() {
        $(".estacal").removeClass("fadeOutDown");
        $(".estacal").addClass("key");
        $(".estacal").addClass("fadeInUp");
      }, delayInMilliseconds);
      
    }

    //Cambia cualquier selector
    $("#selector1").change(calculate);
    $("#selector2").change(calculate);

  </script>
  </body>
</html>