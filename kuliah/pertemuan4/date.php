<?php
// Date
// Untuk menampilkan format dengan tanggal tertentu
 //   echo date("l, d-M-Y");

// Time
//UNIX Timestamp / EPOCH time
//Detik yang sudah berlalu sejak 1 januari 1970
 //echo time();

 //echo date("d M Y", time()+60*60*24*100)

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
 //echo date ("l", mktime(0,0,0,9,11,2006));



//strtotime
echo date("l", strtotime("11 sep 2006"));
?>