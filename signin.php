 <!DOCTYPE html>
  <html>
    <head>
      <title>Inscription</title>
	</head>
    <header>
    </header>
	<body>
	  <div style="width:88%;border-bottom:2px solid black;position:absolute;left:5%">
	     <h1 style="font-family:arial">Inscription</h1>
	  </div><br /><br /><br /><br /><br /><br />
	  <form method="post" action="traitement-signin.php">
	  <table>
	    <tr>
		 <td>
		    <label for="id">Choisissez votre identifiant :</label>
		 </td>
		 <td>
		    <input type="text" name="id" id="id" placeholder="Pseudo">
		 </td>
		</tr>
		<tr>
		 <td>
		    <label for="em">Renseigner votre email :</label>
		 </td>
		 <td>
		    <input type="email" name="email" id="em" placeholder="Email">
		 </td>
		</tr>
		<tr>
		 <td>
		    <label for="em2">Confirmez votre email :</label>
		 </td>
		 <td>
		    <input type="email" name="email2" id="em2" placeholder="Email à nouveau">
		 </td>
		</tr>
			<tr>
		 <td>
		    <label for="md">Choisissez un mot de passe :</label>
		 </td>
		 <td>
		    <input type="password" name="password" id="md" placeholder="Mot de passe">
		 </td>
		</tr>
		 <td>
		    <label for="md2">Confirmez le mot de passe :</label>
		 </td>
		 <td>
		    <input type="password" name="password2" id="md" placeholder="Mot de passe à nouveau">
		 </td>
		</tr>
		<tr>
		  <td>
		  </td>
		  <td>
		  </td>
		</tr>
		<tr>
		  <td>
		  </td>
		  <td>
		     <input type="submit" name="submit" value="S'inscrire">
			</td> 
		</tr>	
		</table>
		</form>
		<?php if(isset($_GET['error'])) { echo $_GET['error'];} ?>//si il y a un erreur alors on envoie un message d'erreur.
	</body>
    <footer>
    </footer>
</html>    