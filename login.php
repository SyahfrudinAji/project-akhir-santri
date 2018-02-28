<?php
session_start();
if(isset($_SESSION['login'])) {
	header("location:home.php");
} else {

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
		$("#form").validate(); //id form
		});
</script>
</head>
<style>
body {
    color: #1f232c;
    line-height: 1.15;
	margin: 0px;
}
#container {
	height: 100%;
	padding: 161.5px 0px;
	background-image: url(gambar2.jpg);
}

#tengah {
    padding: 2% 10%;
    margin: 15px 350px;
    background: #35A9DB;
    border: 2px solid #0890BA;
    border-radius: 10px;
    box-shadow: 3px 3px px 1px #003980;
    font-family: fredoka one;
    color: white;
}
#tengah input {
	padding: 8px 15px; 
	margin-bottom: 15px;
	border: none;
	border-radius: 4px;
}

#login {
    font-family: fredoka one;
    font-size: 211%;
    color: white;
    margin-bottom: 10%;
}

#email {
	margin-left: 40px;
}

#password {
	margin-left: 10px;
}

#remember {
	margin-top: 5px;
	margin-bottom: 5px;
	margin-left: 88px;
	color: white;
}

#submit {
	margin-left: 88px;
}
#submit input {
    font-family: fredoka one;
    color: white;
    font-size: 109%;
    background: #AFCB52;
    padding: 4% 14%;
    text-decoratiom: none;
    border: none;
    border-radius: 4px;
}
@media screen and (max-width: 480px) {
	#container {
	height: 336px;
	}
	#tengah {
		margin: 0% 10%;
	}
	#form {
		margin: 0% 3%;
	}
	#email, #password, #remember, #submit{
		margin: 0% 1%;
	}
	#tengah input {
	    padding: 3% 9%;
	}
}


</style>
<body>
<div id="container" class="clearfix"> 
<div  id="tengah">
	<form action="proses/proses_login.php" method="post" id="form">
		<h1 id="login">Login</h1>
		<label>
			<tr>
				<td class="tulis">Email</td>
				<td><input type="email" name="email" id="email" class="required email" title="Masukkan alamat email yang benar"></td>
			</tr>
			<br>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" id="password" class="required" title="Mohon masukkan password"></td>
			</tr>
		</label>
			<br>
		<label>
			<input type="checkbox" id="remember"> Remember me
		</label> 
		
		<div id="submit">
			<input class="submit" type="submit"  value="kirim">
		</div>
	</form>
</div>
</div>
</body>
</html>
<?php
}
?>