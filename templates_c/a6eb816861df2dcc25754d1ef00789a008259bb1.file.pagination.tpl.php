<?php /* Smarty version Smarty-3.1.15, created on 2013-12-03 16:55:07
         compiled from "Template\pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21564529dfedb1c3911-73539168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6eb816861df2dcc25754d1ef00789a008259bb1' => 
    array (
      0 => 'Template\\pagination.tpl',
      1 => 1386085218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21564529dfedb1c3911-73539168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nbTotalDePage' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_529dfedb21d217_13105089',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529dfedb21d217_13105089')) {function content_529dfedb21d217_13105089($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nbTotalDePage']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nbTotalDePage']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?> 
<a href='index.php?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
<?php }} ?><?php }} ?>
