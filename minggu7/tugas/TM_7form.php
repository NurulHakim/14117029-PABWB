<!DOCTYPE html>
<html>
  <head>
    <title>Tugas Minggu 7</title>
     <style>
		body {
			font-family: "segoe ui";
		}
		h1 {
			font-size: 25px;
		}
		input, select {
			border: 1px solid #CCCCCC;
			padding: 5px;
			width: 200px;
			font-size: 14px;
		}
		input[type="submit"] {
			padding: 7px 15px;
			width: 70px; 
			margin-right: 120px;
			cursor: pointer;
		}
		textarea {
			width: 200px;
			height: 78px;
		}
		label {
			width: 120px;
			display: block;
			float: left;
			
		}
		.checkbox, .radio {
			float:none;
			width: auto;
		}
		.row::after {
			content: "";
			display: block;
			clear:both;
		}
		.row {
			margin-bottom: 5px;
			clear: both;
		}
		.options {
			float:left;
		}
	</style> 
  </head>

  <body>
    <form method="post" action="TM_7hasil.php">
      <label>Nama  : </label>
      <input type="text" name="nama" value="">
    </br>
    </br>
      <label>Alamat :</label>
      <input type="text" name="alamat" value="">
    </br>
    </br>
      <label>Jenis Kelamin:</label>
      <input type="radio" name="jk" value="laki-laki">laki-laki
      <input type="radio" name="jk" value="perempuan">perempuan
    </br>
    </br>
      <label>Golongan Darah:</label>
      <select name="goldar">
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="O">O</option>
        <option value="AB">AB</option>
      </select>
    </br>
    </br>
      <label>hobby</label></br>
      <input type="checkbox" name="hobby1" value="membaca">Membaca</br>
      <input type="checkbox" name="hobby2" value="ngoding">Menulis</br>
      <input type="checkbox" name="hobby3" value="menulis">Menyanyi</br>

    </br>
    </br>
      <label>Keterangan:</label></br>
      <textarea name="keterangan" rows="8" cols="80"></textarea>
</br>
          <button type="submit" name="button">Submit</button>
    </form>


  </body>
</html>
