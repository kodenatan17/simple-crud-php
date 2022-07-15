<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$qty = $_POST['qty'];
 
// update data ke database
mysqli_query($conn,"update produk set nama='$nama', harga='$harga', qty='$qty' where id_produk='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
