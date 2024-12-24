<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Menampilkan data dari database </h2>
    <a href="../pemesanan.php" class="btn btn-primary mb-3">Kembali</a>
    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
            <th>ID Pemesanan</th>
                <th>Nama Pemesan</th>
                <th>HP Pemesan</th>
                <th>Waktu Wisata</th>
                <th>Hari Wisata</th>
                <th>Paket Inap</th>
                <th>Paket Transport</th>
                <th>Paket Makan</th>
                <th>Jumlah Peserta</th>
                <th>Total Tagihan</th>
                <th>Dibuat Pada</th>
            </tr>
        </thead>
        <tbody>
        <?php
        include "koneksi.php";
    $sql = "SELECT * FROM pemesanan ORDER BY id_pemesanan ASC";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        $no = 1;
      while ($row = $result->fetch_assoc()) {
            echo "<tr>";
                echo "<td>" . $no. "</td>";
                echo "<td>" . $row['nama_pemesanan'] . "</td>";
                echo "<td>" . $row['hp_pemesan'] . "</td>";
                echo "<td>" . $row['waktu_wisata'] . "</td>";
                echo "<td>" . $row['hari_wisata'] . "</td>";
                echo "<td>" . $row['paket_inap'] . "</td>";
                echo "<td>" . $row['paket_transport'] . "</td>";
                echo "<td>" . $row['paket_makan'] . "</td>";
                echo "<td>" . $row['jumlah_peserta'] . "</td>";
                echo "<td>" . $row['total_tagihan'] . "</td>";
                echo "<td>" . $row['created_at'] . "</td>";
            echo "</tr>";
            $no++;
        }
    } else {
      echo "";
    }
    ?>
            <!-- Tambahkan baris lainnya sesuai kebutuhan -->
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>