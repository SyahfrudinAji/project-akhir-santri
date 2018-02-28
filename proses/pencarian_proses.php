<?php
session_start();
if (isset($_SESSION['login'])) {
	
	include 'koneksi.php';
	
	if (isset($_GET['cari'])) {
		$cari = $_GET['cari'];
		$sql  = mysqli_query("SELECT * FROM comment WHERE judul like '%".$cari."%'");
	
		header:("location:../index.php")
	
 	} else {
		$sql = mysqli_query("SELECT * FROM comment");
	}
	
?>