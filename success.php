<?php
include "koneksi.php";
$id=$_GET['id'];
mysqli_query($conn,"UPDATE pembayaran SET status='selesai' WHERE id_order='$id'");
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css"></head>
<body>
<div class="container center">
<h2>Terima kasih</h2>
<p>Pembayaran berhasil</p>
<a href="order_list.php" class="btn">Kembali</a>
</div>
</body>
</html>
