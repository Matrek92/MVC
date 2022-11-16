<h2>Gestion des étudiants</h2>

<?php 
	



	require_once("vue/	vue_insert_etudiant.php");

	if(isset($_POST['Valider']))
		{
			$tab = array("nom"=>$_POST['nom'], "prenom"=>$_POST['prenom'], "email"=>$_POST['email']);
			$unControleur->insert($tab);

		}
			$lesEtudiants = $unControleur->selectAll();

			require_once("vue/vue_les_etudiants.php")


?>