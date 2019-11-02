<html>
    <head>
        <title>Latihan No 2</title>
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
			width: 100px;
			font-size: 14px;
		}
		input[type="submit"] {
			padding: 7px 15px;
			width: 70px; 
			margin-right: 120px;
			cursor: pointer;
		}
		
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
    <head>

    <body>
        <?php
            function nentuinharga($nama, $warna){
                $panjang = strlen($nama);
                $harga = 0;

                if ($panjang>=1 && $panjang<=10){
                    $harga = 300; 
                } else if ($panjang>=11 && $panjang<=20){
                    $harga = 500;
                } else if ($panjang >20){
                    $harga = 700;
                }

                $hargatotal = $harga * $panjang;

                echo "Nama : $nama <br>";
                echo "Warna : $warna </br>";
                echo "Harga total : $hargatotal";
            } 
           
        ?>

        <form action="latihan2.php" method="get">
            <label>Nama : </label>
            <input type="text" name="nama" value=""><br>
            <label>Warna : </label>
            <input type="text" name="warna" value=""><br>
            
            <button type="submit">Submit</button>
        </form>

        <?php
            if(isset($_GET['nama']) && isset($_GET['warna'])){
                if($_GET['warna'] == ""){
                nentuinharga($_GET['nama']);
                }else{
                nentuinharga($_GET['nama'], $_GET['warna']);
                }
            }
        ?>

        </body>
        </html>