<?php

include 'koneksi.php';

$id                              = $_GET['idBuku'];
$kodeBuku                        = $_GET['kodeBuku'];
$namaPeminjam                    = $_GET['namaPeminjam'];
$judulBuku                       = $_GET['judulBuku'];
$tahunTerbit                     = $_GET['tahunTerbit'];
$gender                          = $_GET['gender'];
$tanggalPeminjaman               = $_GET['tanggalPeminjaman'];
$tanggalPengembalian             = $_GET['tanggalPengembalian'];

mysqli_query($koneksi, "UPDATE detail_peminjaman SET kodeBuku = '$kodeBuku', namaPeminjam = '$namaPeminjam', judulBuku = '$judulBuku', tahunTerbit = '$tahunTerbit', gender = '$gender', tanggalPeminjaman = '$tanggalPeminjaman', tanggalPengembalian = '$tanggalPengembalian' WHERE idBuku = '$id'");

header("location: detail-peminjaman.php");
