<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Buat Order</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>Buat Order</h2>

<form method="POST" action="order_simpan.php">

<label>Nama Pelanggan</label>
<input type="text" name="nama_pelanggan" required>

<label>Opsi Pemesanan</label>
<select name="id_opsi">
<?php
$q = mysqli_query($conn,"SELECT * FROM opsi_pemesanan");
while($o=mysqli_fetch_array($q)){
echo "<option value='$o[id_opsi]'>$o[nama_opsi]</option>";
}
?>
</select>

<h3>Daftar Menu</h3>

<table>
<tr>
<th>Pilih</th>
<th>Menu</th>
<th>Harga</th>
</tr>

<?php
$menu = mysqli_query($conn,"SELECT * FROM menu");
while($m=mysqli_fetch_array($menu)){
?>
<tr>
<td><input type="checkbox" name="menu[]" value="<?= $m['id_menu']; ?>"></td>
<td><?= $m['nama_menu']; ?></td>
<td>Rp <?= number_format($m['harga'],0,',','.'); ?></td>
</tr>
<?php } ?>
</table>

<br>
<button type="submit">💾 Simpan</button>
</form>
</div>

</body>
</html>
