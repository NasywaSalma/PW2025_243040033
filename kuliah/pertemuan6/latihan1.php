<?php
// array
// membuat array
$hari = array ("senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$myArray = ["Nasywa", 18, true];

// menampilkan array
// versi debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

// gunakan echo jika ingin mencetak 1 elemen (menggunakan index)
echo $hari[2];
echo "<br>";
echo $myArray[0];
echo  "<hr>";

// Menambah isi array
// Gunakan []
$hari[] = "kamis";
$hari[] = "Jum'at";
$bulan[] = "April";
print_r($hari);
echo "<br>";
print_r($bulan)
?>