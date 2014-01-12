
<?php
require_once 'include/connexion.inc.php';  // Connexion à la BDD
require ("libs/smarty.class.php");
$smarty = new Smarty();

// *******************AJOUT D'UN ARTICLE***********************************

if (isset($_POST['Ajouter'])) {
    $titre = $_POST['titre'];
    $texte = $_POST['texte'];
    $date = date("Y") . '-' . date("m") . '-' . date("d");

    if (isset($_POST['publie']))
        $publie = $_POST['publie'];
    if ($titre != "" && $texte != "")
        $req = "INSERT INTO article(id_article, date, contenu, titre, publication ) VALUES('', '$date', '$texte', '$titre', '$publie')";
    mysql_query($req);
    if (!empty($_POST['image'])) {

        $erreur_image = $_FILES['image']['error'];
    }
    else
        $erreur_image = "";

    $id = mysql_insert_id();

    move_uploaded_file($_FILES['image']['tmp_name'], dirname(__FILE__) . "/img/$id.jpg");


    echo $erreur_image;
    echo "Article ajouté : 0";
} 
//mofification d'un article
else if (isset($_POST['Modifier'])){
    $id_article = $_POST['id_article'];
    $titre = $_POST['titre'];
    $texte = $_POST['texte'];
    $date = date("Y") . '-' . date("m") . '-' . date("d");

    if (isset($_POST['publie']))
        $publie = $_POST['publie'];
    if ($titre != "" && $texte != "")
        //requete de mise ajour des donnée de l'article a moifier 
        $req = "UPDATE article SET date='$date', contenu='$texte', titre='$titre', publication='$publie' WHERE id_article='$id_article'";
    
    mysql_query($req);
     if (!empty($_POST['image'])) {

        $erreur_image = $_FILES['image']['error'];
    }
    else{
        $erreur_image = "";
    move_uploaded_file($_FILES['image']['tmp_name'], dirname(__FILE__)."/img/$id_article.jpg");
    echo $id_article.".jpg";
    echo "Article modifié : 0)";
    }
}

//selection de l'article a modifier
if (isset($_GET['id_article'])) {
    $id= $_GET['id_article'];
    $sql = "SELECT * FROM article WHERE id_article= $id";
    $requete = mysql_query($sql);
    $data = mysql_fetch_array($requete);
    extract($data);
    

} 
  else {
        $data = array("id_article" => NULL, "titre" => "", "contenu" => "", "publication" => "", "date" => "");
}
//changement dynamique de label modifier au label ajouter apres la modof
        $action_label = (!empty($_GET['id_article'])) ? 'Modifier' : 'Ajouter';


    $smarty->assign("action_label", $action_label);
    $smarty->assign("data", $data);

    //En tête
    include_once "include/header.inc.php";
    
    $smarty ->display("template/formulaire.tpl");
    
    //Menu 
    include_once "include/menu.inc.php"; 

    //Pied de page 
    include_once "include/footer.inc.php"; 
    ?>

