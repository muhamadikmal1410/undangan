<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $jumlah = (int) $_POST['jumlah'];

    // Simpan ke file atau database
    $data = "$nama - $jumlah orang\n";
    file_put_contents("data_rsvp.txt", $data, FILE_APPEND);

    echo "<h2>Terima kasih atas konfirmasinya, $nama!</h2>";
    echo "<a href='index.php'>Kembali</a>";
} else {
    header("Location: index.php");
    exit();
}