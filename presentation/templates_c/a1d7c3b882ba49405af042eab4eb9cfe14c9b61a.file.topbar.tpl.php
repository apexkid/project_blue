<?php /* Smarty version Smarty-3.0.8, created on 2012-07-26 23:48:53
         compiled from "C:\wamp\www\project_blue/presentation/templates\topbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:276415011d7657597c7-03887298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1d7c3b882ba49405af042eab4eb9cfe14c9b61a' => 
    array (
      0 => 'C:\\wamp\\www\\project_blue/presentation/templates\\topbar.tpl',
      1 => 1343346384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '276415011d7657597c7-03887298',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\wamp\www\project_blue/presentation/smarty_plugins\function.load_presentation_object.php';
?>

<?php echo smarty_function_load_presentation_object(array('filename'=>"topbar",'assign'=>"obj"),$_smarty_tpl);?>


<div class="navbar-inner">
	<div class="container-fluid">
		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>
		<a class="brand" href="<?php echo $_smarty_tpl->getVariable('obj')->value->homeLink;?>
">Dwingg</a>
		<div class="nav-collapse">
			<ul class="nav">
				<li ><a href="<?php echo $_smarty_tpl->getVariable('obj')->value->homeLink;?>
">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>    
            
			<ul class="nav">
				<li class="divider-vertical"></li>
				<form class="navbar-search pull-left" method="post" action="<?php echo $_smarty_tpl->getVariable('obj')->value->mLinkToSearch;?>
">
					
					<select id="category" name="category" class="navbar-form pull-right">
						<option value="0"> All Categories </option>
						<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('obj')->value->mCategories) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<option value="<?php echo $_smarty_tpl->getVariable('obj')->value->mCategories[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['department_id'];?>
"> <?php echo $_smarty_tpl->getVariable('obj')->value->mCategories[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['department_name'];?>
 </option>
						<?php endfor; endif; ?>
					</select>
					<input type="text" maxlength="100" class="nav search-query" placeholder="What are you Dwingg today?" name="search_string" id="search_string" value="<?php echo $_smarty_tpl->getVariable('obj')->value->search_string;?>
"> 
				</form>
				<li class="divider-vertical"></li>
			</ul>                

			<ul class="nav pull-right"> 
				<li><a href="#home">Home</a></li>
				<li class="divider-vertical"></li>
				<li id="fat-menu" class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#"><i class="icon-book"> </i> Purchase History</a></li>
						<li><a href="#"><i class="icon-cog"> </i> Account Settings </a></li>
						<li><a href="#shopping_cart" data-toggle="modal"><i class="icon-shopping-cart"> </i>&nbsp;View Cart</a></li>
						<li class="divider"></li>
						<li><a href="#">Logout</a></li>
					</ul>
				</li>
			</ul>

		</div>  <!--/.nav-collapse -->
	</div>
</div>