<?php /* Smarty version Smarty-3.1.15, created on 2014-01-11 14:48:44
         compiled from "template\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21957529dfedb239111-52366491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1330b55f35665f430ce9b8167feebce9b68bc0a' => 
    array (
      0 => 'template\\index.tpl',
      1 => 1389448120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21957529dfedb239111-52366491',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_529dfedb24ab35_98256112',
  'variables' => 
  array (
    'ligne' => 0,
    'connect' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529dfedb24ab35_98256112')) {function content_529dfedb24ab35_98256112($_smarty_tpl) {?><h2> <?php echo $_smarty_tpl->tpl_vars['ligne']->value['titre'];?>
</h2><?php echo $_smarty_tpl->tpl_vars['ligne']->value['date'];?>
 - 
. <?php echo $_smarty_tpl->tpl_vars['ligne']->value['contenu'];?>

<img src = 'img/<?php echo $_smarty_tpl->tpl_vars['ligne']->value['id_article'];?>
.jpg' width = '1024' height = '768' alt = '1'/>
<?php if ($_smarty_tpl->tpl_vars['connect']->value==true) {?>
<br/>
<a href ='formulaire.php?id_article=<?php echo $_smarty_tpl->tpl_vars['ligne']->value['id_article'];?>
'> Modifier un article </a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href ='supprision.php?id_article=<?php echo $_smarty_tpl->tpl_vars['ligne']->value['id_article'];?>
'> Suprimer un article </a> 
<br/>  

<?php }?>
<?php }} ?>
