<?php
//Array Bersarang / Nested Array
$mahasiswa = [
    ['Nasywa', '243040033', 'salmanasywa96@gmail.com', 'Teknik Informatika'],
    ['axel', '243040200', 'axel@gmail.com', 'Teknik Informatika', [85, 100, 40]]
    ['Charlize', '24304078', 'Teknik Informatika', 'Charlize@gmail.com']
];
// echo $mahasiswa[1][2];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $m) : ?>
        <ul>
            <li>Nama: <?= $m[0]; ?></li>
            <li>NIM: <?= $m[1]; ?></li>
            <li>Email: <?= $m[2]; ?></li>
            <li>Jurusan: <?= $m[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>