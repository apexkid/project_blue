<?php /* Smarty version Smarty-3.0.8, created on 2012-06-16 22:46:57
         compiled from "C:\wamp\www\project_blue/presentation/templates\department_all.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65934fdd0ce1668764-66633161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cb063fe5f8fa063f13edd018e8f7290c072f326' => 
    array (
      0 => 'C:\\wamp\\www\\project_blue/presentation/templates\\department_all.tpl',
      1 => 1339714717,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65934fdd0ce1668764-66633161',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\wamp\www\project_blue/presentation/smarty_plugins\function.load_presentation_object.php';
?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"department_all",'assign'=>"obj"),$_smarty_tpl);?>



<ul class="thumbnails">
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('obj')->value->products_all) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	<li class="span2">
	 <div class="thumbnail">
		
		<a href="<?php echo $_smarty_tpl->getVariable('obj')->value->products_all[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['link_to_product'];?>
" > <img src="<?php echo $_smarty_tpl->getVariable('obj')->value->products_all[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['link_to_image'];?>
">
		<h5><?php echo $_smarty_tpl->getVariable('obj')->value->products_all[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['product_name'];?>
</h5> </a>
		Rs. <?php echo $_smarty_tpl->getVariable('obj')->value->products_all[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['currentprice'];?>

	 </div>
	</li>
<?php endfor; endif; ?>
</ul>

<div class="thumbnail" id="postedProducts"> </div>

<div id="showMoreProducts" style="display:none;"><center>
	<img src="images/gif/loading1.gif"> </center> </div>

	

<script>
	$(window).scroll( function()
	{
		if( $(window).scrollTop() == $(document).height() - $(window).height() ){
			$('div#showMoreProducts').show();
			$.ajax({
				url: "presentation/department_all.php?LastProductId=10",
				success: function(html) {
					if(html) {
						$('#postedProducts').append(html);
						$('div#showMoreProducts').hide();
					} else {
						$('div#showMoreProducts').replaceWith("<h4> END OF IT </h4>");
					}
				}
			});
		}
	});
</script>
