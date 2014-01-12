<?php

mysql_connect("mysql.hostinger.fr", "u299070698_blog", "ighil-123") or die ("Connexion impossible : ".mysql_error());
mysql_select_db("u299070698_blog");

$connect = FALSE;
if (isset($_COOKIE['sid'])) {
    $cookies = $_COOKIE['sid'];
    $sqlcookies = ("SELECT COUNT(*) AS sid FROM users WHERE sid = '$cookies'");
    $co = mysql_query($sqlcookies);
    $data = mysql_fetch_array($co);
    if ($data['sid']){
        $connect = TRUE;
    }
    }

?>
