<html>
    <head>
        <title>Hasil tambah data</title>
</head>

<body>
    <?php
    $nrp = $_POST["nrp"];
    $nama = $_POST["nama"];
    $jurusan = $_POST["jurusan"];
    if($jurusan == "Telekomunikasi"){
        $id_jurusan = "1";
    }
    else if($jurusan == "Elka"){
        $id_jurusan = "2";
    }
    else if ($jurusan == "IT"){
        $id_jurusan = "3";
    }
    else{
        $id_jurusan = "4";
    }
    $target_dir = "gambar/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    $files = $_FILES["foto"]["tmp_name"];
    move_uploaded_file(string '$files', string '$target_file');
            

    $conn = mysqli_connect ("localhost","root","") or die ("Koneksi tidak berhasil");
    
    mysqli_select_db($conn, "kampus");

    $sqlstr =  "insert into mahasiswa (NRP, Nama, Foto, ID_Jur)
                values ('$nrp','$nama','$target_file','$id_jurusan')";
    $hasil = mysqli_query($conn, $sqlstr);
    echo "Tambah data berhasil!";

    ?>
    
