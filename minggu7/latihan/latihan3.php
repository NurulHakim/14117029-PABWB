<!DOCTYPE html>
<html>
  <head>
    <title>Latihan No 3</title>
  </head>
  <body>
    <?php

      function faktorial($angka){
        if($angka == 1){
          return 1;
        }
        return $angka*faktorial($angka-1);
      }

    ?>

    <form action="latihan3.php" method="get">
      <label>Angka : </label>
      <input type="text" name="angka" value=""><br>
      <button type="submit" name="ok">Submit bos</button>
    </form>

    <?php
      if(isset($_GET['angka'])){
        echo "</br> Hasil nya : ".faktorial($_GET['angka']);
      }
    ?>
  </body>
</html>
