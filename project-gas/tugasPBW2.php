<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pribadi</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to external CSS -->
</head>
<body>
    <div class="dataku">
        <?php
        session_start();

        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $kelamin = $_POST['gender'];
            $telp = $_POST['phone'];
            $alamat = $_POST['alamat'];
            $pinjem = $_POST['date'];
            $balik = $_POST['date2'];
            $atribut = $_POST['atr'];
            $jenis = $_POST['motor'];
            ?>

            <h2>Halo, <?= htmlspecialchars($nama) ?>!</h2>
            <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
            <p><strong>Jenis Kelamin:</strong> <?= htmlspecialchars($kelamin) ?></p>
            <p><strong>Telepon:</strong> <?= htmlspecialchars($telp) ?></p>
            <p><strong>Alamat:</strong> <?= htmlspecialchars($alamat) ?></p>
            <p><strong>Jenis Motor:</strong> <?= htmlspecialchars($jenis) ?></p>
            <p><strong>Tanggal Peminjaman:</strong> <?= htmlspecialchars($pinjem) ?></p>
            <p><strong>Tanggal Pengembalian:</strong> <?= htmlspecialchars($balik) ?></p>
            <p><strong>Atribut Pilihan:</strong> <?= htmlspecialchars($atribut) ?></p>

        <?php } ?>
    </div>
</body>
</html>
