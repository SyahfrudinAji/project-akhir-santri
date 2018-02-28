<?php
session_start();
if (isset($_SESSION['login'])) {

	include 'koneksi.php';
	
	$judul    	= isset($_POST['judul']) ? $_POST['judul'] : '';
	$isi    	= isset($_POST['isi']) ? $_POST['isi'] : '';
	$kategori   = isset($_POST['kategori']) ? $_POST['kategori'] : '';
	$penulis	= $_SESSION['author_id'];
	$tanggal    = date("Y-m-d H:i:s");
	$status		= isset($_POST['status']) ? $_POST['status'] : '';	
	
	$gambar_name	= $_FILES['gambar']['name'];
	$gambar_size    = $_FILES['gambar']['size'];
	$gambar_type    = $_FILES['gambar']['type'];
	$gambar_tmp_name= $_FILES['gambar']['tmp_name'];
	$gambar_ext= explode('.',$gambar_name);
	
	$folder = "../gambar/";
	
	if (!empty($judul) && !empty($kategori) && !empty($isi)) {
		
		if (!is_dir($folder)){
			mkdir($folder, 0777);
		}
		
		if (!empty($gambar_name)){
			$newName = rand(1,5).'.'.end($gambar_ext);
			move_uploaded_file($gambar_tmp_name,$folder.$newName);
		} else {
			$gambar_name = null;
		}
		
		mysqli_query($connect, "INSERT INTO blog_artikel VALUES (null,'$judul','$isi','$kategori','$penulis','$tanggal','$status', '$gambar_name')");

		header("location:../blog_artikel.php");

	} else {
		echo "Silahkan lengkapi data <a href='../blog_artikel_tambah.php'>kategori</a>";
	}


} else {
  	echo "Please <a href='../index.php'>login</a> first.";
}
?>