<?php

    require_once"model2.php";
    global $db;

    $num_per = $_POST['num_pers'];
	$nom_ins = $_POST['nom_ins'];
    $prenom_ins = $_POST['prenom_ins'];
    $login_ins = $_POST['login_ins'];
    $pwd_ins = $_POST['pwd_ins'];
    $avatar_ins = $_POST['avatar_ins'];

	$c = array(
        'num_per' => $num_per,
		'nom_ins' => $nom_ins,
        'prenom_ins' => $prenom_ins,
        'login_ins' => $login_ins,
        'pwd_ins' => $pwd_ins,
        'avatar_ins' => $avatar_ins
    );

    $sql = "UPDATE Personnage SET Nom_personnage = :nom_ins , Prenom_personnage = :prenom_ins , Login_personnage = :login_ins , Mdp_personnage = :pwd_ins, image = :avatar_ins WHERE Num_personnage = :num_per";
    
    $req = $db->prepare($sql);
    var_dump($req);
    $result = $req->execute($c);
    var_dump($result);
    

	echo json_encode($result);

?>