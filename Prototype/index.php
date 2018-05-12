<!DOCTYPE html>
<html lang="en">
<head>
	<title>X-Food</title>
	<!--CSS-->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <script src="js2/jquery.js"></script> 
  <script src="js2/jquery.glide.js"></script>
    
    <link rel="stylesheet" href="css2/style.css">
      <link rel="stylesheet" href="css2/animate.css">
    <script type="text/javascript" src="js2/MyJQ.js"></script>
    <script src="js2/jquery.localScroll.min.js" type="text/javascript"></script>
  <script src="js2/jquery.scrollTo.min.js" type="text/javascript"></script> 
    <script src="js2/wow.min.js" type="text/javascript"></script> 
  <link rel="icon" type="image/png" href="img/dua.png">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link rel="stylesheet" href="css/animate.css" media="screen" title="no title"/>
  <link rel="stylesheet" type="text/css" href="css/aji.css">
</head>
<body class="animated bounceln">
<!--navbar-->
  <div>	
    <nav class=" grey darken-2 " role="navigation">
  		<center>
      <div class="nav-wrapper ">
              <div class="hilang">
                <a class="waves-effect waves-light btn grey darken-4" href="index.php?p=home">BERANDA</a> 
                <a class="waves-effect waves-light btn grey darken-4" href="index.php?p=content">DAFTAR RESTORAN</a> 
                <a class="waves-effect waves-light btn grey darken-4" href="index.php?p=gallery">MENU POPULER</a>
                <a class="waves-effect waves-light btn grey darken-4" href="index.php?p=tips">RESTORANKU</a>
                <a class="waves-effect waves-light btn grey darken-4" href="index.php?p=pesan">PESAN</a>
                <a class="waves-effect waves-light btn grey darken-4" href="index.php?p=login">LOGIN</a> 
              </div>  
            <ul id="nav-mobile" class="side-nav">
              <li><a href="index.php?p=home">BERANDA</a></li>
              <li><a href="index.php?p=content">DAFTAR RESTORAN</a></li>
              <li><a href="index.php?p=gallery"></a>MENU POPULER</li>
              <li><a href="index.php?p=tips">RESTORANKU</a></li>
              <li><a href="index.php?p=pesan"></a>PESAN</li>
              <li><a href="Login/index.php">LOGIN</a></li>
            </ul>

        		 <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
  		</div>
      </center>
  	</nav>
  </div>
  <!--panggil konten lain-->  
	<div>
  <!--home page-->
    <?php 
      $pages_dir = 'pages';
      if(!empty($_GET['p'])) {
        $pages = scandir($pages_dir, 0);
        unset($pages[0], $pages[1]);

        $p = $_GET['p'];
        if(in_array($p.'.php', $pages)){
          include($pages_dir.'/'.$p.'.php');
        } else {
          echo 'Halaman tidak ditemukan! T_T';
        }
      } else {
        include($pages_dir.'/home.php');
      }
    ?>
  </div>

  	<!--Footer-->
  	<footer class="page-footer grey darken-2">
       	<div class="footer-copyright">
          	<div class="container">
            <center>
             &copy X-Food 2018 | Aji | Pundhi | Sabilla | 
            </center>
           	</div>
      	</div>
   	</footer>


  <!--  Scripts-->
  	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  	<script src="js/materialize.js"></script>
  	<script src="js/init.js"></script>
  	<script>
  		$('.carousel.carousel-slider').carousel({full_width: true});

  		 $(document).ready(function(){
      $('.slider').slider({full_width: true});
    });
  	</script>
    <script type="text/javascript">
$(document).ready(function() {
   $('#navigations').localScroll({duration:800});
});
</script>


<script src="js2/wow.min.js"></script>
<script>
new WOW().init();
</script>
<script type="text/javascript">
    $('.sliderwrapper .slider').glide({
    autoplay: 7000,
    animationDuration: 3000,
    arrows: true,
    
    
  
    });
  
</script>
  
    <script type="text/javascript">
    $('.bestdisheswrapper .slider').glide({
    autoplay: false,
    animationDuration: 700,
    arrows: true,
    navigation:false,
    
    
  
    });
  
  
</script>
</body>
</html>