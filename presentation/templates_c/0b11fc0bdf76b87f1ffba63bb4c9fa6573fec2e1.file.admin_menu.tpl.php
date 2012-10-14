<?php /* Smarty version Smarty-3.0.8, created on 2012-07-26 21:21:49
         compiled from "C:\wamp\www\project_blue/presentation/templates\admin_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:305335011b4edce0428-55459146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b11fc0bdf76b87f1ffba63bb4c9fa6573fec2e1' => 
    array (
      0 => 'C:\\wamp\\www\\project_blue/presentation/templates\\admin_menu.tpl',
      1 => 1343337539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '305335011b4edce0428-55459146',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\wamp\www\project_blue/presentation/smarty_plugins\function.load_presentation_object.php';
?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"admin_menu",'assign'=>"obj"),$_smarty_tpl);?>


<h1> WELCOME TO ADMIN PANEL </h1>

<p>
	<a href = "<?php echo $_smarty_tpl->getVariable('obj')->value->mLinkToStoreAdmin;?>
" > CATALOG </a>
	<a href = "<?php echo $_smarty_tpl->getVariable('obj')->value->mLinkToStoreFront;?>
"> STOREFRONT </a>
	<a href = "<?php echo $_smarty_tpl->getVariable('obj')->value->mLinkToLogout;?>
" > LOGOUT </a>
</p>

<div class="span4"> 
	<h3> <a href="<?php echo $_smarty_tpl->getVariable('obj')->value->mLinkToDepartment;?>
"> department </a></h3>
	<h3> <a href="<?php echo $_smarty_tpl->getVariable('obj')->value->mLinkToProduct;?>
">    products </a> </h3>
	<h3> <a href="<?php echo $_smarty_tpl->getVariable('obj')->value->mLinkToBrand;?>
">      brands </a></h3>
	<h3> <a href="<?php echo $_smarty_tpl->getVariable('obj')->value->mLinkToCart;?>
">       cart </a></h3>
</div>

<div class = "span7"> content cell</div>