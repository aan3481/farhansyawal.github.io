<?php
include 'koneksi.php';

$kodeBuku                        = $_POST['kodeBuku'];
$namaPeminjam                   = $_POST['namaPeminjam'];
$judulBuku                      = $_POST['judulBuku'];
$tahunTerbit                    = $_POST['tahunTerbit'];
$gender                         = $_POST['gender'];
$tanggalPeminjaman              = $_POST['tanggalPeminjaman'];
$tanggalPengembalian            = $_POST['tanggalPengembalian'];

mysqli_query($koneksi, "INSERT INTO detail_peminjaman VALUES(NULL, '$kodeBuku', '$namaPeminjam', '$judulBuku', '$tahunTerbit', '$gender', '$tanggalPeminjaman', '$tanggalPengembalian')");

header("location: detail-peminjaman.php");
