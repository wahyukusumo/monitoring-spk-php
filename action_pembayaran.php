<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=pembayaran.xls");
	?>
	<table border="1">
		<thead>
			<tr>
				<th>No. SPK</th>
				<th>Pembayaran</th>
				<th>Nilai</th>
				<th>Keterangan</th>
				<th>Tanggal</th>
			</tr>
		</thead>
		<?php include 'config.php';
			$sql = isset($_POST['export'])?$_POST['export']:'';
				$sql_tabel = mysqli_query($conn, $sql) or die (mysqli_error($conn));
				if (mysqli_num_rows($sql_tabel) > 0) {
				while ($row = mysqli_fetch_array($sql_tabel)) { ?>
		<tbody>
			<tr>
				<td><?php echo $row['no_spk']; ?></td>
				<td><?php echo $row['pembayaran']; ?></td>
				<td>Rp.<?php echo number_format($row['nilai_bayar']); ?></td>
				<td><?php echo $row['keterangan']; ?></td>
				<td><?php echo $row['tgl_bayar']; ?></td>
			</tr>
			<?php
				}
				}
			?>
		</tbody>
	</table>
</body>
</html>