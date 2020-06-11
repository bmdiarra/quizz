<!-- include database -->

<?php
require_once "model2.php";

global $db;
  // sorry need to get id 

  $id = $_POST['delete_id'];
  $query = mysqli_query($db,"DELETE FROM categories WHERE id='$id'");

  var_dump($query);

 ?>