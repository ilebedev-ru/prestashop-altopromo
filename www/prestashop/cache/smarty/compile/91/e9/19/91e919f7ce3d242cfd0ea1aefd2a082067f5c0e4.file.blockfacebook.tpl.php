<?php /* Smarty version Smarty-3.1.19, created on 2018-10-17 14:53:03
         compiled from "Z:\home\test-altopromo.ru\www\prestashop\modules\blockfacebook\blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75195bc73ebf99c710-77758294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91e919f7ce3d242cfd0ea1aefd2a082067f5c0e4' => 
    array (
      0 => 'Z:\\home\\test-altopromo.ru\\www\\prestashop\\modules\\blockfacebook\\blockfacebook.tpl',
      1 => 1539765622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75195bc73ebf99c710-77758294',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bc73ebf9e1731_61243959',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc73ebf9e1731_61243959')) {function content_5bc73ebf9e1731_61243959($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>