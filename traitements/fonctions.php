
<?php
require_once("./data/model.php");
    
    function getConnexion($post){
          
        $statement = connexion($post);
        
        $count = $statement->rowCount();  
                  if($count > 0)  
                  {  
                       $_SESSION["login"] = $post['login'];  
                       $donnees = $statement->fetch();
                       
                       //require_once("./pages/profil.php");
                       if($donnees["Role_personnage"] == "admin"){
                            require_once("./pages/admin.php");
                       }else{
                            require_once("./pages/joueur.php");
                       }
                       
                  }  
                  else  
                  {  
                       $message = '<label>Wrong Data</label>';  
                  }
    }

    function insert_donnee($post, $role){
          insert($post, $role);
    }

?>