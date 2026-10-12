<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_menu_kafe";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

if (isset($_POST['simpan'])) {
    $nama_menu         = mysqli_real_escape_string($conn, $_POST['item_name']);
    $kategori          = mysqli_real_escape_string($conn, $_POST['category']);
    $deskripsi         = mysqli_real_escape_string($conn, $_POST['description']);
    $harga             = mysqli_real_escape_string($conn, $_POST['price']);
    $is_halal          = isset($_POST['is_halal']) ? 1 : 0;
    $contains_allergen = isset($_POST['contains_allergen']) ? 1 : 0;

    $query = "INSERT INTO menu (nama_menu, kategori, deskripsi, harga, is_halal, contains_allergen) 
              VALUES ('$nama_menu', '$kategori', '$deskripsi', '$harga', '$is_halal', '$contains_allergen')";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Menu berhasil ditambahkan!'); window.location='admin.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan data!'); window.location='index.php';</script>";
    }
}


if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $query = "DELETE FROM menu WHERE id = $id";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Menu berhasil dihapus!'); window.location='admin.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data!'); window.location='admin.php';</script>";
    }
}
?>