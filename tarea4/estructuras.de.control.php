<?php
//1. Mostrar los números del 1 al 100 //
$a = 1;
while ($a <= 100) {
echo "$a \n";
$a++;
}
?>
<br>
<hr>
<?php
//2. Mostrar los números del 100 al 1.//
$a = 100;
while ($a <= 100 and $a> 0) {
echo "$a \n";
$a--;
}
?>
 <br>
 <hr>
<?php
 //3. Mostrar los números pares del 1 al 100.//
 $a = 2;
 while ($a <= 100) {
 echo "$a \n";
 $a=$a+2;
 }
?>
  <br>
  <hr>
<?php
// 4. Mostrar los números impares del 1 al 100.//
$a = 1;
while ($a <= 100) {
echo "$a \n";
$a=$a+2;
}
?>
<br> <hr>
<?php
//5. Mostrar la suma de los números de 1 a 20.//
$suma = 0;
for ($i =1; $i <= 20; $i++) {
  $suma += $i;
  print "<h4> la suma de los números del 1 al 20 es $suma</h4>";
}
?>
<br> <hr>
<?php
//6. Mostrar la suma de números pares de 1 a 20.//
$suma = 0;
for ($i =2; $i <= 20; $i=$i+2) {
  $suma = $i+$suma;
  print "<h4> la suma de los números del 1 al 20 es $suma</h4>";
}
 ?>
