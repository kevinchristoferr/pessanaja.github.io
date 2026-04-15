<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>List Order</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>Daftar Order</h2>

<table>
<tr>
<th>No</th>
<th>Nama</th>
<th>Menu</th>
<th>Total</th>
<th>Status</th>
<th>Aksi</th>
</tr>

<?php
$no=1;
$q=mysqli_query($conn,"SELECT * FROM orders");
while($o=mysqli_fetch_array($q)){
$status = mysqli_fetch_assoc(mysqli_query($conn,"SELECT status FROM pembayaran WHERE id_order='$o[id_order]'"));
?>
<tr>
<td><?= $no++; ?></td>
<td><?= $o['nama_pelanggan']; ?></td>
<td>
<?php
$d=mysqli_query($conn,"
SELECT m.nama_menu FROM order_detail od
JOIN menu m ON od.id_menu=m.id_menu
WHERE od.id_order='$o[id_order]'
");
while($x=mysqli_fetch_array($d)){
echo "• ".$x['nama_menu']."<br>";
}
?>
</td>
<td>Rp <?= number_format($o['total'],0,',','.'); ?></td>
<td><?= $status['status']; ?></td>
<td class="aksi">
<a href="qris.php?id=<?= $o['id_order']; ?>">💳</a>
<a href="order_hapus.php?id=<?= $o['id_order']; ?>">🗑️</a>
</td>
</tr>
<?php } ?>
</table>
</div>
</body>
</html>
