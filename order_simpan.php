<?php
include "koneksi.php";

$nama = $_POST['nama_pelanggan'];
$menu = $_POST['menu'];

$total = 0;

foreach($menu as $id){
$m = mysqli_fetch_assoc(mysqli_query($conn,"SELECT harga FROM menu WHERE id_menu='$id'"));
$total += $m['harga'];
}

mysqli_query($conn,"INSERT INTO orders(nama_pelanggan,total) VALUES('$nama','$total')");
$id_order = mysqli_insert_id($conn);

foreach($menu as $id){
mysqli_query($conn,"INSERT INTO order_detail(id_order,id_menu) VALUES('$id_order','$id')");
}

mysqli_query($conn,"INSERT INTO pembayaran(id_order,status) VALUES('$id_order','proses')");

header("Location: order_list.php");
