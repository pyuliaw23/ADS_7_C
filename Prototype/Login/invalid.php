<?php
/*
include('login.php'); // Memasuk-kan skrip Login 
 
if(isset($_SESSION['login_user'])){
header("location: profile.php");
} */
?>
 
<!DOCTYPE html>
<html>
  <head>
    <title>Form Login</title>
    
    <!-- Skrip CSS -->
   <link rel="stylesheet" href="style.css"/>
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
    <div class="container">
        <div class="main">
          <form action=" " method="post">
            <h2>Username dan Password yang anda masukkan kurang valid</h2><hr/>       
          </form>
          <a href="index.php">
            <button class="button" style="vertical-align:middle"><span>Kembali</span></button>
          </a>
        </div>
   </div>
 </center>
  </body>
</html>
