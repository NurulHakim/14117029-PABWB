<!DOCTYPE html>
<head>
    <title>Nurul Hakim - 14117029</title>
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
			width: 500px;
			font-size: 14px;
		}
		input[type="submit"] {
			padding: 7px 15px;
			width: 70px; 
			margin-right: 120px;
			cursor: pointer;
		}
		textarea {
			width: 500px;
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
    <h3>TAMBAH DATA</h3>
    <form action="tambahdata.php" method="post">
        <label><b>NRP          :</b></label>
        <input type="text" name="nrp"></br></br>
        <label><b>Nama         : </b></label>
        <input type="text" name="nama"></br></br>
        <label><b>Foto : </b></label>
		<input type="file"  name="foto" ></br></br>
        <label><b>Jurusan : </b></label>
        <select name="jurusan">
            <option>Telekomunikasi</option>
            <option>Elka</option>
            <option>IT</option>
            <option>Elin</option>
        </select></br></br>
        <input type="submit" value="Tambah" />
	</form>
	</br></br>
	================================================================================
	<h3>SEARCH DATA</h3>
	<form action="search.php" method="post">
		Nama : <input type="text" name="nama" ></br></br> 
		<input type="Submit" value="Cari">
	</form> </br></br>
	================================================================================
	<h3>HAPUS DATA </h3>
    <form action="delete.php" method="post">
        Nama : <input type="text" name="nama"></br></br>
        <input type="submit" value="Hapus">
    </form>
	
</body>
