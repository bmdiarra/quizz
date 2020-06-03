
<?php
require_once("./data/model.php");
    
    function getConnexion($post){
    
        $statement = connexion($post);
        
        $count = $statement->rowCount();  
                  if($count > 0)  
                  {  
                       $_SESSION["login"] = $post['login'];  
                       $donnees = $statement->fetch();
                       
                       $_SESSION["page"] = $donnees["Role_personnage"];
                       
                  }  
                  else  
                  {  
                       $message = '<label>Wrong Data</label>';  
                  }
    }

?>