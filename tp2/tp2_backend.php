<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Práctico 2</h1>

    <?php
    $a = 2;
    if ($a > 0) {
      echo "$a es un número positivo";
    }
     ?> <br> <hr>
     <?php
     $b = 5;
     if ($b > 1 and $b < 10) {
       echo "$b es menor a 10";
     }
      ?> <br> <hr>
      <?php
      $c = 11;
      if ($c > 10 or $c < 2) {
        echo "$c es mayor a 10";
      }
       ?> <br> <hr>
       <?php
       $numero1 = 2;
       $numero2 = 2;

       if ($numero1 > $numero2 ) {
        echo "suma". ($numero1+$numero2);
        echo "resta". ($numero1 - $numero2);
      } elseif ($numero1 < $numero2) {
        echo "multiplicacion:". ($numero1*$numero2) ."\n";
        echo "division". ($numero2/$numero1);
      } else {
        echo "$numero1 es igual a $numero2";
      }
        ?>

  </body>
</html>
