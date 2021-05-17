<?php /* Smarty version Smarty-3.1.7, created on 2021-05-17 19:52:44
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/Install/InstallPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59528016060a2bb7c6bea79-03472361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c37e8933eb56c104511cd3598a32724fdba74b4' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/Install/InstallPreProcess.tpl',
      1 => 1572870387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59528016060a2bb7c6bea79-03472361',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60a2bb7c73e23',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60a2bb7c73e23')) {function content_60a2bb7c73e23($_smarty_tpl) {?>

<input type="hidden" id="module" value="Install" />
<input type="hidden" id="view" value="Index" />
<div class="container-fluid page-container">
	<div class="row">
		<div class="col-sm-6">
			<div class="logo">
				<img src="<?php echo vimage_path('logo.png');?>
"/>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="head pull-right">
				<h3><?php echo vtranslate('LBL_INSTALLATION_WIZARD','Install');?>
</h3>
			</div>
		</div>
	</div>
<?php }} ?>