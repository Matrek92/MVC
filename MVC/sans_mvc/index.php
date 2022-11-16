<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Scolarité iris</title>
</head>
<body>
	<center>
		<h1>Scolarité d'IRIS</h1><br/>
		<h3>Liste des classes</h3>
		<?php 
		//Connexion à la base de donnée
		try{
		$unPDO = new PDO("mysql:host=localhost;dbname=mon_iris_lm_23", "root", ""); //PHP DATA Object
	}
		catch(PDOexception $exp){
			echo "Erreur de connexion à la BDD <br/>";
			echo $exp->getMessage();
		}
		//exécuter la requete de selection des classes
		$requete = "select * from classe ; ";
		//preparation de la requete
		$select= $unPDO->prepare($requete);
		$select->execute();
		//extraction des classes
		$lesClasses = $select->fetchAll();		


		//afficher les classes
		//var_dump($lesClasses);
		echo "<table border='1'>
			<tr>
				<td>Id classe </td>
				<td> Nom </td>
				<td>Salle de cours</td>
				<td>Diplôme préparé</td>
			</tr>";
		

		foreach ($lesClasses as $uneClasse) 
		{
			echo "<tr>";
			echo"<td>".$uneClasse['idclasse']."</td>";
			echo"<td>".$uneClasse['nom']."</td>";
			echo"<td>".$uneClasse['salle']."</td>";
			echo"<td>".$uneClasse['diplome']."</td>";
			echo "</tr>";
		}
		echo"</table>";
		?>
	</center>

</body>
</html>