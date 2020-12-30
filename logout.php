<?php
// mengaktifkan session php
session_start();

// menghapus semua session
session_destroy();

// mengalihkan ke halaman login
header ("location: index.php");
?>