<?php /* Smarty version Smarty-3.0.8, created on 2012-07-26 23:48:53
         compiled from "C:\wamp\www\project_blue/presentation/templates\scart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18545011d76585f8a9-31351710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c895e5739d191f07370cdf84d1c73236c036aaf9' => 
    array (
      0 => 'C:\\wamp\\www\\project_blue/presentation/templates\\scart.tpl',
      1 => 1343346176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18545011d76585f8a9-31351710',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\wamp\www\project_blue/presentation/smarty_plugins\function.load_presentation_object.php';
?>

<?php echo smarty_function_load_presentation_object(array('filename'=>"scart",'assign'=>"obj"),$_smarty_tpl);?>

<div id="shopping_cart" class="modal hide fade">
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<h3>Shopping Cart</h3>
</div>
<div class="modal-body">
<?php if ($_smarty_tpl->getVariable('obj')->value->mIsCartNowEmpty==1){?>
	<h3> Your shopping cart is Empty.<a href="#" class="btn" data-dismiss="modal" >Continue Shopping</a></h3>
<?php }else{ ?>
	<h3> Products in shopping cart </h3>
	
	<form class="cart_form" method="post" action=<?php echo $_smarty_tpl->getVariable('obj')->value->mUpdateCartTarget;?>
>
		<table>
			<tr>
				<th> Product Name </th>
				<th> Price </th>
				<th> Quantity </th>
				<th> SubTotal </th>
				<th> &nbsp; </th>
			</tr>
			<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('obj')->value->mCartProducts) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
			<tr>
				<td> <input name="itemId[]" type="hidden" value="<?php echo $_smarty_tpl->getVariable('obj')->value->mCartProducts[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['item_id'];?>
" /> <?php echo $_smarty_tpl->getVariable('obj')->value->mCartProducts[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['product_name'];?>
 </td>
				<td> <?php echo $_smarty_tpl->getVariable('obj')->value->mCartProducts[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['currentprice'];?>
 </td>
				<td> <input type="text" name="quantity[]" size="2" value="<?php echo $_smarty_tpl->getVariable('obj')->value->mCartProducts[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['quantity'];?>
" > </td>
				<td> <h5><?php echo $_smarty_tpl->getVariable('obj')->value->mCartProducts[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['subtotal'];?>
 </h5> </td>
				<td> <a href="<?php echo $_smarty_tpl->getVariable('obj')->value->mCartProducts[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['save'];?>
"> Save for later </a> <br/> 
				<a href="<?php echo $_smarty_tpl->getVariable('obj')->value->mCartProducts[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['remove'];?>
"> Remove </a>
				</td>
			</tr>
			<?php endfor; endif; ?>
		</table>
		
		<p> Your total amount is <?php echo $_smarty_tpl->getVariable('obj')->value->mTotalAmount;?>
 </p> <br />
		<input type="submit" name="update" value="update" /> <br/>
	</form>
<?php }?>

<?php if ($_smarty_tpl->getVariable('obj')->value->mIsCartLaterEmpty==0){?>
	<h3> Saved Products to Buy </h3>
	<table>
		<tr>
			<th> Product Name </th>
			<th> Price </th>
			<th> Quantity </th>
			<th> SubTotal </th>
			<th> &nbsp; </th>
		</tr>
		<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('obj')->value->mCartSavedProducts) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
			<tr>
				<td> <?php echo $_smarty_tpl->getVariable('obj')->value->mCartSavedProducts[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['product_name'];?>
 </td>
				<td> <?php echo $_smarty_tpl->getVariable('obj')->value->mCartSavedProducts[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['currentprice'];?>
 </td>
				<td> <?php echo $_smarty_tpl->getVariable('obj')->value->mCartSavedProducts[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['quantity'];?>
 </td>
				<td> <h5><?php echo $_smarty_tpl->getVariable('obj')->value->mCartSavedProducts[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['subtotal'];?>
 </h5> </td>
				<td> <a href="<?php echo $_smarty_tpl->getVariable('obj')->value->mCartSavedProducts[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['move'];?>
" /> Move to Cart <br/ >
				<a href="<?php echo $_smarty_tpl->getVariable('obj')->value->mCartSavedProducts[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['remove'];?>
"> Remove </a> </td>
			</tr>
		<?php endfor; endif; ?>
	</table>
<?php }else{ ?>
	<h4> No products Saved </h4>
<?php }?>
</div>
            <div class="modal-footer">
              <a href="#" class="btn" data-dismiss="modal" >Continue Shopping</a>
              <a href="#" class="btn btn-primary">Checkout</a>
            </div>
         </div>
	
				
				