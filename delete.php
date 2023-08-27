<?php 

// Lien de la leçon : www.w3schools.com/php7/php7_mysql_delete.html

// Paraméter le boutton delete dans read.php

// GET (prendre) ensuite le "id" sélectionner dans un variable $id

	$id = $_GET['id'];

// Comme d'habitude, activer la connexion avec la base avec les codes suivants : 

	$servername = "localhost";
	$username = "root"; 			/* Modifier */
	$password = "";     			/* Modifier */
	$dbname = "carte_bancaire";     /* Modifier */

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}


// Pour vraiment effacer une information, cela commence ici : 
// présicer que l'id supprimée sera l'id prise (GET) : id=$id

	// sql to delete a record
	// N'oublions pas de modifier la table
	$sql = "DELETE FROM carte_bancaire WHERE id=$id";

	if (mysqli_query($conn, $sql)) {
	  // De préférence, utiliser un popup pour la confirmation
		header('location: read.php');

	} else {
	    echo "Une erreur s'est produite";
	}

	mysqli_close($conn);
	// ou $conn->close();

?>