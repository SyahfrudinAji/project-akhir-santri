<?php
session_start();
if(isset($_SESSION['login'])) {

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Contact Us - Ujian CW 1</title>
	<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" />
	<title>Halaman Login</title>
	<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="jquery/validasi.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		$("#formKomentar").validate(); //id form
		});
</script>
	
	<?php
		include 'proses/koneksi.php';
		include 'function/library.php';
	?>
	<script>
		$(document).ready(function(){
			$(".nav").click(function(toggle){
				$("#container").hide();
				$("#menu_muncul").show();
			});
			
			$(".kali").click(function(toggle) {
				$("#menu_muncul").hide();
				$("#container").show();
				$$("#menu").show();
				
			});
			$(".cari").click(function(toggle) {
				$(".cari1").slideToggle();
				
				
			});
			
			
		});
	</script>
	<style>
		
		:/* http://meyerweb.com/eric/tools/css/reset/ 
   v2.0 | 20110126
   License: none (public domain)
*/

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}

.clearfix:after {
  visibility: hidden;
  display: block;
  font-size: 0;
  content: " ";
  clear: both;
  height: 0;
}
* html .clearfix             { zoom: 1; } /* IE6 */
*:first-child+html .clearfix { zoom: 1; } /* IE7 */

#container {
	background: #f7f9fc;
}

.wrapper {
	max-width: 1140px;
	padding: 0 63px;
	box-sizing: border-box;
	margin: auto;
}


#header1 {
	width: 100%;
}
#wahdah1 h1{
	font-family: lato;
    font-size: 42px;
    font-style: italic;
	float: left;
	padding: 42px 0px;
}
#wahdah1:hover{
	color: #a9afdb;;
}
#menu {
	float: right;
    margin: 75px 0px;
}
#menu ul li{
	font-family: lato;
	font-size: 16px;
	margin-left: 22px;
	float: left;
}
#menu ul li a {
	text-decoration: none;
	color: black;
}
#menu ul li a:hover {
	color: #a9afdb;
}
.nav {
	display: none;
}
.cari i{
	color: black;
	margin-left: 12px;
	font-size: 16px;
}
.cari i:hover {
	color: #a9afdb;
}

#cari1 {
	border: 5px solid #d1d1d1;
	width: 93%;
	font-family: lato;
	padding: 10px;
	margin-bottom: 20px;
}
#cari{
	border: 5px solid #d1d1d1;
	width: 97.1%;
	font-family: lato;
	padding: 10px;
	margin-bottom: 20px;
	display: none;
}
.cari2 {
	width: 75%;
}
.cari3 {
	height: 0%;
	text-family: lato;
	font-size: 100%;
	width: 12%;
	padding: 1.5% 0%;
	margin-top: 2%;
}


#content {
	background: #ffffff;
	box-shadow: 0px 0px 35px 1px #ddd;
	margin-bottom: 120px;
}
.story {
	float: right;
	margin-right: -12px;
}
.story button {
	padding: 11px 29px;
	background: #5c6bc0;
	border: none;
	font-family: lato;
	color: #ffffff;
	font-size: 14px;
}
.judul {
    padding: 34px 98px 0px 98px;
}
.judul p{
	font-family: lato;
	font-size: 14px;
	color: #c2c2c2;
}
.judul h1 {
	font-family: lato;
	font-size: 40px;
	line-height: 50px;
}
.garis1 {
	width: 80%;
	padding: 0.1%;
	border: none;
	background: #eeeeee;
}
.text img {
	float: left;
	   width: 100%;
    height: 100%;
}
.text p {
	font-family: lato;
	font-size: 100%;
	line-height: 100%;
	
}
#artikel {
	padding: 34px 98px 34px 98px;
}
.democracy{
	font-family: lato;
	font-size: 15px;
	color: #d5d5d5;
	float: right;
	margin: 0px;
}
.garis2 {
	width: 100%;
	padding: 0.1%;
	border: none;
	background: #eeeeee;
	margin: 68px 0px;
}


#comment {
	padding: 0px 98px 34px 98px;
}
#comment a{
	text-decoration: none;
	padding-bottom: 31px;
}

#formKomentar {
	border: 5px solid #d1d1d1;
	width: 96%;
	padding: 10px;
}
input,textarea {
	width: 97%;
	height: 25px;
    padding: 1% 1% 1% 1%;
	border: 3px solid #e6e6e6;
	border-radius: 5px;
	margin-bottom: 15px;
}
input:focus, textarea:focus {
	border: 3px solid red;
}
textarea {
	width: 97%;
	height: 80px;
}
.sub{
    width: 25%;
    padding-bottom: 3%;
    margin: 0% 38%;
}

.garis3 {
	width: 100%;
	padding: 0.1%;
	border: none;
	background: #eeeeee;
	margin: 22px 0px;
}

#comment2 {
	width: 100%;
	margin: 3% 0%;
}
#com2 img{
	width: 11.5%;
}
.com1 {
	float: left;
}
.com2 {
	display: inline-block;
	width: 88%;
	margin-left: 3%;
	margin-top: -0px;
}
.text1 {
	display: inline-block;
	width: 29%;
}
.text1 h4 {
	float: left;
	font-family: lato;
	font-size: 100%;
}
.text1 p {
	float: right;
	font-family: lato;
	font-size: 100%;
	color: #a0a7d7;
	margin-top: 22px;
}
.text2 {
	width: 100%;
}
.text2 p {
	font-family: lato;
	font-size: 14px;
}

.footer {
	background: #5c6bc0; 
}
#footer {
	background: #5c6bc0;
	padding: 0px 98px 34px 98px;
}
#footer h1{
	width: 100%;
	font-family: lato;
	font-size: 36px;
	color: #5765b5;
	padding: 70px 0px 0px 0px;
	text-align: center;
}

#menu1 {
	width: 100%;
	float: right;
    margin: 0% 0% 10% 0%;
}
#menu1 a {
	font-family: lato;
	font-size: 100%;
	color: #ffffff;
}
#menu1 ul li{
	font-family: lato;
	font-size: 16px;
	margin-left: 45px;
	float: left;
}
#menu1 ul li a {
	text-decoration: none;
}

.menu2 {
	font-family: lato;
	font-size: 100%;
}
.menu2 li{
	margin: 5% 1%;
	display: inline-block;
}
.menu2 li a {
	text-decoration: none;
	color: white;
}

.garis5 {
	width: 100%;
	padding: 0.1%;
	background: #5765b5;
	margin: 45px 0px;
	border: none;
}
#garis4 p {
	text-align: center;
	font-family: lato;
	font-size: 14px;
	color: #a9afdb;
	margin: 45px ;
	line-height: 23px;
}

.garis6 {
	width: 94%;
	padding: 0.1%;
	background: #5765b5;
	margin: 45px 25px;
	border: none;
}
#copy {
	text-align: center;
	font-family: lato;
	font-size: 14px;
	color: #a0a7d7;
	margin-bottom: 38px;
}
.menu2 {
	font-family: lato;
	font-size: 100%;
	text-align: center;
}
.menu2 li{
	margin: 5% 1%;
	display: inline-block;
}
.menu2 li a {
	text-decoration: none;
	color: white;
	
}

#media {
	width: 100%;
}
#medai li a{
}




@media screen and (max-width: 480px) {
	.wrapper {
		max-width: 1140px;
		padding: 0 15px;
		box-sizing: border-box;
		margin: auto;
	}
	
	#header1 {
		padding: 0px 50px;
	}
	#wahdah1 {
		margin-left: -41px;
	}
	.menu1  {
		display: none;
		margin: 0px;
	}
	.cari  {
		display: none;
	}
	#menu {
		margin: 0px;
		margin-right: 7%;
		padding: 0px;
	}
	#menu  ul li a{
		color: black;
	}
	#menu .nav {
		font-size: 35px;
		margin-right: 50px;
		margin-top: 60px;
		display: inline-block;
	}
	
	
	#content {
		padding: 0px 50px;
	}
	.story {
	    margin-right: -50px;
		margin-top: -19px;
	}
	.judul {
	    padding: 34px 0px 0px 0px;
	}
	.judul p {
		font-size: 18px;
	}
	#artikel {
		padding: 0px;
	}
	.text p {
		font-size: 18px;
		line-height: 28px;
	}
	
	#formKomentar {
	    padding-right: 9%;
		width: 85%;
	}
	input, textarea {
		width: 100%;
	}
	#comment textarea{
		width: 100%;
	}
	
	
	.garis1 {
		width: 80%;
		padding: 0.1%;
		border: ;
		background: #eeeeee;
	}
	.garis5 {
	    background: #5765b5;
	}
	.garis6 {
		background: #5765b5;
		margin-left: -0%;
		width: 100%;
	}
	
	#comment {
		padding: 0px;
	}
	#comment2 {
		padding: 0px;
	}
	
	
	#footer {
		padding: 0px;
	}
	#menu1 {
		float: right;
		margin-left: -10px;
	}
	#menu1 ul li{
		float: left;
	}
	
	#menu li {
		text-decoration: none;
		float: left;
		padding-right: -40px;
	}
	#copy p{
		margin-left: 30px;
		text-align: center;
	}
	#menu1 {
		width: 450px;
		margin-left: -45px;
		font-size: 12px;
		margin-bottom: 65px;
	}
	#menu1 ul li i{
		margin-left: 0px;
	}
	.cari1 {
		display: none;
	}

	
}
	
	
	</style>
	
</head>
<style>


</style>
<body>
<div id="container">
	<div class="wrapper clearfix">
		<div id="header1">
			<div id="wahdah1">
				<h1>Al-Wahdah</h1>
			</div>
			<div id="menu">
				<ul>
					<li class="menu1"><a href="index.php">HOME</a></li>
					<li class="menu1"><a href="">ABOUT</a></li>
					<li class="menu1"><a href="">ARCHIVE</a></li>
					<li class="menu1"><a href="">CONTACT</a></li>
					<li class="nav"><a href="#"><i class="fa fa-navicon"></i></a></li>
					<li class="cari"><a href="#"><i class="fa fa-search"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	
	
	<div class="wrapper clearfix">
		<form action="" method="get">
			<div id="cari" class="cari1" style="display: none;">
				<label>Pencarian :</label>
				<input class="cari2" type="text"  name="cari" />
				<input class="cari3" type="submit" value="cari" />
			</div>
		</form>
		
	</div>
	
	
	<?php
		include'proses/koneksi.php';
		$sql = mysqli_query($connect, "SELECT * FROM blog_artikel WHERE id = '$_GET[id]'");
		while ($row = mysqli_fetch_array($sql)) {
	?>
	
			<div class="wrapper clearfix">
				<div id="content">
					<div class="story">
						<button>Story</button>
					</div>
					<div class="judul">
						<p><?=date('d F') ?></p>
						<h1><?= $row['judul'] ?></h1>
					</div>
					
					<hr class="garis1">
					
					<div id="artikel">
						<div class="text">
							<img src="gambar/<?php echo $row['gambar']?>" width="100%" height="533px">
							<p><?= $row['isi'] ?></p>
						</div>
						<p class="democracy">#Democracy   #Introspection</p>
					</div>
					
					<hr class="garis2">

	<?php
		}
	?>
				
			
			<div id="comment">
				<form action="proses/post_proses.php" id="formKomentar"  method="post">
					<div>
						<input type="hidden" name="id" value="<?= $_GET['id'] ?>" />
					</div>
					<div>
						<input type="text" name="nama" placeholder="Nama" class="required" title="Masukkan nama anda dengan benar" />
					</div>
					
					<div>
						<input type="text" name="email" placeholder="Email" class="required email" title="Masukkan alamat email yang benar" />
					</div>
					
					<div>
						<input type="text" name="notelepon" placeholder="Nomer Telepon" class="required" title="Masukkan nomer telepon anda" />
					</div>
					
					<div>
						<textarea name="komentar" placeholder="Komentar" class="required" title="Masukkan komentar anda"></textarea>
					</div>
					
					<div>
						<input class="sub" type="submit" value="Tambahkan Komentar" />
					</div>
				</form>
				
				<hr class="garis3">
	<?php
		include'proses/koneksi.php';
		$sql = mysqli_query($connect, "SELECT * FROM comment WHERE artikel_id = $_GET[id] ORDER BY tanggal DESC ");
		while ($row = mysqli_fetch_array($sql)) {
	?>
	
			
				<div id="comment2">
					<div class="com1">
						<img src="gambar/orang.jpg">
					</div>
					<div class="com2">
						<div class="text1">
							<h4><?= $row['nama'] ?></h4>
							<p><?=date('d F Y', strtotime($row['tanggal'])) ?></p>
						</div>
						<div class="text2">
							<p><?= $row['komentar'] ?></p>
						</div>
					</div>
				</div>
	<?php
		}
	?>
	
			</div>
		</div>
	</div>
	
	
	
	<div class="footer">
	<div class="wrapper clearfix">
		<div id="footer" class="clearfix">
			<h1>Al-Wahdah</h1>
				<ul class="menu2" class="clearfix" style="text-align: center;">
					<li><a href="#">HOME</a></li>
					<li><a href="#">ABOUT</a></li>
					<li><a href="#">ARCHIVE</a></li>
					<li><a href="#">CONTACT</a></li>
					<li class="cari1" style="display: none;><a href="#"><i class="fa fa-search"></i></a></li>
				</ul>
			<div id="garis4">
				<hr class="garis5">
				<p>Nunc placerat dolor at lectus hendrerit dignissim. Ut tortor sem, consectetur nec hendrerit ut, ullamcorper ac odio. Donec viverra ligula at quam tincidunt imperdiet. Nulla mattis tincidunt auctor.</p>
				<hr class="garis6">
			</div>
			<div id="copy">
				<p>© 2018 - Al-Wahdah. All Rights Reserved.</p>
			</div>
			<div id="media">
				<ul style="text-align: center; padding-bottom: 10%; " >
					<li style="display:inline-block; padding: 0% 10%  0% 10%; font-size: 200%; color: white;" ><i class="fa fa-facebook-official"></i></li>
					<li style="display:inline-block;  font-size: 200%;  color: white;"><i class="fa fa-twitter"></i></li>
					<li style="display:inline-block; padding: 0% 10%  0% 10%; font-size: 200%;  color: white;"><i class="fa fa-instagram"></i></li>
					<li style="display:inline-block; padding: 0% 15%  0% 0%; font-size: 200%; color: white;"><i class="fa fa-pinterest"></i></li>
				</ul>
			</div>
		</div>
	</div>
	</div>
		
</div>
</body>
</html>
<?php
}
?>