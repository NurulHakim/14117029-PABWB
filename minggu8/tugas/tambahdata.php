<html>
    <head>
        <title>Hasil tambah data</title>
</head>

<body>
    <?php
    $nrp = $_POST["nrp"];
    $nama = $_POST["nama"];
    $foto = $_POST["foto"];
    $jurusan = $_POST["jurusan"];
    $conn = mysqli_connect ("localhost","root","") or die ("Koneksi tidak berhasil");

    mysqli_select_db($conn, "kampus");

    $sqlstr =  "insert into mahasiswa (NRP, Nama, Foto, ID_Jur)
                values ('$nrp','$nama','$foto','$jurusan')";
    $hasil = mysqli_query($sqlstr, $conn);
    echo "Tambah data berhasil!";

    ?>
    </body>
    </html>
