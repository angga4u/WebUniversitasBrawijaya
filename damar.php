<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Total Belanja</title>
</head>
<body>
    <h1>Hitung Total Belanja</h1>
    <form method="post">
        <label>Nama Pembeli:</label>
        <input type="text" name="nama_pembeli" required><br><br>

        <label>Barang 1:</label>
        <input type="number" name="barang1" required><br><br>

        <label>Barang 2:</label>
        <input type="number" name="barang2" required><br><br>

        <label>Barang 3:</label>
        <input type="number" name="barang3" required><br><br>

        <label>Barang 4:</label>
        <input type="number" name="barang4" required><br><br>

        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Mengambil data dari form
        $nama_pembeli = $_POST['nama_pembeli'];
        $barang1 = $_POST['barang1'];
        $barang2 = $_POST['barang2'];
        $barang3 = $_POST['barang3'];
        $barang4 = $_POST['barang4'];

        // Menghitung total belanja
        $total_belanja = $barang1 + $barang2 + $barang3 + $barang4;

        // Menghitung diskon
        $diskon = 0.05; // 5%
        $total_diskon = $total_belanja * $diskon;

        // Menghitung total bayar setelah diskon
        $total_bayar = $total_belanja - $total_diskon;

        // Menampilkan hasil
        echo "<h2>--- Rincian Belanja ---</h2>";
        echo "Nama Pembeli: $nama_pembeli<br>";
        echo "Barang 1: Rp. " . number_format($barang1, 0, ',', '.') . "<br>";
        echo "Barang 2: Rp. " . number_format($barang2, 0, ',', '.') . "<br>";
        echo "Barang 3: Rp. " . number_format($barang3, 0, ',', '.') . "<br>";
        echo "Barang 4: Rp. " . number_format($barang4, 0, ',', '.') . "<br>";
        echo "Total belanja: Rp. " . number_format($total_belanja, 0, ',', '.') . "<br>";
        echo "Diskon = " . ($diskon * 100) . "%<br>";
        echo "Total Bayar = Rp. " . number_format($total_bayar, 0, ',', '.') . "<br>";
    }
    ?>
</body>
</html>