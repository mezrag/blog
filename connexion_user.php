
<?php require_once 'include/connexion.inc.php';  // Connexion à la BDD      ?>

<?php   
require ("libs/smarty.class.php");
$smarty = new Smarty();
?>
<?php

//********* connexion users ************
if (isset($_POST['connecter'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    //requete pour la selection des utilisateurs dans la tables users
    $req = "SELECT * FROM users WHERE (email='$email' AND password = '$password')";
    
    $execute = mysql_query($req); //execution de la requete
    
    if($resultat = mysql_fetch_array($execute))
    {
	  $user = $resultat['email'];
          //requete de selection des utlisateur avec leur email existant
	  $req2 = "SELECT username FROM users WHERE (email='$email')";

      $execute2 = mysql_query($req2); //execution de la requete
	   if($resultat2 = mysql_fetch_array($execute2))
    {
	$user=$resultat2['username'];
	}
        //encodage de l'email en MD5 qui va etre le SID
       $sid = md5($resultat['email'] . time());
       $req1 = "UPDATE users SET sid = '$sid' WHERE email = '".$resultat['email']."'"; //requete de mise a jour de SID
       mysql_query($req1);
      // déclaration d'un cookies en utilisant la variable SID
        setcookie('sid', $sid, time() + 15*60);
        header("location: index.php"); // redirection vers l'index
    }
    else {
       
        echo 'Oups !!! Votre identifiant ou mot de passe sont incorrects'; // message d'erreur en cas de dans la saisie de nom utilisateur et mot de passe
         }
} else {
    

//En tête 
include_once "include/header.inc.php"; 
 $smarty ->display("template/connexion_user.tpl");

// Menu 
include_once "include/menu.inc.php"; 

//Pied de page -->
include_once "include/footer.inc.php";
}
?>


