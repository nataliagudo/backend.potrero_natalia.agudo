<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo "Hola mundo ";
     ?>
     <br>
     <hr>
     <?php
     $mensaje = "Hola mundo";
     echo $mensaje;
      ?>
      <br>
      <hr>
      <?php
      $naranjas = 80;
      $mandarinas = 20;
      echo $naranjas + $mandarinas;
       ?>
       <br>
       <hr>
       <?php
       echo $naranjas - $mandarinas;
        ?>
        <br>
        <hr>
        <?php
        echo $naranjas * $mandarinas;
         ?>
         <br>
         <hr>
         <?php
         echo $naranjas / $mandarinas;
          ?>
          <br>
          <hr>
          <?php
          $bananas = 99;
          $cajas = 10;
          echo $bananas % $cajas;
           ?>
           <br>
           <hr>
           <?php
           $celsius = 20;
           $valor1 = 1.8;
           $valor2 = 32;
           echo $celsius * $valor1 + $valor2;
            ?>
            <br>
            <hr>
            <?php
            $base = 18;
            $altura = 12;
            $valor3 = 2;
            echo $base * $altura;
             ?>
             <br>
             <hr>
             <?php
             echo $base + $altura * $valor3;
              ?>
              <br>
              <hr>
              <?php
              $radio = 30;
              $pi = 3.14;
              echo pow($radio,2) * $pi;
               ?>
               <br>
               <hr>
               <?php
               echo $valor3 * $pi * $radio;
                ?>
  </body>
</html>
