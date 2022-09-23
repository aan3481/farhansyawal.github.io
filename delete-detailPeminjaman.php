<?php

include 'koneksi.php';

$idBuku = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM detail_peminjaman WHERE idBuku= '$idBuku'");

header("location: detail-peminjaman.php");
