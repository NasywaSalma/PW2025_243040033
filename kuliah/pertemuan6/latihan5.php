<?php
$mahasiswa = [
    [
        "Nama" => "Nasywa Nur Afiffah Salma",
        "NRP" => "243040033",
        "Email" => "salmanasywa96@gamil.com",
        "Jurusan" => "Teknik Informatika"
    ],

    [
        "Nama" => "Axelle Vittoria Beatrix",
        "NRP" => "24300033",
        "Email" => "Axelelle@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "tugas" => [90, 80, 100]
    ]
];

echo $mahasiswa[1]["tugas"][1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["Nama"]; ?></li>
            <li>NRP : <?= $mhs["NRP"]; ?></li>
            <li>Jurusan : <?= $mhs["Jurusan"]; ?></li>
            <li>Email : <?= $mhs["Email"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>
</html>