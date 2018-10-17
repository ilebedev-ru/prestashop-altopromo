<?php /* Smarty version Smarty-3.1.19, created on 2018-10-17 13:47:22
         compiled from "Z:\home\test-altopromo.ru\www\prestashop\admin\themes\default\template\helpers\tree\tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:326395bc6f71a974b43-64365962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ecf68a8255f6c29ff795c086b66aed0d6ae4759' => 
    array (
      0 => 'Z:\\home\\test-altopromo.ru\\www\\prestashop\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_item.tpl',
      1 => 1539765462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '326395bc6f71a974b43-64365962',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bc6f71a97fd16_41046222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc6f71a97fd16_41046222')) {function content_5bc6f71a97fd16_41046222($_smarty_tpl) {?>

<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }} ?>
