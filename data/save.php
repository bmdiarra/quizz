<?php

	require_once"./model.php";
	$nom_ins = $_POST['nom_ins'];
    $prenom_ins = $_POST['prenom_ins'];
    $login_ins = $_POST['login_ins'];
    $pwd_ins = $_POST['pwd_ins'];
    $avatar_ins = $_POST['avatar_ins'];

	global $connect;

	$c = array(
		'nom_ins' => $nom_ins,
        'prenom_ins' => $prenom_ins,
        'login_ins' => $login_ins,
        'pwd_ins' => $pwd_ins,
        'avatar_ins' => $avatar_ins
	);

	$sql = "INSERT INTO Personnage(Nom_personnage, Prenom_personnage, Login_personnage, Mdp_personnage, image) VALUES (:nom_ins ,:prenom_ins ,:login_ins ,:pwd_ins ,:avatar)";
	$req = $connect->prepare($sql);
	$result = $req->execute($c);

	echo json_encode($result);

?>