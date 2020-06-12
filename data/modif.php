<?php

    require_once"./model.php";
    $num_per = $_POST['Num_personnage'];
	$nom_ins = $_POST['nom_ins'];
    $prenom_ins = $_POST['prenom_ins'];
    $login_ins = $_POST['login_ins'];
    $pwd_ins = $_POST['pwd_ins'];
    $avatar_ins = $_POST['avatar_ins'];

	global $connect;

	$c = array(
        'num_per' => $num_per,
		'nom_ins' => $nom_ins,
        'prenom_ins' => $prenom_ins,
        'login_ins' => $login_ins,
        'pwd_ins' => $pwd_ins,
        'avatar_ins' => $avatar_ins
	);

	$sql = "INSERT INTO Personnage(Nom_personnage, Prenom_personnage, Login_personnage, Mdp_personnage, image) VALUES (:nom_ins ,:prenom_ins ,:login_ins ,:pwd_ins ,:avatar) WHERE Num_personnage = :num_per";
    $req = $connect->prepare($sql);
    var_dump($req);
    $result = $req->execute($c);
    

	echo json_encode($result);

?>