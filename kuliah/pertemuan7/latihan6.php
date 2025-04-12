<!DOCTYPE html>
 <html lang="en">
 
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Detail Mahasiswa POST</title>
 </head>
 
 <body>
   <h2>Detail Mahasiswa</h2>
   <ul>
     <li>Nama: <?= ($_POST['Nama'] ?? 'Unknown'); ?></li>
     <li>NIM: <?= ($_POST['NRP'] ?? 'Unknown'); ?></li>
     <li>Email: <?= ($_POST['Email'] ?? 'Unknown'); ?></li>
     <li>Jurusan: <?= ($_POST['Jurusan'] ?? 'Unknown'); ?></li>
   </ul>
 </body>
 
 </html>