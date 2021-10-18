<?php 
require 'kriptografi.php';
require 'connect.php';
 
$kalimat= str_replace(".", "Xx", $_POST['nama']);

for ($i=0;$i<strlen($kalimat);$i++)
{
    $m=ord($kalimat[$i]); //merubah karakter menjadi ASCII
    $enc= $enc.chr(encRSA($m));
}

for ($i=0;$i<strlen($kalimat);$i++)
{
    $m=ord($enc[$i]);
    $dec= $dec.chr(decRSA($m));
}

$nama       = $_POST['nama'];
$katasandi  = $_POST['katasandi'];
$salt       = $katasandi . $enc . $dec;
$sandi      = hash('md5', $salt); 

$login = mysqli_query($mysqli,"SELECT * from uts where katasandi='$sandi'");
$name = mysqli_fetch_assoc($login);
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['nama'] = $nama;
	$_SESSION['status'] = "login";
	header("location:dashboard.php");
} 
?>