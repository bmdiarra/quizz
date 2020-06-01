
<?php
    
    function connect_bd(){
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=php_sa;charset=utf8', 'root', '');
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }
    }

    function connexion($login, $pwd){
        $reponse = $bdd->query("SELECT * FROM Personnage WHERE Login_personnage=='.$login.' and Mdp_personnage=='$mdp'");
    }

?>