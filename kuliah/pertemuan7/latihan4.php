<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h2>Detail Mahasiswa</h2>
   <ul>
     <li>Nama: <?= ($_GET['Nama'] ?? 'Unknown'); ?></li>
     <li>NIM: <?= ($_GET['NRP'] ?? 'Unknown'); ?></li>
     <li>Email: <?= ($_GET['Email'] ?? 'Unknown'); ?></li>
     <li>Jurusan: <?= ($_GET['Jurusan'] ?? 'Unknown'); ?></li>
   </ul>
 </body>
</html>