
	<h1 align="center">CONTACT</h1>
	
	<!--contact-->
	
  	<div class="row">
      <!-- <form action="pages/contact.php" method="post" enctype="text/plain" class="col s12"> -->
	    <form action="" method="get" enctype="text/plain" class="col s12">
	      	<div class="row">
	        	<div class="input-field col s6">
	          		<i class="material-icons prefix">account_circle</i>
	          		<input id="icon_prefix" type="text" class="validate" name="nama">
	          		<label for="icon_prefix">Name</label>
	        	</div>
	        
	        	<div class="input-field col s6">
	          	<i class="material-icons prefix">email</i>
	          	<input id="icon_telephone" type="email" class="validate" name="email">
	          	<label for="icon_telephone">Email</label>
	        	</div>

            <div class="input-field col s12">
                <textarea name="coment" id="textarea1" class="materialize-textarea"></textarea>
                <label for="textarea1">Textarea</label>
            </div>


            <div>
              <center>
                <input type="submit" name="submit" value="send" class="material-icons">
              </center>
            </div>

          </div>
                <input id="icon_prefix" type="text" class="validate" name="p" value="contact" hidden>
      </form>
    </div>
    <div>
      <center>
            <h3>Your Input</h3>   
	         <?php
              if (isset($_POST)) {
                # code...
              }
                if($_GET[nama] || $_GET[email] || $_GET[komentar]){ 
                    echo "<pre>";
                    echo "$_GET[nama] <br/>";
                    echo "$_GET[email] <br/>";
                    echo "$_GET[coment] <br/>";
                    echo "</pre>";
                  }
              ?>
      </center>        
  	</div>
  <br/>
  <br/>

            
	<!--  Scripts-->
  	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  	<script src="js/materialize.js"></script>
  	<script src="js/init.js"></script>
  	<script>
  		$('#textarea1').val('New Text');
  		$('#textarea1').trigger('autoresize');

  		$(document).ready(function(){
    	// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    	$('.modal').modal();
  		});
          
  	</script>