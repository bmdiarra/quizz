
<?php  
 session_start();
 require_once("./traitements/fonctions.php");  
 
$message = ""; 
/*if(isset($_POST['login'])){
     //getConnexion($_POST);
}
*/
//define(ACTION,"action");
?>

<?php 
               

     if(isset($_GET["action"]))
     {

     if($_GET["action"]=='connexion')
     {    
          //$data=$_POST;
          getConnexion($_POST);
     }
     else if($_GET["action"]=='inscription')
     {

          require_once './pages/inscription.php';
     }
     }
     else
     {
?>

                    <!DOCTYPE html>
                    <html>
                    <head>
                         <meta charset="utf-8">
                         <meta name="viewport" content="width=device-width, initial-scale=1">
                         <title>Projet bd</title>
                         <link rel="stylesheet" href="public/css/bootstrap.css">
                         <link  rel="stylesheet" href="public/css/style.css">
                         
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
                         <div class="shadow" id="container">
                              
                              <?php 
                                   
                                   require_once("./pages/connexion.php");
                              
                              ?>
                         
                         </div>		
                              
                    </div>

<?php } ?>

<script type="text/javascript" src="./public/js/router.js"></script>

<script src="public/js/jQuery.js"></script>
<script src="public/js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>