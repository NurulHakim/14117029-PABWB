<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if($_POST['nama'] != ""){
        echo "Nama : ".$_POST['nama']. "</br>";
        echo "Alamat : ".$_POST['alamat'] ."</br>";
        echo "Jenis Kelamin : ".$_POST['jk'] ."</br>";
        echo "Golongan Darah : ".$_POST['goldar']."</br>";
        echo "Hobby : ";
        if(isset($_POST['hobby1'])) echo $_POST['hobby1']." ";
        if(isset($_POST['hobby2'])) echo $_POST['hobby2']." ";
        if(isset($_POST['hobby3'])) echo $_POST['hobby3']." ";
        echo "</br>Keterangan : ".$_POST['keterangan']." </br>";
      }

     ?>
  </body>
</html>
