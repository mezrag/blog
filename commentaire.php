<?php require_once 'include/connexion.inc.php';  // Connexion à la BDD      ?>

<?php
/*----script pour laisser un commentaire---*/
	//déclaration des variables
	$message=$_POST['comment'];
	$date=date("Y-m-d h:i:s");
	$id_comment=$_POST['id_comment'];
	$page=$_POST['id_page'];
	$user="blogger";
	
    echo "Le message post� est : ".$message.'</br>';
    echo "La date du poste est le :".$date;
    echo "numero page :".$page;
    
//requete d'insertion d'un commentaire pour un article
$req="insert into commentaires (id_article, corps_commentaire, date_commentaire, membre_commentaire) values ('$id_comment','$message','$date', '$user')";
	
$result = mysql_query($req); // execution de la requ�te de comptage 
		
header('location:index.php?page='.$page); //redirection tjr vers l'index

?>
