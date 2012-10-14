<?php /* Smarty version Smarty-3.0.8, created on 2012-10-14 00:10:32
         compiled from "C:\xampp\htdocs\project_blue/presentation/templates\base.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42505079e6d8ce7776-69643421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1207cc2ca258f86bbeeb33afc4dc5b7136bb328a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_blue/presentation/templates\\base.tpl',
      1 => 1349733921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42505079e6d8ce7776-69643421',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\xampp\htdocs\project_blue/presentation/smarty_plugins\function.load_presentation_object.php';
?>
<?php  $_config = new Smarty_Internal_Config("site.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"base",'assign'=>"obj"),$_smarty_tpl);?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->getConfigVariable('site_title');?>
</title>
    <meta name="description" content="">
    <meta name="author" content="">
<script src="styles/bootstrap/js/jquery.js"></script>
<script src="styles/easyzoom/easyzoom.js"></script>	
<script type="text/javascript">

	
jQuery(function($){
	
	$('a.zoom').easyZoom();

});

</script>
    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    
    <!-- STYLE SHEETS -->
</script>
<link href="styles/easyzoom/easyzoom.css" rel="stylesheet" type="text/css" media="all" />
<style>
#easy_zoom{
	width:450px;
	height:300px;	
	border:5px solid #eee;
	background:#fff;
	color:#333;
	position:absolute;
	top:60px;
	left:400px;
	overflow:hidden;
	-moz-box-shadow:0 0 10px #777;
	-webkit-box-shadow:0 0 10px #777;
	box-shadow:0 0 10px #777;
	/* vertical and horizontal alignment used for preloader text */
	line-height:400px;
	text-align:center;
	}
	</style>
<link href="styles/bootstrap/js/google-code-prettify/prettify.css" rel="stylesheet" type="text/css" />
<link href="styles/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="styles/bootstrap/css/docs.css" rel="stylesheet" type="text/css" />
<link href="styles/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="styles/navigation/ddsmoothmenu.css" rel="stylesheet" type="text/css" />





<script type="text/javascript">
	ddsmoothmenu.init({
		mainmenuid: "navbar", //Menu DIV id
		orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
		classname: 'ddsmoothmenu-v', //class added to menu's outer DIV
		//customtheme: ["#804000", "#482400"],
		contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
	})
</script>



    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


    <style type="text/css">
      /* Override some defaults */
      
      body {
        padding-top: 60px; /* 40px to make the container go all the way to the bottom of the topbar */
      }
      .container > footer p {
        text-align: center; /* center align it with the container */
      }



	/* The white background content wrapper */
      .container > .content {
        background-color: #fff;
        padding: 20px;
        margin: 0 -20px; /* negative indent the amount of the padding to maintain the grid system */
        -webkit-border-radius: 0 0 6px 6px;
           -moz-border-radius: 0 0 6px 6px;
                border-radius: 0 0 6px 6px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }

      /* Page header tweaks */
      .page-header {
        background-color: #8599A6;
        padding: 20px 20px 35px;
        margin: -20px -20px 20px;
      }

      /* Styles you shouldn't keep as they are for displaying this base example only */

    
    </style>
     
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  </head>

  <body>

	
	<div class="page-header" id="banner">
		<h1>Banner</h1>
		<div id="category_nav" >
			NAVIGATION BAR FOR THE PARTICULAR CATEGORY
		</div>
    </div>


	
	
    <div class="navbar navbar-fixed-top">
		<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('obj')->value->searchCell, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	</div>
	
	<div class="container">
		<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('obj')->value->mCell, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	</div>
	<div class="span10" >
		<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('obj')->value->cartCell, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	</div>
	
	<script src="styles/bootstrap/js/jquery.js"></script>
    <script src="styles/bootstrap/js/google-code-prettify/prettify.js"></script>
    <script>$(function () { prettyPrint() })</script>

    <script src="styles/bootstrap/js/jquery.js"></script>
    <script src="styles/bootstrap/js/google-code-prettify/prettify.js"></script>
    <script src="styles/bootstrap/js/bootstrap-transition.js"></script>
    <script src="styles/bootstrap/js/bootstrap-alert.js"></script>
    <script src="styles/bootstrap/js/bootstrap-modal.js"></script>
    <script src="styles/bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="styles/bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="styles/bootstrap/js/bootstrap-tab.js"></script>
    <script src="styles/bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="styles/bootstrap/js/bootstrap-popover.js"></script>
    <script src="styles/bootstrap/js/bootstrap-button.js"></script>
    <script src="styles/bootstrap/js/bootstrap-collapse.js"></script>
    <script src="styles/bootstrap/js/bootstrap-carousel.js"></script>
    <script src="styles/bootstrap/js/bootstrap-typeahead.js"></script>
    <script src="styles/bootstrap/js/application.js"></script>
    <script type="text/javascript" src="styles/navigation/js/ddsmoothmenu.js"></script>
	</body>
</html>