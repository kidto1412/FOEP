<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
 <h4> Selamat Datang Kasir </h4>
 <h2> Aplikasi Toko Buku </h2>
 	<div class="row">
 	<div class="col-md-4">
 		<?php		
		$qjumlah = mysqli_query($koneksi,"select * from tb_kasir where akses='kasir' " );
		$jumlah =mysqli_num_rows($qjumlah);
		?>
 		<div class="panel panel-info">
 			<div class="panel-heading"> Data Pegawai </div>
 				<div class="panel-body">
 					<center>
 						<h3> <?php echo $jumlah; ?> </h3>
 					</center>
 						
 				</div>
 			</div>
 		</div>
 		<div class="col-md-4">

 		<div class="panel panel-info">
 			<div class="panel-heading">
 			 Data Penjualan</div>
 				<div class="panel-body">
 					<center>
 						<h3> 0 </h3>
 					</center>
 						
 				</div>
 			</div>
 		</div>
 		<div class="col-md-4">
 		<div class="panel panel-info">
 			<div class="panel-heading"> Data Distributor </div>
 				<div class="panel-body">
 					<center>
 						<h3> 0 </h3>
 					</center>
 						
 				</div>
 			</div>
 		</div>
 		<div class="col-md-4">
 		<div class="panel panel-info">
 			<div class="panel-heading"> Data Buku </div>
 				<div class="panel-body">
 					<center>
 						<h3> 0 </h3>
 					</center>
 						
 				</div>
 			</div>
 		</div>
 		<div class="col-md-4">
 		<div class="panel panel-info">
 			<div class="panel-heading"> Riwayat Pemasukan </div>
 				<div class="panel-body">
 					<center>
 						<h3> 0 </h3>
 					</center>
 						
 				</div>
 			</div>
 		</div>

 	</div>
</body>
</html>