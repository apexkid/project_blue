<?php /* Smarty version Smarty-3.0.8, created on 2012-07-20 22:12:23
         compiled from "C:\wamp\www\project_blue/presentation/templates\admin_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143955009d7c7db4da5-76718186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a8ae449c97701044b52328e5d70508a0f527c6a' => 
    array (
      0 => 'C:\\wamp\\www\\project_blue/presentation/templates\\admin_login.tpl',
      1 => 1342822338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143955009d7c7db4da5-76718186',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\wamp\www\project_blue/presentation/smarty_plugins\function.load_presentation_object.php';
?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"admin_login",'assign'=>"obj"),$_smarty_tpl);?>


<div class="login"> 
	<h3> Admin Login </h3>
	<form method="post" action="<?php echo $_smarty_tpl->getVariable('obj')->value->mLinkToAdmin;?>
">
		<p> Sign in or go back to <a href="<?php echo $_smarty_tpl->getVariable('obj')->value->mLinkToIndex;?>
" >Shopping Interface </a> </p> <br/>
		
		<?php if ($_smarty_tpl->getVariable('obj')->value->mLoginMessage!=''){?>
			<p class="error"> <?php echo $_smarty_tpl->getVariable('obj')->value->mLoginMessage;?>
 </p> <br/>
		<?php }?>
		
		<p><label for="username"> Username: </label> <input type="text" name="username" value="<?php echo $_smarty_tpl->getVariable('obj')->value->mUsername;?>
" size="20" /></p>
		<p><label for="password"> Password: </label> <input type="password" name="password" size="40" value="" /></p>
		<p> <input type="submit" name="submit" value="Login" /> </p>
	</form>
</div>
		