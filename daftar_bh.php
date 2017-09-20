<div class="row">
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<h1 class="page-header">Daftar Bahan</h1>
	</div>		
</div>

</div class="row">
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 ">
		<div class="container-fluid">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>                        
							<th class="text-center" width="30%">Nama</th>
							<th class="text-center">Bahan Kering (%)</th>
							<th class="text-center">Protein Kasar (%)</th>
							<th class="text-center">Kategori</th>
							<th class="text-center" width="20%">Aksi</th>
						</tr>
					</thead>
					<tbody>
<?php 
	include"config.php";
	$sql="select * from bahan";
	$q=mysql_query($sql) or die(mysql_error());
	while ($row=mysql_fetch_array($q)) { ?>
						<tr>
							<td><?php echo $row['nama_bahan'] ?></td>
							<td><?php echo $row['bk_prs'] ?></td>
							<td><?php echo $row['pk_prs'] ?></td>
							<td><?php echo $row['kategori'] ?></td>
							
							<td class="text-center">
							<a href="dasboard.php?module=bahan&act=edit_bh&idbahan=<?php echo $row['idbahan'] ?>">
							<button type="button" class="btn btn-info">Edit</button> 
							<a href="#"><button type="button" class="btn btn-danger">Hapus</button></a></td>
						</tr>
	<?php } ?>						
					</tbody>
				</table>
			<!-- end table resp -->
			</div>		
		<!-- end container -->
		</div> 
		<!-- end col -->
	</div>
<!-- end row -->
</div>