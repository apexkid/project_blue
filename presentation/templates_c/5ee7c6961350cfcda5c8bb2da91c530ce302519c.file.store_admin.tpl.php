<?php /* Smarty version Smarty-3.0.8, created on 2012-10-12 01:09:01
         compiled from "C:\xampp\htdocs\project_blue/presentation/templates\store_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85225077518d778926-94748223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ee7c6961350cfcda5c8bb2da91c530ce302519c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_blue/presentation/templates\\store_admin.tpl',
      1 => 1349733921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85225077518d778926-94748223',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\xampp\htdocs\project_blue/presentation/smarty_plugins\function.load_presentation_object.php';
?>

<?php echo smarty_function_load_presentation_object(array('filename'=>"store_admin",'assign'=>"obj"),$_smarty_tpl);?>


<html>
	<head>
		<title> Admin Page </title>
		<meta http-equiv = "Content-Type" content="text/html; charset=UTF-8" />
		
		<link href="styles/bootstrap/js/google-code-prettify/prettify.css" rel="stylesheet" type="text/css" />
		<link href="styles/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="styles/bootstrap/css/docs.css" rel="stylesheet" type="text/css" />
		<link href="styles/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="styles/navigation/ddsmoothmenu.css" rel="stylesheet" type="text/css" />
		
	</head>
	
	<body>
	
		<div class = "span10" >
			<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('obj')->value->mContentCell, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
		</div>
		
		<div class = "span8" >
			<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('obj')->value->mBlock, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
		</div>
	</body>
</html>