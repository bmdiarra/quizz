
<?php
    
    function connect_bd(){
   
        try  
        {  
          //  $connect = new PDO("mysql:host=localhost; dbname=php_sa", 'root', '');
            $connect = new PDO("mysql:host=mysql-bmdconception.alwaysdata.net; dbname=bmdconception_bd", '206341', 'bmd2407237');  
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


    function insert($post, $role){
         
     if(isset($post['login_ins']) && isset($post['pwd_ins']) && isset($post['prenom_ins']) && isset($post['nom_ins']) && isset($post['avatar_ins'])){
          
          $login = $post['login_ins']; $pwd = $post['pwd_ins']; $prenom = $post['prenom_ins']; $nom = $post['nom_ins']; $image = $post['avatar_ins'];  
     }else{
          echo "erreur 1";
     }
      
     $connect = connect_bd();
    
          if(empty($login) || empty($pwd) || empty($prenom) || empty($nom) || empty($role) || empty($image) )  
          {  
               $message = '<label>All fields are required</label>';  
          }  
          else  
          {  
               echo "cool";
               $query = "INSERT INTO Personnage (Nom_personnage, Prenom_personnage, Login_personnage, Role_personnage, Mdp_personnage, image) VALUES (:login, :pwd, :prenom, :nom, :role, :image)";  
               $statement = $connect->prepare($query);  
               $statement->execute(  
                    array(  
                         'login'     =>     $login,  
                         'pwd'     =>     $pwd,
                         'prenom'     =>     $prenom,
                         'nom'     =>     $nom,
                         'role'     =>     $role,
                         'image'     =>     $image  
                    )  
               ); 

          }  

     }

?>
