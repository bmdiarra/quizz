<?php
require_once "model2.php";

 global $db;
    


    $sql ="
            SELECT * 
            FROM Personnage
            ORDER BY Num_personnage DESC
            
    ";
   
    $req = $db->query($sql);
    $result = $req->fetchAll(2);

    echo json_encode($result);

?>