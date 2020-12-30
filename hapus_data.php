<?php
session_start();
include 'koneksi2.php';
include 'csrf.php';

$id = $_POST['id'];
$query = "DELETE FROM tabel_mahasiswa WHERE id=?";
$dewan1 = $db1->prepare($query);
$dewan1 ->bind_param("i", $id);
$dewan1 ->execute();

echo json_encode(['success' => 'Sukses']);
$db1 -> close();
?>