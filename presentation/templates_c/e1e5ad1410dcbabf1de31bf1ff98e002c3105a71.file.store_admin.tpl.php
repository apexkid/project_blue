<?php /* Smarty version Smarty-3.0.8, created on 2012-07-25 18:43:25
         compiled from "C:\wamp\www\project_blue/presentation/templates\store_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2357350103e4dad9ba4-40879148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1e5ad1410dcbabf1de31bf1ff98e002c3105a71' => 
    array (
      0 => 'C:\\wamp\\www\\project_blue/presentation/templates\\store_admin.tpl',
      1 => 1343241797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2357350103e4dad9ba4-40879148',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\wamp\www\project_blue/presentation/smarty_plugins\function.load_presentation_object.php';
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