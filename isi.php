<?php 
if($_GET['module']=="harga"){
include "harga_bahan.php";
}
if($_GET['module']=="bahan"){
include "input_bahan.php";
}
if($_GET['module']=="srn_bahan"){
include "saran_bahan.php";
}
if($_GET['module']=="srn_harga"){
include "saran_harga.php";
}
if($_GET['module']=="slk_bahan"){
include "selek_bahan.php";
}
if($_GET['module']=="slk_harga"){
include "selek_harga.php";
}
if($_GET['module']=="daftar"){
include "daftar_bh.php";
}
?>