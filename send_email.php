<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $nokontak = htmlspecialchars($_POST['nokontak']);
    $pesan = htmlspecialchars($_POST['pesan']);
    
    // Email tujuan
    $to = "k1215na77@gmail.com"; // Ganti dengan email Anda
    $subject = "Pesan Baru dari Formulir Kontak";
    
    // Isi email
    $message = "
    <html>
    <head>
        <title>Pesan Baru</title>
    </head>
    <body>
        <p><strong>Nama:</strong> $nama</p>
        <p><strong>No. Kontak:</strong> $nokontak</p>
        <p><strong>Pesan:</strong><br>$pesan</p>
    </body>
    </html>
    ";
    
    // Header email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: <$nokontak>" . "\r\n";

    // Kirim email
    if (mail($to, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
