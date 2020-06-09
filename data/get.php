<?php
require_once "model2.php";

 global $db;
    


    $sql ="
            SELECT * 
            FROM Personnage
            ORDER BY Num_personnage DESC
            
    ";
   

   /* if($date==1){
        $date = date('Y-m-d');
        $sql = "
        SELECT * 
        FROM vente
        WHERE date= DATE('{$date}')
        ORDER BY id DESC
        LIMIT {$limit} 
        OFFSET {$offset}
";
        
    }*/
    $req = $db->query($sql);
    $result = $req->fetchAll(2);

    echo json_encode($result);

?>