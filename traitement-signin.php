<?php

$connect = new PDO("mysql:host=127.0.0.1;dbname=connect;charset=utf8","root","");//variable qui me connecte a la base de donnée(j'aurai pu mettre local host mais 127.0.0.1 est plus rapide).

if(isset($_POST['submit'])){ //si l'utilisateur appuie sur s'inscrire alors on continue sinon on fait rien .
	if(isset($_POST['id'],$_POST['email'],$_POST['email2'],$_POST['password'],$_POST['password2'])) { //on verifie que toute les variables ont été envoyés.
	
		if(!empty($_POST['id']) AND !empty($_POST['email']) AND !empty($_POST['email2']) And !empty($_POST['password']) And !empty($_POST['password2'])) {//on test que les variables ne soit pas vide.
			 $pseudo = htmlspecialchars($_POST['id']); //on securise les variables pour qu'il n'y est pas d'injection de code .
			 $email = htmlspecialchars($_POST['email']);//on securise l'email.
			 $email2 = htmlspecialchars($_POST['email2']);//on securise l'email2.
			 $password = htmlspecialchars($_POST['password']);//on securise le mdp.
		     $password2 = htmlspecialchars($_POST['password2']);// on securise le mdp2.
			 if(strlen($pseudo) < 255) { //on test la longeur du pseudo qui doit faire moin de 255 caracteres.
				 if(strlen($pseudo) > 4) {//on test que le pseudo fait plus de 4 caracteres.
				if($email == $email2) {//on test si l'email 1 est egal a l'email2.
				if($password == $password2){//on test que le mdp est egal au mdp2.
				if(strlen($password) > 8) {// on test que le mot de passe fait plus de 8caracteres.
				if(strlen($password) < 255){//on test que le mdp fasse moins de 255caracteres.
				 $insert = $connect-> prepare("INSERT INTO users (pseudo,email,password) VALUES(?,?,?)");//on insert les valeurs que l'utilisateur ecrira dans la base de donnée.
				 $insert->execute(array($pseudo,$email,$password));//on execute la requete dans un tableau avec nos variables .
				 
				 //ci dessous tous les messages d'erreurs possible au cas ou l'utilisateur ne rempli pas tout les champs correctement .
				 
				} else {
				header('location:signin.php?error= Votre mot de passe doit contenir moins de 255 caracteres ');
				}
				} else {
				 header('location:signin.php?error= Votre mot de passe doit contenir plus de 8 caracteres ');
				}
					
				} else {
				 header('location:signin.php?error= Vos mots de passe sont differentes');
				}
			 } else {
				 header('location:signin.php?error= Vos adresse mail sont differentes');
			 }
			} else {
				 header('location:signin.php?error= Le pseudo doit faire plus de 4 caracteres');
			 }
			 } else {
				 header('location:signin.php?error= Le pseudo doit être inferieur a 255 caracteres');
			 }
		} else {
			header('location:signin.php?error=Veuillez remplir tous les champs');
		}
	}
}	
		
			
	







?>