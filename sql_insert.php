<?php 

// Tester les valeurs postées par l'utilisateur dans le formulaire
/*	
	var_dump($_POST);die();
*/

// Enregistrer chaque valeur postée "$_POST['...']" dans un variable "$...""

	if (isset($_POST['numero_carte']) && isset($_POST['titulaire']) && isset($_POST['date']) && isset($_POST['code_cvv'])) {
		$numero_carte = $_POST['numero_carte'];
		$titulaire = $_POST['titulaire'];
		$date = $_POST['date'];
		$code_cvv = $_POST['code_cvv'];
	}

// Insérer les données dans MySQL


// Ouvrir "http://localhost/phpmyadmin/" dans le navigateur puis entrez après avoir configuré les informations ci-après : 
	$servername = "localhost";
	$username = "root"; 			/* Modifier */
	$password = "";     			/* Modifier */
	$dbname = "carte_bancaire";     /* Modifier */
// Dans l'espace phpmyadmin, créer une nouvelle database en utilisant le même nom que le $dbname ci-dessus

	// Create connection = Connecter à partir des données insérées dans les variables
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

// Après avoir créé la database, créer ensuite une table 
// Les valeurs à insérer dans la table doit correspondre aux valeurs stockéEs dans les variables que l'on a stocké dans $_POST['...']
// Le nombre de champ doit toujours être +1 pour stocker le "id"
	$sql = "INSERT INTO carte_bancaire (numero_carte, titulaire, date, code_cvv)
/* Les VALUES dans la table sql devront donc être assimilées aux variables détenteurs des informations */
	VALUES ('$numero_carte', '$titulaire', '$date', '$code_cvv')";

// Tout est en place, les informations sont créées dans notre table MySQL (Actualiser la table)
// Il nous faut maintenant Rediriger notre page si l'opération est réussite/a échoué (Tous les champs doivent être rempli)
 	

	if (mysqli_query($conn, $sql)) {
	    echo "Votre paiement est en cours de traitement";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

// Si les informations sont validées, rediriger l'utilisateur vers la vue (template)
	header('location: template.html');

// Puis fermer la connexion 
	mysqli_close($conn);


 ?>