<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descuento</title>

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
      <img src="spring.jpg" class="img-thumbnail" width="150">
    </div>
  </div>
<div class="container">
    <div class="row justify-content-center">
         <div class="col-4">

         <h6 class="mt-4 text-center"> INGRESE LOS SIGUIENTES DATOS PARA CALCULAR EL DESCUENTO </h6>
                
<form class= "mt-3" action="ejercicio3.php" method="POST">
  <div class="form-group">
    <label for="exampleFormControlInput1">Ingresa Cantidad de Zapatos</label>
    <input type="number" class="form-control" placeholder="zapatos" name="zapatos" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Ingresa el Valor Unitario de los Zapatos</label>
    <input type="number" class="form-control" placeholder="valor" name="valor" required>
  </div>
  <button type="submit" class="btn btn-light mt-3 btn-block" name="botonCalcular">CALCULAR DESCUENTO</button>
</form>

<hr>

</div>
    </div>
        </div>


        <?php if(isset($_POST["botonCalcular"])):?>
 
  
 <h4 class="text-center">

 <?php

     $zapatos = $_POST["zapatos"]; 
     $valor = $_POST["valor"];
     
     if ($zapatos<=2) 
     { 
      $compra=$zapatos*$valor;  
     
      echo ("El valor de cada par de zapatos es : ".$valor);
      echo ("<br>");
      echo ("Su descuento es del 0%: ");
      echo ("<br>");
      echo ("El total de su compra es: ".$compra);
     }
    
    elseif($zapatos ==3) 
    {
     $compra=$zapatos*$valor; 
     $des1=$compra*0.10; 
     $vldesc1=$compra-$des1;
     echo ("El valor de cada par de zapatos es : ".$valor);
     echo ("<br>"); 
     echo ("Su descuento es del 10%: ".$des1);
     echo ("<br>");
     echo ("El total de su compra es: ".$vldesc1);
    
    }
     elseif (($zapatos>=4) && ($zapatos<=8)) 
     { 
      $compra=$zapatos*$valor;
      $des2=$compra*0.20; 
      $vldesc2=$compra-$des2;
      
      echo ("El valor de cada par de zapatos es : ".$valor);
      echo ("<br>");
      echo ("Su descuento es del 20%: ".$des2);
      echo ("<br>");
      echo ("El total de su compra es: ".$vldesc2);
     }
     elseif ($zapatos>8) 
     {
      $compra=$zapatos*$valor; 
      $des3=$compra*0.50; 
      $vldesc3=$compra-$des3;
      echo ("El valor de cada par de zapatos es : ".$valor);
      echo ("<br>");
      echo ("Su descuento es del 50%: ".$des3);
      echo ("<br>");
      echo ("El total de su compra es: ".$vldesc3);
      }
    
     
 ?> 

</h4> 
<?php endif ?>

   

</body>
</html>