<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
</head>
<body>

    <h2>MATRICES</h2>

<?php
     $MatrizA= array();
     $valor1= 100;
      for ($f=0; $f<3; $f++){
	        for ($c=0; $c<3; $c++){
	           $MatrizA[$f][$c]=$valor1;
	           $valor1+=10;

	        }
	    }
      echo "<br>";
      for ($f=0; $f<3; $f++){
           for ($c=0; $c<3; $c++){
            echo $MatrizA[$f][$c] . " ";}
            echo "<br>";
        }
      $MatrizB= array();
      $valor2= 500;
      for ($f=0; $f<3; $f++){
	        for ($c=0; $c<3; $c++){
	           $MatrizB[$f][$c]=$valor2;
	           $valor2+=20;
	        }
	    }
	  echo "<br>";
      for ($f=0; $f<3; $f++){
           for ($c=0; $c<3; $c++){
            echo $MatrizB[$f][$c] . " ";}
            echo "<br>";
        }
      $MatrizC= array();
      $valor3=0;
      for ($f=0; $f<3; $f++){
	        for ($c=0; $c<3; $c++){
	           $MatrizC[$f][$c]=$valor3;
	           $valor3=$valor1[$f]+$valor[$c];
	          
	        }
	    }
	  echo "<br>";
      for ($f=0; $f<3; $f++){
           for ($c=0; $c<3; $c++){
            echo $numeros[$f][$c] . " ";}
            echo "<br>";
        }
?>
</body>
</html


       