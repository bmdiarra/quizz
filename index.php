
<?php  
 session_start();  
 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $database = "php_sa";  
 $message = "";  
 
 try  
 {  
      $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
           
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
        
      if(isset($_POST["btn_submit"]))  
      {  
           if(empty($_POST["login"]) || empty($_POST["pwd"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM Personnage WHERE Login_personnage = :login AND Mdp_personnage = :pwd";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'login'     =>     $_POST["login"],  
                          'pwd'     =>     $_POST["pwd"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["login"] = $_POST["login"];  
                     $donnees = $statement->fetch();
                     
                     $_SESSION["page"] = $donnees["Role_personnage"];
                     
                     //header("location:login_success.php");  
                }  
                else  
                {  
                     $message = '<label>Wrong Data</label>';  
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
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
