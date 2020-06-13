
<?php
require_once("./data/model.php");
    
    function getConnexion($post){
          
        $statement = connexion($post);
        
        $count = $statement->rowCount();  
                  if($count > 0)  
                  {  
                       $_SESSION["login"] = $post['login'];  
                       $donnees = $statement->fetch();
                       return $donnees;
                       
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