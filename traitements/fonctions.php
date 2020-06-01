
<?php
    
    function connect_bd($host, $username, $password, $database, $message){
   
        try  
        {  
            $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
                
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        }
        catch(PDOException $error)  
        {  
            $message = $error->getMessage();  
        }
    }

    function connexion($login, $pwd, $host, $username, $password, $database, $message){
        try  
        {  
            $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
                
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        
        if(isset($_POST["btn_submit"]))  
        {  
             if(empty($login) || empty($pwd))  
             {  
                  $message = '<label>All fields are required</label>';  
             }  
             else  
             {  
                  $query = "SELECT * FROM Personnage WHERE Login_personnage = :login AND Mdp_personnage = :pwd";  
                  $statement = $connect->prepare($query);  
                  $statement->execute(  
                       array(  
                            'login'     =>     $login,  
                            'pwd'     =>     $pwd  
                       )  
                  );  
                  $count = $statement->rowCount();  
                  if($count > 0)  
                  {  
                       $_SESSION["login"] = $login;  
                       $donnees = $statement->fetch();
                       
                       $_SESSION["page"] = $donnees["Role_personnage"];
                       
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
   
    }

?>