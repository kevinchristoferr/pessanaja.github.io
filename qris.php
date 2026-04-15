<?php $id=$_GET['id']; ?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css"></head>
<body>
<div class="container center">
<h2>Scan QRIS</h2>
<img src="assets/qris.png" width="250">
<br><br>
<a href="loading.php?id=<?= $id; ?>" class="btn">Saya Sudah Bayar</a>
</div>
</body>
</html>
