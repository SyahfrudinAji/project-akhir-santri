<?php
session_start();
if (isset($_SESSION['login'])) {

	include 'koneksi.php';
	
	$nama		= isset($_POST['nama']) ? $_POST['nama'] : '';
	$email		= isset($_POST['email']) ? $_POST['email'] : '';
	$notelepon	= isset($_POST['notelepon']) ? $_POST['notelepon'] : '';
	$komentar   = isset($_POST['komentar']) ? $_POST['komentar'] : '';
	$artikel	= $_SESSION['artikel_id'];
	$tanggal    = date("Y-m-d H:i:s");
	
	
	if (!empty($nama) && !empty($email) && !empty($notelepon) && !empty($komentar)) {
		
		mysqli_query($connect, "INSERT INTO comment VALUES (null,'$nama','$email','$notelepon','$komentar','$artikel','$tanggal')");

		header("location:../comment.php");

	} else {
		echo "Silahkan lengkapi data <a href='../comment_tambah.php'>kategori</a>";
	}


} else {
  	echo "Please <a href='../index.php'>login</a> first.";
}
?>