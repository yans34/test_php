 <!DOCTYPE html>
  <html>
    <head>
      <title>Connexion</title>
	</head>
    <header>
    </header>
	<body>
	  <div style="width:88%;border-bottom:2px solid black;position:absolute;left:5%">
	     <h1 style="font-family:arial">Connexion</h1>
	  </div><br /><br /><br /><br /><br /><br />
	  <form method="post" action="traitement-login.php">
	  <table>
		<tr>
		 <td>
		    <label for="em">email :</label>
		 </td>
		 <td>
		    <input type="email" name="email" id="em" placeholder="Email">
		 </td>
		</tr>
		
			<tr>
		 <td>
		    <label for="md">Mot de passe :</label>
		 </td>
		 <td>
		    <input type="password" name="password" id="md" placeholder="Mot de passe">
		 </td>
		</tr>
		
		
		<tr>
		  <td>
		  </td>
		  <td>
		     <input type="submit" name="submit" value="Se connecter">
			</td> 
		</tr>	
		</table>
		</form>
		<?php if(isset($_GET['error'])) { echo $_GET['error'];} ?>
	</body>
    <footer>
    </footer>
</html>    