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
     <li>Nama: <?= ($_POST['No. KTP'] ?? '2011111120808860001'); ?></li>
     <li>NIM: <?= ($_POST['Nama'] ?? 'Candra'); ?></li>
     <li>Email: <?= ($_POST['Alamat'] ?? 'Jln. Cisanggarung No. 2 Bandung'); ?></li>
   </ul>
 </body>
 
 </html>