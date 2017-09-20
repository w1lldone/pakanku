<?php 
include"config.php";
	if ($_GET['act']=="bahan"){
		$versi=$_POST['versi'];
		mysql_query("INSERT INTO bahan(nama_bahan,bk_gr,tdn_gr,pk_gr,ca,p,bk_prs,tdn_prs,pk_prs,kategori)
		VALUES(
			'$_POST[nama]',
			'$_POST[bk_gr]',
			'$_POST[tdn_gr]',
			'$_POST[pk_gr]',
			'$_POST[ca_gr]',
			'$_POST[p_gr]',
			'$_POST[bk_prs]',
			'$_POST[tdn_prs]',
			'$_POST[pk_prs]',
			'$_POST[kategori]')");
		mysql_query("update versi set versi=$versi where idversi='1'");	
		echo "<script>window.alert('data tersimpan versi $versi');
			  window.location=('dasboard.php?module=bahan&act=bahan')</script>";
		}
	if ($_GET['act']=="harga"){
		$ulang=$_POST['ulang'];
		$a=1;
		while ($a <= $ulang){
			$tanggal=$_POST["tgl$a"];
			$idbahan=$_POST["idbahan$a"];
			$harga=$_POST["harga$a"];
			mysql_query("INSERT INTO harga(tanggal, idbahan, harga)
			VALUES(
			'$tanggal',
			'$idbahan',
			'$harga')");
			$a++;
		}
		mysql_query("update versi set tanggal='$tanggal' where idversi='1'");
		echo "<script>window.alert('data tersimpan');
			  window.location=('dasboard.php?module=harga&act=harga')</script>";
	}
	if ($_GET['act']=="saran_bh"){
		$versi=$_POST['versi'];
		mysql_query("INSERT INTO saran_bahan(nama_bahan,bk_gr,tdn_gr,pk_gr,ca,p,bk_prs,tdn_prs,pk_prs,kategori)
		VALUES(
			'$_POST[nama]',
			'$_POST[bk_gr]',
			'$_POST[tdn_gr]',
			'$_POST[pk_gr]',
			'$_POST[ca_gr]',
			'$_POST[p_gr]',
			'$_POST[bk_prs]',
			'$_POST[tdn_prs]',
			'$_POST[pk_prs]',
			'$_POST[kategori]')");
		echo "<script>window.alert('data tersimpan versi $versi');
			  window.location=('dasboard.php?module=bahan&act=saran_bh')</script>";
		}
	if ($_GET['act']=="saran_hg"){
		$ulang=$_POST['ulang'];
		$a=1;
		while ($a <= $ulang){
			$tanggal=$_POST["tgl$a"];
			$idbahan=$_POST["idbahan$a"];
			$harga=$_POST["harga$a"];
			mysql_query("INSERT INTO saran_harga(tanggal, idbahan, harga)
			VALUES(
			'$tanggal',
			'$idbahan',
			'$harga')");
			$a++;
		}
		echo "<script>window.alert('data tersimpan');
			  window.location=('dasboard.php?module=harga&act=saran_hg')</script>";
	}
	if ($_GET['act']=="edit_bh"){
		$versi=$_POST['versi'];
		mysql_query("UPDATE bahan set
			nama_bahan='$_POST[nama]',
			bk_gr='$_POST[bk_gr]',
			tdn_gr='$_POST[tdn_gr]',
			pk_gr='$_POST[pk_gr]',
			ca='$_POST[ca_gr]',
			p='$_POST[p_gr]',
			bk_prs='$_POST[bk_prs]',
			tdn_prs='$_POST[tdn_prs]',
			pk_prs='$_POST[pk_prs]',
			kategori='$_POST[kategori]' where idbahan='$_POST[idbahan]'");
		mysql_query("update versi set versi=$versi where idversi='1'");	
		echo "<script>window.alert('data tersimpan versi $versi');
			  window.location=('dasboard.php?module=daftar&act=edit_bh')</script>";
		}
?>