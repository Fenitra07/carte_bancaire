<?php 

// Lien leçon : www.w3schools.com/php7/php7_mysql_select.html
// On reprend les configurations de phpmyadmin

	$servername = "localhost";
	$username = "root"; 			/* Modifier */
	$password = "";     			/* Modifier */
	$dbname = "carte_bancaire";     /* Modifier */

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

// Qu'est ce que l'on sélectionne maintenant
// On met * pour tout sélectionner dans la table

	$sql = "SELECT * FROM carte_bancaire";
// On stocke ensuite le tout dans la variable $result
	$result = $conn->query($sql);


// La connexion est OK / La sélection est OK ; Il faut maintenant créer la vue (template)pour afficher ces éléments
// ==> Revenir dans sql_insert.php puis ajouter "header('location: read.php');" pour créer la relation

?>

<!-- POUR LA PARTIE HTML -->

<!DOCTYPE html>
<html>
<head>
	<title>Afficher le formulaire</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

	<div class="container">
	  <h2>Informations</h2>
	  <table class="table table-hover">
	    <thead>
	      <tr>
	        <th>Numéro de la carte</th>
	        <th>Titulaire</th>
	        <th>Date</th>
	        <th>Code CVV</th>
	      </tr>
	    </thead>
<?php 
	if ($result->num_rows > 0) {
    // Condition > 0, C'est à dire s'il existe des données dans la table
    // output data of each row
	// Stocker dans le variable $row les résultats
    while($row = $result->fetch_assoc()) {
    // var_dump($row);die();

?>
	    <tbody>     
	      <tr>
<!-- Reprendre les values -->
	        <td><?php echo $row["numero_carte"] ?></td>
	        <td><?php echo $row["titulaire"] ?></td>
	        <td><?php echo $row["date"] ?></td>
	        <td><?php echo $row["code_cvv"] ?></td>
	        <td>
	        	<a href="delete.php?id=<?php echo $row["id"] ?>"><button class="btn btn-danger">Delete</button></a>
	        </td>
	      </tr>    
	    </tbody>

<?php 
// Fermer la boucle while
	}
?>
<!-- Pour éviter que le boutton et la forme de la table soit en boucle; il faut la retirer du boucle while -->
	  </table>
	</div>
<?php 
// Fermer la boucle if
	}
?>


</body>
</html>