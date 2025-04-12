<?php
//Terdapat sebuah variable array yang menampung data mahasiswa seperti di bawah ini://

$mahasiswa = [
    [
        'nama' => 'Sandhika Galih',
        'nrp' => '043040023',
        'email' => 'sandhikagalih@unpas.ac.id',
        'jurusan' => 'Teknik Informatika'
    ],
    [
        'nama' => 'Doddy Ferdiansyah',
        'nrp' => '144040004',
        'email' => 'doddy@gmail.com',
        'jurusan' => 'Teknik Mesin'
    ]
];
?>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>NRP</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
    <?php foreach ($mahasiswa as $i => $mhs) : ?>
        <tr>
            <td><?= $i + 1; ?></td>
            <td><?= $mhs['nama']; ?></td>
            <td><?= $mhs['nrp']; ?></td>
            <td><?= $mhs['email']; ?></td>
            <td><?= $mhs['jurusan']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>