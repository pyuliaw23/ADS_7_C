<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
    <head>
      <title>Art-Venture</title>
      <link rel="icon" type="image/png" href="logo1.png">
      <link href="style.css" rel="stylesheet" type="text/css">
      <style>
      	body {
			margin: auto;
			width: 100%;
			height: 850px;
			background: url("b2.jpg") no-repeat center center fixed; 
		    -webkit-background-size: 100% 100%;
		    -moz-background-size: 100% 100%;
		    -o-background-size: 100% 100%;
		    background-size: 100% 100%;
		  }
      .font1{
        font-family: monotype corsiva;
        font-size: 20;
      }
      </style>
    </head>
<body>
<center>
    <div>
      <b ><a>Selamat Datang : </a><i>
      <?php echo $login_session; ?></i></b>
      <b ><a href="logout.php">Log Out</a></b>
    </div>
    <div>
      <center>
        <h1 class="font1">WELCOME ADMIN .....</h1>
        <h2 class="font1">Ini adalah halaman admin, dimana nantinya admin akan mengelola isi dari web ini agar konten dapat bertambah lebih menarik. </h2>
        <h2 class="font1">Karena kami belum mendalami soal web, jadi kami belum membuat menu untuk halaman admin.</h2>
        <img  width="400" height="400" src="admin.png"  />
      </center>
    </div>
</center>    
</body>
</html>

