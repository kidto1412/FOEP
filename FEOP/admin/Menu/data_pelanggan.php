<DOCTYPE html>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		

		<div class="row">
		<div class="col-xs-12 col-md-8">

		<!--	<h3> data pegawai </h3>-->
	<h3>Data Pelanggan</h3>
	<!--<div class="panel panel-primary">
			<div class="panel-heading">
				<h3> data pegawai </h3>
			</div>
			</div>
		-->
		<?php		
		$qjumlah = mysqli_query($koneksi,"select * from Pelanggan " );
		$jumlah =mysqli_num_rows($qjumlah);
		?>
		<a class="btn btn-sm btn-success" href="?menu=tambah_pelanggan"> Tambah Data</a>
					<button class="btn btn-sm btn-default">Jumlah Data <span class="badge"><?php echo $jumlah; ?></span></button>
		</div>

		<div class="col-xs-6 col-md-4">
			<form method="post">
			<div class="input-group">	
				<input name="inputan" type="text" class="form-control" placeholder="Cari Pegawai..">
				 <span class="input-group-btn">
					<input name="cari" class="btn btn-default" value="Cari" type="submit">
					</span>
				</div>
			</form>
		</div>
</div>
</br>
<div class="panel panel-primary">
                        <div class="panel-heading">
                           Data Pelanggan
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
	<table class=" table table-striped table-bordered table-hover">

		<thead>
				<tr>
					<th> No</th>
					<th> No Meter</th>
					<th> Nama </th>
					<th> Alamat </th>
					<th> Kode Tarif </th>
					<th> Opsi </th>
				</tr>

				</thead>
				<tbody>	
		<?php
		$no = 1;
		$inputan = $_POST['inputan'];
		if ($_POST['cari']){
			if($inputan==""){
				$query = mysqli_query($koneksi,"select * from pelanggan'");
			}
			else if ($inputan!="") {
				$query = mysqli_query($koneksi,"select * from pelanggan where Nama like '%$inputan%' ");
			}
		}
		else{
		$query = mysqli_query($koneksi,"select * from pelanggan");
		}
		$cek = mysqli_num_rows($query);

		if($cek <1 ){
			?>
			<tr>
				<td colspan="7">
					data yang anda cari tidak tersedia
					<a href="" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-refresh"></span></a>
				 </td>
			</tr>
			<?php
		}
		else{



		while ($data = mysqli_fetch_array($query)) {
	
		?>
		<tr>
			<td> <?php echo $no++; ?> </td>
			<td> <?php echo $data['Nometer'] ; ?> </td>
			<td> <?php echo $data['Nama'] ; ?> </td>
			<td> <?php echo $data['Alamat'] ; ?> </td>
			<td> <?php echo $data['Kodetarif'] ; ?> </td>
			<td>
			<a onclick="return confirm('anda yakin ingin menghapusnya?')" href="?menu=hapus_pelanggan&id_pelanggan=<?php echo $data['IDPelanggan']; ?>" title="Hapus"> <span class="glyphicon glyphicon-trash" aria-hidden="true"> </span> </a>
			<a title="Edit" href="?menu=edit_pelanggan&id_pelanggan=<?php echo $data['IDPelanggan']; ?>"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"> </span> </a>

		</td>
		</tr>
		
		<?php
		}}
		?>
		</tbody>
		</table>
	</body>		
	</html>
	