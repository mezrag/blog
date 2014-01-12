<?php /* Smarty version Smarty-3.1.15, created on 2013-12-03 16:55:49
         compiled from "Template\erreur.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17995529dff0552b6a3-72974976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee2e99af57c7d8d82f90242cead2647bb50b1df4' => 
    array (
      0 => 'Template\\erreur.tpl',
      1 => 1386085046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17995529dff0552b6a3-72974976',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_529dff055737a0_33517055',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529dff055737a0_33517055')) {function content_529dff055737a0_33517055($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['total']->value<1) {?>
    <p>Il n'y a pas d'article qui correspondant a votre recherche !! </p>
    <?php } else { ?>
    <p>Il y a <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 article(s)</p>    
<?php }?><?php }} ?>
