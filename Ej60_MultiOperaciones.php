<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <title>Registro de productos</title>
</head>
<body>
 <h2>REGISTRO DE NUMEROS</h2>
 <!-- Formulario de captura -->
 <form method="POST" action="">
 <?php
 for ($i = 0; $i < 3; $i++) {
 echo "Numeros1:";
 echo "<input type='number' name='numeros1[]'>" . " ";

 echo "Numeros2:";
 echo "<input type='number' name='numeros2[]'>" . " ";
 echo "<br><br>";
}
?>
<button type="submit" name="guardar" value="guardar">
 Guardar y calcular </button>

 <?php
 if (isset($_POST['guardar'])) {
 $numeros1 = $_POST['numeros1'];
 $numeros2 = $_POST['numeros2'];

 $error= "";

 for ($i=0; $i<3; $i++){
 if ($numeros1[$i] < 51 && $numeros2[$i] > 99){
 $error= "Error: En numeros1 solo se pueden teclear del 51 al 99";
 }
 if ($numeros1[$i] < -50 && $numeros2[$i] > -1){
 $error= "Error: En numeros2 solo se pueden teclear del -50 al -1";
 }
 } 
 if ($error !=""){
 echo "<br><p style='color:red'><b>" . $error . "</b></p>";
 } else {

 $suma= array();
 $resta = array();
 $multiplicacion= array();
 $division= array();

 for ($i = 0; $i < 3; $i++) {

 $suma[$i]= $numeros1[$i]+$numeros2[$i];

 $resta[$i]= $numeros1[$i]-$numeros2[$i];

 $multiplicacion[$i]= $numeros1[$i]*$numeros2[$i];

 $division[$i]= $numeros1[$i]/$numeros2[$i];
 }
 echo "<br>";
 echo "<table border='1' cellpadding='5' style='display:inline-table; vertical-align:top;'><tr><th>
    Numeros1</th></tr>";
 for ($i = 0; $i < 3; $i++) { echo "<tr><td>" . $numeros1[$i] . "</td></tr>";}
 echo "</table>";

 echo "<table border='1' cellpadding='5' style='display:inline-table; vertical-align:top;'><tr><th>
    Numeros2</th></tr>";
 for ($i = 0; $i < 3; $i++) { echo "<tr><td>" . $numeros2[$i] . "</td></tr>";}
 echo "</table>";

 echo "<table border='1' cellpadding='5' style='display:inline-table; vertical-align:top;'><tr><th>
    Suma</th></tr>";
 for ($i = 0; $i < 3; $i++) { echo "<tr><td>" . $suma[$i] . "</td></tr>";}
 echo "</table>";

 echo "<table border='1' cellpadding='5' style='display:inline-table; vertical-align:top;'><tr><th>
    Resta</th></tr>";
 for ($i = 0; $i < 3; $i++) { echo "<tr><td>" . $resta[$i] . "</td></tr>";}
 echo "</table>";

 echo "<table border='1' cellpadding='5' style='display:inline-table; vertical-align:top;'><tr><th>
    Multiplicacion</th></tr>";
 for ($i = 0; $i < 3; $i++) { echo "<tr><td>" . $multiplicacion[$i] . "</td></tr>";}
 echo "</table>";

 echo "<table border='1' cellpadding='5' style='display:inline-table; vertical-align:top;'><tr><th>
    Division</th></tr>";
 for ($i = 0; $i < 3; $i++) { echo "<tr><td>" . $division[$i] . "</td></tr>";}
 echo "</table>";
}
}
?>
</body>
</html>




 
 
 

