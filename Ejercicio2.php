<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>

    <link href="estilos.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body class="badge-light">
    
<nav class="navbar navbar-expand-lg navbar">
  <a class="navbar-brand" href="index.php">WEB 1</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="menu">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="ejercicio1.php">Calculadora</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ejercicio2.php">IMC</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ejercicio3.php">Descuento</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ejercicio4.php">Nomina</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
    <div class="col col-12 text-center">
      <img src="body.jpg" class="img-thumbnail" width="150">
    </div>
  </div>
<div class="container">
    <div class="row justify-content-center">
         <div class="col-4">

         <h6 class="mt-4 text-center"> INGRESE LOS SIGUIENTES DATOS PARA CALCULAR SU MASA CORPORAL </h6>
                
<form class= "mt-3" action="ejercicio2.php" method="POST">
  <div class="form-group">
    <label for="exampleFormControlInput1">Ingresa tu peso</label>
    <input type="number" class="form-control" placeholder="Peso" name="peso" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Ingresa tu altura</label>
    <input type="number" class="form-control" placeholder="Altura" name="altura" required>
  </div>
  <button type="submit" class="btn btn-light mt-3 btn-block" name="botonCalcular">CALCULAR IMC</button>
</form>

<hr>

</div>
    </div>
        </div>


        <?php if(isset($_POST["botonCalcular"])):?>
 
  
 <h4 class="text-center">

 <?php

     $peso = $_POST["peso"]; 
     $Altura = $_POST["altura"]; 
     
     $IMC=$peso/($Altura*$Altura)*10000;

 if($IMC < 18.5){
     echo ("Peso Insuficiente: ".$IMC);
     
    }
     elseif (($IMC>=18.5) && ($IMC<=24.9)){
     echo ("Normopeso: ".$IMC);
    }

    elseif (($IMC>=25) && ($IMC<=26.9)){
      echo ("Sobrepeso Grado I: ".$IMC);
     }

    elseif (($IMC>=27) && ($IMC<=29.9)){
      echo ("Sobrepeso Grado II (Preobesidad): ".$IMC);
     }
     elseif (($IMC>=30) && ($IMC<=34.9)){
      echo ("Obesidad Tipo I: ".$IMC);
     }
     elseif (($IMC>=35) && ($IMC<=39.9)){
      echo ("Obesidad Tipo II: ".$IMC);
     }
     elseif (($IMC>=40) && ($IMC<=49.9)){
      echo ("Obesidad de Tipo III (Morbida): ".$IMC);
     }
     elseif ($IMC>50){
      echo ("Obesidad de Tipo III (Morbida): ".$IMC);
     }

     
 ?> 

</h4> 
<?php endif ?>

   

</body>
</html>