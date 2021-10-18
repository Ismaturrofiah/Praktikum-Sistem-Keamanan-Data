<?php

require 'kriptografi.php';
require 'connect.php';

$kalimat= str_replace(".", "Xx", $_POST['nama']);

echo "Plainteks = $kalimat ";
echo "<br>";
echo "<br>";

for ($i=0;$i<strlen($kalimat);$i++)
{
    $m=ord($kalimat[$i]); //merubah karakter menjadi ASCII
    $enc= $enc.chr(encRSA($m));
}

echo "Hasil Enkripsi = $enc";
echo "<br>";
echo "<br>";

//decrypt
for ($i=0;$i<strlen($kalimat);$i++)
{
    $m=ord($enc[$i]);
    $dec= $dec.chr(decRSA($m));
}

echo "Hasil Dekripsi = $dec";

if($_POST['submit']){
	$nama	        = $_POST['nama'];
	$tempat 	    = $_POST['tempat'];
    $tanggal 	    = $_POST['tanggal'];
    $jenis_kelamin 	= $_POST['jenis_kelamin'];
    $agama       	= $_POST['agama'];
    $alamat	        = $_POST['alamat'];
    $jurusan       	= $_POST['jurusan'];
	$katasandi	    = $_POST['katasandi'];
    $salt           = $katasandi . $enc . $dec;
    $sandi          = hash('md5', $salt);
	$insert = mysqli_query($mysqli,"INSERT INTO uts VALUES('$nama', '$tempat', '$tanggal', '$jenis_kelamin', '$agama', '$alamat', '$jurusan', '$sandi')"); 
}
?>