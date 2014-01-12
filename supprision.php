<?php require_once 'include/connexion.inc.php';  // Connexion à la BDD      ?>
<?php
if (isset($_GET['id_article'])) {
$id= $_GET['id_article'];
$page=$_POST['id_page'];
$sql = "DELETE FROM article WHERE id_article=$id";
mysql_query($sql);

header('location:index.php');

}
print_r($sql);
?>
