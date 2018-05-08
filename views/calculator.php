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
                <input id="input" class="p-2 bd-highlight form-control form-control-lg imp" type="text" placeholder="USD ($)">             
              </div>

              <div class="p-2 bd-highlight">
                <select id="selector" class="form-control form-control-lg imp2">
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
                <input id="resultOP" class="p-2 bd-highlight form-control form-control-lg imp" type="text" placeholder="Value">
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
                <select id="selector1" class="form-control form-control-lg imp2">
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
                <p class="vs">/</p>          
              </div>
              <div class="p-2 bd-highlight">
                <select id="selector2" class="form-control form-control-lg imp2">
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
                <div class="animated estacal">
                  <div class="row">
                    <section class="col-md-3"></section>
                    <section class="col-md-6">
                      <p id="lr1" class=" estares text-center">M1/M2</p>
                      <p id="r1" class=" estares text-center">1,503</p>
                    </section>
                    <section class="col-md-3"></section>
                  </div>
                </div>         
              </div>
              <div class="p-2 bd-highlight">
                <div class="animated estacal">
                  <div class="row">
                    <section class="col-md-3"></section>
                    <section class="col-md-6">
                      <p id="lr2" class=" estares text-center">M2/M1</p>
                      <p id="r2" class=" estares text-center">2,509</p>
                    </section>
                    <section class="col-md-3"></section>
                  </div>
                </div>         
              </div>
              <div class="p-2 bd-highlight">
                <div class="animated estacal">
                  <div class="row">
                    <section class="col-md-3"></section>
                    <section class="col-md-6">
                      <p id="lr3" class=" estares text-center">% (M1)</p>
                      <p id="r3" class=" estares text-center">+4,25%</p>
                    </section>
                    <section class="col-md-3"></section>
                  </div>
                </div>     
              </div>
              <div class="p-2 bd-highlight">
                <div class="animated estacal">
                  <div class="row">
                    <section class="col-md-3"></section>
                    <section class="col-md-6">
                      <p id="lr4" class=" estares text-center">% (M1)</p>
                      <p id="r4" class=" estares text-center">-1,25%</p>
                    </section>
                    <section class="col-md-3"></section>
                  </div>
                </div>        
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
            var result = ($("#input").val())/price.BTC;
            $("#resultOP").val( result.toFixed(2) + " BTC");  
          break;
          case "BCH":
            var result = ($("#input").val())/price.BCH;
            $("#resultOP").val(result.toFixed(2) + " BCH");  
          break;
          case "ETH":
            var result = ($("#input").val())/price.ETH;
            $("#resultOP").val(result.toFixed(2) + " ETH");  
          break;
          case "ETC":
            var result = ($("#input").val())/price.ETC;
            $("#resultOP").val(result.toFixed(2) + " ETC");  
          break;
          case "LTC":
            var result = ($("#input").val())/price.LTC;
            $("#resultOP").val(result.toFixed(2) + " LTC");  
          break;
          case "XVG":
            var result = ($("#input").val())/price.XVG;
            $("#resultOP").val(result.toFixed(2) + " XVG");  
          break;
          case "SC":
            var result = ($("#input").val())/price.SC;
            $("#resultOP").val(result.toFixed(2)+ " SC"); 
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
      var result1;
      var result2;

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
      var delayInMilliseconds = 750; //0.5 seconds
      setTimeout(function() {
          $(".estacal").removeClass("key");
          $(".estares").removeClass("key2");
          $("#r3").removeClass("pos");
          $("#r3").removeClass("neg");
          $("#r4").removeClass("pos");
          $("#r4").removeClass("neg");
      }, delayInMilliseconds);

    }
    
    var delayInMilliseconds = 1000; //0.75 second
    setTimeout(function() {
       //CAMBIAR VALORES
      $("#lr1").text(option1+'/'+option2);
      result1 = price1/price2;
      $("#r1").text(result1.toFixed(2));

      $("#lr2").text(option2+'/'+option1);
      result2 = price2/price1;
      $("#r2").text(result2.toFixed(2));

      $("#lr3").text('% '+ option1);
      $("#r3").text(percent1);

      $("#lr4").text('% '+ option2);
      $("#r4").text(percent2);

      $(".estacal").removeClass("fadeOutDown");
      if(percent1>0) $("#r3").addClass("pos");
      else $("#r3").addClass("neg");
      if(percent2>0) $("#r4").addClass("pos");
      else $("#r4").addClass("neg");
      $(".estares").addClass("key2");
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