<?php
// Membuat array dengan nama perangkat keras komputer
$hardware = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];

// Menampilkan isi array sebagai list menggunakan looping
echo "<h4>Macam-macam perangkat keras komputer </h4>";
echo "<ul>";
foreach ($hardware as $item) {
    echo "<li>$item</li>";
}
echo "</ul>";

// Menambahkan 2 elemen baru ke dalam array
array_push($hardware, "Card Reader", "Modem");
sort($hardware);
// Menampilkan kembali array setelah ditambahkan elemen baru
echo "<h4>Macam-macam perangkat keras komputer baru </h4>";
echo "<ul>";
foreach ($hardware as $item) {
    echo "<li>$item</li>";
}
echo "</ul>";
?>