<?php
$email = $_POST['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email tidak valid.<br>";
    echo '<a href="form_challenge8.html">Kembali</a>';
    exit();
}

$jumlah = $_POST['jumlah'];
if ($jumlah <= 0) {
    echo "Jumlah produk harus lebih dari 0.<br>";
    echo '<a href="form_challenge8.html">Kembali</a>';
    exit();
}

$data = "Nama: ".$_POST['nama']."\n";
$data .= "Email: ".$_POST['email']."\n";
$data .= "Alamat Pengiriman: ".$_POST['alamat']."\n";
$data .= "Produk yang dipesan: ".$_POST['produk']."\n";
$data .= "Jumlah Produk: ".$_POST['jumlah']."\n\n";

$file = fopen("pesanan.txt", "a");
fwrite($file, $data);
fclose($file);

echo "Pesan sukses! Pesanan berhasil disimpan.";
?>