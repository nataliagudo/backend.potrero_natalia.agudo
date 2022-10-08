<?php
//1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro./
$numerospares = ["2", "4", "6", "8","10"];
print "<pre>\n";
print_r ($numerospares);
print "<pre>\n";
?>
<br>
<hr>
<?php
//2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la matriz. Mostrar el esquema del array con print_r().//
$matriz = [ "pedro", "ana", "34", "1"];
print_r ($matriz);
?>
<br>
<hr>
<?php
//3. Crear un array asociativo e introducir los siguientes valores:Nombre: Pedro, Apellido: Torres, Dirección: Av. Mayor 3703, Teléfono: 1122334455.//
$asociativa = [ 'nombre' => "Pedro", 'Apellido' => "Torres", 'Dirección' => "Av. Mayor 3703", 'Teléfono' => 1122334455];
 ?>
 <br>
 <hr>
 <?php
//4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles yChicago, sin asignar índices al array. A continuación, muestra el contenido del array.Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid//.
$ciudades = [ "Madrid", "Barcelona", " Londres", "New York", "Los Angeles", "Chicago"];
print " <p> La ciudad con índice 0 es $ciudades[0]</p>\n";
print " <p> La ciudad con índice 1 es $ciudades[1]</p>\n";
print " <p> La ciudad con índice 2 es $ciudades[2]</p>\n";
print " <p> La ciudad con índice 3 es $ciudades[3]</p>\n";
print " <p> La ciudad con índice 4 es $ciudades[4]</p>\n";
print " <p> La ciudad con índice 5 es $ciudades[5]</p>\n";
?>
<br>
<hr>
<?php
//5. Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.Ejemplo: El índice de Madrid es MD.
$ciudades5 = ['MD' => "Madrid",'BCL' => "Barcelona", 'LD' => " Londres",'NY' => "New York",'LA' => "Los Angeles",'CCG' => "Chicago"];
print "<p> El indice de $ciudades5[MD] es MD. </p>\n";
print "<p> El indice de $ciudades5[BCL] es BCL. </p>\n";
print "<p> El indice de $ciudades5[LD] es LD. </p>\n";
print "<p> El indice de $ciudades5[NY] es NY. </p>\n";
print "<p> El indice de $ciudades5[LA] es LA. </p>\n";
print "<p> El indice de $ciudades5[CCG] es CCG. </p>\n";
 ?>
