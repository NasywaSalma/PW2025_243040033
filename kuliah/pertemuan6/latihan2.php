<?php

// Mencetak array menggunakan loop
$binatang = ['😺', '🐰', '🐮', '🐵', '🐨', '🐤', '🐍'];
$makanan = ['🍨', '🍜', '🌭', '🍔', '🍫'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencetak Array</title>
</head>
<body>
    <h2>Daftar Binatang</h2>
    <ul>
        <?php for($i = 0; $i < count($binatang);  $i++) {?>

        <li><?php echo $binatang[$i] ?></li>

        <?php }?>
    </ul>

    <h2>Daftar Makanan</h2>
    <ul>
        <?php for($i = 0; $i < count($makanan);  $i++) {?>

        <li><?php echo $makanan[$i] ?></li>

        <?php }?>
    </ul>

    <h2>Daftar Binatang Baru</h2>
    <ul>
        <?php foreach($binatang as $b) : // yamg $b itu huruf pertama dari binatang?> 
        <li><?= $b; ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>