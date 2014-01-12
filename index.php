<?php
require_once 'include/connexion.inc.php';  // Connexion à la BDD 
require("libs/smarty.class.php"); //on inclut la classe Smarty 
$smarty = new Smarty();
/*-- En tête --*/
include_once "include/header.inc.php";
?>
<?php
echo'<div class="span8">';
/*--PAGINATION--*/
$nbArticleParPage = 2;
$page = (isset($_GET['page'])) ? $_GET['page'] : 1;
$sqlcount = ("SELECT COUNT(*) AS id_article FROM article WHERE publication=1"); // requete pour la séléction des article publies

$result = mysql_query($sqlcount); // execution de la requète de comptage 
$data = mysql_fetch_array($result);
$total = $data['id_article'];

$nbTotalDePage = ceil($total / $nbArticleParPage);
$debut = ($page - 1) * $nbArticleParPage; // index de depart

$sql = ("SELECT id_article, contenu, titre, DATE_FORMAT(date, '%d/%m/%Y') as date FROM article WHERE publication=1 ORDER BY date DESC LIMIT $debut, $nbArticleParPage"); //Requete pour l'affichage des article publies dans l'ordre par rapport a leur date depublication

//Verification de l'existance de cookie
$smarty->assign("connect", $connect);
$smarty->assign("nbTotalDePage", $nbTotalDePage);
$smarty->assign("nbArticleParPage", $nbArticleParPage);
$smarty->display("template/pagination.tpl"); // Affichage de resultat du code contenu dans le fichier template pagination  

//RECHERCHE D'ARTICLE   	
    if (isset($_GET['titre'])) {
    $recherche = $_GET['titre'];
    
//requete SQL pour la selection de tous les articles en fonction de critére de recherche saisie
    $sql = "select id_article,contenu,titre,DATE_FORMAT(date,'%d/%m/%Y') as date FROM article WHERE article.publication = 1 AND (article.titre like '%$recherche%' or article.contenu like '%$recherche%') ORDER BY article.contenu";
    $requete = mysql_query($sql);

// Comprage des articles publie qui correspondent au critére de recherche saisie  
    $sql2 = "select count(*) as id_article from article where publication=1 and (titre like '%$recherche%' or contenu like '%$recherche%')";
    $result = mysql_query($sql2); // Execution de la requete de comptage
    $data = mysql_fetch_array($result); // affichage des resultat dans un tableau 
    $total = $data['id_article'];
    $smarty->assign("total", $total);
    $smarty->display("template/erreur.tpl"); //affichage de l'erreur contenue dans le fichier template erreur
    while ($ligne = mysql_fetch_array($requete)) {
    $smarty->assign("ligne", $ligne);
    $smarty->display("template/articles.tpl");
    }
}

else {
    $sql = "select id_article,contenu,titre,DATE_FORMAT(date,'%d/%m/%Y') as date FROM article WHERE article.publication = 1 ORDER BY article.date LIMIT $debut, $nbArticleParPage"; //Afficher que 2 articles du plus récent au plus vieux
    $requete = mysql_query($sql);
    while ($ligne = mysql_fetch_array($requete)) {
    $smarty->assign("ligne", $ligne);
    $smarty->display("template/index.tpl");
	$id_commnet=$ligne['id_article'];
	$commentaire = "select membre_commentaire, corps_commentaire, date_commentaire from commentaires where id_article='$id_commnet' order by id_commentaire limit 0,4";
	$exec_commentaire = mysql_query($commentaire) or die (mysql_error());
	while ($data_commentaire = mysql_fetch_array($exec_commentaire) ){
	
	echo "<strong>".$data_commentaire['membre_commentaire']." : </strong>". $cops_comment=$data_commentaire['corps_commentaire'] ."</br>";
	echo "<strong>Date : </strong>".$date_comment=$data_commentaire['date_commentaire']."</br>";
	echo "---------------------------------------------------------</br>";
	}
	?>
	<form  action="commentaire.php" method="POST" enctype="multipart/form-data">
    Laisser un commentaire:<br>
	<?php
	echo '<input type="hidden" name="id_comment" value="'.$id_commnet.'"/>';
	echo '<input type="hidden" name="id_page" value="'.$page.'"/>';
	?>
    <textarea name="comment" rows="1" cols="300"></textarea><br>
    <input type="submit" value="Envoyer"/>
	</form> 

<!--<META HTTP-EQUIV="Refresh" CONTENT="1;URL=index.php"> -->
	<?php
    }
}
echo'</div>'
?>
<?php include_once "include/menu.inc.php"; ?>
<?php include_once "include/footer.inc.php"; ?>