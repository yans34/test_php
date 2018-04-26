 <?php
 session_start();//on ouvre une nouvelle session.
 $connect = new PDO("mysql:host=127.0.0.1;dbname=connect;charset=utf8","root",""); //connexion a la bdd.
 if(isset($_POST['submit'])) { //on verifie qu'on a envoyé toute les informations sinon on envoie un message d'erreur.
 
	 if(!empty($_POST['email']) AND !empty($_POST['password'])) { //on test que la variable email et password ne soient pas vide.
	    $email = htmlspecialchars($_POST['email']); //on securise l'email.
		$password = htmlspecialchars($_POST['password']);  //on securise le mdp.
		$recovery_user = $connect->prepare("SELECT * FROM users WHERE email = ? AND password =?");//on recupere le membre dans la bdd.
		$recovery_user->execute(array($email,$password));//on execute la requete dans un tableau et on verifie que email soit egale a email et pareil pour le mdp.
		if($recovery_user->rowcount() == 1) { //on verifie si le nombre de ligne retournée est egal a 1 .
			$info_user = $recovery_user->fetch();// on recupere les infos de l'utilisateur.
			$_SESSION['id'] = $info_user['id'];// on met les infos dans la session , ici (l'id):
			$_SESSION['pseudo'] = $info_user['pseudo'];//le pseudo.
			$_SESSION['email'] = $info_user['email'];//l'email
			$_SESSION['password'] = $info_user['password'];//le mdp.
			header('location:profile.php');//on redirige l'utilisateur vers une page de profil.
			
		}
		//ci dessous tous les messages d'erreur possible.
	 } else {
		 header('location:login.php?error=Veuillez remplir tous les champs');
	 }	 
 } else {
	 header('location:login.php?error=Formulaire non envoyé');
 }
 
 
 
 
 
 ?>