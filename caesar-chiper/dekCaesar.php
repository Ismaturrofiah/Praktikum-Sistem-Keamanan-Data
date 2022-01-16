<?php

$key = $_GET["key"];
$nmfile = "enkripsi.txt";
$fp = fopen($nmfile, "r"); //buka file hasil enkripsi
$isi = fread($fp, filesize($nmfile));

for($i = 0; $i < strlen($isi); $i++)
{
    $kode[$i] = ord($isi[$i]); //rubah ASII ke desimal
    $b[$i] = ($kode[$i] - $key)%256; //proses deskripsi Caesar
    $c[$i] = chr($b[$i]); //rubah desimal ke ASCII
}

echo "kalimat chipertext : ";
for ($i = 0; $i < strlen($isi); $i++)
{
    echo $isi[$i];
}

echo "<br>";
echo "hasil deskripsi = ";
for ($i = 0; $i < strlen($isi); $i++)
{
    echo $c[$i];
}
echo "<br>";