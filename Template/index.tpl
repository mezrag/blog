<h2> {$ligne['titre']}</h2>{$ligne['date']} - 
. {$ligne['contenu']}
<img src = 'img/{$ligne['id_article']}.jpg' width = '1024' height = '768' alt = '1'/>
{if $connect == TRUE}
<br/>
<a href ='formulaire.php?id_article={$ligne['id_article']}'> Modifier un article </a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href ='supprision.php?id_article={$ligne['id_article']}'> Suprimer un article </a> 
<br/>  

{/if}
