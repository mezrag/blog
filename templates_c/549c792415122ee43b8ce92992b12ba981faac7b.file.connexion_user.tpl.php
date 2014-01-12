<?php /* Smarty version Smarty-3.1.15, created on 2013-12-03 16:55:11
         compiled from "Template\connexion_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15130529dfedfe24cf4-74054582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '549c792415122ee43b8ce92992b12ba981faac7b' => 
    array (
      0 => 'Template\\connexion_user.tpl',
      1 => 1385996019,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15130529dfedfe24cf4-74054582',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_529dfedfe83494_45850639',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529dfedfe83494_45850639')) {function content_529dfedfe83494_45850639($_smarty_tpl) {?><div class="span8">


    <center>
        <h1> Connexion </h1>
    <br>
    <form action="connexion_user.php" method="post" enctype="multipart/form-data">
        Email
        <br><input type="text" name ="email" value=""></input>
        <br>
        Mot de passe
        <br><input type="password" name ="password" value=""></input>
        <br>
        <br><input type="submit" name="connecter" value="Connexion" class="btn btn-default btn-primary"></input>
        <br>
        <br>
        </center>
</div>

<?php }} ?>
