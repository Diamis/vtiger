<?php /* Smarty version Smarty-3.1.7, created on 2021-05-17 19:00:33
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/Vtiger/ModalHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50836741460a2bd515c47e4-55829419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac071dd4045b06cd468f5285e62db80c775b35f5' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/Vtiger/ModalHeader.tpl',
      1 => 1572870387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50836741460a2bd515c47e4-55829419',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60a2bd5160011',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60a2bd5160011')) {function content_60a2bd5160011($_smarty_tpl) {?>
<div class="modal-header"><div class="clearfix"><div class="pull-right " ><button type="button" class="close" aria-label="Close" data-dismiss="modal"><span aria-hidden="true" class='fa fa-close'></span></button></div><h4 class="pull-left"><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</h4></div></div>    <?php }} ?>