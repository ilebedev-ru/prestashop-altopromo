<?php /* Smarty version Smarty-3.1.19, created on 2018-10-17 13:47:22
         compiled from "Z:\home\test-altopromo.ru\www\prestashop\admin\themes\default\template\helpers\tree\tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174435bc6f71a3bf1d8-26311988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abbf0d70eb346da863622522924f5ef33aa4a1f7' => 
    array (
      0 => 'Z:\\home\\test-altopromo.ru\\www\\prestashop\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_folder.tpl',
      1 => 1539765462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174435bc6f71a3bf1d8-26311988',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bc6f71a3df4f0_83973014',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc6f71a3df4f0_83973014')) {function content_5bc6f71a3df4f0_83973014($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'Z:\\home\\test-altopromo.ru\\www\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li>
<?php }} ?>
