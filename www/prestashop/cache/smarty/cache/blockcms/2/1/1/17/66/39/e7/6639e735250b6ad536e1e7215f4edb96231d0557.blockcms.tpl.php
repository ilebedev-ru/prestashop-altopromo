<?php /*%%SmartyHeaderCode:31505bc6fe79a03867-68367533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6639e735250b6ad536e1e7215f4edb96231d0557' => 
    array (
      0 => 'Z:\\home\\test-altopromo.ru\\www\\prestashop\\themes\\default-bootstrap\\modules\\blockcms\\blockcms.tpl',
      1 => 1539765676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31505bc6fe79a03867-68367533',
  'variables' => 
  array (
    'block' => 0,
    'cms_titles' => 0,
    'cms_key' => 0,
    'cms_title' => 0,
    'cms_page' => 0,
    'link' => 0,
    'show_price_drop' => 0,
    'PS_CATALOG_MODE' => 0,
    'show_new_products' => 0,
    'show_best_sales' => 0,
    'display_stores_footer' => 0,
    'show_contact' => 0,
    'contact_url' => 0,
    'cmslinks' => 0,
    'cmslink' => 0,
    'show_sitemap' => 0,
    'footer_text' => 0,
    'display_poweredby' => 0,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bc6fe7a0f6c39_02148578',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc6fe7a0f6c39_02148578')) {function content_5bc6fe7a0f6c39_02148578($_smarty_tpl) {?>
	<!-- Block CMS module footer -->
	<section class="footer-block col-xs-12 col-sm-2" id="block_various_links_footer">
		<h4>Information</h4>
		<ul class="toggle-footer">
							<li class="item">
					<a href="http://test-altopromo.ru/prestashop/prices-drop" title="Specials">
						Specials
					</a>
				</li>
									<li class="item">
				<a href="http://test-altopromo.ru/prestashop/new-products" title="New products">
					New products
				</a>
			</li>
										<li class="item">
					<a href="http://test-altopromo.ru/prestashop/best-sales" title="Best sellers">
						Best sellers
					</a>
				</li>
										<li class="item">
					<a href="http://test-altopromo.ru/prestashop/stores" title="Our stores">
						Our stores
					</a>
				</li>
									<li class="item">
				<a href="http://test-altopromo.ru/prestashop/contact-us" title="Contact us">
					Contact us
				</a>
			</li>
															<li class="item">
						<a href="http://test-altopromo.ru/prestashop/content/3-terms-and-conditions-of-use" title="Terms and conditions of use">
							Terms and conditions of use
						</a>
					</li>
																<li class="item">
						<a href="http://test-altopromo.ru/prestashop/content/4-about-us" title="About us">
							About us
						</a>
					</li>
													<li>
				<a href="http://test-altopromo.ru/prestashop/sitemap" title="Sitemap">
					Sitemap
				</a>
			</li>
					</ul>
		
	</section>
		<section class="bottom-footer col-xs-12">
		<div>
			<?php echo smartyTranslate(array('s'=>'[1] %3$s %2$s - Ecommerce software by %1$s [/1]','mod'=>'blockcms','sprintf'=>array('PrestaShop™',date('Y'),'©'),'tags'=>array('<a class="_blank" href="http://www.prestashop.com">')),$_smarty_tpl);?>

		</div>
	</section>
		<!-- /Block CMS module footer -->
<?php }} ?>
