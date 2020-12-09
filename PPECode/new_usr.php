<head>
    <link rel="stylesheet" href="new_usr.css">
</head>

<body>



        

	<center><h1><u><i> Bienvenue sur notre page d'inscription de GSB ! </i></u></h1></center>
	
	<center><i><h3> => Veuillez nous renseigner vos coordonnées pour la création de votre compte GSB ! <= </h3></i></center>
		<img src="logo.jpg" width="100" height="60"/>

	<form action="/ma-page-de-traitement" method="post">
    <div>
        <label for="name"><i><b>Votre ID : *</i></b></label>
        <input type="text" id="name" name="user_name" >
    </div>
	 <div>
        <label for="name"><i><b>Votre Nom :</i></b></label>
        <input type="text" id="name" name="user_name">
    </div>
	 <div>
        <label for="name"><i><b>Votre Prenom :</i></b></label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="mail"><i><b>Votre login :*</b></i></label>
        <input type="email" id="mail" name="user_mail">
    </div>
	 <div>
        <label for="name"><i><b>Votre Mot de passe :*</i></b></label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="msg"><i><b>Votre adresse :*</b></i></label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
	<div>
        <label for="msg"><i><b>Votre code postale :*</b></i></label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
	<div>
        <label for="msg"><i><b>Votre date d'embauche :*</b></i></label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
</form>
	<h3><i> => Les champs * sont importants <=</i> </h3>

 <div class="button">
        <center><button type="submit"><i><b>Inscription</i></b></button></center>
		<li><a href="index.php" >Retour à la page de connexion </a></li>

		
 </div>

<?php
		$mysqli = new mysqli("localhost", "root", "root", "gsb_frais");
		$mysqli -> set_charset("utf8");
		$requete="INSERT INTO visiteur VALUES("' . $_POST['id'] . '", "' . $_POST['nom'] . '", "' . $_POST['prenom'] . '", "' . $_POST['login'] . '", "' . $_POST['mdp'] . '", "' . $_POST['adresse'] . '"
		 , "' . $_POST['cp'] . '", "' . $_POST['ville'] . '", "' . $_POST['dateEmbauche'] . '")';
		$resultat = $mysqli -> query($requete);
		if ($resultat)
			echo "<p>Le contact a été ajouté</p>";
		else
			echo "<p>Erreur</p>";
		?>
		

    
</body>