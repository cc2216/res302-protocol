<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projetdev;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
		
session_start;
}

$var1=$bdd->prepare('INSERT INTO test_personne(id_test,id_son,test_familiarite) VALUES(:id_test,:id_son,:test_familiarite)');
$var1->execute(array(
			

	            'id_test' => $_POST['id_test'],
		         'id_son' => $_POST['id_son'],		
				'test_familiarite' => $_POST['reponse']
				));

header('Location: http://localhost/gestion/?test=imageabilite&id=4');		
?>