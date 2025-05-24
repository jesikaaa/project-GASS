<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $host = "localhost";
    $port = 3308;
    $dbUsername = "root";
    $dbPass = "";
    $dbName = "PBW";

    $conn = new mysqli($host, $dbUsername, $dbPass, $dbName, $port);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $myTxtArray = $_POST['myTxt'] ?? [];
    $optionsArray = $_POST['options'] ?? [];
    $cekboxArray = $_POST['cekbox'] ?? [];

    $stmt = $conn->prepare("INSERT INTO konten_sub (textku, opsi, cek) VALUES (?, ?, ?)");

    foreach ($myTxtArray as $index => $text) {
        $opsi = $optionsArray[$index] ?? '';
        $cek = isset($cekboxArray[$index]) ? 1 : 0;

        // Validate enum
        if (!in_array($opsi, ['opsi1', 'opsi2', 'opsi3'])) {
            continue; // skip invalid entry
        }

        $stmt->bind_param("ssi", $text, $opsi, $cek);
        $stmt->execute();
    }

    $stmt->close();
    $conn->close();

    echo "Data submitted successfully.";
}
?>
