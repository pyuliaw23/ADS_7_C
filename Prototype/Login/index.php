<?php
include('login.php'); // Memasuk-kan skrip Login 
 
if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>

  <link rel="icon" type="image/png" href="logo1.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

<div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
      <form class="login-form" action="" method="post">
        <div class="row">
          <div class="input-field col s12 m12 center">
            <a href="../index.php">
            <img src="web.png" alt="" class="responsive-img valign profile-image-login">
            </a>
            <p class="center login-form-text">Beach South of Malang</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12 m12">
            <i class="mdi-social-person-outline prefix"></i>
            <input class="validate" id="name" type="text" placeholder="Username" name="username">
            <label for="email" data-error="wrong" data-success="right" class="center-align"></label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12 m12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" placeholder="password" name="password">
            <label for="password"></label>
          </div>
        </div>
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Remember me</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m12" >
            <input class="btn waves-effect waves-light col s12 blue darken-4" id="submit" type="submit" name="submit" value="Login">
          </div>
        </div>
      </form>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>