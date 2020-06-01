
<?php  
 session_start();
 require_once("./traitements/fonctions.php");  
 
 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $database = "php_sa";  
 $message = "";  
 $connect = "";

 if(isset($_POST['login']) && isset($_POST['pwd'])){
 $login=""; $login = $_POST['login'];
 $pwd=""; $pwd = $_POST['pwd'];
 
     connexion($login, $pwd, $host, $username, $password, $database, $message);
}
 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Projet bd</title>
	<link rel="stylesheet" href="public/css/bootstrap.css">
	<link  rel="stylesheet" href="public/css/style.css">
	<script src="public/js/jQuery.js"></script>
	<script src="public/js/bootstrap.js"></script>
</head>
<body>
   <div class="container ">
   	<div class="div_plaisirjouer row">
   		<div class="col-md-5">
   			
   		</div>
   		<div class="col-md-7">
   			<div class="txt_plaisirjouer">
   				<h1 class="txt_bg shadow"><strong>LE PLAISIR DE JOUER</strong></h1>
   			</div>
               <?php
                    if(isset($_SESSION['page'])){
                         require_once("./pages/profil.php");
                    }
               ?>

   		</div>
   	</div>
   	<div class="shadow">
   		
          <?php 
               if(isset($_SESSION['page'])){
                    if($_SESSION['page'] == "admin"){
                         require_once("./pages/admin.php");
                    }
                    elseif($_SESSION['page'] == "joueur"){
                         require_once("./pages/joueur.php");
                    }
               }else{
                    require_once("./pages/connexion.php");
               }
               
          ?>
     
   	</div>		
   		
   </div>

</body>
</html>
