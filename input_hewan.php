<div class="row">
	<div class="col-md-8 col-md-offset-2 main">
		<h1 class="page-header">Input Hewan dan Tujuan Pemeliharaan</h1>
	</div>
</div>
<div class="row">
	  <form method="post" role="form" action="simpan.php?act=hewan">
	  <fieldset>
		<div class="col-sm-3 col-sm-offset-3 col-md-4 col-md-offset-2 main">
			<div class="form-group">
				<label>Jenis Hewan :</label>
				<input type="text" class="form-control" name="nama_hewan" autofocus>
			</div>
			<div class="form-group">
				<label>Tujuan Pemeliharaan :</label>
				<input type="text" class="form-control" name="tujuan">
			</div>
			<div class="form-group">
				<label>Kebutuhan Hijauan (%) :</label>
				<input type="text" class="form-control" name="hijauan">
			</div>
			<div class="form-group">
				<label>Kebutuhan Konsentrat (%):</label>
				<input type="text" class="form-control" name="konsentrat">
			</div>
		</div>
		<div class="col-sm-3 col-md-4">	
			<div class="form-group">
				<label>Kebutuhan BK (%):</label>
				<input type="text" class="form-control" name="keb_bk">
			</div>
			<div class="form-group">
				<label>Kebutuhan PK (%):</label>
				<input type="text" class="form-control" name="keb_pk">
			</div>
			<div class="form-group">
				<label>Harga Jual Produk (Rp):</label>
				<input type="text" class="form-control" name="harga_produk">
			</div>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</div>		
		
		</fieldset>
			<!--<button class="btn btn-lg btn-success btn-block">Login</a>-->			
	  </form>
</div>  
<?php } ?>