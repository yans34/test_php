 <!DOCTYPE html>
 <?php
 session_start();//on ouvre une session.
 if(isset($_SESSION['id'])) { //si l'utilisateur c'est bien connecter il peut utiliser cette page pour voir ces infos. 
 ?>
 
 
 <html>
     <head>
	 </head>
	 <body>
	     <header>
		 </header>
		 <div style="width:88%;border-bottom:2px solid black;position:absolute;left:5%">
	     <h1 style="font-family:arial">Votre profil</h1>
	  </div><br /><br /><br /><br /><br /><br />
	  <p>Nom d'utilisateur : <?= $_SESSION['pseudo'] ?></p>
	  <p>Adresse email : <?= $_SESSION['email'] ?></p>
	  <a href="disconnect.php">Déconnexion</a><!-- on creait le lienn de deconnection -->
	</body>
</html>	


 <?php } else { header('location:login.php?error=Vous devez vous connecter pour voir votre profil');} //si l'utilisateur ne s'est pas bien connecter se message d'ereur apparetra.
 ?>
