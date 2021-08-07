<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/style3.css">
</head>

<body>
	<header class="container-fluid">
		<div class="row">
			<div class="col-12 text-left py-1">
				<p><a class="btn" href="/user/aksesoris"><img src="/img/back.png"></a> Bukti Pembayaran</p>
			</div>
		</div>
	</header>
	<div class="row">
		<div class="col-12">
			<div class="content">
				<table class="abu2">
					<tbody>
						<?php
						$Harga = $aksesoris['Harga'];
						$Harga_Format = number_format($Harga, 2, ",", ".");
						?>
						<td class="gambar"><img style="width: 200px"> id="produk" src="/img/admin/<?= $aksesoris['Gambar']; ?>"></td>
						<td class="nama2">
							<p1><b><?= $aksesoris['Nama_Aksesoris']; ?></b></p1><br>
							<p2><?= $Harga_Format; ?></p2><br>
							<p3>Metode Pembayaran : DANA (0856123456)</p3>
						</td>
						<form action="/user/kirimbuktiakse/<?= $aksesoris['Id_Aksesoris']; ?>" method="post" enctype="multipart/form-data">
							<td><input type="file" name="gambar" id="gambar"></td>
							<td class="aksi2">

								<!-- <a href=""><button class="btn btn-default">Pilih File</button></a> -->
								<button class="btn btn-primary">Kirim Bukti Pembayaran</button>

							</td>
						</form>
					</tbody>
				</table>
			</div>
</body>

</html>