<?php 
if($_GET['act']=="harga" || $_GET['act']=="saran_hg"){
	$act=$_GET['act'];
?>
<div class="row">
	<div class="col-sm-5 col-sm-offset-3 col-md-6 col-md-offset-2 main">
		<h1 class="page-header">Input Harga Bahan Per Kg</h1>
	</div>		
</div>
<?php
	include"config.php";
	$sql="select * from bahan order by kategori asc";
	$q=mysql_query($sql) or die(mysql_error());
	$sql2="select * from versi";
	$q2=mysql_query($sql2) or die(mysql_error());
	$row2=mysql_fetch_array($q2);
	$tanggal=$row2['tanggal'];
	$versi=$row2['versi'];
	$ulang=0;
?>
<div class="row">
	<form method="post" role="form" action="simpan.php?act=<?php echo $act ?>">
		<div class="col-sm-5 col-sm-offset-3 col-md-6 col-md-offset-2 main">
<?php
	while ($row=mysql_fetch_array($q)) {
		$ulang++;
		$idbahan=$row["idbahan"];
		$nama=$row["nama_bahan"];
		$sql3="select * from harga where idbahan = '$idbahan' and tanggal = '$tanggal'";
		$q3=mysql_query($sql3) or die(mysql_error());
		$row3=mysql_fetch_array($q3);
		$harga=$row3['harga'];
?>
			<div class="form-group">
				<input type="hidden" name="tgl<?php echo $ulang;?>" value=<?php echo date('dmY');?> >
				<label for="nama">Harga <?php echo $nama?>:</label>
				<input type="hidden" name="idbahan<?php echo $ulang?>" value=<?php echo $idbahan ?> >
				<input type="text" class="form-control" name="harga<?php echo $ulang?>" value=<?php echo $harga ?> >
			</div>
<?php } ?>
<!--<button class="btn btn-lg btn-success btn-block">Login</a>-->
			<div class="form-group">
				<input type="hidden" name="ulang" value=<?php echo $ulang ?> >
			</div>	
			<button type="submit" class="btn btn-primary">Simpan</button>
		</div>
	</form>	
<!--row-->	
</div>
<?php } ?>	