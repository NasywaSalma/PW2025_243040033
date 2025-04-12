<!DOCTYPE html>
 <html lang="en">
 
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>POST</title>
 </head>
 
 <body>
   <h2>Form Isi Data Mahasiswa</h2>
   <form action="latihan6.php" method="post">
     <label for="Nama">
       Nama: <br>
       <input type="text" name="Nama">
     </label>
     <br>
     <label for="NRP">
       NIM: <br>
       <input type="text" name="NRP">
     </label>
     <br>
     <label for="Email">
       Email: <br>
       <input type="text" name="Email">
     </label>
     <br>
     <label for="Jurusan">
       Jurusan: <br>
       <input type="text" name="Jurusan">
     </label>
     <br>
     <button type="submit">Kirim!</button>
   </form>
 </body>
 
 </html>