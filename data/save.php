<?php
	
	require_once "model2.php";
	global $db;
	var_dump($db);

	$nom_ins = $_POST['nom_ins'];
    $prenom_ins = $_POST['prenom_ins'];
    $login_ins = $_POST['login_ins'];
    $pwd_ins = $_POST['pwd_ins'];
    //$avatar_ins = $_POST['avatar_ins'];

	$c = array(
		'nom_ins' => $nom_ins,
        'prenom_ins' => $prenom_ins,
        'login_ins' => $login_ins,
		'pwd_ins' => $pwd_ins,
		'image' => '',
		'score_pers' => 0,
		'role_pers'  => 'joueur'
	);
	var_dump($c);

	$sql = "INSERT INTO Personnage(Nom_personnage, Prenom_personnage, Login_personnage, Mdp_personnage, image, Score_personnage, Role_personnage) VALUES (:nom_ins ,:prenom_ins ,:login_ins ,:pwd_ins, :image, :score_pers ,:role_pers)";
	$req = $db->prepare($sql);
	
	$result = $req->execute($c);
	
	echo json_encode($result);

?>