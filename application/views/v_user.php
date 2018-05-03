<!DOCTYPE html>
<html>
<head>
	<title>Rosa</title>
</head>
<body>
	<h1>Tabel barang pada database patriapuspa</h1>
	<table border="1">
		<tr>
			<th>ID Barang</th>
			<th>Nama Barang</th>
			<th>Stock</th>
		</tr>
		<?php foreach($barang as $u){ ?>
		<tr>
			<td><?php echo $u->IDBarang ?></td>
			<td><?php echo $u->NamaBarang ?></td>
			<td><?php echo $u->Stock ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
