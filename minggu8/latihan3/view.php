<?
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn, "latihan2");
$hasil = mysqli_query("select * from bukutamu",$conn);
$jumlah = mysqli_num_rows($hasil);
echo "<center>Daftar Pengunjung</center>";
echo "Jumlah pengunjung : $jumlah";
$a=1;
while($baris = mysqli_fetch_array($hasil))
{
    echo "<br>";
    echo $a;
    echo "<br>";
    echo "Nama : ";
    echo $baris[0];
    echo "<br>";
    echo "Email : ";
    echo $baris[0];
    echo "<br>";
    echo "Komentar : ";
    echo $baris[0];
$a++;
}
?>