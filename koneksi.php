<?php
$koneksi = mysqli_connect("localhost", "root", "bebas","user_level");

if (mysqli_connect_errno())
{
    echo "koneksi gagal";
} else 
{
    echo "koneksi berhasil";
}
?>