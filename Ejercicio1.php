<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>

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
      <img src="calculadora.jpg" class="img-thumbnail" width="150">
    </div>
  </div>
<div class="container">
    <div class="row justify-content-center">
         <div class="col-4">
         
         <h6 class="mt-4 text-center"> INGRESE LOS NUMEROS A CALCULAR </h6>
                
<form class= "mt-3" action="ejercicio1.php" method="POST">
  <div class="form-group">
    <label for="exampleFormControlInput1">Número 1</label>
    <input type="number" class="form-control" placeholder="Ingrese Número UNO" name="numeroUno" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Número 2</label>
    <input type="number" class="form-control" placeholder="Ingrese Número DOS" name="numeroDos" required>
  </div>

  <button type="submit" class="btn btn-light mt-3 btn-block" name="botonCalcular">CALCULAR</button>
</form>

<hr>

</div>
    </div>
        </div>
     
          
<?php if(isset($_POST["botonCalcular"])):?>
 
  
  <h4 class="text-center">

  <?php
 
	    $num1 = $_POST["numeroUno"];
	    $num2 = $_POST["numeroDos"]; 
	
  $suma=$num1+$num2;
  $resta=$num1-$num2;
  $multi=$num1*$num2;

  echo ("El total de la suma es: " .$suma);
  echo("<br>");
  echo ("El total de la resta es: " .$resta);
  echo("<br>");
  echo ("El total de la multiplicacion es: " .$multi);
	?> 

</h4> 
<?php endif ?>

</body>
</html>