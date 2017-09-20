<?php
	if($_GET['act']=="bahan" || $_GET['act']=="saran_bh"){
		$act=$_GET['act'];
		include"config.php";
		$sql2="select * from versi";
		$q2=mysql_query($sql2) or die(mysql_error());
		$row2=mysql_fetch_array($q2);
		$v=$row2['versi'];
		$versi=$v+1;
?>
<div class="row">
	<div class="col-md-8 col-md-offset-2 main">
		<h1 class="page-header">Input Nutrisi dalam 1 KG Bahan</h1>
	</div>
</div>
<div class="row">
	  <form method="post" role="form" action="simpan.php?act=<?php echo $act ?>">
	  <fieldset>
		<div class="col-sm-3 col-sm-offset-3 col-md-4 col-md-offset-2 main">
			<div class="form-group">
				<label>Nama bahan:</label>
				<input type="text" class="form-control" name="nama" autofocus>
				<input type="hidden" name="versi" value=<?php echo $versi; ?> >
			</div>
			<div class="form-group">
				<label>Kandungan Bahan Kering (gr):</label>
				<input type="text" class="form-control" name="bk_gr">
			</div>
			<div class="form-group">
				<label>Total Digestable Nutrient (gr):</label>
				<input type="text" class="form-control" name="tdn_gr">
			</div>
			<div class="form-group">
				<label>Kandungan Protein Kasar(gr):</label>
				<input type="text" class="form-control" name="pk_gr">
			</div>
			<div class="form-group">
				<label>Kandungan Kalsium (gr):</label>
				<input type="text" class="form-control" name="ca_gr">
			</div>
		</div>		
		<div class="col-sm-3 col-md-4 main">
		  	<div class="form-group">
				<label>Kandungan Fosfor(gr):</label>
				<input type="text" class="form-control" name="p_gr">
			</div>
			<div class="form-group">
				<label>Persentase Bahan Kering (%):</label>
				<input type="text" class="form-control" name="bk_prs">
			</div>
			<div class="form-group">
				<label>Persentase TDN (%):</label>
				<input type="text" class="form-control" name="tdn_prs">
			</div>
			<div class="form-group">
				<label>Persentase Protein Kasar (%):</label>
				<input type="text" class="form-control" name="pk_prs">
			</div>
			<div class="form-group">
			  <label>Kategori:</label>
				<select class="form-control" name="kategori">
					<option value="hijauan">Hijauan</option>
					<option value="protein">Protein</option>
					<option value="energi">Energi</option>
				</select>	
			</div>	
			<button type="submit" class="btn btn-primary">Simpan</button>
		</div>	
		</fieldset>
			<!--<button class="btn btn-lg btn-success btn-block">Login</a>-->			
	  </form>
</div>  
<?php } ?>

<?php
	if($_GET['act']=="edit_bh"){
		$act="edit_bh";
		include"config.php";
		$sql2="select * from versi";
		$q2=mysql_query($sql2) or die(mysql_error());
		$row2=mysql_fetch_array($q2);
		$v=$row2['versi'];
		$versi=$v+1;
		
		$idbahan=$_GET['idbahan'];
		$sql="select * from bahan where idbahan = $idbahan";
		$q=mysql_query($sql) or die(mysql_error());
		$row=mysql_fetch_array($q);
?>
<div class="row">
	<div class="col-md-8 col-md-offset-2 main">
		<h1 class="page-header">Input Nutrisi dalam 1 KG Bahan</h1>
	</div>
</div>
<div class="row">
	  <form method="post" role="form" action="simpan.php?act=<?php echo $act ?>">
	  <fieldset>
		<div class="col-sm-3 col-sm-offset-3 col-md-4 col-md-offset-2 main">
			<div class="form-group">
				<label>Nama bahan:</label>
				<input type="text" class="form-control" name="nama" value="<?php echo $row['nama_bahan'];?>" autofocus>
				<input type="hidden" name="versi" value=<?php echo $versi; ?> >
				<input type="hidden" name="idbahan" value=<?php echo $row['idbahan']; ?> >
			</div>
			<div class="form-group">
				<label>Kandungan Bahan Kering (gr):</label>
				<input type="text" class="form-control" name="bk_gr" value="<?php echo $row['bk_gr'];?>">
			</div>
			<div class="form-group">
				<label>Total Digestable Nutrient (gr):</label>
				<input type="text" class="form-control" name="tdn_gr" value="<?php echo $row['tdn_gr'];?>" >
			</div>
			<div class="form-group">
				<label>Kandungan Protein Kasar(gr):</label>
				<input type="text" class="form-control" name="pk_gr" value="<?php echo $row['pk_gr'];?>" >
			</div>
			<div class="form-group">
				<label>Kandungan Kalsium (gr):</label>
				<input type="text" class="form-control" name="ca_gr" value="<?php echo $row['ca'];?>" >
			</div>
		</div>		
		<div class="col-sm-3 col-md-4 main">
		  	<div class="form-group">
				<label>Kandungan Fosfor(gr):</label>
				<input type="text" class="form-control" name="p_gr" value="<?php echo $row['p'];?>" >
			</div>
			<div class="form-group">
				<label>Persentase Bahan Kering (%):</label>
				<input type="text" class="form-control" name="bk_prs" value="<?php echo $row['bk_prs'];?>" >
			</div>
			<div class="form-group">
				<label>Persentase TDN (%):</label>
				<input type="text" class="form-control" name="tdn_prs" value="<?php echo $row['tdn_prs'];?>" >
			</div>
			<div class="form-group">
				<label>Persentase Protein Kasar (%):</label>
				<input type="text" class="form-control" name="pk_prs" value="<?php echo $row['pk_prs'];?>" >
			</div>
			<div class="form-group">
			  <label>Kategori:</label>
				<select class="form-control" name="kategori">
					<option value="<?php echo $row['kategori']; ?>"><?php echo $row['kategori']; ?></option>
					
					<?php if ($row['kategori']=="hijauan"){ 
					echo "<!--"; } ?> 
					<option value="hijauan">Hijauan</option> 					
					<?php if ($row['kategori']=="hijauan"){ 
					echo "-->"; } ?>		
					
					<?php if ($row['kategori']=="protein"){ 
					echo "<!--"; }?>
					<option value="protein">Protein</option>
					<?php if ($row['kategori']=="protein"){ 
					echo "-->"; } ?>	
					
					<?php if ($row['kategori']=="energi"){ 
					echo "<!--"; } ?>
					<option value="energi">Energi</option>
					<?php if ($row['kategori']=="energi"){ 
					echo "-->"; } ?>
					
				</select>	
			</div>	
			<button type="submit" class="btn btn-primary">Simpan</button>
		</div>	
		</fieldset>
			<!--<button class="btn btn-lg btn-success btn-block">Login</a>-->			
	  </form>
</div>  
<?php } ?>	  