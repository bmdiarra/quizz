
<?php
    
    function connect_bd(){
   
        try  
        {  
            $connect = new PDO("mysql:host=localhost; dbname=php_sa", 'root', '');
            //$connect = new PDO("mysql:host=mysql-bmdconception.alwaysdata.net; dbname=bmdconception_bd", '206341', 'bmd2407237');  
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            
            return $connect;
        }
        catch(PDOException $error)  
        {  
            $message = $error->getMessage();  
        }
    }

    function connexion($post){
        if(isset($post['login']) && isset($post['login'])){
            $login = $post['login']; $pwd = $post['pwd'];
        }
         
        $connect = connect_bd();
       
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

                return $statement;
             }  
   
    }

?>





