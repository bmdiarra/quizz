

<?php
require_once "model2.php";

global $db;
  

  $id = $_POST['delete_id'];
  
  $sql ="
  DELETE FROM Personnage
  WHERE Num_personnage = '$id'
  
";

$req = $db->query($sql);

  var_dump($req);

 ?>