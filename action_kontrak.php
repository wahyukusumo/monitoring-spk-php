<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=kontrak.xls");
	?>
	<table border="1">
		<tr>
			<th rowspan="4" class="text-center">NO. SPK</th>
			<th rowspan="4" class="text-center">VENDOR</th>
			<th rowspan="4" class="text-center">TANGGAL AWAL</th>
			<th rowspan="4" class="text-center">TANGGAL AKHIR</th>
			<th rowspan="4" class="text-center">URAIAN</th>
			<th rowspan="4" class="text-center">NILAI</th>
			<th rowspan="4" class="text-center">BASKET</th>
			<th rowspan="4" class="text-center">PROGRESS</th>
			<th colspan="6" class="text-center">JTM</th>
			<th colspan="8" class="text-center">TRAFO</th>
			<th colspan="6" class="text-center">JTR</th>
			<th colspan="6" class="text-center">KUBIKEL TM</th>
			<th colspan="6" class="text-center">KUBIKEL GI</th>
			<th colspan="26" class="text-center">APP</th>
			<th rowspan="4" class="text-center">KETERANGAN</th>
			<th rowspan="4" class="text-center">RENCANA BAYAR</th>
			<th rowspan="4" class="text-center">STATUS BAYAR</th>
		</tr>
		<tr>
			<th colspan="2" rowspan="2" class="text-center">SUTM</th>
			<th colspan="2" rowspan="2" class="text-center">SKUTM</th>
			<th colspan="2" rowspan="2" class="text-center">SKTM</th>
			<th rowspan="3" class="text-center">100 kVA</th>
			<th rowspan="3" class="text-center">160 kVA</th>
			<th rowspan="3" class="text-center">200 kVA</th>
			<th rowspan="3" class="text-center">250 kVA</th>
			<th rowspan="3" class="text-center">315 kVA</th>
			<th rowspan="3" class="text-center">400 kVA</th>
			<th rowspan="3" class="text-center">630 kVA</th>
			<th rowspan="3" class="text-center">1000 kVA</th>
			<th rowspan="3" class="text-center">RAK TR</th>
			<th rowspan="3" class="text-center">SKTR</th>
			<th colspan="2" rowspan="2" class="text-center">SUTR</th>
			<th colspan="2" rowspan="2" class="text-center">SR</th>
			<th colspan="3" rowspan="2" class="text-center">AIR INSULATED</th>
			<th colspan="3" rowspan="2" class="text-center">FULLY INSULATED</th>
			<th rowspan="3" class="text-center">INCOMING</th>
			<th rowspan="3" class="text-center">KOPEL</th>
			<th rowspan="3" class="text-center">OUTGOING</th>
			<th rowspan="3" class="text-center">RISER</th>
			<th rowspan="3" class="text-center">CELL VT</th>
			<th rowspan="3" class="text-center">PS</th>
			<th colspan="5" rowspan="2" class="text-center">KWH</th>
			<th colspan="20" class="text-center">PEMBATAS</th>
		</tr>
		<tr>
			<th colspan="8" class="text-center">1 PHASE</th>
			<th colspan="6" class="text-center">3 PHASE</th>
			<th colspan="7" class="text-center">MCCB</th>
		</tr>
		<tr>
			<th>AAC/S 150 mm2</th>
			<th>AAC/S 240 mm2</th>
			<th>MVTIC 150 mm2</th>
			<th>MVTIC 240 mm2</th>
			<th>XLPE 240 mm2</th>
			<th>XLPE 240 mm2</th>
			<th>TIC 3x70 + 50 mm2</th>
			<th>TIC 3x95 + 50 mm2</th>
			<th>TIC 2x10 mm2</th>
			<th>TIC 2x16 mm2</th>
			<th>LBS</th>
			<th>PB</th>
			<th>CBOM</th>
			<th>LBS</th>
			<th>PB</th>
			<th>CBOM</th>
			<th>KWH 1 Phase Prabayar</th>
			<th>KWH 1 Phase Reguler</th>
			<th>KWH Elektrik 3 Phase Kecil</th>
			<th>KWH AMR 3 Phase Besar</th>
			<th>KWH AMR 3 Phase TM</th>
			<th>2A</th>
			<th>4A</th>
			<th>6A</th>
			<th>10A</th>
			<th>16A</th>
			<th>25A</th>
			<th>35A</th>
			<th>50A</th>
			<th>10A</th>
			<th>16A</th>
			<th>20A</th>
			<th>25A</th>
			<th>35A</th>
			<th>50A</th>
			<th>63A</th>
			<th>80A</th>
			<th>100A</th>
			<th>150A</th>
			<th>200A</th>
			<th>250A</th>
			<th>300A</th>
		</tr>
		<?php include 'config.php';
		$sql = isset($_POST['export'])?$_POST['export']:'';
			$sql_tabel = mysqli_query($conn, $sql) or die (mysqli_error($conn));
			if (mysqli_num_rows($sql_tabel) > 0) {
			while ($row = mysqli_fetch_array($sql_tabel)) { ?>
		<tbody>
			<tr>
				<td><?php echo $row['no_spk'] ?></td>
				<td><?php echo $row['vendor_spk'] ?></td>
				<td><?php echo $row['awal_spk'] ?></td>
				<td><?php echo $row['akhir_spk'] ?></td>
				<td><?php echo $row['uraian_spk'] ?></td>
				<td>Rp.<?php echo number_format($row['nilai_spk']) ?></td>
				<td><?php echo $row['basket'] ?></td>
				<td><?php echo $row['progress'] ?>%</td>
				<td><?php echo $row['a3c150'] ?></td>
				<td><?php echo $row['a3c240'] ?></td>
				<td><?php echo $row['mvtic150'] ?></td>
				<td><?php echo $row['mvtic240'] ?></td>
				<td><?php echo $row['xlpe240'] ?></td>
				<td><?php echo $row['xlpe300'] ?></td>
				<td><?php echo $row['trafo100kva'] ?></td>
				<td><?php echo $row['trafo160kva'] ?></td>
				<td><?php echo $row['trafo200kva'] ?></td>
				<td><?php echo $row['trafo250kva'] ?></td>
				<td><?php echo $row['trafo315kva'] ?></td>
				<td><?php echo $row['trafo400kva'] ?></td>
				<td><?php echo $row['trafo630kva'] ?></td>
				<td><?php echo $row['trafo1000kva'] ?></td>
				<td><?php echo $row['raktr'] ?></td>
				<td><?php echo $row['sktr'] ?></td>
				<td><?php echo $row['tic370'] ?></td>
				<td><?php echo $row['tic395'] ?></td>
				<td><?php echo $row['tic210'] ?></td>
				<td><?php echo $row['tic216'] ?></td>
				<td><?php echo $row['ai_lbs'] ?></td>
				<td><?php echo $row['ai_pb'] ?></td>
				<td><?php echo $row['ai_cbom'] ?></td>
				<td><?php echo $row['fi_lbs'] ?></td>
				<td><?php echo $row['fi_pb'] ?></td>
				<td><?php echo $row['fi_cbom'] ?></td>
				<td><?php echo $row['incoming'] ?></td>
				<td><?php echo $row['kopel'] ?></td>
				<td><?php echo $row['outgoing'] ?></td>
				<td><?php echo $row['riser'] ?></td>
				<td><?php echo $row['cellvt'] ?></td>
				<td><?php echo $row['ps'] ?></td>
				<td><?php echo $row['kwh1pp'] ?></td>
				<td><?php echo $row['kwh1pr'] ?></td>
				<td><?php echo $row['kwhe3pk'] ?></td>
				<td><?php echo $row['kwha3pb'] ?></td>
				<td><?php echo $row['kwha3pt'] ?></td>
				<td><?php echo $row['p12a'] ?></td>
				<td><?php echo $row['p14a'] ?></td>
				<td><?php echo $row['p16a'] ?></td>
				<td><?php echo $row['p110a'] ?></td>
				<td><?php echo $row['p116a'] ?></td>
				<td><?php echo $row['p125a'] ?></td>
				<td><?php echo $row['p135a'] ?></td>
				<td><?php echo $row['p150a'] ?></td>
				<td><?php echo $row['p310a'] ?></td>
				<td><?php echo $row['p316a'] ?></td>
				<td><?php echo $row['p320a'] ?></td>
				<td><?php echo $row['p325a'] ?></td>
				<td><?php echo $row['p335a'] ?></td>
				<td><?php echo $row['p350a'] ?></td>
				<td><?php echo $row['mccb63'] ?></td>
				<td><?php echo $row['mccb80'] ?></td>
				<td><?php echo $row['mccb100'] ?></td>
				<td><?php echo $row['mccb150'] ?></td>
				<td><?php echo $row['mccb200'] ?></td>
				<td><?php echo $row['mccb250'] ?></td>
				<td><?php echo $row['mccb300'] ?></td>
				<td><?php echo $row['lain'] ?></td>
				<td><?php echo $row['ren_bayar'] ?></td>
				<td><?php echo $row['status_bayar'] ?></td>
			</tr>
			<?php
				}
			}
			?>
		</tbody>
	</table>
</body>
</html>