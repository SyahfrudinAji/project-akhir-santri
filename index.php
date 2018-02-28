<?php
session_start();
if(isset($_SESSION['login'])) {

?>

<!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ujian TW 2</title>
	<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" />
	<script src="jquery/jquery-3.2.1.min.js"></script>
	
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
				$("#cari").slideToggle();
			});
			
		});
	</script>
	<style>
		http://meyerweb.com/eric/tools/css/reset/ 
   v2.0 | 20110126
   License: none (public domain)


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
HTML5 display-role reset for older browsers
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
* html .clearfix             { zoom: 1; } IE6
*:first-child+html .clearfix { zoom: 1; } IE7

body {
    line-height: 1.15;
}

.wrapper {
	max-width: 1140px;
	padding: 0 63px;
	box-sizing: border-box;
	margin: auto;
}

#menu_muncul {
	background: #5c6bc0;
	display: none;
	margin-top: -10px;
}

#container {
	background: #f7f9fc;
}

#cari {
	border: 5px solid #d1d1d1;
	width: 97.1%;
	font-family: lato;
	padding: 10px;
	margin-bottom: 20px;
	display: none;
}
input {
	width: 77%;
	font-family: lato;
    padding: 1% 1% 1% 1%;
	border: 3px solid #e6e6e6;
	border-radius: 5px;
	margin: 5px 0px;
}
input#but{
	font-family: lato;
	width: 10%;
	padding: 1% 0%;
	margin-left: 1%;
}

#main1 {
	padding-bottom: 80px;
	margin: 0% -7%;
}
#wahdah {
	float: left;
}
#wahdah h1 {
	font-size: 48px;
	font-family: lato;
	font-style: italic;
}
#wahdah h1:hover{
	color: #a9afdb;
}
#menu {
	float: right;
	font-family: lato;
	font-size: 16px;
	margin-top: 27px; 
}
#menu ul li {
	float: left;
}
#menu ul li a{
	color: black;
	text-decoration: none;
	font-family: lato;
	margin-left: 35px;
}
#menu ul li a:hover {
	color: #cdcecf;
}
#menu ul li i {
	margin-left: 35px;
}
.nav {
	display: none;
}
.cari {
	margin-left: -35px;
}

#header2 {
	width: 100%;
	background: white;
	box-shadow: 0px 0px 35px 1px #ddd;
	margin-bottom: 120px;
}
#main2 {
	padding: 0px 95px;
	background: white;
	
	    margin-bottom: 40px;
}
#story{ 
	font-family: lato;
	font-size: 14px;
	float: right;
	border: none;
	color: white;
	background: #5c6bc0;
	padding: 10px 25px;
	margin-right: -12px;
	margin-top: 22px;
}
#no{
	padding-top: 60px;
}
#no p {
	font-size: 14px;
	margin: 25px 0px;
	font-family: lato;
}
#no h1 {
	font-size: 40px;
	font-family: lato; 
}
#no hr {
	margin: 42px 0px;
}
#text {
	font-family: lato;
	font-size: 17px;
	line-height: 25px;
}
#read {
	padding-top: 56px;
	padding-bottom	: 80px;
}
#read a {
	float: left;
	font-size: lato;
	font-size: 21px;
	text-decoration: none;
	color: #5c6bc0;
}

#read p {
	float: right;
	font-family: lato;
	font-size: 15px;
	color: #5c6bc0;
	margin-top: 3px;
}
.post {
	color: #5c6bc0;

}
#gambar img{
	box-shadow: 0px 0px 35px 1px #ddd;
	width: 10%;
}
#story1{
	font-family: lato;
	font-size: 14px;
	float: right;
	border: none;
	color: white;
	background: #5c6bc0;
	padding: 10px 25px;
	margin-right: -12px;
	margin-top: 22px;
	display: none;
}

#footer {
	margin: 0px;
}
#foot {
	background: #5c6bc0;
}
#footer h1 {
	text-align: center;
	font-family: lato;
	font-size: 36px;
	color: #4f5ca6;
	padding: 10% 0%;
}
#footer p {
	text-align: center;
	font-family: lato;
	font-size: 14px;
	color: #a9afdb;
	margin: 45px ;
	line-height: 23px;
}
.h {
	width: 78%;
	height: 1px;
	border: none;
	margin: 40px 0px;
	margin-left: 110px;
	background: #4f5ca6;
}

#menu1 {
	color: #ffffff;
	margin: 0% 23%;
	margin-bottom: 100px;
}
#menu1 a{
	color: #ffffff;
}
#menu1 ul li a{
	text-decoration: none;
	font-family: lato;
	float: left;
	margin-left: 35px;
}
#menu1 ul li a:hover {
	color: #a9afdb;
}
#menu1 ul li i {
	margin-left: 10px;
}

#media {
	font-family: lato;
	font-size: 26px;
	padding-bottom: 80px;
	margin-left: 350px;
}
#media ul li {
	float: left;
	color: white;
	margin: 0px 15px;
}

@media screen and (max-width: 480px) {
	#container {
		width: 100%;
	}
	.wrapper{
		margin: 0% 0% 0% -14%;1
	}
	#header1 {
		margin-left: 15px;
		margin-bottom: 40px;
	}
	#wahdah {
		text-align: center;
	}
	#wahdah h1{
		font-family: lato;
		float: left;
		font-size: 42px;
	}
	#main1 {
		margin: 0% 0%;
	}
	
	#story {
		height: 38px;
		margin-top: 0px;
		width: 35%;
		font-size: 18px;
		background: #5c6bc0;
	}
	#story button {
		margin-top: -30px;
	}
	#menu .m{
		display: none;
	}
	#menu .nav{
		width: 50%;
		heigh: 25px;
		font-size: 35px;
		margin-right: 20px;
		display: inline-block;
	}
	#menu ul li a{
		margin: 0%;
	}
	#menu_muncul {
		max-width: 100%;
	    padding-bottom: 70%;
		
	}
	#menu_muncul li{
	    padding: 4px 0px;
		margin-bottom: 2px;
	}
	#menu_muncul ul li a{
		color: #cdcecf;
		margin: 0px 5px;
		text-decoration: none;
	}
	#menu_muncul:hover ul li a{
		color: #cdcecf;
	}
	#menu_muncul hr{
		margin-bottom: 20px;
	}
	.kali {
		float: right;
		margin-right: 5%;
		margin-bottom: 15%;
	}
	.cari {
		display: none;
	}
		
	#header2 {
	    width: 108%;
		margin-left: 15px;
	}

	#main2 src {
		float: left;
		width:
	}
		
	#header2 img {
	   float: left;
	   width: 100%;
	   height: 100%;
	}
	#story1 {
		display: inline-block;
		height: 38px;
		margin-right: 0px;
		margin-top: 0px;
		width: 35%;
		font-size: 18px;
		background: #5c6bc0;

	}
	#footer {
		margin-left: -33px;
	}
	#footer p {
		width: 100%;
		font-family: lato;
		font-size: 13px;
		margin: 0% 13%;
		line-height: 23px;
	}
	#footer h1 {
		font-style: italic;
	    margin-left: 25%;
	}
	#foot {
		width: 445px;
		margin-top: 145px;
	}
	.h {
		width: 90%;
		margin: 10% 18%;
	}
	#menu {
		font-size: 10px;
	    margin-right: -123px;
	}
	
	#no {
		margin-left: -40px;
	}
	#no p {
		font-size: 18px;
		color: #bdbdbd;
		margin-left: 0px;
	}
	#no h1 {
		width: 300px;
		font-size: 32px;
		margin-left: 0px;
	}
	#text p {
		margin-left: -35px;
		font-size: 15px;
	}
	
	#read {
		margin-left: -33px;
	}
	#read a{
		font-size: 18px;
		font-family: lato;
		margin-top: -60px;
	}
	#read p {
		padding: 0px 0px;
		font-family: lato;
		margin-right: -15px;
		font-size: 22px;
	}
	#menu1 {
		width: 450px;
		margin-left: -45px;
		font-size: 12px;
		margin-bottom: 65px;
	}
	#menu1 {
		width: 100%;
		margin: 0% 10%;
	}
	#menu1 ul li i{
		margin-left: 0px;
	}
	
	#media {
		width: 330px;
		font-size: 30px;
	    margin: 0% 20%;
		float: left;
	}
	#media ul li i {
		margin-left: 10px;
	}
}
	
	
	
	</style>
</head>
<body>

				<div id="menu_muncul">	
					<ul>
						<li class="kali"><a href="#"><i class="fa fa-close"></i></a></li>
					</ul>
					<ul>
						<li class="m"><a href="#">HOME</a></li>
						<hr>
						<li class="m"><a href="#">ABOUT</a></li>
						<hr>
						<li class="m"><a href="#">ARCHIVE</a></li>
						<hr>
						<li class="m"><a href="#">CONTACT</a></li>
						<hr>
						
					</ul>
				</div>
				
<div id="container">
	<div class="wrapper clearfix">
	<div id="header1">
		<div class="wrapper clearfix">
			<div id="main1">
				<div id="wahdah">
					<h1>Al-Wahdah</h1>
				</div>
					<div id="menu">	
						<ul>
							<li class="m"><a href="index.php">HOME</a></li>
							<li class="m"><a href="#">ABOUT</a></li>
							<li class="m"><a href="#">ARCHIVE</a></li>
							<li class="m"><a href="#">CONTACT</a></li>
							<li class="nav"><a href="#"><i class="fa fa-navicon"></i></a></li>
							<li class="cari"><a href="#"><i class="fa fa-search"></i></a></li>
						</ul>
					</div>
				
			</div>
		</div>
	</div>
	</div>
	
	
	
	
	
	
	<div class="wrapper clearfix">
		<form action="" method="get">
			<div id="cari">
				<label>Pencarian :</label>
				<input type="text"  name="cari" />
				<input type="submit" id="but" value="cari" />
			</div>
		</form>
		
	</div>
	

	
	

	
	
	<?php
		include'proses/koneksi.php';
		$cari = isset($_GET['cari']) ? $_GET['cari'] : '';
		if (!empty($cari)) {
			$sql = mysqli_query($connect, "SELECT * FROM blog_artikel WHERE judul LIKE '%".$cari."%' ORDER BY tanggal DESC");
		} else {
			$sql = mysqli_query($connect, "SELECT * FROM blog_artikel ORDER BY tanggal DESC");
		}
		while ($row = mysqli_fetch_array($sql)) {
			
	?>
	
	<div class="wrapper clearfix">
	
	
	<div id="header2">
	
	<img src="gambar/<?php echo $row['gambar']?>" width="100%" height="533px">
		<div id="main">
			
			<button id="story">Story</button>
		<div id="main2">
		
		
			<div id="no">
				<p><?=date('d F', strtotime($row['tanggal'])) ?></p>
				<h1><?= $row['judul'] ?></h1>
				<hr class="h">
			</div>
			<div id="text">
				<p><?= $row['isi'] ?></p>
			</div>
			<div id="read">
				<a href="<?php echo 'post.php?id='.$row['id']; ?>">
				<p class="post" >READ MORE</p>
				</a>
				<p>#Yosemite #Peak #Explore</p>
			</div>
		</div>
		</div>
	</div>
	</div>
	
	<?php
		}
	?>
	
	<div id="foot">
		<div class="wrapper clearfix">
		  <div id="footer">
			<h1>Al-Wahdah</h1>
			<div id="menu1">
				<ul>
					<li><a href="#">HOME</a></li>
					<li><a href="#">ABOUT</a></li>
					<li><a href="#">ARCHIVE</a></li>
					<li><a href="#">CONTACT</a></li>
					<li class="cari"><a href="#"><i class="fa fa-search"></i></a></li>
				</ul>
			</div>
			<br>
			<hr class="h">
			<p>Nunc placerat dolor at lectus hendrerit dignissim. Ut tortor sem, consectetur nec hendrerit ut, ullamcorper ac odio. Donec viverra <br>ligula at quam tincidunt imperdiet. Nulla mattis tincidunt auctor.</p>
			<hr class="h">
			<div id="copy">
				<p>© 2018 - Al-Wahdah. All Rights Reserved.</p>
			</div>
			<div id="media">
				<ul>
					<li><i class="fa fa-facebook-official"></i></li>
					<li><i class="fa fa-twitter"></i></li>
					<li><i class="fa fa-instagram"></i></li>
					<li><i class="fa fa-pinterest"></i></li>
				</ul>
			</div>
		  </div>
		</div>
	</div>
	
</div>
</body>
</html>

<?php
} else {
  echo "Please <a href='login.php'>login</a> first.";
}
?>