<?php
include 'proses.php'; 

$query = "SELECT * FROM menu ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Kelola Menu Kafe</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 30px;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: #ffffff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        .btn-tambah {
            display: inline-block;
            background-color: #27ae60;
            color: white;
            padding: 10px 18px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .btn-tambah:hover {
            background-color: #219150;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }
        th {
            background-color: #2c3e50;
            color: white;
            font-weight: 600;
        }
        tr:hover {
            background-color: #f9f9f9;
        }
        .btn-hapus {
            background-color: #e74c3c;
            color: white;
            padding: 6px 12px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 14px;
        }
        .btn-hapus:hover {
            background-color: #c0392b;
        }
        .badge {
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: bold;
        }
        .badge-halal { background-color: #e8f8f5; color: #27ae60; }
        .badge-nonhalal { background-color: #fdeaea; color: #e74c3c; }
    </style>
</head>
<body>

<div class="container">
    <h1>Dashboard Admin Kafe</h1>
    <a href="index.php" class="btn-tambah">+ Tambah Menu Baru</a>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Menu</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { 
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><strong><?= htmlspecialchars($row['nama_menu']); ?></strong></td>
                    <td><?= htmlspecialchars($row['kategori']); ?></td>
                    <td><?= htmlspecialchars($row['deskripsi']); ?></td>
                    <td>Rp <?= number_format($row['harga'], 0, ',', '.'); ?></td>
                    <td>
                        <?php if (isset($row['is_halal']) && $row['is_halal'] == 1): ?>
                            <span class="badge badge-halal">Halal</span>
                        <?php else: ?>
                            <span class="badge badge-nonhalal">Non-Halal</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="proses.php?hapus=<?= $row['id']; ?>" 
                           class="btn-hapus" 
                           onclick="return confirm('Apakah Anda yakin ingin menghapus menu ini?')">Hapus</a>
                    </td>
                </tr>
            <?php 
                }
            } else {
                echo "<tr><td colspan='7' style='text-align:center;'>Belum ada data menu.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>